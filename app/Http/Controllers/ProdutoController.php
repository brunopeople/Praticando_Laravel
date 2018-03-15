<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use estoque\Produto;
use Request;

class ProdutoController extends Controller {

    public function lista(){

    	$id = Request::input('id','0');

    	$resposta = DB::select('select*from produtos where id =?', [$id]);

        $produtos = DB::select('select*from produtos');

      $data = [];

      $data['produtos'] = $produtos;
      return view('listagem')->with('produtos',$produtos);
    }

    public function mostra()
    {
    	$id = Request::route('id','0');
    	$produto = DB::seletc('select*from produtos where id = ?', [$id]);

    	if(empty($resposta))
    	{
    		return "Esse produto não existe";
    	}

    	return view('produto/detalhes')->width('p',$produto);
    }

    public function novo()
    {
    	return view('formulario');
    }

    public function adiciona()
    {
    	$nome = Request::input('nome');
    	$valor = Request::input('valor');
    	$descricao = Request::input('descricao');
    	$quantidade = Request::input('quantidade');

    	DB::insert('insert into produtos values (null,?,?,?,?)',
    		array($nome, $quantidade, $valor, $descricao));

    	return redirect('/produtos')->withInput();
    }

    public function listaJson()
    {
    	$produtos = DB::select('select *from produtos');
    	return response()->json($produtos);
    }
}
