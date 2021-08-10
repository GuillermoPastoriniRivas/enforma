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

    <!-- ***** Features Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Elegir <em>Rutina</em></h2>
                        <img src="<?= ASSETS . THEME ?>images/line-dec.png" alt="waves">
                        
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="<?= ASSETS . THEME ?>images/features-first-icon.png" alt="First One">
                            </div>
                            <div class="right-content">
                                <a href="#" class="text-button">Saber mas</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="<?= ASSETS . THEME ?>images/features-first-icon.png" alt="second one">
                            </div>
                            <div class="right-content">
                              
                                <a href="#" class="text-button">Saber mas</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="<?= ASSETS . THEME ?>images/features-first-icon.png" alt="third gym training">
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
                                <img src="<?= ASSETS . THEME ?>images/features-first-icon.png" alt="fourth muscle">
                            </div>
                            <div class="right-content">
                                <a href="#" class="text-button">Saber mas</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="<?= ASSETS . THEME ?>images/features-first-icon.png" alt="training fifth">
                            </div>
                            <div class="right-content">
                                <a href="#" class="text-button">Saber mas</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="<?= ASSETS . THEME ?>images/features-first-icon.png" alt="gym training">
                            </div>
                            <div class="right-content">
                                <a href="#" class="text-button">Saber mas</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
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
                        <h2>Nuestras <em>Clases</em></h2>
                        <img src="<?= ASSETS . THEME ?>images/line-dec.png" alt="">
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                  <li><a href='#tabs-1'><img src="<?= ASSETS . THEME ?>" alt="">clase1</a></li>
                  <li><a href='#tabs-2'><img src="<?= ASSETS . THEME ?>" alt="">clase2</a></a></li>
                  <li><a href='#tabs-3'><img src="<?= ASSETS . THEME ?>" alt="">clase3</a></a></li>
                  <li><a href='#tabs-4'><img src="<?= ASSETS . THEME ?>" alt="">clase4</a></a></li>
                  <div class="main-rounded-button"><a href="#"> Mirar Todos Los Horarios</a></div>
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content'>
                  <article id='tabs-1'>
                    <img src="<?= ASSETS . THEME ?>images/training-image-01.jpg" alt="First Class">
                    <h4>primer entrenamiento</h4>
                    <div class="main-button">
                        <a href="#">Mirar Horarios</a>
                    </div>
                  </article>
                  <article id='tabs-2'>
                    <img src="<?= ASSETS . THEME ?>images/training-image-02.jpg" alt="Second Training">
                    <h4>segundo entrenamiento</h4>
                    <div class="main-button">
                        <a href="#">Mirar Horarios</a>
                    </div>
                  </article>
                  <article id='tabs-3'>
                    <img src="<?= ASSETS . THEME ?>images/training-image-03.jpg" alt="Third Class">
                    <h4>tercer entrenamiento</h4>
                    <div class="main-button">
                        <a href="#">Mirar Horarios</a>
                    </div>
                  </article>
                  <article id='tabs-4'>
                    <img src="<?= ASSETS . THEME ?>images/training-image-04.jpg" alt="Fourth Training">
                    <h4>cuarto entrenamiento</h4>
                    <div class="main-button">
                        <a href="#">Mirar Horarios</a>
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
