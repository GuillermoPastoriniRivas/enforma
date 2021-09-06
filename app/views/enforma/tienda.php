<?php $this->view("partes/header",$data); ?>

<?php $this->view("partes/navegacion",$data); ?>
  

  <section class="section" id="tienda">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Tienda <em>Vestimenta</em></h2>
                        <img src="<?= ASSETS . THEME ?>olasraras.png" alt="">
                        <p>En esta ventana encontrarás acceso a diferentes productos de vestimenta de nuestra marca</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach($data['vestimenta'] as $item): ?>
                    <div class="col-lg-4">
                        <div class="trainer-item">
                            <div class="image-thumb">
                                <img src="<?= ASSETS . THEME ?>images/<?= $item->imagen ?>" alt="">
                            </div>
                            <div class="down-content">
                                <span><?= $item->precio ?></span>
                                <h4><?= $item->titulo ?></h4>
                                <p><?= $item->descripcion ?></p>
                                <p><?= $item->sexo ?></p>
                                <p><?= $item->talle ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    

    <?php $this->view("partes/footer",$data); ?>