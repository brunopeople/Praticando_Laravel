<?php

Route::get('/', function()
{
	return '<h1>Listagem de Produtos</h1>';
});


Route::get('/produtos', 'ProdutoController@lista');

{
	return '<h1>Listagem de Produtos</h1>';
}