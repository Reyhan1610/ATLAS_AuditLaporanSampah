<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Waste;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $banyakkategori = DB::table('wastes')
            ->select(DB::raw('count(*) as kat1'))
            ->groupBy('kategori')
            ->pluck('kat1');

        return view('home.index', ['banyakkategori' => $banyakkategori]);
    }
}
