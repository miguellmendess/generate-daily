<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DailyRecordController extends Controller
{
    //

    public function index($value = 'Vazio'){

        $name = "User 123"; $id = 33; $gender = "masc";
        return view('daily.new-daily', compact('name', 'id', 'gender', 'value'));

    }
}
