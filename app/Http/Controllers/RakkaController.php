<?php

namespace App\Http\Controllers;

use App\Repositories\NafilaRepository;
use App\Repositories\RakkaRepository;
use Illuminate\Http\Request;

class RakkaController extends Controller
{
    protected $rakkaRepository;
    protected $nafilaRepository;

    public function __construct(RakkaRepository $rakkaRepository, NafilaRepository $nafilaRepository)
    {
        $this->rakkaRepository = $rakkaRepository;
        $this->nafilaRepository = $nafilaRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rakkas = $this->rakkaRepository->getAll();
        return view('rakka.index',compact('rakkas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nafilas = $this->nafilaRepository->getAll();

        return view ('rakka.add',compact('nafilas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rakka = $this->rakkaRepository->store($request->all());

       return  redirect('rakka');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rakka = $this->rakkaRepository->getById($id);
        return view('rakka.show',compact('rakka'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nafilas = $this->nafilaRepository->getAll();
        $rakka = $this->rakkaRepository->getById($id);
        return view('rakka.edit',compact('rakka','nafilas'));
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
        $this->rakkaRepository->update($id, $request->all());
        return redirect('rakka');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->rakkaRepository->destroy($id);
        return redirect('rakka');
    }
}
