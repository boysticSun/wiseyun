<?php

namespace App\Http\Controllers;

use App\Models\Supply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SupplyRequest;
use App\Models\GoodsType;

class SuppliesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
        $topgoodstypes = GoodsType::orderBy('supply_count','desc')->limit(4)->get();
        foreach($topgoodstypes as $key=>$value)
        {
            $topgoodstypes[$key]->supplies = Supply::where('goods_type_id', $value->id)->limit(10)->get();
        }
		return view('supplies.index', compact('topgoodstypes'));
	}

    public function show(Supply $supply)
    {
        $supply->increment('view_count', 1);
        return view('supplies.show', compact('supply'));
    }

	public function create(Supply $supply)
	{
		return view('supplies.create_and_edit', compact('supply'));
	}

	public function store(SupplyRequest $request)
	{
		$supply = Supply::create($request->all());
		return redirect()->route('supplies.show', $supply->id)->with('message', 'Created successfully.');
	}

	public function edit(Supply $supply)
	{
        $this->authorize('update', $supply);
		return view('supplies.create_and_edit', compact('supply'));
	}

	public function update(SupplyRequest $request, Supply $supply)
	{
		$this->authorize('update', $supply);
		$supply->update($request->all());

		return redirect()->route('supplies.show', $supply->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Supply $supply)
	{
		$this->authorize('destroy', $supply);
		$supply->delete();

		return redirect()->route('supplies.index')->with('message', 'Deleted successfully.');
	}
}
