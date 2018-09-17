<?php 
//session_start();
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
                                        <a href="index.php">
                                            <span class="icon is-small">
                                                <i class="fal fa-home" aria-hidden="true"></i>
                                            </span>
                                            <span> Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="is-active">
                                        <a href="#">
                                            Products
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
                                    <li class="active open">
                                        <a href="">
                                            <i class="fal fa-camera-retro"></i> Products
                                            <i class="fa arrow"></i>
                                        </a>
                                        <ul class="sidebar-nav">
                                            <li>
                                                <a href="brand.php"> Brand</a>
                                            </li>
                                            <li class="active">
                                                <a href="#"> Category</a>
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
                            <h1 class="title"> Category</h1>
                            <button type="button" class="button is-success" id="categoryadd">
                                <span class="icon is-small">
                                      <i class="fal fa-plus-circle"></i>
                                    </span>
                                    <span> Add Category</span>
                            </button>
                        </div>
                        <section class="section" style="padding-top:0px;">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-block">
                                            <section class="example">
                                                <div class="table-responsive">
                                                    <table id="categorytable" class="table table-bordered table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Category Name</th>
                                                            <th style="width: 15%;text-align: center;">Action</th>
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
                <div class="modal" id="categorymodal">
                <div class="modal-background"></div>
                <div class="modal-card">
                    <header class="modal-card-head">
                        <h1 class="modal-card-title" id="categorytitle">Add Category</h1>
                    </header>
                    <section class="modal-card-body">
                        <form method="POST" name="vform" id="vform" onsubmit="return Validate();">
                        <div class="field">
                            <label class="label">Category</label>
                                <div class="control has-icons-right">
                                    <input class="input" id="category" name="category" placeholder="Category Name">
                                        <span class="icon is-small is-right">
                                            <i id="categoryicon" class=""></i>
                                        </span>
                                        <p class="help is-danger" id="categorymessage"></p>
                                </div>
                            </div>
                    </section>
                    <footer class="modal-card-foot">
                        <button class="button is-success" id="save" type="submit" name="btnSave">Save</button>
                        <button class="button" id="cancel" type="button">Cancel</button>
                        <input type="hidden" name="user_id" id="user_id"></input>
                        <input type="hidden" name="operation" id="operation"></input>
                    </form>
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

            var dataTable = $('#categorytable').DataTable({
                "order":[],
                "ajax":{
                url:"php/category/categoryfetch.php",
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
                        "targets":[0],
                        "className":'dt-left',
                    },
                ],
            });
            $(document).on('click','button[name="update"]',function(){
            var user_id = $(this).attr("id");
            $.ajax({
                url:"php/category/categoryfetchsingle.php",
                method:"POST",
                data:{user_id:user_id},
                dataType:"json",
                success:function(data)
                {
                    clear();
                    $('#categorymodal').addClass('is-active');
                    $('#category').val(data.category);
                    $('#categorytitle').html('Edit Category');
                    $('#user_id').val(user_id);
                    $('#operation').val("Edit");
                }
            })
            });
            $(document).on('click', 'button[name="delete"]', function(){
                swal({
                  title: "Are you sure you want to delete?",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                    var user_id = $(this).attr("id");
                    $.ajax({
                        url:"php/category/categorydelete.php",
                        method:"POST",
                        data:{user_id:user_id},
                        success:function(data)
                        {
                            swal({
                                title:data,
                                icon:'success',
                                closeOnClickOutside:false,
                            })
                            .then((value) => {
                                dataTable.ajax.reload();
                            });
                        }
                    });
                  } else {
                    return false;
                  }
                });
            });
            var br = document.forms['vform']['category'];
            var br_error = document.getElementById('categorymessage');

            function Validate() {
              if (br.value == "") {
                br_error.textContent = "Enter a Category Name";
                $("#category").addClass("is-danger");
                $("#categoryicon").addClass("fas fa-exclamation-triangle");
                br.focus();
                return false;
              }
              else{
                if($('#operation').val()=="Add"){
                    var data = $('#category').serialize();
                    $.post('php/category/categoryunique.php', {'category' : br.value}, function(exist){
                        if(exist == "Not Exist"){
                            $.ajax({
                                url:'php/category/categoryadd.php',
                                method:'POST',
                                data:data,
                                success:function(brand){
                                    $('#categorymodal').removeClass('is-active');
                                    swal('Added Successfully','','success',{
                                        closeOnClickOutside:false,
                                    })
                                    .then((value) => {
                                        dataTable.ajax.reload();
                                    });
                                }
                            });
                        }
                        else{
                            swal(exist+' is already exist','','error',{
                                closeOnClickOutside:false,
                            })
                            .then((value) => {
                                br.value = "";
                            });
                        }
                    });
                }
                else if($('#operation').val()=="Edit"){
                    var data = $('#vform').serialize();
                    $.ajax({
                        data:data,
                        type: "post",
                        url: "php/category/categoryupdate.php",
                        success: function(brup){
                            if(brup == "Not Exist"){
                                $('#categorymodal').removeClass('is-active');
                                swal('Edit Successfully','','success',{
                                    closeOnClickOutside:false,
                                })
                                .then((value) => {
                                 dataTable.ajax.reload()
                                });
                            }
                            else{
                                swal(brup+' is already exist','','error',{
                                    closeOnClickOutside:false,
                                })
                                .then((value) => {
                                    br.value = "";
                                });
                            }
                        }
                    })
                }
                return false;

              }
            }
            $('#categoryadd').click(function(){
                clear();
                $('#categorytitle').html('Add Category');
                $('#operation').val('Add');
                $('#categorymodal').addClass('is-active');
            });
            $('#cancel').click(function(){
                $('#categorymodal').removeClass('is-active');
            });
            function clear(){
               br.value = "";
               br_error.innerHTML = "";
               $("#category").removeClass("is-danger");$
               $("#categoryicon").removeClass("fas fa-exclamation-triangle");
            }
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
    header('Location: ../User/index.php');
}

 ?>