<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

protected $fillable =  [
    'nm_client',
    'gender',
    'email',
    'phone',
    'fk_workout',
    'birth'
];

protected $casts = [
    'nm_client' => 'string',
    'gender' => 'string',
    'email' => 'string',
    'phone' => 'string',
    'fk_workout' => 'integer',
    'birth' => 'date'
];

public function createOrFail( array $data): array
{
    $email = $data['email'];
    $clientExists = Client::where('email', '=', $email)->first();

    if (!$clientExists){
        $id = $this->createAndReturnPk($data);
        return $id;
    }

    //criar uma exception para esse erro
    return [ 'error' => 'já existe um cliente cadastrado com esse email '];
}

public function createAndReturnPk( array $data): array 
{
    $client = Client::create($data);
    $client->refresh();
    //criar um resource para esse retorno
    return [
    'id' => $client->id
    ];
}

}
