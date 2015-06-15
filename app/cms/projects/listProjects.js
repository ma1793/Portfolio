// The root URL for the RESTful services
var rootURL = "http://localhost/Portfolio/app/shared/api";
var id=0;



function renderProyectos(proyectos) {
    // JAX-RS serializes an empty list as null, and a 'collection of one' as an object (not an 'array of one')
   var list = proyectos == null ? [] : proyectos;
  // $('#tablaProyectos').empty();
   $.each(list, function(index, proyecto) {
      $('#tablaProyectos').append('<tr>'+
                                    '<td>'+(index+1)+'</td>'+
                                    '<td>'+proyecto.titulo+'</td>'+
                                    '<td>'+proyecto.descripcion.substring(0,55)+'...</td>'+
                                    '<td>'+proyecto.cliente+'</td>'+
                                    '<td>'+proyecto.fecha+'</td>'+
                                    '<td>'+proyecto.servicio+'</td>'+
                                    '<td>'+proyecto.nombreCurso+'</td>'+
                                    '<td>'+
                                        '<a href="../projects/editproject.php?id='+proyecto.idProyecto+'&estado=1"><i class="icon-pencil"></i></a><br>'+
                                        
                                        '<a href="#myModal" onclick="idSeleccionado('+proyecto.idProyecto+')" role="button" data-toggle="modal"><i class="icon-remove"></i></a>'+
                                    '</td>'+
                                '</tr>');
  });
 
}

function getProyectos() {
    console.log('getProyectos');
    $.ajax({
        type: 'GET',
        url: rootURL+'/proyectos',
        dataType: "json", // data type of response
        success: function(data) {
            renderProyectos(data);
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


function idSeleccionado(indice){
   id = indice;
};

function eliminarItem(){
    deleteProyecto(id);
    location.href = "../projects/listProjects.php";
};

getProyectos();
