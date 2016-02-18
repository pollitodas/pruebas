<?php

	if (isset($_GET['msg'])) {
		echo $_GET['msg'];
	}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>amb acuaworld</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="../css/bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../css/AdminLTE.css">

  <link rel="stylesheet" href="../css/skin-blue.css">

</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>CUA</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>WORLD</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="listado.php"><i class="fa fa-link"></i> <span>listado de productos</span></a></li>
        <li class="active"><a href="agregar.php"><i class="fa fa-link"></i> <span>agregar producto</span></a></li>
        <li><a href="modificar.php"><i class="fa fa-link"></i> <span>modificar producto</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Agregar producto
        <small>-</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

	    <div align=center>
			<form enctype="multipart/form-data" method='POST' action='../procesadorDatos.php?proceso=agregar'>
				<br />
				<br />
				<strong>Nombre del Prodcuto</strong>
				<br />
				<br />
				<input type='text' maxlength='22' id='nombre' name='nombre' size='50'>
				<br />
				<br />
				<strong>Precio del Prodcuto</strong>
				<br />
				<br />
				<input type='text' maxlength='22' id='precio' name='precio' size='50'>
				<br />
				<br />
				<strong>Descripcion del Prodcuto</strong>
				<br />
				<br />
				<input type='text' maxlength='22' id='desc' name='desc' size='50'>
				<br />
				<br />
				<strong>Imagen del Prodcuto</strong>
				<br />
				la imagen no puede superar los 2mb
				<br />
				<input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
		    	<!-- El nombre del elemento de entrada determina el nombre en el array $_FILES -->
		    	<input name="imagen" type="file" />
				<br />
		    	<br />
		    	<input type="submit" value="Enviar fichero" />
				<br />
			</form>
		</div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      by pollitodas
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2015 <a href="#">Acuaworld</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
<script src="../js/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="../js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../js/app.js"></script>

</body>
</html>
