<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    
    <link rel="stylesheet" href="<?php echo base_url().'/assets/admin/page/'?>vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url().'/assets/admin/page/'?>vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url().'/assets/admin/page/'?>vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url().'/assets/admin/page/'?>vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url().'/assets/admin/page/'?>vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?php echo base_url().'/assets/admin/page/'?>vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url().'/assets/admin/page/'?>vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="<?php echo base_url().'/assets/admin/page/'?>css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" <img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" <img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <h3 class="menu-title">Tous les Tables :</h3><!-- /.menu-title -->
                    <li >
                        <a href="<?php echo site_url().'/index.php?c=AdminController&m=getWallp'?>"   aria-haspopup="true" aria-expanded="false">Wallpaper</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url().'/index.php?c=AdminController&m=getCateg'?>"   aria-haspopup="true" aria-expanded="false">Categorie</a>
                    </li>
                    <li >
                        <a href="<?php echo site_url().'/index.php?c=AdminController&m=getResolution'?>" aria-haspopup="true"  aria-expanded="false">Resolution</a>
                    </li>

                    <h3 class="menu-title">Ajouter / Inserer :</h3><!-- /.menu-title -->

                    <li >
                        <a href="<?php echo site_url().'/index.php?c=AdminController&m=loadInsertW'?>"   aria-haspopup="true" aria-expanded="false">Wallpaper</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url().'/index.php?c=AdminController&m=loadInsertC'?>">Categorie</a>
                    </li>
                    <li >
                        <a href="<?php echo site_url().'/index.php?c=AdminController&m=loadInsertR'?>"  aria-haspopup="true" aria-expanded="false">Resolution</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                   
                </div>

               
            </div>

        </header>