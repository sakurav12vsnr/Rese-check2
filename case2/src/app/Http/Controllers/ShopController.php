<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;

class ShopController extends Controller
{
    public function show()
    {
        $shops = Shop::all();
        return view('/shoplist', ['shops' => $shops]);
    }

    public function shopInf()
    {
        return view('/shopinf');
    }
}
