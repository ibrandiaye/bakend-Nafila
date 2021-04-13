<?php

namespace App\Http\Controllers;

use App\Repositories\NafilaRepository;
use Illuminate\Http\Request;

class NafilaController extends Controller
{
    protected $nafilaRepository;

    public function __construct(NafilaRepository $nafilaRepository)
    {
        $this->nafilaRepository = $nafilaRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nafilas = $this->nafilaRepository->getAll();
        return view('nafila.index',compact('nafilas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('nafila.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nafila = $this->nafilaRepository->store($request->all());

        redirect('nafila');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nafila = $this->nafilaRepository->getById($id);
        return view('nafila.show',compact('nafila'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nafila = $this->nafilaRepository->getById($id);
        return view('nafila.edit',compact('nafila'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->nafilaRepository->update($id, $request->all());
         return redirect('nafila');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->nafilaRepository->destroy($id);
        return redirect('nafila');
    }
}
