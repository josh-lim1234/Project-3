<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view('form.show');
    }
    public function load(Request $request) 
    {
        $price = $request->query('price');
        $dosage = $request->query('dosage');
        $litre = $request->query('litre');
        $permL = $price / $dosage;
        if ($litre) {
            $per = $permL*1000;
            return "1 L of your drink is worth $" . $per;
        } else {
            $per = $permL;
            return "1 mL of your drink is worth $" . $per;
        }
    }
}
