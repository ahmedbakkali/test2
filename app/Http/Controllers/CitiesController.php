<?php

namespace App\Http\Controllers;

use App\Cities;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    public function index()
    {
        return Cities::all();
    }

    public function show($id)
    {
        return Cities::find($id);
    }
    public function store(Request $request)
    {
        return Cities::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $cities = Cities::findOrFail($id);
        $cities->update($request->all());

        return $cities;
    }
    public function delete(Request $request, $id)
    {
        $cities = Cities::findOrFail($id);
        $cities->delete();

        return 204;
    }
}
