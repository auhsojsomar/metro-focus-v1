<?php 
//session_start();
include '../User/includes/db.php';
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
                                            FAQ
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
                                    <li class="active">
                                        <a href="#">
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
                            <h1 class="title"> FAQ</h1>
                            <button type="button" class="button is-success" id="faqadd">
                                <span class="icon is-small">
                                      <i class="fal fa-plus-circle"></i>
                                    </span>
                                    <span> Add FAQ</span>
                            </button>
                        </div>
                        <section class="section" style="padding-top:0px;">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-block">
                                            <section class="example">
                                                <div class="table-responsive">
                                                    <table id="faqtable" class="table table-bordered table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Question</th>
                                                            <th>Answer</th>
                                                            <th style="text-align: center;width: 15%;">Action</th>
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
                <div class="modal" id="faqmodal">
                <div class="modal-background"></div>
                <div class="modal-card">
                    <header class="modal-card-head">
                        <h1 class="modal-card-title" id="faqtitle">Add FAQ</h1>
                    </header>
                    <section class="modal-card-body">
                        <form method="POST" name="vform" id="vform" onsubmit="return Validate();">
                        <div class="field">
                            <label class="label">Question</label>
                                <div class="control has-icons-right">
                                    <textarea maxlength="5000" class="input" id="question" name="question" placeholder="Question"></textarea>
                                        <span class="icon is-small is-right">
                                            <i id="questionicon" class=""></i>
                                        </span>
                                        <p class="help is-danger" id="questionmessage"></p>
                                </div>
                        </div>
                        <div class="field">
                            <label class="label">Answer</label>
                                <div class="control has-icons-right">
                                    <textarea style="height: 200px;" maxlength="5000" class="input" id="answer" name="answer" placeholder="Answer"></textarea>
                                        <span class="icon is-small is-right">
                                            <i id="answericon" class=""></i>
                                        </span>
                                        <p class="help is-danger" id="answermessage"></p>
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
            <script src="js/jquery.min.js"></script>
            <script src="js/sweetalert.min.js"></script>
            <script src="js/vendor.js"></script>
            <script src="js/app.js"></script>
            <script src="js/datatables.min.js"></script>
            <script src="js/ellipsis.js"></script>
            <script>
                function quevalid(){
                    if($('#question').val() == ''){
                        $('#question').addClass('is-danger');
                        $('#questionmessage').html('Enter your question');
                    }
                    else{
                        $('#question').removeClass('is-danger');
                        $('#questionmessage').html('');
                    }
                }
                function ansvalid(){
                    if($('#answer').val() == ''){
                        $('#answer').addClass('is-danger');
                        $('#answermessage').html('Enter your answer');
                    }
                    else{
                        $('#answer').removeClass('is-danger');
                        $('#answermessage').html('');
                    }
                }
                function validall(){
                    if($('#question').val() != '' && $('#answer').val() != ''){
                        if($('#operation').val() == 'Add'){
                            var fr = $('#vform').serialize();
                            $.ajax({
                                url:'php/faq/faqadd.php',
                                method:'POST',
                                data:fr,
                                success:function(data){
                                    if(data == 'Success'){
                                        $('#faqmodal').removeClass('is-active');
                                        swal('Added Successfully','','success',{
                                            closeOnClickOutside:false,
                                        })
                                        .then((value) => {
                                            dataTable.ajax.reload();
                                        });
                                    }
                                    else{
                                        swal('Error','','error',{
                                            closeOnClickOutside:false,
                                        });
                                    }
                                }
                            });
                        }
                        if($('#operation').val() == 'Edit'){
                            var fr = $('#vform').serialize();
                            $.ajax({
                                url:'php/faq/faqupdate.php',
                                method:'POST',
                                data:fr,
                                success:function(data){
                                    if(data == 'Success'){
                                        $('#faqmodal').removeClass('is-active');
                                        swal('Edit Successfully','','success',{
                                            closeOnClickOutside:false,
                                        })
                                        .then((value) => {
                                            dataTable.ajax.reload();
                                        });
                                    }
                                    else{
                                        swal('Error','','error',{
                                            closeOnClickOutside:false,
                                        });
                                    }
                                }
                            });
                        }
                    }
                }
                function clearall(){
                    $('#question').removeClass('is-danger');
                    $('#questionmessage').html('');
                    $('#question').val('');
                    $('#answer').removeClass('is-danger');
                    $('#answermessage').html('');
                    $('#answer').val('');
                }
                function Validate(){
                    quevalid();
                    ansvalid();
                    validall();
                    return false;
                }
                $('#faqadd').click(function(){
                    $('#faqmodal').addClass('is-active');
                    $('#operation').val('Add');
                    $('#faqtitle').html('Add FAQ');
                    clearall();
                });
                $('#cancel').click(function(){
                    $('#faqmodal').removeClass('is-active');
                });
                var dataTable = $('#faqtable').DataTable({
                    "order":[],
                    "ajax":{
                        url:'php/faq/faqfetch.php',
                        type:'POST'
                    },
                    "columnDefs":[
                        {
                            "targets":[2],
                            "orderable":false,
                        },
                        {
                            "targets":[0,1],
                            "render":$.fn.dataTable.render.ellipsis(50),
                        },
                        {
                            "targets":[0,1,2],
                            "className":'dt-center',
                        },
                    ],
                });
                $(document).on('click','button[name = "update"]',function(){
                    var id = $(this).attr('id');
                    $.ajax({
                        url:'php/faq/faqfetchsingle.php',
                        method:'POST',
                        data:{id:id},
                        dataType:'json',
                        success:function(data){
                            $('#faqmodal').addClass('is-active');
                            $('#question').val(data.question);
                            $('#answer').val(data.answer);
                            $('#user_id').val(id);
                            $('#operation').val('Edit');
                            $('#faqtitle').html('Edit FAQ');
                        }
                    });
                });
                $(document).on('click','button[name = "delete"]',function(){
                    var id = $(this).attr('id');
                    swal('Are you sure you want to delete?','','warning',{
                        buttons:true,
                        dangerMode:true,
                    })
                    .then((value) => {
                        if(value){
                            $.ajax({
                                url:'php/faq/faqdelete',
                                method:'POST',
                                data:{id:id},
                                success:function(data){
                                    if(data == 'Success'){
                                        swal('Data Deleted','','success',{
                                            closeOnClickOutside:false,
                                        })
                                        .then((value) => {
                                            dataTable.ajax.reload();
                                        });
                                    }
                                    else{
                                        swal('Error','','error',{
                                            closeOnClickOutside:false,
                                        });
                                    }
                                }
                            });
                        }
                        else{
                            return false;
                        }
                    })
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
    header('Location: ../User/index.php');
}

 ?>