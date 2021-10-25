<?php $this->view("partes/header",$data); ?>

    <?php $this->view("partes/navegacion",$data); ?>
  
<section class="section contact_alone" id="contact-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="contact-form">
                        <form action="<?=ROOT?>signup/registro" id="contact" method="post" style="max-width: 50%;margin: 0 auto;">
                          <div class="row">
                          <div class="col-md-12 mb-3">
                            <h2>Registrarse</h2>
                          </div>
                            <div class="col-md-6 col-sm-12">
                                <input name="nombre" type="text" id="nombre" placeholder="Nombre*" required>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Email*" required>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <input name="celular" type="number" id="celular" placeholder="Celular" required minlengh="9">
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <input name="password" type="password" id="password" placeholder="Contraseña">
                            </div>
                            <div class="col-lg-12">
                              <button type="submit" id="form-submit" class="main-button">Registrarse</button>
                            </div>
                            <div class="col-lg-12 mt-3">
                              ¿Ya tienes una cuenta? <a href="<?=ROOT?>login">Inicia Sesión</a>
                              <br>
                              Create una cuenta para tener acceso a las rutinas!
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php $this->view("partes/footer",$data); ?>