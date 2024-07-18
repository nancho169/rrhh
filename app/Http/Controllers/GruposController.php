<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use App\Models\UserMetadata;


class GruposController extends Controller
{
    public function index(){
        return view('grupo.index');
    }
}
