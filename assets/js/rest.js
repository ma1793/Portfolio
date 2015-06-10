// The root URL for the RESTful services
var rootURL = "http://localhost/Portfolio/app/shared/api";



findAllElementsMainPage();




/*About*/
function renderAbout(about){
    $('.A_nombreTitulo').text(about.nombreTitulo);
    $('.skills').text(about.titulo);
    $('#A_mision').text(about.mision);
    $('#A_descripcion').text(about.descripcion);
    $('#A_nombre').text(about.nombre);
    $('#A_telefono').text(about.telefono);
    $('#A_email').text(about.email);
}

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

/*Portafolio*/

function renderProyectos(proyectos) {
    // JAX-RS serializes an empty list as null, and a 'collection of one' as an object (not an 'array of one')
   var list = proyectos == null ? [] : proyectos;
   $('#portafolioLista').empty();
   $.each(list, function(index, proyecto) {
      $('#portafolioLista').append('<div class="col-sm-4 portfolio-item text-center">'+
                            '<a href="#portfolioModal'+index+ '" class="portfolio-link" data-toggle="modal">'+
                                '<div class="caption">'+
                                    '<div class="caption-content">'+
                                        '<i class="fa fa-search-plus fa-3x"></i>'+
                                    '</div>'+
                                '</div>'+
                                '<img src="'+proyecto.imagenLink+'" class="img-responsive" alt="">'+
                            '</a>'+
                        '</div>');
  });
  $('#portaforioModals').empty();
  $.each(list, function(index, proyecto) {
      $('#portaforioModals').append('<div class="portfolio-modal modal fade" id="portfolioModal'+index+'" tabindex="-1" role="dialog" aria-hidden="true">'+
            '<div class="modal-content">'+
                '<div class="close-modal" data-dismiss="modal">'+
                    '<div class="lr">'+
                        '<div class="rl">'+
                        '</div>'+
                    '</div>'+
                '</div>'+
                '<div class="container">'+
                    '<div class="row">'+
                        '<div class="col-lg-8 col-lg-offset-2">'+
                            '<div class="modal-body">'+
                                '<h2>'+proyecto.titulo+'</h2>'+
                                '<hr class="star-primary">'+
                                '<img src="'+proyecto.imagenLink+'" class="img-responsive img-centered" alt="">'+
                                '<p>'+proyecto.descripcion+'</p>'+
                                '<ul class="list-inline item-details">'+
                                    '<li>Client:'+
                                        '<strong><a href="">'+proyecto.cliente+'</a>'+
                                        '</strong>'+
                                    '</li>'+
                                    '<li>Date:'+
                                        '<strong><a>'+proyecto.fecha+'</a>'+
                                        '</strong>'+
                                    '</li>'+
                                    '<li>Service:'+
                                        '<strong><a>'+proyecto.servicio+'</a>'+
                                        '</strong>'+
                                    '</li>'+
                                    '<li>Course:'+
                                        '<strong><a>'+proyecto.nombreCurso+'</a>'+
                                        '</strong>'+
                                    '</li>'+
                                '</ul>'+
                                '<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
            '</div>'+
        '</div>');
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


function findAllElementsMainPage(){
    getAbout();
    getProyectos();
    getBlog();
}