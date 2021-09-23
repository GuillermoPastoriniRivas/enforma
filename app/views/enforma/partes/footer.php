<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; 2021 | Enforma Gim  <img src="<?= ASSETS . THEME ?>images/logo.png" alt="BCT" style="width:30px; float:right"></p>
            
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?= ASSETS . THEME ?>js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="<?= ASSETS . THEME ?>js/popper.js"></script>
    <script src="<?= ASSETS . THEME ?>js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="<?= ASSETS . THEME ?>js/scrollreveal.min.js"></script>
    <script src="<?= ASSETS . THEME ?>js/waypoints.min.js"></script>
    <script src="<?= ASSETS . THEME ?>js/jquery.counterup.min.js"></script>
    <script src="<?= ASSETS . THEME ?>js/imgfix.min.js"></script> 
    <script src="<?= ASSETS . THEME ?>js/mixitup.js"></script> 
    <script src="<?= ASSETS . THEME ?>js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="<?= ASSETS . THEME ?>js/custom.js"></script>
    <div id="myModal" class="modal">

        <!-- The Close Button -->
        <span class="close">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="modal-content" id="img01">

        <!-- Modal Caption (Image Text) -->
        <div id="caption"></div>
    </div>
    <div class="modal" id="myModal2">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title btnModalClose">Complete los Datos</h4>
            <button type="button" class="close btnModalClose" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body  contact-form">
            <input type="text" placeholder="Nombre">
            <input type="text" placeholder="Celular">
            <input type="text" placeholder="Direccion">
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger btnModalClose" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>
    <script>
      // Get the modal
      var modal = document.getElementById("myModal");
      var modal2 = document.getElementById("myModal2");
      // Get the image and insert it inside the modal - use its "alt" text as a caption
     
      var modalImg = document.getElementById("img01");
      var captionText = $('#caption');
      $('.myImg').click(function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
      })

      $('.reservarSuplemento').click(function(){
        modal2.style.display = "block";
        // modalImg.src = this.src;
        // captionText.innerHTML = this.alt;
      })

      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];

      // When the user clicks on <span> (x), close the modal
      span.onclick = function() {
        modal.style.display = "none";
      }  
      $('.btnModalClose').click(function(){
        $('#myModal2').fadeOut()
      });
    </script>
   
  </body>
</html>