<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro; 

class LivroController extends Controller
{
    public function index()
{
    $livros = Livro::all(); 

    return view('index', compact('livros'));
}

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        
    }

    public function edit($id)
    {
        return view('edit');
    }

    public function update(Request $request, $id)
    {
        
    }

    public function show($id)
    {
        $livro = Livro::find($id); 
    
        if (!$livro) {
            abort(404); 
        }
    
        return view('show', ['livro' => $livro]);
    }

    public function destroy($id)
    {
        
    }
}
