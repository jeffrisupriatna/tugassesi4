<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index()
    {
        echo "Hallo Selamat Datang ";
        echo "<h1>". Auth::user()->name . "</h1>";
    }
    function pemilik()
    {
        echo "Hallo Selamat Datang Pemilik ";
        echo "<h1>". Auth::user()->name . "</h1>";
    }
    function tamu()
    {
        echo "Hallo Selamat Datang Tamu";
        echo "<h1>". Auth::user()->name . "</h1>";
    }
}
