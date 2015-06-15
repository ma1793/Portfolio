// The root URL for the RESTful services
var rootURL = "http://localhost/Portfolio/app/shared/api";


function renderAbout(about) {
     $("#ID_about_nombre").val(about.nombre);
     $("#ID_about_titulo").val(about.titulo);
     $("#ID_about_nombreTitulo").val(about.nombreTitulo);
     $("#ID_about_mision").val(about.mision);
     $("#ID_about_descripcion").val(about.descripcion);
     $("#ID_about_telefono").val(about.telefono);
     $("#ID_about_email").val(about.email);
    
  
}

/*GET*/
function getAbout() {
    console.log('getAbout');
    $.ajax({
        type: 'GET',
        url: rootURL+'/about',
        dataType: "json", // data type of response
        success: function(data) {
           renderAbout(data);
           
        }
    });
}


getAbout();


/*Update*/
function updateAbout() {
	console.log('updateAbout');
	$.ajax({
		type: 'PUT',
		contentType: 'application/json',
		url: rootURL + '/about',
		dataType: "json",
                
		data: JSON.stringify({"nombreTitulo":$('#ID_about_nombreTitulo').val(),"nombre":$('#ID_about_nombre').val(), "titulo":$('#ID_about_titulo').val(),"mision":$('#ID_about_mision').val(), "descripcion":$('#ID_about_descripcion').val(),"telefono":$('#ID_about_telefono').val(),"email":$('#ID_about_email').val()} ),         
		success: function(data, textStatus, jqXHR){
			alert('About Updated');
		},
		error: function(jqXHR, textStatus, errorThrown){
			alert('updateAbout error: ' + textStatus);
		}
	});
}