// The root URL for the RESTful services
var rootURL = "http://localhost/Portfolio/app/shared/api";

var estado;
var id;


function renderProyecto(proyecto) {
     $("#P_titulo").val(proyecto.titulo);
     $("#P_descripcion").val(proyecto.descripcion);
     $("#P_cliente").val(proyecto.titulo);
     $("#P_fecha").val(proyecto.fecha);
     $("#P_servicio").val(proyecto.servicio);
     $("#P_nombreCurso").val(proyecto.nombreCurso);
     $("#P_imagenLink").val(proyecto.imagenLink);
    
  
}

/*GET*/
function getProyecto(id) {
    console.log('getProyecto');
    $.ajax({
        type: 'GET',
        url: rootURL+'/proyecto/'+id,
        dataType: "json", // data type of response
        success: function(data) {
           renderProyecto(data);
           
        }
    });
}





/*Update*/
function updateProyecto() {
	console.log('updateProyecto');
	$.ajax({
		type: 'PUT',
		contentType: 'application/json',
		url: rootURL + '/proyecto/'+id,
		dataType: "json",
                
		data: JSON.stringify({"titulo":$('#P_titulo').val(),"descripcion":$('#P_descripcion').val(),"cliente":$('#P_cliente').val(),"fecha":$('#P_fecha').val(), "servicio":$('#P_servicio').val(),"nombreCurso":$("#P_nombreCurso").val(),"imagenLink":$('#P_imagenLink').val()} ),         
		success: function(data, textStatus, jqXHR){
			alert('Project Updated');
                        location.href = "../projects/listProjects.php";
		},
		error: function(jqXHR, textStatus, errorThrown){
			alert('updateProject error: ' + textStatus);
		}
	});
}
/*POST*/
function addProyecto() {
	console.log('addProyecto');
	$.ajax({
		type: 'POST',
		contentType: 'application/json',
		url: rootURL + '/proyecto',
		dataType: "json",
		data: JSON.stringify({"titulo":$('#P_titulo').val(),"descripcion":$('#P_descripcion').val(),"cliente":$('#P_cliente').val(),"fecha":$('#P_fecha').val(), "servicio":$('#P_servicio').val(),"nombreCurso":$("#P_nombreCurso").text(),"imagenLink":$('#P_imagenLink').val()} ),         
		success: function(data, textStatus, jqXHR){
			alert('Added Project');
                        location.href = "../projects/listProjects.php";
		},
		error: function(jqXHR, textStatus, errorThrown){
			alert('addProject error: ' + textStatus);
		}
	});
}



/*DELETE*/
function deleteProyecto(id) {
	console.log('deleteProyecto');
	$.ajax({
		type: 'DELETE',
		url: rootURL + '/proyecto/'+id ,
		success: function(data, textStatus, jqXHR){
			alert('Project Deleted');
		},
		error: function(jqXHR, textStatus, errorThrown){
			alert('deleteProject error');
		}
	});
}




function ObtenerParametrosURL(){
   var url = $(location).attr('href');
   id = formatURLParameter(url, 'id');
   estado = formatURLParameter(url, 'estado');
   console.log(estado);
   if(estado !== "0")
       getProyecto(id);
    
   
};

function formatURLParameter(url, name) {
    return (RegExp(name + '=' + '(.+?)(&|$)').exec(url)||[,null])[1];
}


function eliminarItem() {
    deleteProyecto(id);
    location.href = "../projects/listProjects.php";

};

ObtenerParametrosURL();