<?php

namespace App\Http\Controllers;

use App\Models\BusinessUnit;
use Illuminate\Http\Request;

class BusinessUnitController extends Controller
{
    public function index()
    {
        $businessUnits = BusinessUnit::all();
        return view('BusinessUnit.index', compact('businessUnits'));
    }

    public function create()
    {
        return view('BusinessUnit.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            // Define validation rules for the incoming request data
        ]);

        $businessUnit = new BusinessUnit;
        $businessUnit->name = $request->name;
        $businessUnit->email = $request->email;
        $businessUnit->phoneNO = $request->phoneNO;
        $businessUnit->BUname = $request->BUname;
        $businessUnit->systemName = $request->systemName;
        $businessUnit->save();

        BusinessUnit::create($request->all());
        return redirect()->route('BusinessUnit.index')->withSuccess('New unit record added successfully');
    }

    public function show(BusinessUnit $businessUnit)
    {
        $businessUnits = BusinessUnit::all();
        return view('BusinessUnit.show', compact('businessUnit'));
    }

    public function edit(BusinessUnit $businessUnit)
    {
        return view('BusinessUnit.edit', compact('businessUnit'));
    }

    public function update(Request $request, BusinessUnit $businessUnit)
    {
        $request->validate([
            // Define validation rules for the incoming request data
        ]);

        $businessUnit->update($request->all());
        return redirect()->route('BusinessUnit.index')->withSuccess('Business unit record updated successfully');
    }

    public function destroy(BusinessUnit $businessUnit)
    {
        $businessUnit->delete();
        return redirect()->route('BusinessUnit.index')->withSuccess('Business record deleted successfully');
    }
}
