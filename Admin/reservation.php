<?php 
session_start();
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
            <link rel="stylesheet" href="css/vendor.css">
            <link rel="stylesheet" href="css/app-blue.css">
            <link rel="stylesheet" href="css/bulma.min.css">
            <link rel="stylesheet" href="fontawesome/css/all.css">
            <link rel="stylesheet" href="css/datatables.min.css">
            <link rel="stylesheet" href="css/animate.min.css">
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
                                        <a href="./">
                                            <span class="icon is-small">
                                                <i class="fal fa-home" aria-hidden="true"></i>
                                            </span>
                                            <span> Dashoard</span>
                                        </a>
                                    </li>
                                    <li class="is-active">
                                        <a href="">
                                            Reservation
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
                                        <a class="dropdown-item" href="../User/pages/logout.php">
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
                                        <a href="./">
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
                                    <li class="active">
                                        <a href="#.php">
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
                                    <li>
                                        <a href="activitylog.php">
                                            <i class="fal fa-pen"></i> Activity Logs
                                        </a>
                                    </li>
                                    <li>
                                        <a href="trash.php">
                                            <i class="fal fa-trash"></i> Trash
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>  
                    </aside>
                    <article class="content animated bounceInLeft">
                        <div class="title-block">
                            <h1 class="title"> Reservation</h1>
                        </div>
                        <section class="section" style="padding-top:0px;">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-block">
                                            <div class="card-title-block">
                                                <h3 class="title">Camera Parts</h3>
                                            </div>
                                            <section class="example">
                                                <div class="table-responsive">
                                                    <table id="partstable" class="table table-bordered table-striped table-hover">
                                                    <thead>
                                                        <tr >
                                                            <th>Email</th>
                                                            <th>Reservation Date</th>
                                                            <th>Item Name</th>
                                                            <th>Quantity</th>
                                                            <th>Status</th>
                                                            <th style="width: 20%;text-align: center;">Action</th>
                                                        </tr>
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
                        <section class="section" style="padding-top:0px;margin-top: -70px;">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-block">
                                            <div class="card-title-block">
                                                <h3 class="title">Camera Accessories</h3>
                                            </div>
                                            <section class="example">
                                                <div class="table-responsive">
                                                    <table id="accessoriestable" class="table table-bordered table-striped table-hover">
                                                    <thead>
                                                        <tr >
                                                            <th>Email</th>
                                                            <th>Reservation Date</th>
                                                            <th>Item Name</th>
                                                            <th>Quantity</th>
                                                            <th>Status</th>
                                                            <th style="width: 20%;text-align: center;">Action</th>
                                                        </tr>
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
                    </article>
                    <div class="sidebar-overlay" id="sidebar-overlay"></div>
                    <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                    <div class="mobile-menu-handle"></div> 
                </div>
                <div class="modal" id="reservationmodal"> 
                    <div class="modal-background"></div>
                        <div class="modal-card">
                            <header class="modal-card-head">
                                <p class="modal-card-title" id="reservetitle">Appointment Details</p>
                            </header>
                            <section class="modal-card-body">
                                <form method="POST" id="vfrom" name="vform">
                                <div class="field">
                                    <label for="" class="label">Email</label>
                                    <input id="username" type="input" class="input" readonly>
                                </div>
                                <div class="field">
                                    <label for="" class="label">Reservation Date</label>
                                    <input id="reservedate" type="input" class="input" readonly>
                                </div>
                                <div class="field">
                                    <label for="" class="label">Item Name</label>
                                    <input id="itemname" type="input" class="input" readonly>
                                </div>
                                <div class="field">
                                    <label for="" class="label">Quantity</label>
                                    <input id="itemquantity" type="input" class="input" readonly>
                                </div>
                                <div class="field">
                                    <label for="" class="label">Status</label>
                                    <input id="status" type="input" class="input" readonly>
                                </div>
                                </form>
                            </section>
                            <footer>
                                <input type="hidden" name="user_id" id="user_id"></input>
                            </footer>
                        </div>
                </div>
            </div>
            <script src="js/jquery.min.js"></script>
            <script src="js/sweetalert.min.js"></script>
            <script src="js/vendor.js"></script>
            <script src="js/app.js"></script>
            <script src="js/datatables.min.js"></script>
            <script src="js/ellipsis.js"></script>

            <script>
            setInterval(function(){
                dataTable.ajax.reload(null,false);
            },1000);
            setInterval(function(){
                dataTable2.ajax.reload(null,false);
            },1000);
            var dataTable = $('#partstable').DataTable({
                "order":[],
                "ajax":{
                url:"php/reservation/reservationfetch.php",
                type:"POST"
            },
                "columnDefs": [
                   {
                       "targets": [0,1,2,3,4],
                       "className": 'dt-center'
                   },
                   {
                       "targets": [5],
                       "orderable": false,
                   },
                   {
                       "targets":[0,1,2,3,4],
                       "render":$.fn.dataTable.render.ellipsis(25),
                   },
                 ],
            });
            $(document).on('click','button[name="show"]',function(){
                var user_id = $(this).attr("id");
                $.ajax({
                    url:"php/reservation/reservationfetchsingle.php",
                    method:"POST",
                    data:{user_id:user_id},
                    dataType:"json",
                    success:function(data)
                    {
                        $('#reservationmodal').addClass('is-active');
                        $('#username').val(data.username);
                        $('#reservedate').val(data.reservedate);
                        $('#itemname').val(data.itemname);
                        $('#itemquantity').val(data.itemquantity);
                        $('#status').val(data.status);
                        $('#reservetitle').html('Parts Reservation Details');
                    }
                });
            });
            $(document).on('click','button[name="confirm"]',function(){
                var user_id2 = $(this).attr("id");
                $.ajax({
                     url:"php/reservation/reservationconfirm.php",
                        method:"POST",
                        data:{user_id2:user_id2},
                        success:function(data)
                        {
                            swal({
                                title: "Confirmed",
                                text: "",
                                icon: "success",
                                closeOnClickOutside: false,
                            })
                            .then((value) => {
                            dataTable.ajax.reload();
                        });
                        }
                });
            });
            var dataTable2 = $('#accessoriestable').DataTable({
                "ajax":{
                url:"php/reservation/accessoriesfetch.php",
                type:"POST"
            },
                "columnDefs": [
                   {
                       "targets": [0,1,2,3,4],
                       "className": 'dt-center'
                   },
                   {
                       "targets": [5],
                       "orderable": false,
                   },
                   {
                       "targets":[0,1,2,3,4],
                       "render":$.fn.dataTable.render.ellipsis(25),
                   },
                 ],
            });
            $(document).on('click','button[name="show2"]',function(){
                var user_id = $(this).attr("id");
                $.ajax({
                    url:"php/reservation/accessoriesfetchsingle.php",
                    method:"POST",
                    data:{user_id:user_id},
                    dataType:"json",
                    success:function(data)
                    {
                        $('#reservationmodal').addClass('is-active');
                        $('#username').val(data.username);
                        $('#reservedate').val(data.reservedate);
                        $('#itemname').val(data.itemname);
                        $('#itemquantity').val(data.itemquantity);
                        $('#status').val(data.status);
                        $('#reservetitle').html('Accessories Reservation Details');
                    }
                });
            });
            $(document).on('click','button[name="confirm2"]',function(){
                var user_id2 = $(this).attr("id");
                $.ajax({
                     url:"php/reservation/reservationconfirm.php",
                        method:"POST",
                        data:{user_id2:user_id2},
                        success:function(data)
                        {
                            swal({
                                title: "Confirmed",
                                text: "",
                                icon: "success",
                                closeOnClickOutside: false,
                            })
                            .then((value) => {
                            dataTable2.ajax.reload();
                        });
                        }
                });
            });
            document.addEventListener('DOMContentLoaded',function(){

                var rootEl = document.documentElement;
                var $modals = getAll('.modal');
                var $modalButtons = getAll('.modal-button');
                var $modalCloses = getAll('.modal-background, .modal-close, .modal-card-head .delete');

                if ($modalButtons.length > 0) {
                    $modalButtons.forEach(function ($el) {
                      $el.addEventListener('click', function () {
                        var target = $el.dataset.target;
                        var $target = document.getElementById(target);
                        rootEl.classList.add('is-clipped');
                        $target.classList.add('is-active');
                      });
                    });
                }
                if ($modalCloses.length > 0) {
                    $modalCloses.forEach(function ($el) {
                      $el.addEventListener('click', function () {
                        closeModals();
                      });
                    });
                }
                document.addEventListener('keydown', function (event) {
                    var e = event || window.event;
                    if (e.keyCode === 27) {
                      closeModals();
                    }
                });
                function closeModals() {
                    rootEl.classList.remove('is-clipped');
                    $modals.forEach(function ($el) {
                      $el.classList.remove('is-active');
                    });
                }
                function getAll(selector) {
                    return Array.prototype.slice.call(document.querySelectorAll(selector), 0);
                }

            });
            </script>
        </body>
    </html>
    <?php
}
else{
    header('Location: ../User/');
}

 ?>