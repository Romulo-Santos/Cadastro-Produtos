<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function adicionar()
    {
        return view('produtos.adicionar'); // Certifique-se de que a view 'adicionar.blade.php' existe
    }

    public function guardar(Request $request)
    {
        $produto = new Produto();
        $produto->nome = $request->input('nome');
        $produto->descricao = $request->input('descricao');
        $produto->preco = $request->input('preco');
        $produto->disponivel = $request->input('disponivel');
        $produto->save();

        return redirect()->route('produtos.index');
    }

    public function index()
    {
        $produtos = Produto::all();
        return view('produtos.index', compact('produtos')); // Certifique-se de que a view 'index.blade.php' existe
    }
}
