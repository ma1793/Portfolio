$('#B_submitComentario').click(function() {
	var comentario = $('#B_comentario').val();
        var fecha = new Date();
        fecha = fecha.toString();
        
        $('#B_comentario').val("");
        
        addComentario(comentario,fecha.substring(0,33));
	return false;
});


function addComentario(pComentario,pFecha) {
	console.log('addComentario');
	$.ajax({
		type: 'POST',
		contentType: 'application/json',
		url: rootURL+'/blog/comentarios',
		dataType: "json",
		data: JSON.stringify({"valor":pComentario,"fecha":pFecha}),
		success: function(data, textStatus, jqXHR){
			getComentarios();
		},
		error: function(jqXHR, textStatus, errorThrown){
			alert('addComentario error: ' + textStatus);
		}
	});
}
