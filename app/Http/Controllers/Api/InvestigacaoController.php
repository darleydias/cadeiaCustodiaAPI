<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Investigacao;
use App\Http\Requests\StoreUpdateCasoFormRequest;

class InvestigacaoController extends Controller
{
    private $investigacao;
    public function __construct(Investigacao $investigacao){
        $this->investigacao = $investigacao;
    }

    public function index(Investigacao $investigacao){
        $investigacao = $investigacao->all();
        return response()->json($investigacao);
    }
    public function create()
    {
        //
    }
    public function store(StoreUpdateCasoFormRequest $request){
        $investigacao = $this->investigacao->create($request->all());
        return response()->json($investigacao,201);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        if(!$investigacao=$this->investigacao->find($id))
            return response()->json(['error'=>'Não encontrou'],404);
        return response()->json($investigacao, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
