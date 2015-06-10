<?php
echo '<section  class="success" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contact Me</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <form role="form">
                        <fieldset>
                            <!--<legend>User Info:</legend>-->
                            <div class="form-group">
                                <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="Name">
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-offset-1">Works:</label>
                                <div class="col-sm-4 col-sm-offset-5">
                                    <div class="radio-inline">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                            Si
                                        </label>
                                    </div>
                                    <div class="radio-inline">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" id="email" class="form-control input-sm" placeholder="Company Name">
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2 col-sm-offset-1">
                                    <label>Ocupation:</label>
                                </div>
                                <div class="col-sm-9 ">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="checkboxContact1" value="opcion_1"> Director
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="checkboxContact2" value="opcion_1"> Analyst
                                    </label>

                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="checkboxContact4" value="opcion_1"> Developer
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="checkboxContact6" value="opcion_1"> Other
                                    </label>
                                    <p></p>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <!--<legend>User Review</legend>-->
                            <div class="form-group">
                                <div class="btn-group btn-input clearfix">
                                    <button type="button" class="btn btn-default btn-sm dropdown-toggle form-control" data-toggle="dropdown">
                                        <span data-bind="label">Select The Project That You Think That Is More Interesting</span>&nbsp;<span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a >JCF Inversiones</a></li>
                                        <li><a >Snake Javascript</a></li>
                                        <li><a>Flex Core</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="number" class="form-control input-sm" min="0" max="10" placeholder="Your Review About The Site">
                            </div>
                        </fieldset>
                        <fieldset>
                            <!--<legend>Color Schema:</legend>-->
                            <div class="row">
                                <div class="form-group">
                                    <label id = "ID_Text_ColorSchema"> Select A New Color Schema For The Site</label>
                                </div>
                                <div class=" col-sm-3 col-sm-offset-1">
                                    <div class="form-group">
                                        <label>Color 1:</label>
                                        <input type="color" name="favcolor" value="#003366">
                                        <p></p>
                                        <label>Color 2:</label>
                                        <input type="color" name="favcolor" value="#3399FF">

                                    </div>
                                </div>
                                <div class="col-sm-3 ">
                                    <div class="form-group">
                                        <label >Transparency</label>
                                        <input type=range min=0 max=5 value=3 id=fader>
                                    </div>
                                </div>
                                <div class="col-sm-4 ">
                                    <div class="form-group">
                                        <span class="btn btn-default btn-file">
                                            Upload Background <input type="file">
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <input type="date" class="form-control input-sm" placeholder="From this Date">
                                    </div>
                                </div>


                            </div>
                        </fieldset>
                        <input type="submit" value="Submit" class="btn btn-info btn-block">

                    </form>
                </div>
            </div>
        </div>
    </section>';
