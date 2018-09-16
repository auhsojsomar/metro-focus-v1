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
                                            User Management
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
                                    <li class="active open">
                                        <a href="">
                                            <i class="fal fa-id-card"></i> User Management
                                            <i class="fa arrow"></i>
                                        </a>
                                        <ul class="sidebar-nav">
                                            <li>
                                                <a href="admin.php"> Admin</a>
                                            </li>
                                            <li class="active">
                                                <a href="#"> Client</a>
                                            </li>
                                        </ul>
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
                    <article class="content">
                        <div class="title-block">
                            <h1 class="title"> Client</h1>
                            <button type="button" class="button is-success" id="clientadd">
                                <span class="icon is-small">
                                      <i class="fal fa-plus-circle"></i>
                                    </span>
                                    <span> Add Client</span>
                            </button>
                        </div>
                        <section class="section" style="padding-top:0px;">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-block">
                                            <section class="example">
                                                <div class="table-responsive">
                                                    <table id="clienttable" class="table table-bordered table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>First&nbspName</th>
                                                            <th>Last&nbspName</th>
                                                            <th>Email</th>
                                                            <th>Contact&nbspNumber</th>
                                                            <th>Date&nbspcreated</th>
                                                            <th style="text-align: center;width: 15%;">Action</th>
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
                <div class="modal" id="clientmodal">
                <div class="modal-background"></div>
                <div class="modal-card">
                    <header class="modal-card-head">
                        <h1 class="modal-card-title" id="clienttitle">Add Client</h1>
                    </header>
                    <section class="modal-card-body">
                        <form method="POST" name="vform" id="vform" onsubmit="return Validate();" enctype="multipart/form-data">
                        <div class="field">
                            <label class="label">First Name</label>
                                <div class="control has-icons-right">
                                    <input maxlength="200" class="input" id="fname" name="fname" placeholder="First Name">
                                        <span class="icon is-small is-right">
                                            <i id="fnameicon" class=""></i>
                                        </span>
                                        <p class="help is-danger" id="fnamemessage"></p>
                                </div>
                        </div>
                        <div class="field">
                            <label class="label">Last Name</label>
                                <div class="control has-icons-right">
                                    <input maxlength="200" class="input" id="lname" name="lname" placeholder="Last Name">
                                        <span class="icon is-small is-right">
                                            <i id="lnameicon" class=""></i>
                                        </span>
                                        <p class="help is-danger" id="lnamemessage"></p>
                                </div>
                        </div>
                        <div class="field">
                            <label class="label">Email</label>
                                <div class="control has-icons-right">
                                    <input maxlength="200" class="input" id="email" name="email" placeholder="e.g. youremail@gmail.com">
                                        <span class="icon is-small is-right">
                                            <i id="emailicon" class=""></i>
                                        </span>
                                        <p class="help is-danger" id="emailmessage"></p>
                                </div>
                        </div>
                        <div class="field">
                            <label class="label">Contact Number</label>
                                <div class="control has-icons-right">
                                    <input maxlength="11" class="input" id="cnumber" name="cnumber" placeholder="e.g. 09123456789">
                                        <span class="icon is-small is-right">
                                            <i id="cnumbericon" class=""></i>
                                        </span>
                                        <p class="help is-danger" id="cnumbermessage"></p>
                                </div>
                        </div>
                        <div class="field">
                            <label class="label">Password</label>
                                <div class="control has-icons-right">
                                    <input maxlength="200" type="password" class="input" id="password" name="password" placeholder="Password">
                                        <span class="icon is-small is-right">
                                            <i id="passwordicon" class=""></i>
                                        </span>
                                        <p class="help is-danger" id="passwordmessage"></p>
                                </div>
                        </div>
                        <div class="field">
                            <label class="label">Confirm Password</label>
                                <div class="control has-icons-right">
                                    <input maxlength="200" type="password" class="input" id="cpassword" name="cpassword" placeholder="Confirm Password">
                                        <span class="icon is-small is-right">
                                            <i id="cpasswordicon" class=""></i>
                                        </span>
                                        <p class="help is-danger" id="cpasswordmessage"></p>
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
                var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                var space = /^ /;
                var space2 = / $/;
                var dot = /^\./;
                var exist = "";
                var fname = document.forms['vform']['fname'];
                var fname_err = document.getElementById('fnamemessage');
                var lname = document.forms['vform']['lname'];
                var lname_err = document.getElementById('lnamemessage');
                var email = document.forms['vform']['email'];
                var email_err = document.getElementById('emailmessage');
                var cnumber = document.forms['vform']['cnumber'];
                var cnumber_err = document.getElementById('cnumbermessage');
                var password = document.forms['vform']['password'];
                var password_err = document.getElementById('passwordmessage');
                var cpassword = document.forms['vform']['cpassword'];
                var cpassword_err = document.getElementById('cpasswordmessage');

                function fnamevalid(){
                    newval = $('#fname').val().replace(/[^A-z.\s]/g, "");
                    $('#fname').val(newval);
                    if(fname.value == ""){
                        $('#fname').addClass('is-danger');
                        $('#fnameicon').addClass('fas fa-exclamation-triangle');
                        fname_err.textContent = "Enter your Firstname";
                    }
                    else if(space.test(fname.value) || dot.test(fname.value)){
                        $('#fname').addClass('is-danger');
                        $('#fnameicon').addClass('fas fa-exclamation-triangle');
                        fname_err.textContent = "Invalid Format";
                    }
                    else{
                        $('#fname').removeClass('is-danger');
                        $('#fnameicon').removeClass('fas fa-exclamation-triangle');
                        fname_err.textContent = "";
                    }
                }
                function lnamevalid(){
                    newval = $('#lname').val().replace(/[^A-z.\s]/g, "");
                    $('#lname').val(newval);
                    if(lname.value == ""){
                        $('#lname').addClass('is-danger');
                        $('#lnameicon').addClass('fas fa-exclamation-triangle');
                        lname_err.textContent = "Enter your Lastname";
                    }
                    else if(space.test(lname.value) || dot.test(lname.value)){
                        $('#lname').addClass('is-danger');
                        $('#lnameicon').addClass('fas fa-exclamation-triangle');
                        lname_err.textContent = "Invalid Format";
                    }
                    else{
                        $('#lname').removeClass('is-danger');
                        $('#lnameicon').removeClass('fas fa-exclamation-triangle');
                        lname_err.textContent = "";
                    }
                }
                function cnumbervalid(){
                    newval = $('#cnumber').val().replace(/[^0-9]/g, "");
                    $('#cnumber').val(newval);
                    if(cnumber.value == ""){
                        $('#cnumber').addClass('is-danger');
                        $('#cnumbericon').addClass('fas fa-exclamation-triangle');
                        cnumber_err.textContent = "Enter your Contact number";
                    }
                    else if(cnumber.value.length < 11){
                        $('#cnumber').addClass('is-danger');
                        $('#cnumbericon').addClass('fas fa-exclamation-triangle');
                        cnumber_err.textContent = "Invalid Contact number";
                    }
                    else{
                        $('#cnumber').removeClass('is-danger');
                        $('#cnumbericon').removeClass('fas fa-exclamation-triangle');
                        cnumber_err.textContent = "";
                    }
                }
                function emailvalid(){
                    $.post('../User/php/email.php', {'email' : email.value}, function(data) {
                        exist = data;
                        if(email.value == ''){
                            $('#emailmessage').html('Enter your email');
                            $('#email').addClass('is-danger');
                            $('#emailicon').addClass('fas fa-exclamation-triangle');
                        }
                        else if(data == "Exist"){
                            $('#email').addClass('is-danger');
                            $('#emailicon').addClass('fas fa-exclamation-triangle');
                            $('#emailmessage').html('Email is already used');
                        }
                        else if(regex.test(email.value)){
                            $('#email').removeClass('is-danger');
                            $('#emailicon').removeClass('fas fa-exclamation-triangle');
                            $('#emailmessage').html('');
                        }
                        else {
                            $('#email').addClass('is-danger');
                            $('#emailicon').addClass('fas fa-exclamation-triangle');
                            $('#emailmessage').html('Invalid Email');
                        }
                    });
                }
                function passwordvalid(){
                    if (password.value.length == 0){
                        $('#passwordmessage').html('Enter your password');
                        $('#password').addClass('is-danger');
                        $('#passwordicon').addClass('fas fa-exclamation-triangle');
                    }
                    else if(password.value.length < 8){
                        $('#password').addClass('is-danger');
                        $('#passwordicon').addClass('fas fa-exclamation-triangle');
                        $('#passwordmessage').html('Password must be more than 8 characters!');
                    }
                    else {
                        $('#password').removeClass('is-danger');
                        $('#passwordicon').removeClass('fas fa-exclamation-triangle');
                        $('#passwordmessage').html('');
                    }
                }
                function cpasswordvalid(){
                    if (cpassword.value.length == 0){
                        $('#cpasswordmessage').html('Enter your password');
                        $('#cpassword').addClass('is-danger');
                        $('#cpasswordicon').addClass('fas fa-exclamation-triangle');
                    }
                    else if(cpassword.value.length < 8){
                        $('#cpassword').addClass('is-danger');
                        $('#cpasswordicon').addClass('fas fa-exclamation-triangle');
                        $('#cpasswordmessage').html('Password must be more than 8 characters!');
                    }
                    else if(cpassword.value != password.value){
                        $('#cpasswordmessage').html('Confirm your password');
                        $('#cpassword').addClass('is-danger');
                        $('#cpasswordicon').addClass('fas fa-exclamation-triangle');
                    }
                    else {
                        $('#cpassword').removeClass('is-danger');
                        $('#cpasswordicon').removeClass('fas fa-exclamation-triangle');
                        $('#cpasswordmessage').html('');
                    }
                }
                function ValidateAll(){
                    if($('#operation').val() == 'Add'){
                        if(space2.test(fname.value)){
                            $('#fname').addClass('is-danger');
                            $('#fnameicon').addClass('fas fa-exclamation-triangle');
                            fname_err.textContent = "Invalid Format";
                        }
                        if(space2.test(lname.value)){
                            $('#lname').addClass('is-danger');
                            $('#lnameicon').addClass('fas fa-exclamation-triangle');
                            lname_err.textContent = "Invalid Format";
                        }
                        else if((fname.value != "") && (lname.value != "") && (email.value != "") && (cnumber.value != "") && (password.value != "") && (cpassword.value != "") && !space.test(fname.value) && !dot.test(fname.value) && !space.test(lname.value) && !dot.test(lname.value) && regex.test(email.value) && exist != "Exist" && password.value.length > 7 && cpassword.value.length > 7 && cnumber.value.length > 10 && password.value == cpassword.value){
                            var form = $('#vform').serialize();
                            $.ajax({
                                data:form,
                                method:'POST',
                                url:'php/client/clientadd.php',
                                success:function(data){
                                    $('#clientmodal').removeClass('is-active');
                                       swal({
                                         title: "Added Successfully",
                                         text: "",
                                         icon: "success",
                                         closeOnClickOutside: false,
                                       })
                                       .then((value) => {
                                        dataTable.ajax.reload()
                                   });
                                }
                            });
                        }
                    }
                    if($('#operation').val() == 'Edit'){
                        if(space2.test(fname.value)){
                            $('#fname').addClass('is-danger');
                            $('#fnameicon').addClass('fas fa-exclamation-triangle');
                            fname_err.textContent = "Invalid Format";
                        }
                        if(space2.test(lname.value)){
                            $('#lname').addClass('is-danger');
                            $('#lnameicon').addClass('fas fa-exclamation-triangle');
                            lname_err.textContent = "Invalid Format";
                        }
                        if(password.value.length > 0 && password.value.length < 8){
                            passwordvalid();
                        }
                        else if((fname.value != "") && (lname.value != "") && (email.value != "") && (cnumber.value != "") && !space.test(fname.value) && !dot.test(fname.value) && !space.test(lname.value) && !dot.test(lname.value) && regex.test(email.value) && cnumber.value.length > 10 && password.value == cpassword.value){
                            var form = $('#vform').serialize();
                            $.ajax({
                                data:form,
                                method:'POST',
                                url:'php/client/clientupdate.php',
                                success:function(data){
                                    if(data == "Success"){
                                         $('#clientmodal').removeClass('is-active');
                                            swal({
                                              title: "Edit Successfully",
                                              text: "",
                                              icon: "success",
                                              closeOnClickOutside: false,
                                            })
                                            .then((value) => {
                                             dataTable.ajax.reload()
                                        });
                                    }
                                    else{
                                        swal(data + ' is already exist','','error',{
                                            closeOnClickOutside:false,
                                        });
                                    }
                                }
                            });
                        }
                    }
                }
                function clear(){
                    fname.value = "";
                    lname.value = "";
                    password.value = "";
                    cpassword.value = "";
                    email.value = "";
                    cnumber.value = "";
                    $('#fname').removeClass('is-danger');
                    $('#fnameicon').removeClass('fas fa-exclamation-triangle');
                    fname_err.textContent = "";
                    $('#lname').removeClass('is-danger');
                    $('#lnameicon').removeClass('fas fa-exclamation-triangle');
                    lname_err.textContent = "";
                    $('#email').removeClass('is-danger');
                    $('#emailicon').removeClass('fas fa-exclamation-triangle');
                    $('#emailmessage').html('');
                    $('#cnumber').removeClass('is-danger');
                    $('#cnumbericon').removeClass('fas fa-exclamation-triangle');
                    cnumber_err.textContent = "";
                    $('#password').removeClass('is-danger');
                    $('#passwordicon').removeClass('fas fa-exclamation-triangle');
                    $('#passwordmessage').html('');
                    $('#cpassword').removeClass('is-danger');
                    $('#cpasswordicon').removeClass('fas fa-exclamation-triangle');
                    $('#cpasswordmessage').html('');
                }
                function Validate(){
                    fnamevalid();
                    lnamevalid();
                    cnumbervalid();
                    if($('#operation').val() == 'Add'){
                        emailvalid();
                        passwordvalid();
                        cpasswordvalid();
                    }
                    ValidateAll();
                    return false;
                }
                $('#fname').bind('input',function(){
                    fnamevalid();
                });
                $('#lname').bind('input',function(){
                    lnamevalid();
                });
                $('#email').bind('input',function(){
                    if($('#operation').val() == 'Add'){
                        emailvalid();
                    }
                });
                $('#cnumber').bind('input',function(){
                    cnumbervalid();
                });
                $('#password').bind('input',function(){
                    passwordvalid();
                });
                $('#cpassword').bind('input',function(){
                    cpasswordvalid();
                });
                $('#fname').blur(function(){
                    fnamevalid();
                });
                $('#lname').blur(function(){
                    lnamevalid();
                });
                $('#email').blur(function(){
                    emailvalid();
                });
                $('#cnumber').blur(function(){
                    cnumbervalid();
                });
                $('#password').blur(function(){
                    passwordvalid();
                });
                $('#cpassword').blur(function(){
                    cpasswordvalid();
                });
                $('#clientadd').click(function(){
                    clear();
                    $('#clientmodal').addClass('is-active');
                    $('#operation').val('Add');
                });
                $('#cancel').click(function(){
                    $('#clientmodal').removeClass('is-active');
                });
                var dataTable = $('#clienttable').DataTable({
                    "ajax":{
                    url:"php/client/clientfetch.php",
                    type:"POST"
                },
                    "columnDefs":[
                        {
                            "targets":[5],
                            "orderable":false,
                        },
                        {
                            "targets":[0,1,2,3,4],
                            "render":$.fn.dataTable.render.ellipsis(25),
                        },
                        {
                            "targets":[0,1,2,3,4],
                            "className":'dt-center',
                        },
                    ],
                });
                $(document).on('click','button[name="update"]',function(){
                clear();
                var user_id = $(this).attr("id");
                $.ajax({
                    url:"php/client/clientfetchsingle.php",
                    method:"POST",
                    data:{user_id:user_id},
                    dataType:"json",
                    success:function(data)
                    {
                       $('#clientmodal').addClass('is-active');
                       $('#fname').val(data.firstname);
                       $('#lname').val(data.lastname);
                       $('#email').val(data.username);
                       $('#cnumber').val(data.cnumber);
                       // $('#password').val(data.password);
                       // $('#cpassword').val(data.password);
                       $('#user_id').val(user_id);
                       $('#operation').val('Edit');
                    }
                })
                });
                $(document).on('click','button[name="delete"]',function(){
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
                        url:"php/client/clientdelete.php",
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