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
            <?php print_r($data['suplementos']);exit; ?>
                <?php for($i=0; $i<12;$i++): ?>
                    <div class="col-lg-4">
                        <div class="trainer-item">
                            <div class="image-thumb">
                                <img src="<?= ASSETS . THEME ?>images/third-trainer.jpg" alt="">
                            </div>
                            <div class="down-content">
                                <span>Strength Trainer</span>
                                <h4>Bret D. Bowers</h4>
                                <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Ends ***** -->

    <?php $this->view("footer",$data); ?>