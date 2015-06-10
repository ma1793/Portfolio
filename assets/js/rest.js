// The root URL for the RESTful services
var rootURL = "http://localhost/Portfolio/app/shared/api";



findAllElementsMainPage();




/*About*/
function renderContacto(contacto){
    $('.C_nombreTitulo').text(contacto.nombreTitulo);
    $('.skills').text(contacto.titulo);
    $('#C_mision').text(contacto.mision);
    $('#C_descripcion').text(contacto.descripcion);
    $('#C_nombre').text(contacto.nombre);
    $('#C_telefono').text(contacto.telefono);
    $('#C_email').text(contacto.email);
}

function getContacto() {
    console.log('getContacto');
    $.ajax({
        type: 'GET',
        url: rootURL+'/contacto',
        dataType: "json", // data type of response
        success: function(data) {
            renderContacto(data);
        }
    });
}

/*Blog*/
function renderBlog(blog){ 
   $('#B_titulo').text(blog.titulo);
   $('#B_fecha').text(blog.fecha);  
   $('#B_descripcion').text(blog.descripcion);
   $("#B_imagen").attr("src",blog.imagenLink);
   getComentarios(blog.idBlog);
}

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


function renderComentarios(comentarios) {
    // JAX-RS serializes an empty list as null, and a 'collection of one' as an object (not an 'array of one')
   var list = comentarios == null ? [] : comentarios;
   $('#comentarios').empty();
   $.each(list, function(index, comentario) {
      $('#comentarios').append('<div class="media"><a class="pull-left" href="#"><img class="media-object" src="http://placehold.it/64x64" alt=""></a><div class="media-body"><h4 class="media-heading">Anonymous User  <small>'+comentario.fecha+'</small></h4>'+comentario.valor+'</div></div><br>');
  });
}

function getComentarios() {
    console.log('getComentarios');
    $.ajax({
        type: 'GET',
        url: rootURL+'/blog/comentarios',
        dataType: "json", // data type of response
        success: function(data) {
            renderComentarios(data);
        }
    });
}
function findAllElementsMainPage(){
    getContacto();
    getBlog();
   
}