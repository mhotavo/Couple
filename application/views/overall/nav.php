<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" style="font-size: 17px" href="<?= base_url(); ?>"><b>Couples</b>  <b></b></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
       <li><a href="<?= base_url(); ?>eventos/agregar"> Agregar  <i class="fa fa-bed" aria-hidden="true"></i></a></li> 
     </ul>
     <ul class="nav navbar-nav">
       <li><a href="<?= base_url(); ?>eventos"> Listar <i class="fa fa-list" aria-hidden="true"></i></i></a></li> 
     </ul>
     <ul class="nav navbar-nav">
       <li><a href="<?= base_url(); ?>"> informe <i class="fa fa-bar-chart" aria-hidden="true"></i></i></i></a></li> 
     </ul>
     <ul class="nav navbar-nav navbar-right">

      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <b><?php echo ucwords($this->session->userdata('name')); ?> </b>  <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="<?= base_url(); ?>perfil">Mi Perfil</a></li>
        </ul>
      </li>

      <li><a href="<?= base_url(); ?>login/logout">  Salir  <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
    </ul>
  </div>
</div>
</nav>