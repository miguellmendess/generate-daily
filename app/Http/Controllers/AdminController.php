<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        die('index Admin');
    }

    public function viewUser($idUser=0){
        die($idUser);
    }

    public function editUser($idUser=0){
        echo 'user: ';
        die($idUser);
    }

    public function createUser(){
        die("create");
    }


}
