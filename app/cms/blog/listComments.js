// The root URL for the RESTful services
var rootURL = "http://localhost/Portfolio/app/shared/api";
var id=0;



function renderComentarios(comentarios) {
    // JAX-RS serializes an empty list as null, and a 'collection of one' as an object (not an 'array of one')
   var list = comentarios == null ? [] : comentarios;
  // $('#tablaProyectos').empty();
   $.each(list, function(index, comentario) {
      $('#tablaComentarios').append('<tr>'+
                                    '<td>'+(index+1)+'</td>'+
                                    '<td>'+comentario.valor+'</td>'+
                                    '<td>'+comentario.fecha+'</td>'+
                                    '<td>'+                                        
                                        '<a href="#myModal" onclick="idSeleccionado('+comentario.idComentario+')" role="button" data-toggle="modal"><i class="icon-remove"></i></a>'+
                                    '</td>'+
                                '</tr>');
  });
 
}

function getComentarios() {
    console.log('getProyectos');
    $.ajax({
        type: 'GET',
        url: rootURL+'/blog/comentarios',
        dataType: "json", // data type of response
        success: function(data) {
            renderComentarios(data);
        }
    });
}


/*DELETE*/
function deleteComentario(id) {
	console.log('deleteComentario');
	$.ajax({
		type: 'DELETE',
		url: rootURL + '/blog/comentarios/'+id ,
		success: function(data, textStatus, jqXHR){
			alert('Comment Deleted');
		},
		error: function(jqXHR, textStatus, errorThrown){
			alert('deleteComment error');
		}
	});
}


function idSeleccionado(indice){
   id = indice;
};

function eliminarItem(){
    deleteComentario(id);
    location.href = "../blog/listComments.php";
};

getComentarios();


