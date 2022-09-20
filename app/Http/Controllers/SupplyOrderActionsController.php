<?php

namespace App\Http\Controllers;

use App\Models\SupplyOrderAction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SupplyOrderActionRequest;

class SupplyOrderActionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
		$supply_order_actions = SupplyOrderAction::paginate();
		return view('supply_order_actions.index', compact('supply_order_actions'));
	}

    public function show(SupplyOrderAction $supply_order_action)
    {
        return view('supply_order_actions.show', compact('supply_order_action'));
    }

	public function create(SupplyOrderAction $supply_order_action)
	{
		return view('supply_order_actions.create_and_edit', compact('supply_order_action'));
	}

	public function store(SupplyOrderActionRequest $request)
	{
		$supply_order_action = SupplyOrderAction::create($request->all());
		return redirect()->route('supply_order_actions.show', $supply_order_action->id)->with('message', 'Created successfully.');
	}

	public function edit(SupplyOrderAction $supply_order_action)
	{
        $this->authorize('update', $supply_order_action);
		return view('supply_order_actions.create_and_edit', compact('supply_order_action'));
	}

	public function update(SupplyOrderActionRequest $request, SupplyOrderAction $supply_order_action)
	{
		$this->authorize('update', $supply_order_action);
		$supply_order_action->update($request->all());

		return redirect()->route('supply_order_actions.show', $supply_order_action->id)->with('message', 'Updated successfully.');
	}

	public function destroy(SupplyOrderAction $supply_order_action)
	{
		$this->authorize('destroy', $supply_order_action);
		$supply_order_action->delete();

		return redirect()->route('supply_order_actions.index')->with('message', 'Deleted successfully.');
	}
}