// The root URL for the RESTful services
var rootURL = "http://localhost/Portfolio/app/shared/api";


function renderBlog(blog) {
     $("#ID_blog_titulo").val(blog.titulo);
     $("#ID_blog_descripcion").val(blog.descripcion);
     $("#ID_blog_fecha").val(blog.fecha);
     $("#ID_blog_imagenLink").val(blog.imagenLink);
    
  
}

/*GET*/
function getBlog() {
    console.log('getBlog');
    $.ajax({
        type: 'GET',
        url: rootURL+'/blog',
        dataType: "json", // data type of response
        success: function(data) {
           renderBlog(data);
           
        }
    });
}


getBlog();


/*Update*/
function updateBlog() {
	console.log('updateBlog');
	$.ajax({
		type: 'PUT',
		contentType: 'application/json',
		url: rootURL + '/blog',
		dataType: "json",
                
		data: JSON.stringify({"titulo":$('#ID_blog_titulo').val(),"fecha":$('#ID_blog_fecha').val(), "descripcion":$('#ID_blog_descripcion').val(),"imagenLink":$('#ID_blog_imagenLink').val()} ),         
		success: function(data, textStatus, jqXHR){
			alert('Blog Updated');
		},
		error: function(jqXHR, textStatus, errorThrown){
			alert('updateBlog error: ' + textStatus);
		}
	});
}