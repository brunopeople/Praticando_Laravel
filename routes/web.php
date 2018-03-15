<?php

Route::get('/', function()
{
	return '<h1>Listagem de Produtos</h1>';
});

Route::get('/produtos','ProdutoController@lista');
Route::get('/produtos/mostra/{id}','ProdutosController@mostra');
Route::get('/produtos/novo','ProdutoController@novo');
Route::post('/produtos/adiciona','ProdutoController@adiciona');
Route::get('/produtos/json','ProdutosController@listaJson');