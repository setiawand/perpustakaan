<?php

namespace App\Http\Controllers;

use App\Models\Operator;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    public function index()
    {
        $operators = Operator::all();

        return view('operators.index', compact('operators'));
    }

    public function create()
    {
        return view('operators.create');
    }
}
