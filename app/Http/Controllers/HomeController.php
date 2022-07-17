<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Waste;

class HomeController extends Controller
{
    public function index()
    {
        $wastes = Waste::all();
        
        $wastes_chart = [];
        $data = [];
        foreach ($wastes as $waste) {
            $wastes_chart[] = $waste->merk;
            $data[] = $waste->berat_sampah;    
            
        }
        //dd ($data);

        return view('home.index', ['wastes_chart' => $wastes_chart, 'data' => $data]);
    }
}
