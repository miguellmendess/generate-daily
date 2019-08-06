<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function cadastrar($value = 'Vazio'){

        $name = "User 123"; $id = 33; $gender = "masc";
        return view('client.new-client', compact('name', 'id', 'gender', 'value'));

    }

    public function delete(){

    }
}
