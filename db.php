<?php

require __DIR__ . '/vendor/autoload.php';


// Instantiate the app
$settings = require __DIR__ . '/src/settings.php';
$app = new \Slim\App($settings);

// Set up dependencies
require __DIR__ . '/src/dependencies.php';

$db = $container->get('db');

$schema = $db->schema();
$table = 'users';

$schema->dropIfExists($table);

//Criando tabela
$schema->create($table, function($table){

			$table->increments('id');
			$table->string('name', 100);
			$table->string('email',100);
			$table->timestamps();

});

//Inserindo registros
$db->table($table)->insert([
'name' => 'Diego Madeira',
'email' => 'diego.m@teste.com',
'created_at' => '2021-09-18',
'updated_at' => '2021-09-18'
]);

$db->table($table)->insert([
'name' => 'Isabella Madeira',
'email' => 'isabella.m@teste.com',
'created_at' => '2021-09-18',
'updated_at' => '2021-09-18'
]);

$db->table($table)->insert([
'name' => 'Sofia Madeira',
'email' => 'sofia.m@teste.com',
'created_at' => '2021-09-18',
'updated_at' => '2021-09-18'
]);

$db->table($table)->insert([
'name' => 'Adélia Pardo',	
'email' => 'Adelia.p@teste.com',
'created_at' => '2021-09-18',
'updated_at' => '2021-09-18'
]);

$db->table($table)->insert([
'name' => 'Alexander Delgado',
'email' => 'alexande.d@teste.com',
'created_at' => '2021-09-18',
'updated_at' => '2021-09-18'
]);

$db->table($table)->insert([
'name' => 'Lana Lamenha',
'email' => 'lana.l@teste.com',
'created_at' => '2021-09-18',
'updated_at' => '2021-09-18'
]);

$db->table($table)->insert([
'name' => 'Danilo Afonso',
'email' => 'danilo.a@teste.com',
'created_at' => '2021-09-18',
'updated_at' => '2021-09-18'
]);

$db->table($table)->insert([
'name' => 'Orquidea Fortes',
'email' => 'orquidea.f@teste.com',
'created_at' => '2021-09-18',
'updated_at' => '2021-09-18'
]);

$db->table($table)->insert([
'name' => 'Indira Franqueira',
'email' => 'indira.f@teste.com',
'created_at' => '2021-09-18',
'updated_at' => '2021-09-18'
]);

$db->table($table)->insert([
'name' => 'Victoria Ornelias',
'email' => 'victoria.o@teste.com',
'created_at' => '2021-09-18',
'updated_at' => '2021-09-18'
]);




?>