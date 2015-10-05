<?php

//require 'vendor/autoload.php';
//require 'clienteDAO.php';

require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();


//$app->get('/clientes/:cpf', function ($cpf) {
//  //recupera o cliente
//  $cliente = ClienteDAO::getClienteByCPF($cpf);
//  echo json_encode($cliente);
//});
//
//$app->get('/clientes', function() {
//  // recupera todos os clientes
//  $clientes = ClienteDAO::getAll();
//  echo json_encode($clientes);
//});
//
//$app->post('/clientes', function() {
//  // recupera o request
//  $request = \Slim\Slim::getInstance()->request();
//
//  // insere o cliente
//  $novoCliente = json_decode($request->getBody());
//  $novoCliente = ClienteDAO::addCliente($novoCliente);
//
//  echo json_encode($novoCliente);
//});
//
//$app->put('/clientes/:id', function ($id) {
//  // recupera o request
//  $request = \Slim\Slim::getInstance()->request();
//
//  // atualiza o cliente
//  $cliente = json_decode($request->getBody());
//  $cliente = ClienteDAO::updateCliente($cliente, $id);
//
//   echo json_encode($cliente);
//});
//
//$app->delete('/clientes/:id', function($id) {
//  // exclui o cliente
//  $isDeleted = ClienteDAO::deleteCliente($id);
//
//  // verifica se houve problema na exclusão
//  if ($isDeleted) {
//    echo "{'message':'Produto excluído'}";
//  } else {
//    echo "{'message':'Erro ao excluir produto'}";
//  }
//});

$app->post('/addEstabelecimento', function() {
    $request = \Slim\Slim::getInstance()->request();

    $the_body = $request->getBody();

    $output;
    parse_str($the_body, $output);

    $estab = json_decode(json_encode($output));
    estabelecimentoDAO::addEstabelecimento($estab);
});

$app->post('/addCidade', function(){
    $request = \Slim\Slim::getInstance()->request();

    $the_body = $request->getBody();

    $output;
    parse_str($the_body, $output);

    $estab = json_decode(json_encode($output));
    cidadeDAO::addCidade($estab);
});

$app->post('/addDivida', function(){
    $request = \Slim\Slim::getInstance()->request();

    $the_body = $request->getBody();

    $output;
    parse_str($the_body, $output);

    $d = json_decode(json_encode($output));
    dividasDAO::addDivida($d);
});

$app->post('/addEstado', function(){
    $request = \Slim\Slim::getInstance()->request();

    $the_body = $request->getBody();

    $output;
    parse_str($the_body, $output);

    $e = json_decode(json_encode($output));
    estadosDAO::addEstado($e);
});






$app->delete('/rmEstabelecimento/:id', function($id){
    estabelecimentoDAO::deleteEstabelecimento($id);
    
});

$app->delete('/rmCidade/:id', function($id){
    cidadeDAO::deleteCidade($id);
});

$app->delete('/rmDivida/:id', function($id){
    dividasDAO::deleteDivida($id);
});

$app->delete('/rmEstado/:id', function($id){
    estadosDAO::deleteEstado($id);
});


$app->put('/upEstabelecimento/:id', function($id){
    $request = \Slim\Slim::getInstance()->request();

    $the_body = $request->getBody();

    $output;
    parse_str($the_body, $output);

    $e = json_decode(json_encode($output));
    estabelecimentoDAO::updateEstabelecimento($e, $id);
    
});

$app->put('/upCidade/:id', function($id){
    $request = \Slim\Slim::getInstance()->request();

    $the_body = $request->getBody();

    $output;
    parse_str($the_body, $output);

    $c = json_decode(json_encode($output));
    cidadeDAO::updateCidade($c, $id);
    
});

$app->put('/upEstado/:id', function($id){
    $request = \Slim\Slim::getInstance()->request();

    $the_body = $request->getBody();

    $output;
    parse_str($the_body, $output);

    $e = json_decode(json_encode($output));
    estadosDAO::updateEstado($e, $id);
    
});


$app->get('/estabelecimentos/:nome', function($nome){
    estabelecimentoDAO::getEstabelecimentoByNome($nome);
    
});

$app->run();
