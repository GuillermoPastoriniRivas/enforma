<?php $this->view("header",$data); ?>

<?php $this->view("navegacion",$data); ?>
  <!-- ***** Testimonials Starts ***** -->
  <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Suplementos <em>Deportivos</em></h2>
                        <img src="<?= ASSETS . THEME ?>images/line-dec.png" alt="">
                        <p>Los suplementos deportivos son productos que se usan para mejorar el rendimiento deportivo que podrían incluir vitaminas, minerales, aminoácidos, hierbas, un extracto o combinación de estos.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach($data['suplementos'] as $item): ?>
                    <div class="col-lg-4">
                        <div class="trainer-item">
                            <div class="image-thumb">
                                <img src="<?= ASSETS . THEME ?>images/<?= $item->imagen ?>" alt="">
                            </div>
                            <div class="down-content">
                                <span><?= $item->precio ?></span>
                                <h4><?= $item->titulo ?></h4>
                                <p><?= $item->descripcion ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Ends ***** -->

    <?php $this->view("footer",$data); ?>