<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Biodata;


class BiodataController extends Controller
{
    public function index()
    {
        $biodatas = Biodata::latest()->paginate(10);
        return view('biodata.index', compact('biodatas'))->with('i',(request()->input('page',1)-1)*10);
    }

    public function create()
    {
        return view('biodata.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required'
        ]);

        Biodata::create($request->all());

        return redirect()->route('biodata.index')->with('success','New biodata created!');
    }

    public function show($id)
    {
        $biodata = Biodata::find($id);
        return view('biodata.detail',compact('biodata'));
    }

    public function edit($id)
    {
        $biodata = Biodata::find($id);
        return view('biodata.edit',compact('biodata'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required'
        ]);

        $biodata = Biodata::find($id);
        $biodata->first_name = $request->get('first_name');
        $biodata->last_name = $request->get('last_name');
        $biodata->email = $request->get('email');
        $biodata->phone = $request->get('phone');
        $biodata->address = $request->get('address');
        $biodata->city = $request->get('city');
        $biodata->country = $request->get('country');
        $biodata->save();

        return redirect()->route('biodata.index')->with('success','Successfully updated!');
    }

    public function destroy($id)
    {
        $biodata = Biodata::find($id);
        $biodata->delete();
        return redirect()->route('biodata.index')->with('success','Deleted successfully!');
    }
}
