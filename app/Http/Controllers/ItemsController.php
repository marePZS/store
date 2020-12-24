<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function index()
    {
        $items = Item::where('is_sold',0)
            ->orderBy('id', 'desc')
            ->get();

        return view('home', compact('items'));

    }
}
