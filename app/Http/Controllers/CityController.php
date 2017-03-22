<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class CityController extends Controller
{
    private function validateCity($request) {
      $this->validate($request,[
        'name' => 'required|max:255'
      ]);
    }

    public function index()
    {
      return view('city.index',[
        'cities' => City::all()
      ]);
    }

    public function show($id)
    {
      return view('city.show',[
        'city' => City::findOrFail($id)
      ]);
    }

    public function edit($id)
    {
      return view('city.edit',[
        'city' => City::findOrFail($id)
      ]);
    }

    public function save(Request $request, $id)
    {
      $city=City::find($id);
      $city->name=$request->name;
      $city->save();
      return redirect('/city');
    }

    public function add()
    {
      return view('city.add');
    }

    public function store(Request $request)
    {
      $this->validateCity($request);

      $city = new City();
      $city->name=$request->name;
      $city->save();
      return redirect('/city');
    }

    public function delete($id)
    {
      City::findOrFail($id)->delete();
      return redirect('/city');
    }
}
