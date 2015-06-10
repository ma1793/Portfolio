<?php
    echo ' <section id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Blog</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- Blog Post -->

                    <!-- Title -->
                    <h3 id="B_titulo"></h3>

                    <!-- Author -->
                    <p class="lead">
                        by <a href="#page-top">Stephen Varela</a>
                    </p>

                    <hr>

                    <!-- Date/Time -->
                    <p>Posted on <b id="B_fecha"></b></p>

                    <hr>

                    <!-- Preview Image -->
                    <img class="img-responsive" id="B_imagen" src="" alt="">

                    <hr>

                    <!-- Post Content -->
                    <p class="lead" id="B_descripcion" style="text-align:justify"></p>

                    <hr>

                    <!-- Blog Comments -->

                    <!-- Comments Form -->
                    <div class="well">
                        <h4>Leave a Comment:</h4>
                        <form role="form">
                            <div class="form-group">
                                <textarea id="B_comentario" class="form-control" rows="3"></textarea>
                            </div>
                            <button id="B_submitComentario" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                    <hr>

                    <!-- Posted Comments -->

                    <!-- Comment -->
                    <div id="comentarios">
                      
                    </div>
                </div>
            </div>
        </div>
    </section>';

