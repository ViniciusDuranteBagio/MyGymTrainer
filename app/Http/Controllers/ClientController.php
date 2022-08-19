<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
class ClientController extends Controller
{

    private $ruleClient = [
        'nm_client' => 'required|string',
        'gender' => 'required|string',
        'email' => 'required|email',
        'phone' => 'required|string',
        'fk_workout' => 'nullable',
        'fg_change_workout' => 'nullable',
        'birth' => 'required|date'
    ];
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Client::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataClient = $this->validate($request, $this->ruleClient);

        $client = new Client();

        $idNewClient = $client->createOrFail($dataClient); 

        return $idNewClient;       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientModel =  new Client();
        return  $clientModel->findOrFail($id)->toArray();
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
        // criar função UpdateOrFail para fazer o update se o cliente existir e passar a logica para  função no model 
        //pegar Id ver se existe no banco
        $client = Client::findOrFail($id);
        //esta fazendo o update com todos os dados que vem do post, verificar para ser possivel fazer só com o que vem 
        $client->update($request->all());
        //usar o isDirty para ver se foram alterados 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clientModel =  new Client();
        $client = $clientModel->findOrFail($id);
        $client->deleteOrFail();
    }
}
