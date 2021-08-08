  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky <?php if ($data['title']!=='Inicio'):?>background-header<?php endif;?>">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="<?=ROOT?>" class="logo">Enforma<em> Gim</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="<?=ROOT?>" 
                                class="<?php if ($data['title']=='Inicio'):?>active<?php endif;?>">Inicio</a>
                            </li>
                            <li class="scroll-to-section"><a href="<?=ROOT?>rutinas" 
                                class="<?php if ($data['title']=='Rutinas'):?>active<?php endif;?>">Rutinas</a></li>
                            <li class="scroll-to-section"><a href="<?=ROOT?>suplementos">Suplementos</a></li>
                            <li class="scroll-to-section"><a href="#schedule">Agenda</a></li>
                            <li class="scroll-to-section"><a href="<?=ROOT?>contacto"
                                class="<?php if ($data['title']=='Contacto'):?>active<?php endif;?>">Contacto</a></li> 
                            <li class="main-button"><a href="#">Sign Up</a></li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->