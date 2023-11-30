<?php

namespace App\Http\Controllers;

use App\Models\Classification;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

/**
 * Class ClassificationController
 * @package App\Http\Controllers
 */
class ClassificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classifications = Classification::paginate();

        return response()->json($classifications);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Classification::$rules);

        Classification::create($request->all());

        return redirect()->route('classifications.index')
            ->with('success', 'Classification created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  Classification $classification
     * @return \Illuminate\Http\Response
     */
    public function show($classification)
    {
        
        return response()->json($classification);
    }

   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Classification $classification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classification $classification)
    {
        request()->validate(Classification::$rules);

        $classification->update($request->all());

        return redirect()->route('classifications.index')
            ->with('success', 'Classification updated successfully');
    }

    /**
     * @param Classification $classification
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($classification)
    {
        $classification->delete();

        return redirect()->route('classifications.index')
            ->with('success', 'Classification deleted successfully');
    }
}
