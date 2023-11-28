<?php

namespace App\Http\Controllers;

use App\Models\P;
use Illuminate\Http\Request;

/**
 * Class PController
 * @package App\Http\Controllers
 */
class PController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pS = P::paginate();

        return view('p.index', compact('pS'))
            ->with('i', (request()->input('page', 1) - 1) * $pS->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $p = new P();
        return view('p.create', compact('p'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(P::$rules);

        $p = P::create($request->all());

        return redirect()->route('p-s.index')
            ->with('success', 'P created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $p = P::find($id);

        return view('p.show', compact('p'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $p = P::find($id);

        return view('p.edit', compact('p'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  P $p
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, P $p)
    {
        request()->validate(P::$rules);

        $p->update($request->all());

        return redirect()->route('p-s.index')
            ->with('success', 'P updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $p = P::find($id)->delete();

        return redirect()->route('p-s.index')
            ->with('success', 'P deleted successfully');
    }
}
