﻿<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Preschool - Bootstrap Admin Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo-eric.png">

    <link href="../../../../css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">

    <link rel="stylesheet" href="assets/css/fullcalendar.min.css">

    <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="assets/plugins/morris/morris.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="shortcut icon" href="assets/img/logo-eric.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/img/logo-eric.png" type="image/x-icon">
</head>

<body>

    <div class="main-wrapper">

        <!-- start header -->
        <?php include('include/header.php');?>
        <!-- ent header -->

        <!-- start lift sidebar  -->
        <?php include('include/sidebar.php');?>
        <!-- end left sidebar -->



        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="page-title mb-0">Dashboard</h3>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget dash-widget5">
                            <span class="float-left"><img src="assets/img/dash/dash-1.png" alt="" width="80"></span>
                            <div class="dash-widget-info text-right">
                                <span>Students</span>
                                <h3>60,000</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget dash-widget5">
                            <div class="dash-widget-info text-left d-inline-block">
                                <span>Teachers</span>
                                <h3>12,000</h3>
                            </div>
                            <span class="float-right"><img src="assets/img/dash/dash-2.png" width="80" alt=""></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget dash-widget5">
                            <span class="float-left"><img src="assets/img/dash/dash-3.png" alt="" width="80"></span>
                            <div class="dash-widget-info text-right">
                                <span>Parents</span>
                                <h3>20,000</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget dash-widget5">
                            <div class="dash-widget-info d-inline-block text-left">
                                <span>Total Earnings</span>
                                <h3>$20,000</h3>
                            </div>
                            <span class="float-right"><img src="assets/img/dash/dash-4.png" alt="" width="80"></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="page-title">
                                            Students Survay
                                        </div>
                                    </div>
                                    <div class="col text-right">
                                        <div class=" mt-sm-0 mt-2">
                                            <button class="btn btn-light" type="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"><i
                                                    class="fas fa-ellipsis-h"></i></button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="chart1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="page-title">
                                            Student Performance
                                        </div>
                                    </div>
                                    <div class="col text-right">
                                        <div class=" mt-sm-0 mt-2">
                                            <button class="btn btn-light" type="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"><i
                                                    class="fas fa-ellipsis-h"></i></button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="chart2"></div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-sm-6">
                                        <div class="page-title">
                                            All Students
                                        </div>
                                    </div>
                                    <div class="col-sm-6 text-sm-right">
                                        <div class=" mt-sm-0 mt-2">
                                            <button class="btn btn-outline-primary mr-2"><img src="assets/img/excel.png"
                                                    alt=""><span class="ml-2">Excel</span></button>
                                            <button class="btn btn-outline-danger mr-2"><img src="assets/img/pdf.png"
                                                    alt="" height="18"><span class="ml-2">PDF</span></button>
                                            <button class="btn btn-light" type="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"><i
                                                    class="fas fa-ellipsis-h"></i></button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table custom-table">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Name </th>
                                                <th>Student ID</th>
                                                <th>Class</th>
                                                <th>Section</th>
                                                <th>Mobile</th>
                                                <th>Date of Birth</th>
                                                <th class="text-right">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h2><a href="profile.html" class="avatar text-white"><img
                                                                src="assets/img/profile/img-1.jpg" alt=""></a><a
                                                            href="profile.html">Parker <span></span></a></h2>
                                                </td>
                                                <td>ST-0d001</td>
                                                <td>1</td>
                                                <td>A</td>
                                                <td>973-584-58700</td>
                                                <td>20/1/2021</td>
                                                <td class="text-right">
                                                    <a href="edit-student.html" class="btn btn-primary btn-sm mb-1">
                                                        <i class="far fa-edit"></i>
                                                    </a>
                                                    <button type="submit" data-toggle="modal"
                                                        data-target="#delete_employee"
                                                        class="btn btn-danger btn-sm mb-1">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2><a href="profile.html" class="avatar text-white"><img
                                                                src="assets/img/profile/img-2.jpg" alt=""></a><a
                                                            href="profile.html">Smith <span></span></a></h2>
                                                </td>
                                                <td>ST-0d002</td>
                                                <td>2</td>
                                                <td>B</td>
                                                <td>973-584-58700</td>
                                                <td>20/1/2021</td>
                                                <td class="text-right">
                                                    <a href="edit-student.html" class="btn btn-primary btn-sm mb-1">
                                                        <i class="far fa-edit"></i>
                                                    </a>
                                                    <button type="submit" data-toggle="modal"
                                                        data-target="#delete_employee"
                                                        class="btn btn-danger btn-sm mb-1">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2><a href="profile.html" class="avatar text-white"><img
                                                                src="assets/img/profile/img-3.jpg" alt=""></a><a
                                                            href="profile.html">Hensley<span></span></a></h2>
                                                </td>
                                                <td>ST-0d003</td>
                                                <td>1</td>
                                                <td>A</td>
                                                <td>973-584-58700</td>
                                                <td>20/1/2021</td>
                                                <td class="text-right">
                                                    <a href="edit-student.html" class="btn btn-primary btn-sm mb-1">
                                                        <i class="far fa-edit"></i>
                                                    </a>
                                                    <button type="submit" data-toggle="modal"
                                                        data-target="#delete_employee"
                                                        class="btn btn-danger btn-sm mb-1">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2><a href="profile.html" class="avatar text-white"><img
                                                                src="assets/img/profile/img-4.jpg" alt=""></a><a
                                                            href="profile.html">Friesen<span></span></a></h2>
                                                </td>
                                                <td>ST-0d004</td>
                                                <td>1</td>
                                                <td>A</td>
                                                <td>973-584-58700</td>
                                                <td>20/1/2021</td>
                                                <td class="text-right">
                                                    <a href="edit-student.html" class="btn btn-primary btn-sm mb-1">
                                                        <i class="far fa-edit"></i>
                                                    </a>
                                                    <button type="submit" data-toggle="modal"
                                                        data-target="#delete_employee"
                                                        class="btn btn-danger btn-sm mb-1">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2><a href="profile.html" class="avatar text-white"><img
                                                                src="assets/img/profile/img-5.jpg" alt=""></a><a
                                                            href="profile.html">Jackson<span></span></a></h2>
                                                </td>
                                                <td>ST-0d005</td>
                                                <td>1</td>
                                                <td>A</td>
                                                <td>973-584-58700</td>
                                                <td>20/1/2021</td>
                                                <td class="text-right">
                                                    <a href="edit-student.html" class="btn btn-primary btn-sm mb-1">
                                                        <i class="far fa-edit"></i>
                                                    </a>
                                                    <button type="submit" data-toggle="modal"
                                                        data-target="#delete_employee"
                                                        class="btn btn-danger btn-sm mb-1">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2><a href="profile.html" class="avatar text-white"><img
                                                                src="assets/img/profile/img-6.jpg" alt=""></a><a
                                                            href="profile.html">Mason<span></span></a></h2>
                                                </td>
                                                <td>ST-0d006</td>
                                                <td>1</td>
                                                <td>A</td>
                                                <td>973-584-58700</td>
                                                <td>20/1/2021</td>
                                                <td class="text-right">
                                                    <a href="edit-student.html" class="btn btn-primary btn-sm mb-1">
                                                        <i class="far fa-edit"></i>
                                                    </a>
                                                    <button type="submit" data-toggle="modal"
                                                        data-target="#delete_employee"
                                                        class="btn btn-danger btn-sm mb-1">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2><a href="profile.html" class="avatar text-white"><img
                                                                src="assets/img/profile/img-7.jpg" alt=""></a><a
                                                            href="profile.html">Garrett <span></span></a></h2>
                                                </td>
                                                <td>ST-0d007</td>
                                                <td>1</td>
                                                <td>A</td>
                                                <td>973-584-58700</td>
                                                <td>20/1/2021</td>
                                                <td class="text-right">
                                                    <a href="edit-student.html" class="btn btn-primary btn-sm mb-1">
                                                        <i class="far fa-edit"></i>
                                                    </a>
                                                    <button type="submit" data-toggle="modal"
                                                        data-target="#delete_employee"
                                                        class="btn btn-danger btn-sm mb-1">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-sm-6">
                                        <div class="page-title">
                                            New Students
                                        </div>
                                    </div>
                                    <div class="col-sm-6 text-sm-right">
                                        <div class=" mt-sm-0 mt-2">
                                            <button class="btn btn-outline-primary mr-2"><img src="assets/img/excel.png"
                                                    alt=""><span class="ml-2">Excel</span></button>
                                            <button class="btn btn-outline-danger mr-2"><img src="assets/img/pdf.png"
                                                    alt="" height="18"><span class="ml-2">PDF</span></button>
                                            <button class="btn btn-light" type="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"><i
                                                    class="fas fa-ellipsis-h"></i></button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="table-responsive">
                                            <table class="table custom-table">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Name </th>
                                                        <th>Student ID</th>
                                                        <th>Parent Name</th>
                                                        <th>Mobile</th>
                                                        <th>Address</th>
                                                        <th>Date Of Admition</th>
                                                        <th>Fees Receipt</th>
                                                        <th class="text-right">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <h2><a href="profile.html" class="avatar text-white"><img
                                                                        src="assets/img/profile/img-1.jpg" alt=""></a><a
                                                                    href="profile.html">Parker <span></span></a></h2>
                                                        </td>
                                                        <td>ST-0d001</td>
                                                        <td>Mr. Johnson</td>
                                                        <td>973-584-58700</td>
                                                        <td>9946 Baker Rd. Marysville, </td>
                                                        <td>20/1/2021</td>
                                                        <td><img src="assets/img/pdf.png" alt=""></td>
                                                        <td class="text-right">
                                                            <a href="edit-student.html"
                                                                class="btn btn-primary btn-sm mb-1">
                                                                <i class="far fa-edit"></i>
                                                            </a>
                                                            <button type="submit" data-toggle="modal"
                                                                data-target="#delete_employee"
                                                                class="btn btn-danger btn-sm mb-1">
                                                                <i class="far fa-trash-alt"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h2><a href="profile.html" class="avatar text-white"><img
                                                                        src="assets/img/profile/img-2.jpg" alt=""></a><a
                                                                    href="profile.html">Smith <span></span></a></h2>
                                                        </td>
                                                        <td>ST-0d002</td>
                                                        <td>Mr. Luke Idaman</td>
                                                        <td>973-584-58700</td>
                                                        <td>193 S. Harrison Drive </td>
                                                        <td>20/1/2021</td>
                                                        <td><img src="assets/img/pdf.png" alt=""></td>
                                                        <td class="text-right">
                                                            <a href="edit-student.html"
                                                                class="btn btn-primary btn-sm mb-1">
                                                                <i class="far fa-edit"></i>
                                                            </a>
                                                            <button type="submit" data-toggle="modal"
                                                                data-target="#delete_employee"
                                                                class="btn btn-danger btn-sm mb-1">
                                                                <i class="far fa-trash-alt"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h2><a href="profile.html" class="avatar text-white"><img
                                                                        src="assets/img/profile/img-3.jpg" alt=""></a><a
                                                                    href="profile.html">Hensley<span></span></a></h2>
                                                        </td>
                                                        <td>ST-0d003</td>
                                                        <td>Mr. Kevin H</td>
                                                        <td>973-584-58700</td>
                                                        <td>8949 Golf St. Palm Coast </td>
                                                        <td>20/1/2021</td>
                                                        <td><img src="assets/img/pdf.png" alt=""></td>
                                                        <td class="text-right">
                                                            <a href="edit-student.html"
                                                                class="btn btn-primary btn-sm mb-1">
                                                                <i class="far fa-edit"></i>
                                                            </a>
                                                            <button type="submit" data-toggle="modal"
                                                                data-target="#delete_employee"
                                                                class="btn btn-danger btn-sm mb-1">
                                                                <i class="far fa-trash-alt"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h2><a href="profile.html" class="avatar text-white"><img
                                                                        src="assets/img/profile/img-4.jpg" alt=""></a><a
                                                                    href="profile.html">Friesen<span></span></a></h2>
                                                        </td>
                                                        <td>ST-0d004</td>
                                                        <td>Mr. Randy O</td>
                                                        <td>973-584-58700</td>
                                                        <td>23 Ohio Court Alexandria </td>
                                                        <td>20/1/2021</td>
                                                        <td><img src="assets/img/pdf.png" alt=""></td>
                                                        <td class="text-right">
                                                            <a href="edit-student.html"
                                                                class="btn btn-primary btn-sm mb-1">
                                                                <i class="far fa-edit"></i>
                                                            </a>
                                                            <button type="submit" data-toggle="modal"
                                                                data-target="#delete_employee"
                                                                class="btn btn-danger btn-sm mb-1">
                                                                <i class="far fa-trash-alt"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h2><a href="profile.html" class="avatar text-white"><img
                                                                        src="assets/img/profile/img-5.jpg" alt=""></a><a
                                                                    href="profile.html">Jackson<span></span></a></h2>
                                                        </td>
                                                        <td>ST-0d005</td>
                                                        <td>Mr. Steven</td>
                                                        <td>973-584-58700</td>
                                                        <td>338 North Cleveland Rd </td>
                                                        <td>20/1/2021</td>
                                                        <td><img src="assets/img/pdf.png" alt=""></td>
                                                        <td class="text-right">
                                                            <a href="edit-student.html"
                                                                class="btn btn-primary btn-sm mb-1">
                                                                <i class="far fa-edit"></i>
                                                            </a>
                                                            <button type="submit" data-toggle="modal"
                                                                data-target="#delete_employee"
                                                                class="btn btn-danger btn-sm mb-1">
                                                                <i class="far fa-trash-alt"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h2><a href="profile.html" class="avatar text-white"><img
                                                                        src="assets/img/profile/img-6.jpg" alt=""></a><a
                                                                    href="profile.html">Mason<span></span></a></h2>
                                                        </td>
                                                        <td>ST-0d006</td>
                                                        <td>Mr. Ervin</td>
                                                        <td>973-584-58700</td>
                                                        <td>7909 W. Sunnyslope St. </td>
                                                        <td>20/1/2021</td>
                                                        <td><img src="assets/img/pdf.png" alt=""></td>
                                                        <td class="text-right">
                                                            <a href="edit-student.html"
                                                                class="btn btn-primary btn-sm mb-1">
                                                                <i class="far fa-edit"></i>
                                                            </a>
                                                            <button type="submit" data-toggle="modal"
                                                                data-target="#delete_employee"
                                                                class="btn btn-danger btn-sm mb-1">
                                                                <i class="far fa-trash-alt"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h2><a href="profile.html" class="avatar text-white"><img
                                                                        src="assets/img/profile/img-7.jpg" alt=""></a>
                                                                <a href="profile.html">Garrett <span></span></a>
                                                            </h2>
                                                        </td>
                                                        <td>ST-0d007</td>
                                                        <td>Mr. Marquz</td>
                                                        <td>973-584-58700</td>
                                                        <td>7361 Dunbar Street </td>
                                                        <td>20/1/2021</td>
                                                        <td><img src="assets/img/pdf.png" alt=""></td>
                                                        <td class="text-right">
                                                            <a href="edit-student.html"
                                                                class="btn btn-primary btn-sm mb-1">
                                                                <i class="far fa-edit"></i>
                                                            </a>
                                                            <button type="submit" data-toggle="modal"
                                                                data-target="#delete_employee"
                                                                class="btn btn-danger btn-sm mb-1">
                                                                <i class="far fa-trash-alt"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="notification-box">
                    <div class="msg-sidebar notifications msg-noti">
                        <div class="topnav-dropdown-header">
                            <span>Messages</span>
                        </div>
                        <div class="drop-scroll msg-list-scroll">
                            <ul class="list-box">
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">R</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">Richard Miles </span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item new-message">
                                            <div class="list-left">
                                                <span class="avatar">J</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">Ruth C. Gault</span>
                                                <span class="message-time">1 Aug</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">T</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author"> Tarah Shropshire </span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">M</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">Mike Litorus</span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">C</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author"> Catherine Manseau </span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">D</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author"> Domenic Houston </span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">B</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author"> Buster Wigton </span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">R</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author"> Rolland Webber </span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">C</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author"> Claire Mapes </span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">M</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">Melita Faucher</span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">J</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">Jeffery Lalor</span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">L</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">Loren Gatlin</span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">T</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">Tarah Shropshire</span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="chat.html">See all messages</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/jquery.slimscroll.js"></script>

    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/moment.min.js"></script>

    <script src="assets/js/fullcalendar.min.js"></script>
    <script src="assets/js/jquery.fullcalendar.js"></script>

    <script src="assets/plugins/morris/morris.min.js"></script>
    <script src="assets/plugins/raphael/raphael-min.js"></script>
    <script src="assets/js/apexcharts.js"></script>
    <script src="assets/js/chart-data.js"></script>

    <script src="assets/js/app.js"></script>
</body>

</html>