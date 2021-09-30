  <header class="header-area header-sticky <?php if ($data['title']!=='Inicio'):?>background-header<?php endif;?>">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <a href="<?=ROOT?>" class="logo">Enforma<em> Gim</em></a>
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="<?=ROOT?>" 
                                class="<?php if ($data['title']=='Inicio'):?>active<?php endif;?>">Inicio</a>
                            </li>
                            <li class="scroll-to-section"><a href="<?=ROOT?>rutinas" 
                                class="<?php if ($data['title']=='Rutinas'):?>active<?php endif;?>">Rutinas</a></li>

                            <li class="scroll-to-section"><a href="<?=ROOT?>suplementos"
                            class="<?php if ($data['title']=='Suplementos'):?>active<?php endif;?>">Suplementos</a></li>

                            <li class="scroll-to-section"><a href="<?=ROOT?>tienda"
                                class="<?php if ($data['title']=='Tienda'):?>active<?php endif;?>">Tienda</a></li> 
                           
                          
                                    <li class="scroll-to-section"><a href="<?=ROOT?>tienda"
                                class="<?php if ($data['title']=='tienda'):?>active<?php endif;?>">Tienda</a></li> 
                            <li class="scroll-to-section"><a href="<?=ROOT?>contacto"
                                class="<?php if ($data['title']=='Contacto'):?>active<?php endif;?>">Contacto</a></li> 
                        
<<<<<<< HEAD
                                    <li class="main-button"><a href="#">Inscribirse</a></li>
=======
                            <li class="main-button"><a href="#">Inscribirse</a></li>
>>>>>>> af114359f036bc2d5858a57932d4a1a981e6061f
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>