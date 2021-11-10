<?php

namespace App\Http\Controllers;

use App\CV;
use Illuminate\Http\Request;

class CVController extends Controller
{
    public function index()
    {
       $cvs = CV::latest()->paginate(20);
        return view('cvs.index',compact('cvs'))->with('i', (request()->input('page', 1) - 1) * 20);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('cvs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'spec' => 'required',
            'year' => 'required',
            'pwork' => 'required'
        ]);

        CV::create($request->all());
        return redirect('/first');
    }


    public function show(CV $cv)
    {
        error_log($cv);
        return view('cvs.show',compact('cv'));
    }

    public function edit(CV $cv)
    {
        return view('cvs.edit',compact('cv'));
    }

    public function update(Request $request, CV $cv)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'spec' => 'required',
            'year' => 'required',
            'pwork' => 'required'
        ]);

        $cv->update($request->all());
        return redirect()->route('cvs.index')->with('Update Done!');
    }

    public function destroy(CV $cv)
    {
        $cv->delete();
        return redirect()->route('cvs.index')->with('Sorry for deleting your CV');
    }
}
