<?php

use Slim\Http\Request;
use Slim\Http\Response;
use App\Models\User;

//Rotas para produtos
//ORM-> Object Relational Mapper (Mapeador de objeto relacional)
//Illuminate-> é o motor de base de dados do Laravel sem o Laravel
//Eloquent ORM ->persistência dos seus dados on db

$app->group('/api/v1', function(){
	
	$this->get('/users/list', function($request, $response){
		
		$users = User::get();
		
		return $response->WithJson($users);

	});

//Adicionar um produto
	
	$this->post('/users/add', function($request, $response){
		
		$data = $request->getParsedBody();

		//Validar os dados ,Gerar algum histórico...

		$user= User::create($data);
		return $response->WithJson($user);


	});

	//Recupera produto para um determinado hw_InsDoc(connection, parentID, object_record)
	$this->get('/users/list/{id}', function($request, $response,$args){
		//var_dump($args);
		$user = User::findOrfail($args['id']);
		return $response->WithJson($user);

	});


	//atualiza produto para um determinado ID
	$this->put('/users/update/{id}', function($request, $response,$args){

		$data = $request->getParsedBody();
		$user = User::findOrfail($args['id']);
		$user->update( $data );
		return $response->WithJson( $user );
	});

	//Remover um produto com base em um determinado ID
	$this->get('/users/remove/{id}', function($request, $response,$args){ 	

		$user = User::findOrfail($args['id']);
		$user->delete();
		return $response->WithJson($user);

	});


});


//CORS - Cross Origin Resource Sharing - Compartilhamento de recursos de origem cruzados (CORS) é um mecanismo que  usa cabeçalhos HTTP adicionais para garantir a permissão de acesso a recursos de um servidor diferente do da origem da página.
