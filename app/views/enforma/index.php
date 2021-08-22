<?php $this->view("partes/header",$data); ?>
    
    
    <?php $this->view("partes/navegacion",$data); ?>
  

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="<?= ASSETS . THEME ?>images/fondo.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>Desde 1993</h6>
                <h2>Cuidando tu <em>imágen</em></h2>
                <div class="main-button scroll-to-section">
                    <a href="#features">Inscribirse</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->
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
    <!-- ***** Features Item Start ***** -->
    <!-- <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Sobre <em>Nosotros</em></h2>
                        <img src="<?= ASSETS . THEME ?>images/line-dec.png" alt="">
                    </div>
                </div>
                <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading" style='margin-top: 0'>
                    
                        <p>Nuestras instalaciones le ofrece, para su mayor comodidad posible, un amplio horario, siendo este <b>Lunes a Viernes de 7hs a 22:30hs y Sábados de 9hs a 11:30hs, 16hs a 20hs.</b></p>
                        <p>Contamos con 400m2, dedicados al trabajo integral de todo su cuerpo, teniendo así una variedad de más de 100 aparatos de distintos grupos musculares para su disposición.
                            Poseemos instructores especializados en musculación para guiarlo en su objetivo, acompañados de distintas rutinas de trabajo en compensación de necesidad y tiempo.
                        </p>
                        <p>Contamos con <b>asesoramiento nutricional</b> para lograr de manera apropiada sus objetivos planeados.</p>
                    </div>
                </div>
            </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="<?= ASSETS . THEME ?>images/rojamancuerna.png" alt="First One">
                            </div>
                            <div class="right-content">
                                <a href="#" class="text-button">Saber mas</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="<?= ASSETS . THEME ?>images/rojamancuerna.png" alt="second one">
                            </div>
                            <div class="right-content">
                              
                                <a href="#" class="text-button">Saber mas</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="<?= ASSETS . THEME ?>images/rojamancuerna.png" alt="third gym training">
                            </div>
                            <div class="right-content">
                                <a href="#" class="text-button">Saber mas</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="<?= ASSETS . THEME ?>images/rojamancuerna.png" alt="fourth muscle">
                            </div>
                            <div class="right-content">
                                <a href="#" class="text-button">Saber mas</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="<?= ASSETS . THEME ?>images/rojamancuerna.png" alt="training fifth">
                            </div>
                            <div class="right-content">
                                <a href="#" class="text-button">Saber mas</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="<?= ASSETS . THEME ?>images/rojamancuerna.png" alt="gym training">
                            </div>
                            <div class="right-content">
                                <a href="#" class="text-button">Saber mas</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section> -->
    <!-- ***** Features Item End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section" id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>No <em>Lo</em> Pienses <em>Mas</em>, Inscribite <em>Ahora!</em>!</h2>
                        <p></p>
                        <div class="main-button scroll-to-section">
                            <a href="#our-classes">Inscribirse</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Our Classes Start ***** -->
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
                  <li><a href='#tabs-1'><img src="<?= ASSETS . THEME ?>" alt="">Prevención de enfermedades</a></li>
                  <li><a href='#tabs-2'><img src="<?= ASSETS . THEME ?>" alt="">El cuidado de la apariencia física</a></a></li>
                  <li><a href='#tabs-3'><img src="<?= ASSETS . THEME ?>" alt="">Combate el estrés</a></a></li>
                
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content'>
                  <article id='tabs-1'>
                    <img src="<?= ASSETS . THEME ?>images/training-image-01.jpg" alt="First Class">
                    <h4>Prevención de enfermedades</h4>
                        <p>Mejoras de la presión areterial, se disminuye las posibilidades de varices, enfermedades como diabetes, sobrepeso y de tipo cardiovasculares</p>
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
   
    
    

    
  <!-- ***** Call to Action End ***** 
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Nuestros <em>Entrenadores</em></h2>
                        <img src="<?= ASSETS . THEME ?>images/line-dec.png" alt="">
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="<?= ASSETS . THEME ?>images/first-trainer.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>Strength Trainer</span>
                            <h4>Bret D. Bowers</h4>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="<?= ASSETS . THEME ?>images/second-trainer.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>Muscle Trainer</span>
                            <h4>Hector T. Daigl</h4>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="<?= ASSETS . THEME ?>images/third-trainer.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>Power Trainer</span>
                            <h4>Paul D. Newman</h4>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     ***** Testimonials Ends ***** -->
    
    <!-- ***** Contact Us Area Starts ***** 
    <section class="section" id="contact-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div id="map">
                      <iframe src="https://maps.google.com/maps?q=enforma+gym+paysandu&t=&z=16&ie=UTF8&iwloc=&output=embed" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-12 col-sm-12">
                              <fieldset>
                                <input name="subject" type="text" id="subject" placeholder="Subject">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button">Send Message</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
     ***** Contact Us Area Ends ***** -->
    
<?php $this->view("partes/footer",$data); ?>
