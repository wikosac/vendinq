<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Item;
use GrahamCampbell\ResultType\Success;

class ItemController extends Controller
{
    public function index()
    {

        //return Item::where('user_id', auth()->user()->id->get());

        return view('product', [
            "item" => Item::all()
        ]);
    }

    public function create() {
        return view('crud.create');
    }

    public function store(Request $request) {

        
        $validateData = $request->validate([
            'code' => 'required',
            'name' => 'required',
            'type' => 'required',
            'price' => 'required',
            'amount' => 'required',
        ]);

        $validateData['item_id'] = auth()->user()->id;

        Item::create($validateData);

        return redirect('/dashboard/product')->with('success', 'Product added!');
    }

    public function show() {
        return view('crud.show');
    }

    public function update() {
        return view('crud.update', [
            "item" => Item::all()
        ]);
    }

    public function destroy(Item $item) {
        Item::create($item->id);

        return redirect('/product')->with('success', 'Product deleted!');
    }


}
