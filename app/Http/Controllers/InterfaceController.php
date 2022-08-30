<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Product;

use App\Models\Saler;
use Illuminate\Http\Request;

class InterfaceController extends Controller
{
    public function index(){
        $products = Product::paginate(8);
        $groups = Group::get();
        $salers = Saler::get();
        return view('interface', compact('products', 'groups','salers'));
    }
}
