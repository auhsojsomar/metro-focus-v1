<?php 
session_start();
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
                                        <a href="./">
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
                                    <li class="active open">
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
                                            <li class="active">
                                                <a href="#"> Accessories</a>
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
                            <h1 class="title"> Accessories</h1>
                            <button type="button" class="button is-success" id="accessoriesadd">
                                <span class="icon is-small">
                                      <i class="fal fa-plus-circle"></i>
                                    </span>
                                    <span> Add Accessories</span>
                            </button>
                        </div>
                        <section class="section" style="padding-top:0px;">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-block">
                                            <section class="example">
                                                <div class="table-responsive">
                                                    <table id="accessoriestable" class="table table-bordered table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Image</th>
                                                            <th>Name</th>
                                                            <th>Brand</th>
                                                            <th>Category</th>
                                                            <th>Price</th>
                                                            <th>Quantity</th>
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
                <div class="modal" id="accessoriesmodal">
                <div class="modal-background"></div>
                <div class="modal-card">
                    <header class="modal-card-head">
                        <h1 class="modal-card-title" id="accessoriestitle">Add Accessories</h1>
                    </header>
                    <section class="modal-card-body">
                        <form method="POST" name="vform" id="vform" onsubmit="return Validate();" enctype="multipart/form-data">
                        <div class="field">
                            <div class="columns is-multiline is-mobile">
                                <div class="column is-half">
                                    <label class="label">Category</label>
                                    <div class="select" id="categorydanger">
                                        <select name="category" id="category">
                                            <option selected="true" disabled="disabled">Select Category</option>
                                            <?php 
                                            $sql = mysqli_query($con,"SELECT * FROM category WHERE deleted = 0");
                                            while($row = mysqli_fetch_assoc($sql))
                                            {
                                                ?>
                                                    <option value="<?php echo $row['category']; ?>"><?php echo $row['category']; ?></option>
                                                <?php
                                            } 
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="column is-half">
                                    <label class="label">Brand</label>
                                    <div class="select" id="branddanger">
                                        <select name="brand" id="brand">
                                            <option selected="true" disabled="disabled">Select Brand</option>
                                            <?php 
                                            $sql = mysqli_query($con,"SELECT * FROM brand WHERE deleted = 0");
                                            while($row = mysqli_fetch_assoc($sql))
                                            {
                                                ?>
                                                    <option value="<?php echo $row['brand']; ?>"><?php echo $row['brand']; ?></option>
                                                <?php
                                            } 
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Name</label>
                                <div class="control has-icons-right">
                                    <input maxlength="200" ="" class="input" id="name" name="name" placeholder="Product Name">
                                        <span class="icon is-small is-right">
                                            <i id="nameicon" class=""></i>
                                        </span>
                                        <p class="help is-danger" id="namemessage"></p>
                                </div>
                        </div>
                        <div class="field">
                            <div class="columns is-multiline is-mobile">
                                <div class="column is-half">
                                    <label class="label">Price</label>
                                        <div class="control has-icons-right">
                                            <input step="any" type="number" class="input" id="price" name="price" placeholder="Price">
                                                <span class="icon is-small is-right">
                                                    <i id="priceicon" class=""></i>
                                                </span>
                                                <p class="help is-danger" id="pricemessage"></p>
                                        </div>
                                </div>
                                <div class="column is-half">
                                    <label class="label">Quantity</label>
                                        <div class="control has-icons-right">
                                            <input min="0" type="number" class="input" id="quantity" name="quantity" placeholder="Quantity">
                                                <span class="icon is-small is-right">
                                                    <i id="quantityicon" class=""></i>
                                                </span>
                                                <p class="help is-danger" id="quantitymessage"></p>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Description</label>
                                <div class="control has-icons-right">
                                    <textarea maxlength="200" name="description" id="description" class="textarea" placeholder="Description"></textarea>
                                        <span class="icon is-small is-right">
                                            <i id="descriptionicon" class=""></i>
                                        </span>
                                        <p class="help is-danger" id="descriptionmessage"></p>
                                </div>
                        </div>
                        <div class="field">
                            <label class="label">Product Image</label>
                            <input type="file" name="user_image" id="user_image" accept="image/*" />
                            <span id="user_uploaded_image"></span>
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
             <div class="modal" id="loadmodal"> 
                <div class="modal-background"></div>
                <div class="modal-card">
                    <header class="modal-card-head">
                        <h1 class="modal-card-title" id="modaltitle"> Load Quantity</h1>
                    </header>
                    <section class="modal-card-body">
                        <form method="POST" name="vform2" id="vform2" onsubmit="return Load();">
                            <div class="field">
                                <label class="label"> Load
                                    <div class="control has-icons-right">
                                        <input type="number" min="0" class="input" id="loadtext" name="loadtext" placeholder="Quantity Ammount">
                                            <span class="icon is-small is-right">
                                                <i id="loadicon" class=""></i>
                                            </span>
                                            <p class="help is-danger" id="loadmessage"></p>
                                    </div>
                                </label>
                            </div>
                    </section>
                    <footer class="modal-card-foot">
                        <button class="button is-success" id="load" type="submit" name="bntLoad">Load</button>
                        <button class="button" id="loadcancel" type="button">Cancel</button>
                        <input type="hidden" name="user_id2" id="user_id2"></input>
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
                var dataTable = $('#accessoriestable').DataTable({
                    "order":[],
                    "ajax":{
                    url:"php/accessories/accessoriesfetch.php",
                    type:"POST"
                },
                    "columnDefs":[
                        {
                            "targets":[0,6],
                            "orderable":false,
                        },
                        {
                            "targets":[1,2,3,4],
                            "render":$.fn.dataTable.render.ellipsis(25),
                        },
                        {
                            "targets":[1,2,3,4,5,6],
                            "className":'dt-center',
                        },
                    ],
                });
                $('#accessoriesadd').click(function(){
                    clear();
                    $('#accessoriesmodal').addClass('is-active');
                    $('#operation').val('Add');
                });
                $('#cancel').click(function(){
                    $('#accessoriesmodal').removeClass('is-active');

                });
                $('#loadcancel').click(function(){
                    $('#loadmodal').removeClass('is-active');

                });
                $(document).on('click','button[name="load"]',function(){
                    $('#loadtext').val('');
                    $('#loadtext').removeClass('is-danger');
                    $('#loadicon').removeClass('fas fa-exclamation-triangle');
                    load_error.textContent = "";
                    var user_id2 = $(this).attr("id");
                    $.ajax({
                            url:"php/load/accessoriesquantityfetch.php",
                            method:"POST",
                            data:{user_id2:user_id2},
                            dataType:"json",
                            success:function(data)
                            {
                                $('#loadmodal').addClass('is-active');
                                $('#user_id2').val(user_id2);
                            }
                        });
                });
                $(document).on('click','button[name="update"]',function(){
                var user_id = $(this).attr("id");
                $.ajax({
                    url:"php/accessories/accessoriesfetchsingle.php",
                    method:"POST",
                    data:{user_id:user_id},
                    dataType:"json",
                    success:function(data)
                    {
                        clear();
                        $('#accessoriesmodal').addClass('is-active');
                        $('#name').val(data.pname);
                        $('#brand').val(data.brand);
                        $('#category').val(data.category);
                        $('#price').val(data.price);
                        $('#quantity').val(data.quantity);
                        $('#description').val(data.description);
                        $('#user_uploaded_image').html(data.user_image);
                        $('#accessoriestitle').html('Edit Accessories');
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
                            url:"php/accessories/accessoriesdelete.php",
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
                var category = document.forms['vform']['category'];
                var brand = document.forms['vform']['brand'];
                var productname = document.forms['vform']['name'];
                var productname_error = document.getElementById('namemessage');
                var productquantity = document.forms['vform']['quantity'];
                var productquantity_error = document.getElementById('quantitymessage');
                var productprice = document.forms['vform']['price'];
                var productprice_error = document.getElementById('pricemessage');
                var description = document.forms['vform']['description'];
                var description_error = document.getElementById('descriptionmessage');
                var load = document.forms['vform2']['loadtext'];
                var load_error = document.getElementById('loadmessage');

                function Load(){
                    if(load.value == 0){
                        $('#loadtext').addClass('is-danger');
                        $('#loadicon').addClass('fas fa-exclamation-triangle');
                        load_error.textContent = "Enter a valid ammount";
                    }
                    else {
                        var data = $('#vform2').serialize();
                        $.ajax({
                            data:data,
                            type: "post",
                            url: "php/load/accessoriesquantityadd.php",
                            success: function(data){
                                $('#loadmodal').removeClass('is-active');
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
                        })
                    }
                    return false;
                }

                function clear(){
                    category.value = "Select Category";
                    brand.value = "Select Brand";
                    productname.value = "";
                    productquantity.value = "";
                    productprice.value = "";
                    description.value = "";
                    $('#categorydanger').removeClass('is-danger');
                    $('#branddanger').removeClass('is-danger');
                    $('#name').removeClass('is-danger');
                    $('#nameicon').removeClass('fas fa-exclamation-triangle');
                    productname_error.textContent = "";
                    $('#quantity').removeClass('is-danger');
                    $('#quantityicon').removeClass('fas fa-exclamation-triangle');
                    productquantity_error.textContent = "";
                    $('#price').removeClass('is-danger');
                    $('#priceicon').removeClass('fas fa-exclamation-triangle');
                    productprice_error.textContent = "";
                    $('#description').removeClass('is-danger');
                    $('#descriptionicon').removeClass('fas fa-exclamation-triangle');
                    description_error.textContent = "";
                    $('#user_image').val('');
                    $('#user_uploaded_image').html('');

                }

                function Validate(){
                    if(category.value == "Select Category"){
                        $('#categorydanger').addClass('is-danger');
                    }
                    else {
                        $('#categorydanger').removeClass('is-danger');
                    }
                    if(brand.value == "Select Brand"){
                        $('#branddanger').addClass('is-danger');
                    }
                    else {
                         $('#branddanger').removeClass('is-danger');
                    }
                    if(productname.value == ""){
                        $('#name').addClass('is-danger');
                        $('#nameicon').addClass('fas fa-exclamation-triangle');
                        productname_error.textContent = "Enter a product name";
                    }
                    else {
                        $('#name').removeClass('is-danger');
                        $('#nameicon').removeClass('fas fa-exclamation-triangle');
                        productname_error.textContent = "";
                    }
                    if(productquantity.value == 0){
                        $('#quantity').addClass('is-danger');
                        $('#quantityicon').addClass('fas fa-exclamation-triangle');
                        productquantity_error.textContent = "Enter a valid quantity";
                    }
                    else {
                         $('#quantity').removeClass('is-danger');
                        $('#quantityicon').removeClass('fas fa-exclamation-triangle');
                        productquantity_error.textContent = "";
                    }
                    if(productprice.value == 0){
                        $('#price').addClass('is-danger');
                        $('#priceicon').addClass('fas fa-exclamation-triangle');
                        productprice_error.textContent = "Enter a valid price";
                    }
                    else {
                        $('#price').removeClass('is-danger');
                        $('#priceicon').removeClass('fas fa-exclamation-triangle');
                        productprice_error.textContent = "";
                    }
                    if(description.value == ""){
                        $('#description').addClass('is-danger');
                        $('#descriptionicon').addClass('fas fa-exclamation-triangle');
                        description_error.textContent = "Enter a Description";
                    }
                    else {
                        $('#description').removeClass('is-danger');
                        $('#descriptionicon').removeClass('fas fa-exclamation-triangle');
                        description_error.textContent = "";
                    }
                    var extension = $('#user_image').val().split('.').pop().toLowerCase();
                    if(extension != '')
                    {
                        if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
                        {
                            swal("Invalid image file","","warning").
                            then((value) =>{
                                $('#user_image').val('');
                            });
                            return false;
                        } 
                    }
                    if($('#user_image').val() == "" && $('#operation').val() == "Add"){
                        swal("Please fill in the necessary information","","warning");
                        return false;
                    }
                    else if((category.value != "Select Category")&&(brand.value != "Select Brand")&&(productname.value != "")&&(productquantity.value != 0)&&(productprice.value != 0)){
                        if($('#operation').val() == "Add"){
                           var form = $('#vform')[0];
                           var formData = new FormData(form);
                           $.ajax({
                               url: "php/accessories/accessoriesadd.php",
                               method: "POST",
                               data: formData,
                               contentType:false,
                               processData:false,
                               success: function(data){
                                   if(data == "Success"){
                                        $('#accessoriesmodal').removeClass('is-active');
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
                                   else{
                                    swal(data + ' is already exist','','error',{
                                        closeOnClickOutside:false,
                                    })
                                    .then((value) => {
                                        productname.value = '';
                                        productname.focus();
                                    });
                                   }
                               }
                           })
                        }
                        else if($('#operation').val() == "Edit"){
                           var form = $('#vform')[0];
                           var formData = new FormData(form);
                           $.ajax({
                               url: "php/accessories/accessoriesupdate.php",
                               method: "POST",
                               data: formData,
                               contentType:false,
                               processData:false,
                               success: function(data){
                                   if(data == "Success"){
                                        $('#accessoriesmodal').removeClass('is-active');
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
                                    })
                                    .then((value) => {
                                        productname.value = '';
                                        productname.focus();
                                    });
                                   }
                               }
                           })
                        }
                    }
                    return false;

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
    header('Location: ../User/');
}

 ?>