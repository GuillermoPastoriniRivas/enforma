<?php $this->view("partes/header",$data); ?>

<?php $this->view("partes/navegacion",$data); ?>
  

  <section class="section" id="trainers">
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
                <?php foreach($data['tienda'] as $item): ?>
                    <div class="col-lg-4">
                        <div class="trainer-item">
                            <div class="image-thumb text-center">
                                <img src="<?= ASSETS . THEME ?>images/<?= $item->imagen ?>" style="height:300px;width:auto">
                            </div>
                            <div class="down-content">
                                <span>$ <?= $item->precio ?></span>
                                <h4><?= $item->titulo ?></h4>
                                <p><?= $item->descripcion ?></p>
                              <h4>talle  <p><?= $item->talle ?></p> </h4>
                                <p><?= $item->sexo ?></p>
                                <button class="btn btn-primary reservarSuplemento" >Reservar</button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

    <?php $this->view("partes/footer",$data); ?>