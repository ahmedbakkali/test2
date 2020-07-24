<?php

namespace App\Http\Controllers;

use App\Deliverytimes;

use Illuminate\Http\Request;

class DeliverytimesController extends Controller
{
    public function index()
    {
        return Deliverytimes::all();
    }

    public function show($id)
    {
        return Deliverytimes::find($id);
    }
    public function store(Request $request)
    {
        return Deliverytimes::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $deliverytimes = Deliverytimes::findOrFail($id);
        $deliverytimes->update($request->all());

        return $deliverytimes;
    }
    public function delete(Request $request, $id)
    {
        $deliverytimes = Deliverytimes::findOrFail($id);
        $deliverytimes->delete();

        return 204;
    }
}
