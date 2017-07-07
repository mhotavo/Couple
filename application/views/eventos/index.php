 
<?php $this->load->view('overall/header'); ?>
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/plugins/datatables/css/dataTables.bootstrap.css">

<body>
  <?php $this->load->view('overall/nav'); ?>
  <div id="container">
    <h2 align="center"></h2>
    <div class="">
      <div class="col-md-2"></div>
      <div class="col-md-8">

        <table class="table table-striped table-hover dataTable" id="">
          <thead>
            <tr>
              <th><i class="fa fa-bed" aria-hidden="true"></i></th>
              <th>Lugar</th>
              <th>Fecha</th>
              <th>Acción</th>
            </tr>
          </thead>
          <tbody> 
            <?php 
            foreach ($eventos as $key => $row) 
            {

              ?>
              <tr>           
                <td>
                  <a style="text-decoration: none;" href="<?= base_url(); ?>eventos/ver/<?php echo  $row->ID_EVENTO; ?>"> 
                    <?php switch ( $row->TIPO) {
                      case 'Andres':
                      echo '<img src="'.base_url().'public/images/andres.png" alt="Sex" width="40">';
                      break;
                      case 'Sex':
                      echo '<img src="'.base_url().'public/images/sex.png" alt="Sex" width="60">';
                      break;
                      case '69':
                      echo '<img src="'.base_url().'public/images/69.png" alt="Total 69" width="70">';
                      break;
                      case 'El':
                      echo '<img src="'.base_url().'public/images/oralElla.png" alt="Oral a el" width="40">';
                      break;
                      case 'Ella':
                      echo '<img src="'.base_url().'public/images/oralEl.png" alt="Oral a ella" width="70">';
                      break;
                      case 'Inyeccion':
                      echo '<img src="'.base_url().'public/images/inyeccion.png" alt="Cyclofem" width="50">';
                      break;
                    }   ?> </a>
                  </td>
                  <td><?php  echo  $row->LUGAR; ?></td>
                  <td><?php  echo $row->FECHA ?></td>
                  <td>
                    <a  class="btn btn-warning" href="<?= base_url(); ?>eventos/editar/<?php echo  $row->ID_EVENTO; ?>">Editar&nbsp;</a> 
                    <a  class="btn btn-danger" onclick="DeleteItem('¿Está seguro de eliminar este evento?','<?= base_url(); ?>eventos/eliminar/<?php echo  $row->ID_EVENTO; ?>')" >Borrar</a> 
                  </td>
                </tr>
                <?php 
              }  
              ?>

            </tbody>
          </table>

        </div>
        <div class="col-md-2"></div>
      </div>  
    </div>
    <?php $this->load->view('overall/footer'); ?>
    <script type="text/javascript" src="<?= base_url(); ?>public/plugins/datatables/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>public/plugins/datatables/js/dataTables.bootstrap.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('.dataTable').DataTable({
          "iDisplayLength": 25,
          "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
          "autoWidth": true,           
          "sPaginationType": "full_numbers",
          "order": [[ 1, 'asc' ]]
        });
      } );
    </script>
  </body>
  </html>   