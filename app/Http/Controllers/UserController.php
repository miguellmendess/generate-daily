<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function cadastrar($value = 'Vazio'){

        die($value);
        $name = "User 123"; $id = 33; $gender = "masc";
        return view('admin.test', compact('name', 'id', 'gender', 'value'));

    }

    public function index(){

        return view('user.index');
    }
}
