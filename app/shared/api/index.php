<?php


require 'Slim/Slim.php';

//\Slim\Slim::registerAutoloader();

$app = new Slim();

$app->get('/contacto', 'getContacto');
$app->get('/blog', 'getBlog');
$app->get('/blog/comentarios', 'getComentariosBlog');
$app->post('/blog/comentarios', 'addComentario');
//$app->put('/wines/:id', 'updateWine');
//$app->delete('/wines/:id',	'deleteWine');

$app->run();




/*About*/

function getContacto() {
	$sql = "SELECT * FROM contacto";
	try {
		$db = getConnection();
		$stmt = $db->query($sql);  
		$contacto = $stmt->fetchObject();
		$db = null;
		echo json_encode($contacto);
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}


/*Blog*/

function getBlog() {
	$sql = "SELECT * FROM blogs";
	try {
		$db = getConnection();
		$stmt = $db->query($sql);  
		$blog = $stmt->fetchObject();
		$db = null;
		echo json_encode($blog);
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}
function getComentariosBlog() {
	$sql = "SELECT * FROM comentarios";
	try {
		$db = getConnection();
		$stmt = $db->query($sql);  
		$comentarios = $stmt->fetchAll(PDO::FETCH_OBJ);
		$db = null;
                echo json_encode($comentarios);
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}

function addComentario() {
	$request = Slim::getInstance()->request();
	$comentario = json_decode($request->getBody());
	$sql = "INSERT INTO comentarios (valor, fecha) VALUES (:valor, :fecha)";
	try {
		$db = getConnection();
		$stmt = $db->prepare($sql);  
		$stmt->bindParam("valor", $comentario->valor);
		$stmt->bindParam("fecha", $comentario->fecha);
		$stmt->execute();
		$comentario->idComentario = $db->lastInsertId();
		$db = null;
		echo json_encode($comentario); 
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}

function updateWine($id) {
	$request = Slim::getInstance()->request();
	$body = $request->getBody();
	$wine = json_decode($body);
	$sql = "UPDATE wine SET name=:name, grapes=:grapes, country=:country, region=:region, year=:year, description=:description WHERE id=:id";
	try {
		$db = getConnection();
		$stmt = $db->prepare($sql);  
		$stmt->bindParam("name", $wine->name);
		$stmt->bindParam("grapes", $wine->grapes);
		$stmt->bindParam("country", $wine->country);
		$stmt->bindParam("region", $wine->region);
		$stmt->bindParam("year", $wine->year);
		$stmt->bindParam("description", $wine->description);
		$stmt->bindParam("id", $id);
		$stmt->execute();
		$db = null;
		echo json_encode($wine); 
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}

function deleteWine($id) {
	$sql = "DELETE FROM wine WHERE id=:id";
	try {
		$db = getConnection();
		$stmt = $db->prepare($sql);  
		$stmt->bindParam("id", $id);
		$stmt->execute();
		$db = null;
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}

function findByName($query) {
	$sql = "SELECT * FROM wine WHERE UPPER(name) LIKE :query ORDER BY name";
	try {
		$db = getConnection();
		$stmt = $db->prepare($sql);
		$query = "%".$query."%";  
		$stmt->bindParam("query", $query);
		$stmt->execute();
		$wines = $stmt->fetchAll(PDO::FETCH_OBJ);
		$db = null;
		echo '{"wine": ' . json_encode($wines) . '}';
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}

function getConnection() {
        
        $dbhost = "localhost";
        $dbuser= "ma1793";
        $dbpass= "sistema";
	$dbname="portafolio_db";
	$dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);	
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $dbh;
}

