<?php

namespace App\Http\Controllers;

use App\Models\Sportas;
use App\Http\Requests\StoreSportasRequest;
use App\Http\Requests\UpdateSportasRequest;


class SportasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $name = sportas::all();
        return view('/', compact('/'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecountriesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|max:100',
            'kaina' => 'required|max:100',
            'kategorija' => 'required|max:100',
            'image' => 'required|max:100',
        ]);

        sportas::create([
            'name' => request('name'),
            'kaina' => request('kaina'),
            'kategorija' => request('kategorija'),
            'image' => request('image'),
        ]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sportas  $sportas
     * @return \Illuminate\Http\Response
     */
    public function show(sportas $sportas)
    {

        return view('/', compact('/'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sportas  $sportas
     * @return \Illuminate\Http\Response
     */
    public function delete(sportas $sportas)
    {


        return view('/delete', compact('/delete'));

    }


}
