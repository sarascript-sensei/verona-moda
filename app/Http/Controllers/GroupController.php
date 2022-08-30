<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    //
    public function create() {
        $groups = Group::paginate(3);
        $products = Product::get();
        return view('group.create', compact('groups','products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Group::create($request->all());

        return redirect()->route('products.index')
            ->with('success','Group created successfully.');
    }
}
