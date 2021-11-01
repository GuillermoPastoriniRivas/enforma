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
                            <?php if (isset($_SESSION['id_user'])):?>
                                <li class="scroll-to-section"><a href="<?=ROOT?>rutinas" 
                                    class="<?php if ($data['title']=='Rutinas'):?>active<?php endif;?>">Rutinas</a></li>
                            <?php endif;?>
                            <li class="scroll-to-section"><a href="<?=ROOT?>suplementos"
                            class="<?php if ($data['title']=='Suplementos'):?>active<?php endif;?>">Suplementos</a></li>
                                <li class="scroll-to-section"><a href="<?=ROOT?>tienda"
                                class="<?php if ($data['title']=='Tienda'):?>active<?php endif;?>">Tienda</a></li>  

                                    <?php if (isset($_SESSION['id_user']) AND $_SESSION['isAdmin'] == 1):?>
                                        <li><a href="<?=ROOT?>admin">Admin</a></li>
                                    <?php else:?>
                                        <li class="scroll-to-section"><a href="<?=ROOT?>contacto"
                                class="<?php if ($data['title']=='Contacto'):?>active<?php endif;?>">Contacto</a></li> 
                                    <?php endif;?>

                                   

                                   
                           
                          
                                   
                                    <?php if (isset($_SESSION['id_user'])):?>
                                        <li><a href="<?=ROOT?>logout">Cerrar Sesión</a></li>
                                    <?php else:?>
                                        <li class="main-button"><a href="<?=ROOT?>signup">Ingresar</a></li>
                                    <?php endif;?>

                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>