<?php $this->view("partes/header",$data); ?>

    <?php $this->view("partes/navegacion",$data); ?>
  
<section class="section contact_alone" id="contact-us">
        <div class="container-fluid">
            <div class="row">
              
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="contact-form">
                        <form action="<?=ROOT?>login/login" id="contact" method="post" style="max-width: 50%;margin: 0 auto;">
                          <div class="row">
                          <div class="col-md-12 mb-3">
                            <h2>Iniciar Sesión</h2>
                          </div>
                            <div class="col-sm-12">
                                <input name="email" type="email" id="email" placeholder="Email" required>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <input name="password" type="password" id="password" placeholder="Contraseña" required>
                            </div>
                            <div class="col-lg-12">
                              <button type="submit" id="form-submit" class="main-button">Iniciar Sesión</button>
                            </div>
                            <div class="col-lg-12 mt-3">
                              ¿No tienes una cuenta? <a href="<?=ROOT?>signup">Registrarse</a>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php $this->view("partes/footer",$data); ?>