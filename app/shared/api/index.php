<?php


require 'Slim/Slim.php';

//\Slim\Slim::registerAutoloader();

$app = new Slim();
$app->contentType('text/html; charset=utf-8');

$app->get('/about', 'getAbout');
$app->put('/about', 'updateAbout');
$app->get('/blog', 'getBlog');
$app->put('/blog', 'updateBlog');

$app->get('/blog/comentarios', 'getComentariosBlog');
$app->post('/blog/comentarios', 'addComentario');
$app->delete('/blog/comentarios/:id', 'deleteComentario');

$app->get('/proyectos', 'getProyectos');
$app->get('/proyecto/:id', 'getProyecto');
$app->put('/proyecto/:id', 'updateProyecto');
$app->delete('/proyecto/:id', 'deleteProyecto');
$app->post('/proyecto', 'addProyecto');



$app->run();




/*About*/

function getAbout() {
	$sql = "SELECT * FROM about";
	try {
		$db = getConnection();
		$stmt = $db->query($sql);  
		$about = $stmt->fetchObject();
		$db = null;
		echo json_encode($about);
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}

function updateAbout() {
	$request = Slim::getInstance()->request();
	$body = $request->getBody();
	$about= json_decode($body);
	$sql = "UPDATE about SET nombreTitulo=:nombreTitulo, nombre=:nombre, titulo=:titulo, descripcion=:descripcion, mision=:mision, telefono=:telefono, email=:email WHERE 1";
	try {
		$db = getConnection();
		$stmt = $db->prepare($sql);
                $stmt->bindParam("nombreTitulo", $about->nombreTitulo);
                $stmt->bindParam("nombre", $about->nombre);
		$stmt->bindParam("titulo", $about->titulo);
                $stmt->bindParam("descripcion", $about->descripcion);
                $stmt->bindParam("mision", $about->mision);
                $stmt->bindParam("telefono", $about->telefono);
                $stmt->bindParam("email", $about->email);
		$stmt->execute();
		$db = null;
		echo json_encode($about); 
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
function updateBlog() {
	$request = Slim::getInstance()->request();
	$body = $request->getBody();
	$blog= json_decode($body);
	$sql = "UPDATE blogs SET titulo=:titulo, descripcion=:descripcion, fecha=:fecha, imagenLink=:imagenLink WHERE 1";
	try {
		$db = getConnection();
		$stmt = $db->prepare($sql);
		$stmt->bindParam("titulo", $blog->titulo);
		$stmt->bindParam("descripcion", $blog->descripcion);
                $stmt->bindParam("fecha", $blog->fecha);
                $stmt->bindParam("imagenLink", $blog->imagenLink);
		$stmt->execute();
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
function deleteComentario($id) {
	$sql = "DELETE FROM comentarios WHERE idComentario=:id";
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



/*Proyectos*/
function getProyectos() {
	$sql = "SELECT * FROM proyectos";
	try {
		$db = getConnection();
		$stmt = $db->query($sql);  
		$proyectos = $stmt->fetchAll(PDO::FETCH_OBJ);
		$db = null;
                echo json_encode($proyectos);
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}

function getProyecto($id) {
	$sql = "SELECT * FROM proyectos WHERE idProyecto=$id";
	try {
		$db = getConnection();
		$stmt = $db->query($sql);  
		$proyecto = $stmt->fetchObject(); 
		$db = null;
                echo json_encode($proyecto);
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}


function updateProyecto($id) {
	$request = Slim::getInstance()->request();
	$body = $request->getBody();
	$proyecto= json_decode($body);
	$sql = "UPDATE proyectos SET titulo=:titulo, descripcion=:descripcion, cliente=:cliente, fecha=:fecha, servicio=:servicio, nombreCurso=:nombreCurso, imagenLink=:imagenLink WHERE idProyecto=:id";
	try {
		$db = getConnection();
		$stmt = $db->prepare($sql);
		$stmt->bindParam("titulo", $proyecto->titulo);
		$stmt->bindParam("descripcion", $proyecto->descripcion);
		$stmt->bindParam("cliente", $proyecto->cliente);
                $stmt->bindParam("fecha", $proyecto->fecha);
                $stmt->bindParam("servicio", $proyecto->servicio);
                $stmt->bindParam("nombreCurso", $proyecto->nombreCurso);
                $stmt->bindParam("imagenLink", $proyecto->imagenLink);
                $stmt->bindParam("id", $id);          
		$stmt->execute();
		$db = null;
		echo json_encode($proyecto); 
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}
function addProyecto() {
	$request = Slim::getInstance()->request();
	$body = $request->getBody();
	$proyecto= json_decode($body);
	$sql = "INSERT INTO proyectos  (titulo, descripcion, cliente, fecha, servicio, nombreCurso, imagenLink) VALUES (:titulo, :descripcion, :cliente, :fecha, :servicio, :nombreCurso, :imagenLink)";
	try {
		$db = getConnection();
		$stmt = $db->prepare($sql);
		$stmt->bindParam("titulo", $proyecto->titulo);
		$stmt->bindParam("descripcion", $proyecto->descripcion);
		$stmt->bindParam("cliente", $proyecto->cliente);
                $stmt->bindParam("fecha", $proyecto->fecha);
                $stmt->bindParam("servicio", $proyecto->servicio);
                $stmt->bindParam("nombreCurso", $proyecto->nombreCurso);
                $stmt->bindParam("imagenLink", $proyecto->imagenLink);
                
		$stmt->execute();
		$db = null;
		echo json_encode($proyecto); 
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}
function deleteProyecto($id) {
	$sql = "DELETE FROM proyectos WHERE idProyecto=:id";
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





/*Conection DB*/
function getConnection() {
        
        $dbhost = "localhost";
        $dbuser= "ma1793";
        $dbpass= "sistema";
	$dbname="portafolio_db";
	$dbh = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8", $dbuser, $dbpass);	
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $dbh;
}

