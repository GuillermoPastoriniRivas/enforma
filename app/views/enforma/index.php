<?php $this->view("partes/header",$data); ?>
    
    
    <?php $this->view("partes/navegacion",$data); ?>
  
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="<?= ASSETS . THEME ?>images/fondo.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>Desde 1993</h6>
                <h2>Cuidando tu <em>imagen</em></h2>
                <div class="main-button scroll-to-section">
                <?php if (isset($_SESSION['id_user'])):?>
                                        <li><a href="<?=ROOT?>logout">Cerrar Sesión</a></li>
                                    <?php else:?>
                                        <li class="main-button"><a href="<?=ROOT?>signup">Ingresar</a></li>
                                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Sobre <em>Nosotros</em></h2>
                         <img src="<?= ASSETS . THEME ?>images/line-dec.png" alt="">
                        
                    </div>
                </div>
                <div class="col-lg-8" style="margin:0 auto";>
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="<?= ASSETS . THEME ?>images/rojamancuerna.png" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>Horarios</h4>
                                <p>Nuestras instalaciones le ofrece, para su mayor comodidad posible, un amplio horario, siendo este <b>Lunes a Viernes de 7hs a 22:30hs y Sábados de 9hs a 11:30hs, 16hs a 20hs.</b></p>
                               
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                               <img src="<?= ASSETS . THEME ?>images/rojamancuerna.png" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>Instalaciones</h4>
                                <p>Contamos con 400m2, dedicados al trabajo integral su cuerpo, y más de 100 aparatos de distintos grupos musculares para su disposición. 
                        </p>
                               
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                              <img src="<?= ASSETS . THEME ?>images/rojamancuerna.png" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>Profesores</h4>
                                <p>Contamos con <b>asesoramiento nutricional</b> para lograr sus objetivos planeados.Poseemos instructores especializados en musculación para guiarlo, acompañados de distintas rutinas en compensación de necesidad y tiempo.</p>
                              
                            </div>
                        </li>
                    </ul>
                </div>
               
            </div>
        </div>
    </section>
 
    <section class="section" id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>No <em>Lo</em> Pienses <em>Mas</em>, Inscribite <em>Ahora!</em>!</h2>
                        <p></p>
                        <div class="main-button scroll-to-section">
                            <?php if (isset($_SESSION['id_user'])):?>
                                            <li><a href="<?=ROOT?>logout">Cerrar Sesión</a></li>
                                        <?php else:?>
                                            <li class="main-button"><a href="<?=ROOT?>signup">Ingresar</a></li>
                                        <?php endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section" id="our-classes">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>¿Por qué estar <em>En Forma</em>?</h2>
                        <img src="<?= ASSETS . THEME ?>images/line-dec.png" alt="">
                        <p></p>
                    </div>
                </div>
               
            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                  <li><a class="d-flex align-items-center" href='#tabs-1'>
                      <img src="<?= ASSETS . THEME ?>images/mancuerna_sin_fondo_rojisa.png" alt=""> 
                      <sm>Prevención de enfermedades</sm>
                    </a></li>
                  <li><a class="d-flex align-items-center" href='#tabs-2'><img src="<?= ASSETS . THEME ?>images/mancuerna_sin_fondo_rojisa.png" alt=""> <sm>El cuidado de la apariencia física</sm></a></a></li>
                  <li><a class="d-flex align-items-center" href='#tabs-3'><img src="<?= ASSETS . THEME ?>images/mancuerna_sin_fondo_rojisa.png" alt=""> <sm>Combate el estrés</sm></a></a></li>
                
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content'>
                  <article id='tabs-1'>
                    <img src="<?= ASSETS . THEME ?>images/training-image-01.jpg" alt="First Class">
                    <h4>Prevención de enfermedades</h4>
                        <p>Mejoras de la presión arterial, se disminuye las posibilidades de varices, enfermedades como diabetes, sobrepeso y de tipo cardiovasculares</p>
                    <div >
                      
                    </div>
                  </article>
                  <article id='tabs-2'>
                    <img src="<?= ASSETS . THEME ?>images/training-image-02.jpg" alt="Second Training">
                    <h4>El cuidado de la apariencia física</h4>
                    <p>Relacionada directamente con la elevación de nuestro nivel de autoestima</p>
                    <div >
                        
                    </div>
                  </article>
                  <article id='tabs-3'>
                    <img src="<?= ASSETS . THEME ?>images/training-image-03.jpg" alt="Third Class">
                    <h4>Combate el estrés</h4>
                    <p>Del que parece imposible escapar en un mundo que nos somete a constantes y diversas presiones.</p>
                    <div>

                    </div>     
                  </article>
                </section>
              </div>
            </div>
        </div>
    </section>
   
 
    
<?php $this->view("partes/footer",$data); ?>
