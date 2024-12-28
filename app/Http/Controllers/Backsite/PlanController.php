<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plans = Plan::with('features')->paginate(10);
        dd($plans);
        return view('backsite.plan.index', compact('plans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backsite.plan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'name_plan' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'duration' => 'required|numeric',
        ]);

        $icon = $request->file('icon');

        if ($icon) {
            $iconName = $icon->hashName();
            $icon->storeAs('subscription_plan/icons', $iconName, 'public');
        }

        $plan = Plan::create([
            'icon' => $iconName,
            'name_plan' => $request->name_plan,
            'description' => $request->description,
            'price' => $request->price,
            'duration' => $request->duration,
            'isBest' => $request->isBest,
        ]);

        if ($plan) {
            return redirect()->route('subscription-plan.features', $plan->id)->with('success', 'Plan created successfully');
        } else {
            return redirect()->route('subscription-plan.create')->with('error', 'Plan failed to create');
        }
    }

    public function storeFeatures(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $plan = Plan::findOrFail($id);

        $plan->features()->create([
            'name' => $request->name,
        ]);

        return redirect()->route('subscription-plan.features', $id)->with('success', 'Feature created successfully');
    }

    public function features(string $id)
    {
        $plan = Plan::with('features')->findOrFail($id);
        return view('backsite.plan.features', compact('plan'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $plan = Plan::with('features')->findOrFail($id);
        return view('backsite.plan.show', compact('plan'));
    }

    public function destroyFeature(string $id, string $feature_id)
    {
        $plan = Plan::findOrFail($id);
        $plan->features()->findOrFail($feature_id)->delete();
        return redirect()->back()->with('success', 'Feature deleted successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $plan = Plan::findOrFail($id);
        $plan->delete();
        return redirect()->route('subscription-plan.index')->with('success', 'Plan deleted successfully');
    }
}
