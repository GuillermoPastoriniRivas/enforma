
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="">
  <link rel="icon" type="image/png" href="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Panel de Administración
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link href="<?= ASSETS . THEME ?>admin/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <link href="<?= ASSETS . THEME ?>admin/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="<?= ASSETS . THEME ?>admin/img/sidebar-1.jpg">
    
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Enforma Gim
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="./dashboard.html">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          
          <li class="nav-item ">
            <a class="nav-link" href="<?=ROOT?>">
              <i class="material-icons">web</i>
              <p>Volver al Sitio</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
         
          <div class="row">
           
            <div class="col-12">
              <div class="card">
                <div class="card-header card-header-warning" style="position:relative">
                  <h4 class="card-title">Suplementos Deportivos</h4>
                  <p class="card-category">Última actualización 08/Ago/21</p>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregarSuplemento"  
                    style="position:absolute;top:10px;right:10px;">
                    Agregar Nuevo
                  </button>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-danger">
                      <th>ID</th>
                      <th>Titulo</th>
                      <th>Descripción</th>
                      <th>Imagen</th>
                      <th>Precio</th>
                      <th>Acciones</th>
                    </thead>
                    <tbody>
                    <?php foreach($data['suplementos'] as $key => $item): ?>
                      <tr>
                        <td><?=$key+1?></td>
                        <td><?= $item->titulo  ?></td>
                        <td><?= $item->descripcion  ?></td>
                        <td><img src="<?= ASSETS . THEME ?>images/<?= $item->imagen ?>" alt="" width="50"></td>
                        <td><?= $item->precio  ?></td>
                        <td class="td-actions text-left">
                              <button type="button" rel="tooltip"  data-toggle="modal" data-target="#actualizarSuplemento"   title="Editar" class="btn btn-primary btn-link btn-sm"
                              onclick="actualizarSuplemento('<?= $item->id_suplementos ?>', '<?= $item->titulo ?>', '<?= $item->descripcion ?>', '<?= $item->precio ?>');">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Borrar" class="btn btn-danger btn-link btn-sm" onclick="eliminarSuplemento('<?= $item->id_suplementos ?>');">
                                <i class="material-icons">close</i>
                              </button>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            
            <div>
          </div>
          <div class="row">
           
           <div class="col-12">
             <div class="card">
               <div class="card-header card-header-danger" style="position:relative">
                 <h4 class="card-title">Rutinas</h4>
                 <p class="card-category">Última actualización 08/Ago/21</p>
                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregarRutina"  
                   style="position:absolute;top:10px;right:10px;">
                   Agregar Nuevo
                 </button>
               </div>
               <div class="card-body table-responsive">
                 <table class="table table-hover">
                   <thead class="text-danger">
                     <th>ID</th>
                     <th>Titulo</th>
                     <th>Descripción</th>
                     <th>Imagen</th>
                     <th>Acciones</th>
                   </thead>
                   <tbody>
                   <?php foreach($data['rutinas'] as $key => $item): ?>
                     <tr>
                       <td><?=$key+1?></td>
                       <td><?= $item->titulo  ?></td>
                       <td><?= $item->descripcion  ?></td>
                       <td><img src="<?= ASSETS . THEME ?>images/<?= $item->imagen ?>" alt="" width="50"></td>
                       <td class="td-actions text-left">
                             <button type="button" rel="tooltip" title="Editar"  data-toggle="modal" data-target="#actualizarRutina"   class="btn btn-primary btn-link btn-sm"  onclick="actualizarRutina('<?= $item->id_rutina ?>', '<?= $item->titulo ?>', '<?= $item->descripcion ?>');">
                               <i class="material-icons">edit</i>
                             </button>
                             <button type="button" rel="tooltip" title="Borrar" class="btn btn-danger btn-link btn-sm" onclick="eliminarRutina('<?= $item->id_rutina ?>');">
                               <i class="material-icons">close</i>
                             </button>
                       </td>
                     </tr>
                     <?php endforeach; ?>
                   </tbody>
                 </table>
               </div>
             </div>
           
           <div>
         </div>
        </div>
        
      </div>
      
    </div>
    <!-- Modal -->
    <div class="modal fade" id="agregarSuplemento" tabindex="-1" role="dialog" aria-labelledby="agregarSuplementoLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content" style="border: none;">
          <div class="modal-header"  style="color: #fff; background-color: #9124a3; border-color: #701c7e; border: none;">
            <h5 class="modal-title " id="exampleModalLabel" style="font-weight: 500;">Agregar Suplemento</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?=ROOT?>admin/agregarSuplemento" method="POST">
            <div class="modal-body">
              
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Título</label>
                      <input type="text" class="form-control" name="titulo" minlength="5" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Precio</label>
                      <input type="number" class="form-control" min="1" name="precio" required>
                    </div>
                  </div>
                  
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="form-group">
                        <label class="bmd-label-floating">Descripción del producto</label>
                        <textarea class="form-control" rows="4" minlength="5" name="descripcion" required></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="imagenSuplemento">Imagen</label>
                      <input type="file" class="form-control-file" name="imagen" id="imagenSuplemento" required>
                    </div>
                  </div>
                </div>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Agregar Producto</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="modal fade" id="agregarRutina" tabindex="-1" role="dialog" aria-labelledby="agregarRutinaLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content" style="border: none;">
          <div class="modal-header"  style="color: #fff; background-color: #9124a3; border-color: #701c7e; border: none;">
            <h5 class="modal-title " id="exampleModalLabel" style="font-weight: 500;">Agregar Rutina</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?=ROOT?>admin/agregarRutina" method="POST">
            <div class="modal-body">
              
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">Título</label>
                      <input type="text" class="form-control" name="titulo" minlength="5" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="form-group">
                        <label class="bmd-label-floating">Descripción del producto</label>
                        <textarea class="form-control" rows="4" minlength="5" name="descripcion" required></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="imagenSuplemento">Imagen</label>
                      <input type="file" class="form-control-file" name="imagen" id="imagenSuplemento" required>
                    </div>
                  </div>
                </div>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Agregar Rutina</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="modal fade" id="actualizarRutina" tabindex="-1" role="dialog" aria-labelledby="agregarRutinaLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content" style="border: none;">
          <div class="modal-header"  style="color: #fff; background-color: #9124a3; border-color: #701c7e; border: none;">
            <h5 class="modal-title " id="exampleModalLabel" style="font-weight: 500;">Agregar Rutina</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?=ROOT?>admin/actualizarRutina" method="POST">
            <div class="modal-body">
              
                <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">ID</label>
                      <input type="text" class="form-control" name="id_rutina" required id="idRutina">
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="form-group">
                      <label class="bmd-label-floating">Título</label>
                      <input type="text" class="form-control" name="titulo" minlength="5" required id="tituloRutina">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="form-group">
                        <label class="bmd-label-floating">Descripción del producto</label>
                        <textarea class="form-control" rows="4" minlength="5" name="descripcion" required id="descripcionRutina"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="imagenSuplemento">Imagen</label>
                      <input type="file" class="form-control-file" name="imagen" id="imagenSuplemento" required>
                    </div>
                  </div>
                </div> -->
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Agregar Rutina</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="modal fade" id="actualizarSuplemento" tabindex="-1" role="dialog" aria-labelledby="agregarRutinaLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content" style="border: none;">
          <div class="modal-header"  style="color: #fff; background-color: #9124a3; border-color: #701c7e; border: none;">
            <h5 class="modal-title " id="exampleModalLabel" style="font-weight: 500;">Editar Suplemento</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?=ROOT?>admin/actualizarSuplemento" method="POST">
            <div class="modal-body">
              
                <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                      <label class="bmd-label-floating">ID</label>
                      <input type="text" class="form-control" name="id_suplementos" required id="idSuplementos">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Título</label>
                      <input type="text" class="form-control" name="titulo" minlength="5" required id="tituloSuplementos">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">Precio</label>
                      <input type="text" class="form-control" name="precio" minlength="5" required id="precioSuplementos">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="form-group">
                        <label class="bmd-label-floating">Descripción</label>
                        <textarea class="form-control" rows="4" minlength="5" name="descripcion" required id="descripcionSuplementos"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="imagenSuplemento">Imagen</label>
                      <input type="file" class="form-control-file" name="imagen" id="imagenSuplemento" required>
                    </div>
                  </div>
                </div> -->
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Editar Suplemento</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  <!--   Core JS Files   -->
  <script src="<?= ASSETS . THEME ?>admin/js/core/jquery.min.js"></script>
  <script src="<?= ASSETS . THEME ?>admin/js/core/popper.min.js"></script>
  <script src="<?= ASSETS . THEME ?>admin/js/core/bootstrap-material-design.min.js"></script>
  <script src="<?= ASSETS . THEME ?>admin/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="<?= ASSETS . THEME ?>admin/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="<?= ASSETS . THEME ?>admin/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="<?= ASSETS . THEME ?>admin/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="<?= ASSETS . THEME ?>admin/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="<?= ASSETS . THEME ?>admin/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="<?= ASSETS . THEME ?>admin/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="<?= ASSETS . THEME ?>admin/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="<?= ASSETS . THEME ?>admin/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="<?= ASSETS . THEME ?>admin/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="<?= ASSETS . THEME ?>admin/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="<?= ASSETS . THEME ?>admin/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?= ASSETS . THEME ?>admin/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="<?= ASSETS . THEME ?>admin/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="<?= ASSETS . THEME ?>admin/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?= ASSETS . THEME ?>admin/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?= ASSETS . THEME ?>admin/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?= ASSETS . THEME ?>admin/demo/demo.js"></script>
  <script>

    function eliminarSuplemento(id) {
      console.log(id)
      $.ajax({
        url: "admin/eliminarSuplemento",
        data: {id:id},
        method:'POST',
        success: function(res) {
          location.reload();
        },
        error: function(error) {
          console.log(error)
        }
      });
    }
    function actualizarRutina(id, titulo, descripcion) {
      $('#idRutina').val(id)
      $('#tituloRutina').val(titulo)
      $('#descripcionRutina').val(descripcion)
    }
    function actualizarSuplemento(id, titulo, descripcion, precio) {
      $('#idSuplementos').val(id)
      $('#tituloSuplementos').val(titulo)
      $('#precioSuplementos').val(precio)
      $('#descripcionSuplementos').val(descripcion)
    }
    function eliminarRutina(id) {
      $.ajax({
        url: "admin/eliminarRutina",
        data: {id:id},
        method:'POST',
        success: function(res) {
          location.reload();
        },
        error: function(error) {
          console.log(error)
        }
      });
    }
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>