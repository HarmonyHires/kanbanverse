@extends('subscribe.layout')

@section('title', 'Order Placed')

@section('content')
    <div class="flex flex-col items-center justify-center h-[75vh]">
        @csrf
        <img class="w-1/4" src="{{ asset('images/img/order_confirmed.svg') }}" alt="Order Confirmed">
        <h5 class="text-lg font-medium mt-6">YEAAYYYY ! Your Order Successfully, <span class="text-navy">Pay Now!</span></h5>

        <div class="text-center mt-4">
            <h3>Time Left to Complete Payment:</h3>
            <p id="countdown" class="text-4xl mt-3 font-semibold">Loading...</p>
        </div>

        <div class="bg-white p-8 border-x border-t rounded-t-lg w-full max-w-lg mt-6">
            <h1 class="text-2xl font-semibold">INVOICE#{{ $order->order_id }}</h1>
            <p class="mt-4 text-gray-600">Your order has been placed successfully.</p>
            <p class="mt-2 text-gray-600">Amount: <span class="font-semibold">{{ $order->total }}</span></p>
            <p class="mt-2 text-gray-600">Payment Status: <span class="font-semibold">{{ $order->status }}</span></p>
            <p class="mt-2 text-gray-600">Remaining Time: <span class="font-semibold">{{ $order->expired_at }}</span></p>
        </div>

        @if ($order->isCancelled())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-6" role="alert">
                <strong class="font-bold">Order Cancelled!</strong>
                <span class="block sm:inline">Your order has been cancelled.</span>
            </div>
        @else
            <button onclick="makePayment()"
                class="bg-navy text-white font-medium px-4 py-4 w-full max-w-lg rounded-b-lg text-center">Pay
                Now</button>
        @endif
    </div>
@endsection

@section('scripts')
    <script>
        function startCountdown(expiresAt) {
            const expiryTime = new Date(expiresAt.replace(' ', 'T')).getTime();
            const timer = setInterval(() => {
                const now = new Date().getTime();
                const timeLeft = expiryTime - now;

                if (timeLeft <= 0) {
                    clearInterval(timer);
                    document.getElementById('countdown').innerHTML = 'Order Expired!';
                    window.location.reload();
                    return;
                }

                const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);
                document.getElementById('countdown').innerHTML = `00:${minutes}:${seconds}`;
                document.getElementById('countdown').classList.add('text-red-600')
            }, 1000);
        }

        if ('{{ $order->isPending() }}') {
            startCountdown('{{ $order->expired_at }}');
        } else {
            document.getElementById('countdown').innerHTML = 'Order Expired!';
        }

        function makePayment() {
            fetch("{{ route('subscribe.pay', $order->order_id) }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.snapToken) {
                        window.snap.pay(data.snapToken, {
                            onSuccess: function(result) {
                                const payload = encodeURIComponent(JSON.stringify(result));
                                window.location.href = "{{ route('subscribe.success') }}" + "?payload=" +
                                    payload;
                            },
                            onError: function(result) {
                                console.error('Error:', result);
                                window.location.href = "{{ route('subscribe.failed', $order->order_id) }}";
                            }
                        });

                    } else {
                        console.log('Token not found');

                        window.location.href = "{{ route('subscribe.failed', $order->order_id) }}";
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    window.location.href = "{{ route('subscribe.failed', $order->order_id) }}";
                });
        }
    </script>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="YOUR_CLIENT_KEY"></script>
@endsection()
