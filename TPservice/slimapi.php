<?php
require 'confing.php';
require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();

$app->get('/produit/:id', function($id) use ($app) {
    
	$db =getDB();
       // $id = $_GET['id'];
        
        echo $id;
	$sql = "SELECT * from produit where id >= ".$id;
	$stmt = $db->query($sql); 
	$items = $stmt->fetchAll(PDO::FETCH_OBJ);
	echo json_encode($items);
});




$app->post('/produit', function() use ($app) {
	$db =getDB();
	$json = $app->request->getBody();
	$data = json_decode($json, true);
	
	$sql = "insert into items (`name`,`count`) values ('".$data['name']."','".$data['count']."')";
	$result = $db->query($sql); 
	if($result){
		$app->response->setStatus(201);
		echo '{"flag": "true","msg": "item successfully added"}';
	}else{
		$app->response->setStatus(422);
		echo '{"flag": "false","msg": "Oops! An error occurred"}';
	}
	
});
$app->put('/produit', function() use ($app) {
	$db =getDB();
	$json = $app->request->getBody();
	$data = json_decode($json, true);
	$sql = "update items set `name` = '".$data['name']."',`count` ='".$data['count']."' where id ='".$data['id']."'";
	$result = $db->query($sql); 
	if($result){
		$app->response->setStatus(200);
		echo '{"flag": "true","msg": "item successfully updated"}';
	}else{
		$app->response->setStatus(422);
		echo '{"flag": "false","msg": "Oops! An error occurred"}';
	}
});

$app->delete('/produit/:id', function($id) use ($app) {
	$db =getDB();
	$sql = "delete from produit where id ='".$id."'";
	$result = $db->query($sql); 
	if($result){
		$app->response->setStatus(200);
		echo '{"flag": "true","msg": "item successfully deleted"}';
	}else{
		$app->response->setStatus(422);
		echo '{"flag": "false","msg": "Oops! An error occurred"}';
	}
});

$app->run();
?>
