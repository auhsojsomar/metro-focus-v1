<?php 
if($_COOKIE['role'] == 'Admin'){
    ?>
    <!doctype html>
    <html class="no-js" lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <title> MetroFocus </title>
            <meta name="description" content="">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="icon" href="../icon.ico">
            <link rel="apple-touch-icon" href="apple-touch-icon.png">
            <link rel="stylesheet" href="result/vendor.css">
            <link rel="stylesheet" href="result/app-blue.css">
            <link rel="stylesheet" href="fontawesome/css/all.css">
            <link rel="stylesheet" href="css/bulma.min.css">
            <link rel="stylesheet" href="css/datatables.min.css">
        </head>
        <body>
            <div class="main-wrapper">
                <div class="app" id="app">
                    <header class="header">
                        <div class="header-block header-block-collapse d-lg-none d-xl-none">
                            <button class="collapse-btn" id="sidebar-collapse-btn">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>
                        <div class="header-block">
                            <nav class="breadcrumb" aria-label="breadcrumbs">
                                <ul>
                                    <li style="margin-left: 20px;">
                                        <a href="index.php">
                                            <span class="icon is-small">
                                                <i class="fal fa-home" aria-hidden="true"></i>
                                            </span>
                                            <span> Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="is-active">
                                        <a href="#">
                                            Trash
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-block header-block-nav">
                            <ul class="nav-profile">
                                <li class="profile dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-user-alt fa-lm"></i>
                                        <!-- <div class="img" style="background-image: url('https://avatars3.githubusercontent.com/u/3959008?v=3&s=40')"> </div> -->
                                        <span class="name"> Admin </span>
                                    </a>
                                    <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <a class="dropdown-item" href="../User/pages/profile.php">
                                            <i class="fa fa-user icon"></i> Profile </a>
                                        <a class="dropdown-item" href="#">
                                            <i class="fa fa-bell icon"></i> Notifications </a>
                                        <a class="dropdown-item" href="#">
                                            <i class="fa fa-gear icon"></i> Settings </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="php/logout.php">
                                            <i class="fa fa-power-off icon"></i> Logout </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </header>
                    <aside class="sidebar">
                        <div class="sidebar-container">
                            <div class="sidebar-header">
                                <div class="brand">
                                    <div style="text-align: center;margin-left: -30px;"><span style="font-size: 25px;font-weight: bold;">Metro</span><span style="font-size: 25px;color: #FF7100;font-weight:bold;">Focus</span></div>
                                </div>
                            </div>
                            <nav class="menu">
                                <ul class="sidebar-menu metismenu" id="sidebar-menu">
                                    <li>
                                        <a href="index.php">
                                            <i class="fal fa-home"></i> Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="fal fa-camera-retro"></i> Products
                                            <i class="fa arrow"></i>
                                        </a>
                                        <ul class="sidebar-nav">
                                            <li>
                                                <a href="brand.php"> Brand</a>
                                            </li>
                                            <li>
                                                <a href="category.php"> Category</a>
                                            </li>
                                            <li>
                                                <a href="parts.php"> Parts</a>
                                            </li>
                                            <li>
                                                <a href="accessories.php"> Accessories</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="reservation.php">
                                            <i class="fal fa-calendar-alt"></i> Reservation
                                        </a>
                                    </li>
                                    <li>
                                        <a href="appointment.php">
                                            <i class="fal fa-calendar-check"></i> Appointment
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="fal fa-id-card"></i> User Management
                                            <i class="fa arrow"></i>
                                        </a>
                                        <ul class="sidebar-nav">
                                            <li>
                                                <a href="admin.php"> Admin</a>
                                            </li>
                                            <li>
                                                <a href="client.php"> Client</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="faq.php">
                                            <i class="fal fa-question-circle"></i> FAQ
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a href="#">
                                            <i class="fal fa-trash"></i> Trash
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>  
                    </aside>
                    <article class="content">
                        <form method="POST" name="vform" id="vform">
                            <div class="title-block">
                                <h1 class="title"> Trash</h1>
                            </div>
                            <section class="section" style="padding-top:0px;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-block">
                                                <div class="card-title-block">
                                                    <h3 class="title">Brand</h3>
                                                </div>
                                                <section class="example">
                                                    <div class="table-responsive">
                                                        <table id="brandtable" class="table table-bordered table-striped table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: ">Name</th>
                                                                <th style="width: ">Date Deleted</th>
                                                                <th style="width: ">Category</th>
                                                                <th style="width: 17%;text-align: center;">Action</th>
                                                        </thead>
                                                        <tbody></tbody>
                                                        </table>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </form>
                    </article>
                    <div class="sidebar-overlay" id="sidebar-overlay"></div>
                    <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                    <div class="mobile-menu-handle"></div> 
                </div>
            </div>
            <script src="js/jquery.min.js"></script>
            <script src="js/sweetalert.min.js"></script>
            <script src="js/vendor.js"></script>
            <script src="js/app.js"></script>
            <script src="js/datatables.min.js"></script>
            <script src="js/ellipsis.js"></script>
            <script>
                var dtbrand = $('#brandtable').DataTable({
                    "ajax":{
                    url:"php/trash/testing.php",
                    type:"POST"
                },
                    "columnDefs":[
                        {
                            "targets":[1],
                            "orderable":false,
                        },
                        {
                            "targets":[0],
                            "render":$.fn.dataTable.render.ellipsis(25),
                        },
                        {
                            "targets":[0,1],
                            "className":'dt-left',
                        },
                    ],
                });
                $(document).on('click','button[name="br_restore"]',function(){
                    var id = $(this).attr('id');
                    $.ajax({
                        url:'php/trash/brandrecover.php',
                        method:'POST',
                        data:{id:id},
                        success:function(data)
                        {
                            swal('Data Recovered','','success',{
                                closeOnClickOutside:false,
                            })
                            .then((value) =>{
                                dtbrand.ajax.reload();
                            });
                        }
                    });
                });
                $(document).on('click','button[name="br_delete"]',function(){
                    var id = $(this).attr('id');
                    $.ajax({
                        url:'php/trash/branddelete',
                        method:'POST',
                        data:{id:id},
                        success:function(data)
                        {
                            swal('Are you sure you want to delete?','you can\'t recover this data','warning',{
                                dangerMode:true,
                                buttons:true,
                            })
                            .then((value) => {
                                if(value){
                                    swal('Data Deleted','','success',{
                                        closeOnClickOutside:false,
                                    })
                                    .then((value) => {
                                        dtbrand.ajax.reload();
                                    });
                                }
                                else{
                                    return false;
                                }
                            });
                        }
                    });
                });
            </script>
        </body>
    </html>
    <?php
}
else{
    header('Location: ../User/index.php');
}

 ?>