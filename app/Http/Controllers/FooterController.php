<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index()
    {
        $footers = Footer::all();
        return view('footers.index', compact('footers'));
    }

    public function create()
    {
        return view('footers.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'content' => 'required|string',
        ]);

        Footer::create($data);
        return redirect()->route('footers.index');
    }
}
