<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function main(Request $request)
    {
        $session = $request->session()->get('authenticated');
        $logged = User::where('email', $session)->first();

        return view('tech', ['logged' => $logged]);
    }
}
