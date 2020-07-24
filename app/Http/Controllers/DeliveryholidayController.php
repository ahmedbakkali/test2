<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deliveryholiday;

class DeliveryholidayController extends Controller
{
    public function index()
    {
        return Deliveryholiday::all();
    }
    public function store(Request $request)
    {
        return Deliveryholiday::create($request->all());
    }
}
