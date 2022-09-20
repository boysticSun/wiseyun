<?php

namespace App\Http\Controllers;

use App\Models\PurchaseOrderAction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PurchaseOrderActionRequest;

class PurchaseOrderActionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
		$purchase_order_actions = PurchaseOrderAction::paginate();
		return view('purchase_order_actions.index', compact('purchase_order_actions'));
	}

    public function show(PurchaseOrderAction $purchase_order_action)
    {
        return view('purchase_order_actions.show', compact('purchase_order_action'));
    }

	public function create(PurchaseOrderAction $purchase_order_action)
	{
		return view('purchase_order_actions.create_and_edit', compact('purchase_order_action'));
	}

	public function store(PurchaseOrderActionRequest $request)
	{
		$purchase_order_action = PurchaseOrderAction::create($request->all());
		return redirect()->route('purchase_order_actions.show', $purchase_order_action->id)->with('message', 'Created successfully.');
	}

	public function edit(PurchaseOrderAction $purchase_order_action)
	{
        $this->authorize('update', $purchase_order_action);
		return view('purchase_order_actions.create_and_edit', compact('purchase_order_action'));
	}

	public function update(PurchaseOrderActionRequest $request, PurchaseOrderAction $purchase_order_action)
	{
		$this->authorize('update', $purchase_order_action);
		$purchase_order_action->update($request->all());

		return redirect()->route('purchase_order_actions.show', $purchase_order_action->id)->with('message', 'Updated successfully.');
	}

	public function destroy(PurchaseOrderAction $purchase_order_action)
	{
		$this->authorize('destroy', $purchase_order_action);
		$purchase_order_action->delete();

		return redirect()->route('purchase_order_actions.index')->with('message', 'Deleted successfully.');
	}
}