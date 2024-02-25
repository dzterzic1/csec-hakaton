<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CovidData;

class CovidDataController extends Controller
{
    //
    public function index()
    {
        $covidData = CovidData::all();
        return view('covid.index', compact('covidData'));
    }

    public function create()
    {
        return view('covid.create');
    }

    public function store(Request $request)
    {
        $failed = $request->validate([
            'SPOL' => 'required|in:0,1',
            'LE_WBC' => 'required|numeric|min:0',
            'Limf' => 'required|numeric|min:0',
            'Mid' => 'required|numeric|min:0',
            'Gran' => 'required|numeric|min:0',
            'HGB' => 'required|numeric|min:0',
        ]);

        if ($failed . isNonEmptyString()) {
            return redirect()->route('covid.create')->with('failure', 'Invalid field values.');
        }

        $covidData = new CovidData([
            'SPOL' => $request->input('SPOL'),
            'LE_WBC' => $request->input('LE_WBC'),
            'Limf' => $request->input('Limf'),
            'Mid' => $request->input('Mid'),
            'Gran' => $request->input('Gran'),
            'HGB' => $request->input('HGB'),
        ]);

        $covidData->save();

        return redirect()->route('covid.create')->with('success', 'Covid-19 record added successfully.');
    }

    public function edit($id)
    {
        $covidData = CovidData::find($id);
        return view('covid.edit', compact('covidData'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'SPOL' => 'required',
            'LE_WBC' => 'required',
            'Limf' => 'required',
            'Mid' => 'required',
            'Gran' => 'required',
            'HGB' => 'required',
        ]);

        $covidData = CovidData::findOrFail($id);

        $covidData->update([
            'SPOL' => $request->input('SPOL'),
            'LE_WBC' => $request->input('LE_WBC'),
            'Limf' => $request->input('Limf'),
            'Mid' => $request->input('Mid'),
            'Gran' => $request->input('Gran'),
            'HGB' => $request->input('HGB'),
        ]);

        return redirect()->route('home')->with('success', 'Covid-19 record updated successfully.');
    }

    public function updateFinalResult(Request $request, $id)
    {
        $covidData = CovidData::findOrFail($id);

        $covidData->update([
            'FinalResult' => $request->input('final_result')
        ]);

        return redirect()->route('home')->with('success', 'Final result updated successfully');
    }
}
