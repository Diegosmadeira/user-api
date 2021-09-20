<?php

use Slim\Http\Request;
use Slim\Http\Response;
use App\Models\Produto;

//Rotas para produtos
//ORM-> Object Relational Mapper (Mapeador de objeto relacional)
//Illuminate-> é o motor de base de dados do Laravel sem o Laravel
//Eloquent ORM ->persistência dos seus dados on db

$app->group('/api/v1', function(){
	
	$this->get('/produtos/lista', function($request, $response){
		
		$produtos = Produto::get();
		return $response->WithJson($produtos);

	});

//Adicionar um produto
	
	$this->post('/produtos/adiciona', function($request, $response){
		
		$dados = $request->getParsedBody();

		//Validar os dados 
		//Gerar algum histórico

		$produto= Produto::create($dados);
		return $response->WithJson($produto);


	});

	//Recupera produto para um determinado ID
	$this->get('/produtos/lista/{id}', function($request, $response,$args){
		//var_dump($args);
		$produto = Produto::findOrfail($args['id']);
		return $response->WithJson($produto);

	});


	//Atualiza produto para um determinado ID
	$this->put('/produtos/atualiza/{id}', function($request, $response,$args){

		$dados = $request->getParsedBody();
		$produto = Produto::findOrfail($args['id']);
		$produto->Produto::Update( $produto );
		return $response->WithJson($produto);


	});

	//Remover um produto com base em um determinado ID
	$this->get('/produtos/remove/{id}', function($request, $response,$args){

		$produto = Produto::findOrfail($args['id']);
		$produto->delete();
		return $response->WithJson($produto);

	});


});


//CORS - Cross Origin Resource Sharing - Compartilhamento de recursos de origem cruzados (CORS) é um mecanismo que  usa cabeçalhos HTTP adicionais para garantir a permissão de acesso a recursos de um servidor diferente do da origem da página.

