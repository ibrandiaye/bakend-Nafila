<?php

namespace App\Http\Controllers;

use App\Repositories\DouhaRepository;
use Illuminate\Http\Request;

class DouhaController extends Controller
{
    protected $douhaRepository;

    public function __construct(DouhaRepository $douhaRepository)
    {
        $this->douhaRepository = $douhaRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $douhas = $this->douhaRepository->getAll();
        return view('douha.index',compact('douhas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('douha.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $douha = $this->douhaRepository->store($request->all());

        return redirect('douha');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $douha = $this->douhaRepository->getById($id);
        return view('douha.show',compact('douha'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $douha = $this->douhaRepository->getById($id);
        return view('douha.edit',compact('douha'));
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
        $this->douhaRepository->update($id, $request->all());
         return redirect('douha');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->douhaRepository->destroy($id);
        return redirect('douha');
    }
}
