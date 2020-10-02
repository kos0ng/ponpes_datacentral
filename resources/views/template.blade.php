<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>@yield('judul_halaman')</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('/css/theme.css') }}" rel="stylesheet" media="all">
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>

</head>
@php
$user= Auth::user();
$unit_pondok=json_encode(DB::table('unit_lembaga')->where('induk_lembaga','like','1%')->get());
$unit_madrasah=json_encode(DB::table('unit_lembaga')->where('induk_lembaga','like','5%')->get());
@endphp
<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="{{ route('data_santri') }}">
                            {{-- <img src="{{ asset('/images/icon/logo.png') }}" alt="CoolAdmin" /> --}}
                            <h3>PP Fathul Ulum</h3>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a href="{{ route('data_santri') }}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="@yield('tambah')">
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Tambah Data</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Data Santri</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                {{-- <a href="#">
                    <img src="{{ asset('/images/icon/logo.png') }}" alt="Cool Admin" />
                </a> --}}
                <a class="logo" href="{{ route('data_santri') }}">
                            {{-- <img src="{{ asset('/images/icon/logo.png') }}" alt="CoolAdmin" /> --}}
                            <h4>PP Fathul Ulum</h4>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="@yield('dashboard') has-sub">
                            <a href="{{ route('data_santri') }}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
{{--                         <li class="@yield('tambah')">
                            <a href="{{ route('tambah_data') }}">
                                <i class="far fa-check-square"></i>Tambah Data</a>
                        </li> --}}
                        <li class="has-sub @yield('data_santri')">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Data Santri</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ route('tambah_data') }}">
                                        <i class="far fa-check-square"></i>Tambah Data</a>
                                </li>
                                <li>
                                    <a href="{{ route('list_group') }}">
                                        <i class="far fa-check-square"></i>List Data</a>
                                </li>
                                {{-- <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li> --}}
                            </ul>
                        </li>
                        <li class="has-sub @yield('data_absensi')">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-list-ol"></i>Data Absensi</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                {{-- <li>
                                    <a href="{{ route('tambah_data') }}">
                                        <i class="far fa-check-square"></i>Tambah Data</a>
                                </li> --}}
                                <li>
                                    <a href="{{ route('list_grpabsen') }}">
                                        <i class="far fa-check-square"></i>List Absensi</a>
                                </li>
                                {{-- <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li> --}}
                            </ul>
                        </li>
                        <li class="has-sub @yield('data_pembayaran')">
                            <a class="js-arrow" href="#">
                                <i class="fa fa-bank"></i>Data Pembayaran</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                {{-- <li>
                                    <a href="{{ route('tambah_data') }}">
                                        <i class="far fa-check-square"></i>Tambah Data</a>
                                </li> --}}
                                <li>
                                    <a href="{{ route('master_biaya') }}">
                                        <i class="far fa-check-square"></i>Master Data</a>
                                </li>
                                {{-- <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li> --}}
                            </ul>
                        </li>
                        <li class="has-sub @yield('data_lembaga')">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-building"></i>Data Lembaga</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                {{-- <li>
                                    <a href="{{ route('tambah_data') }}">
                                        <i class="far fa-check-square"></i>Tambah Data</a>
                                </li> --}}
                                <li>
                                    <a href="{{ route('list_lembaga') }}">
                                        <i class="far fa-check-square"></i>Master Data</a>
                                </li>
                                {{-- <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li> --}}
                            </ul>
                        </li>
                        <li class="has-sub @yield('data_user')">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-user"></i>Data Admin</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ route('list_user') }}">
                                        <i class="far fa-check-square"></i>Master Data</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub @yield('fitur_lain')">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-plus"></i>Fitur Lain</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ route('mass_updatejenis') }}">
                                        <i class="far fa-check-square"></i>Mass Update Jenis</a>
                                </li>
                                <li>
                                    <a href="{{ route('mass_insertkat') }}">
                                        <i class="far fa-check-square"></i>Mass Update Kategori</a>
                                </li>
                            </ul>
                        </li>
                        {{-- <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li> --}}
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            {{-- <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form> --}}
                            <div class="header-button" style="margin-left: 90%">
                               {{--  <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="account-wrap" >
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="{{ asset('/images/profile/default.png')}}" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">{{$user->name}}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="{{ asset('/images/profile/default.png')}}" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">{{$user->name}}</a>
                                                    </h5>
                                                    <span class="email">{{$user->email}}</span>
                                                </div>
                                            </div>
                                            {{-- <div class="account-dropdown__body"> --}}
                                                {{-- <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div> --}}
                                                {{-- <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div> --}}
                                                {{-- <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div> --}}
                                            {{-- </div> --}}
                                            <div class="account-dropdown__footer">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            @yield('konten')
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('/vendor/slick/slick.min.js') }}">
    </script>
    <script src="{{ asset('/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ asset('/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('/vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ asset('/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('/vendor/select2/select2.min.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ asset('/js/main.js') }}"></script>
    <script>
        $(document).ready(function(){
        $('#myTable').DataTable();
        });
        function deleteFunc(id_santri){
            if (confirm('Yakin ingin menghapus data?')) {
                $.get("/data_santri/delete/"+id_santri,function(result){    
                    // console.log(result);
                    location.reload();
                });
            }
            }

         function deleteLbg(induk_lembaga){
            if (confirm('Yakin ingin menghapus data?')) {
                $.get("/data_santri/delete_lembaga/"+induk_lembaga,function(result){    
                    // console.log(result);
                    location.reload();
                });
            }
            }
        function deleteBiaya(id_biaya){
            if (confirm('Yakin ingin menghapus data?')) {
                $.get("/data_santri/delete_biaya/"+id_biaya,function(result){    
                    // console.log(result);
                    location.reload();
                });
            }
            }
        function deleteUser(id){
            if (confirm('Yakin ingin menghapus data?')) {
                $.get("/data_santri/delete_user/"+id,function(result){   
                    location.reload();
                });
            }
            }
        function resetAbsen(id){
            if (confirm('Yakin ingin mereset absen?')) {
                $.get("/data_santri/reset_absen/"+id,function(result){   
                    location.reload();
                });
            }
            }
        function updateSB(id){
            if (confirm('Yakin ingin mengupdate data ke Santri Baru?')) {
                $.get("/data_santri/update_sb/"+id,function(result){   
                    location.reload();
                });
            }
            }
        function updateSL(id){
            if (confirm('Yakin ingin mengupdate data ke Santri Lama?')) {
                $.get("/data_santri/update_sl/"+id,function(result){   
                    location.reload();
                });
            }
            }
        $(document).ready(function(){
        var data_madrasah =JSON.parse('<?php print_r($unit_madrasah) ?>');
        var fieldHTML1 = '<div><select name="id_madrasah[]" id="select" style="width: 70%;height: 40px;margin-top:2%">';
        for (var i = 0; i < Object.values(data_madrasah).length; i++) {
            fieldHTML1+='<option value="'+data_madrasah[i].induk_lembaga+'">'+data_madrasah[i].nama_lembaga+'</option>';
        }
        fieldHTML1+='</select><button type="button" class="btn btn-danger removeButton" style="margin-left:2%">Delete</button></div>';
        var data_pondok =JSON.parse('<?php print_r($unit_pondok) ?>');
        var fieldHTML2 = '<div><select name="id_pondok[]" id="select" style="width: 70%;height: 40px;margin-top:2%">';
        for (var i = 0; i < Object.values(data_pondok).length; i++) {
            fieldHTML2+='<option value="'+data_pondok[i].induk_lembaga+'">'+data_pondok[i].nama_lembaga+'</option>';
        }
        fieldHTML2+='</select><button type="button" class="btn btn-danger removeButton" style="margin-left:2%">Delete</button></div>';
        var maxField = 10; //Input fields increment limitation
        var addButton1 = $('.addMadrasah'); //Add button selector
        var addButton2 = $('.addPondok'); //Add button selector
        var wrapper1 = $('.madrasahField'); //Input field wrapper
        var wrapper2 = $('.pondokField');
        // var fieldHTML1 = '<div><select name="id_madrasah[]" id="select" style="width: 70%;height: 40px;margin-top:2%"><option value="50">--------------------------</option><option value="51">Madrasah Diniyah Futuhiyah</option><option value="52">Madrasah Diniyah Quraniyah</option><option value="53">Madrasah Diniyah Almunawaroh</option><option value="54">Madrasah Ibtidaiyah</option><option value="55">TK Kusuma Mulia</option></select><button type="button" class="btn btn-danger removeButton" style="margin-left:2%">Delete</button></div>';
        // var fieldHTML2= '<div><select name="id_pondok[]" id="select" style="width: 70%;height: 40px;margin-top:2%"><option value="10">--------------------------</option><option value="11">Pondok Putra Induk</option><option value="12">Pondok Putri Induk</option><option value="13">Pondok An Nur</option><option value="14">Pondok Al Anwar</option><option value="15">Pondok As Salam</option><option value="16">Pondok Al Fatih</option><option value="17">Pondok Al Huda</option></select><button type="button" class="btn btn-danger removeButton" style="margin-left:2%">Delete</button></div>'
        var x = 1; //Initial field counter is 1
        $(addButton1).click(function(){
        if(x < maxField){ 
                x++; //Increment field counter
                $(wrapper1).append(fieldHTML1); //Add field html
            }
        });

        $(addButton2).click(function(){
        var y=1;
        if(y < maxField){ 
                y++; //Increment field counter
                $(wrapper2).append(fieldHTML2); //Add field html
            }
        });
    
    //Once remove button is clicked
        $(wrapper1).on('click', '.removeButton', function(e){
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
        });
        $(wrapper2).on('click', '.removeButton', function(e){
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });

    //       $('#madrasahCategory').on('change', function(e){
    //   console.log(e);
    //   var cat_id = e.target.value; 

    //   //ajax

    //   $.get('/data_santri/get_biaya/' + cat_id, function(data){

    //     $('#subcat_madrasah').empty();

    //     $.each(data, function(index, subcatObj){
    //       $('#subcat_madrasah').append('<option value="'+subcatObj.id_biaya+'">'+subcatObj.kategori+'</option>');
    //     });
    //   });
    // });
    </script>
</body>

</html>
<!-- end document-->
