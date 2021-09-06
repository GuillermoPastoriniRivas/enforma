<?php $this->view("partes/header",$data); ?>

<?php $this->view("partes/navegacion",$data); ?>

  <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Rutinas <em>Deportivas</em></h2>
                        <img src="<?= ASSETS . THEME ?>olasraras.png" alt="">
                        <p>Escoge tu rutina</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach($data['rutinas'] as $item): ?>
                    <div class="col-lg-4">
                        <div class="trainer-item">
                            <div class="image-thumb">
                                <img class="myImg"  src="<?= ASSETS . THEME ?>images/<?= $item->imagen ?>" alt="<?= $item->titulo ?>">
                            </div>
                            <div class="down-content">
                                <!-- <span>Dificultad <?= $item->dificultad ?></span> -->
                                <h4><?= $item->titulo ?></h4>
                                <p><?= $item->descripcion ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    

    <?php $this->view("partes/footer",$data); ?>