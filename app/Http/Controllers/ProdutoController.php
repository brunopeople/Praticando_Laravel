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
      return view('listagem',$data);
    }

    public function mostra()
    {
    	$id = Request::route('id','0');
    	$produto = DB::seletc('select*from produtos where id = ?', [$id]);

    	if(empty($resposta))
    	{
    		return "Esse produto não existe";
    	}

    	return view('detalhes')->width('p',$produto[0]);
    }
}
