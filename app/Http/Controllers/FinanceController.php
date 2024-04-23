<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFinanceRequest;
use App\Http\Requests\UpdateFinanceRequest;
use App\Models\Finance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $userId = auth()->user()->id;
        $query = Finance::whereUserId($userId);

        if ($request->has('filter')) {
            $filter = $request->filter;

            switch ($filter) {
                case 'income':
                    $query->where('value', '>', 0);
                    break;
                case 'expense':
                    $query->where('value', '<', 0);
                    break;
                case 'alphabetical':
                    $query->orderBy('title');
                    break;
            }
        }

        $finances = $query->get();
        return inertia('Auth/Finance', compact('finances'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFinanceRequest $request)
    {
        $attributes = $request->validated();
        $attributes['user_id'] = auth()->user()->id;

        Finance::create($attributes);

        return back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFinanceRequest $request, Finance $finance)
    {
        Gate::authorize('manage', $finance);

        $finance->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Finance $finance)
    {
        Gate::authorize('manage', $finance);

        $finance->delete();
        return back();
    }
}
