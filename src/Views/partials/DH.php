﻿<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Shop :: Administrative Panel</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../src/Views/clinic/dashboard/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../src/Views/dashboard/css/adminlte.min.css">
    <link rel="stylesheet" href="../srcViews/dashboard/css/custom.css">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Right navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <div class="navbar-nav pl-2">
                <ol class="breadcrumb p-0 m-0 bg-white">
                    <li class="breadcrumb-item"><a href="categories.html">Categories</a></li>
                    <li class="breadcrumb-item active">List</li>
                </ol>
            </div>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link p-0 pr-3" data-toggle="dropdown" href="#">
                        <img src="img/avatar5.png" class='img-circle elevation-2' width="40" height="40" alt="">
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-3">
                        <h4 class="h4 mb-0"><strong>Mohit Singh</strong></h4>
                        <div class="mb-3">example@example.com</div>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-user-cog mr-2"></i> Settings
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-lock mr-2"></i> Change Password
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item text-danger">
                            <i class="fas fa-sign-out-alt mr-2"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <span class="brand-text font-weight-light">LARAVEL SHOP</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
								with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="index.php?page=admin_dashboard" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?page=admin_specialties" class="nav-link">
                                <i class="nav-icon fas fa-file-alt"></i>
                                <p>Specialties</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?page=admin_doctors" class="nav-link">
                                <i class="nav-icon fas fa-file-alt"></i>
                                <p>Doctors</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="brands.html" class="nav-link">
                                <svg class="h-6 nav-icon w-6 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <p>Brands</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="products.html" class="nav-link">
                                <i class="nav-icon fas fa-tag"></i>
                                <p>Products</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <!-- <i class="nav-icon fas fa-tag"></i> -->
                                <i class="fas fa-truck nav-icon"></i>
                                <p>Shipping</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="orders.html" class="nav-link">
                                <i class="nav-icon fas fa-shopping-bag"></i>
                                <p>Orders</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="discount.html" class="nav-link">
                                <i class="nav-icon  fa fa-percent" aria-hidden="true"></i>
                                <p>Discount</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="users.html" class="nav-link">
                                <i class="nav-icon  fas fa-users"></i>
                                <p>Users</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages.html" class="nav-link">
                                <i class="nav-icon  far fa-file-alt"></i>
                                <p>Pages</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>