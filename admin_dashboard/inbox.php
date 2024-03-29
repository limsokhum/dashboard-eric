﻿<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Preschool - Bootstrap Admin Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <link href="../../../../css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">

    <link rel="stylesheet" href="assets/css/select2.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
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
                <div class="card">
                    <div class="card-header">
                        <h4 class="page-title">Inbox</h4>
                    </div>
                    <div class="card-body">
                        <div class="email-header mb-3">
                            <div class="row">
                                <div class="col-sm-9 col-md-8 col-8 top-action-left">
                                    <div class="float-left">
                                        <div class="btn-group dropdown-action">
                                            <button type="button" class="btn btn-white dropdown-toggle"
                                                data-toggle="dropdown">Select <i
                                                    class="fas fa-angle-down "></i></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">All</a>
                                                <a class="dropdown-item" href="#">None</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Read</a>
                                                <a class="dropdown-item" href="#">Unread</a>
                                            </div>
                                        </div>
                                        <div class="btn-group dropdown-action">
                                            <button type="button" class="btn btn-white dropdown-toggle"
                                                data-toggle="dropdown">Actions <i
                                                    class="fas fa-angle-down "></i></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Reply</a>
                                                <a class="dropdown-item" href="#">Forward</a>
                                                <a class="dropdown-item" href="#">Archive</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Mark As Read</a>
                                                <a class="dropdown-item" href="#">Mark As Unread</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                        <div class="btn-group dropdown-action">
                                            <button type="button" class="btn btn-white dropdown-toggle"
                                                data-toggle="dropdown"><i class="fas fa-folder"></i> <i
                                                    class="fas fa-angle-down"></i></button>
                                            <div role="menu" class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Social</a>
                                                <a class="dropdown-item" href="#">Forums</a>
                                                <a class="dropdown-item" href="#">Updates</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Spam</a>
                                                <a class="dropdown-item" href="#">Trash</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">New</a>
                                            </div>
                                        </div>
                                        <div class="btn-group dropdown-action">
                                            <button type="button" data-toggle="dropdown"
                                                class="btn btn-white dropdown-toggle"><i class="fas fa-tags"></i> <i
                                                    class="fas fa-angle-down"></i></button>
                                            <div role="menu" class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Work</a>
                                                <a class="dropdown-item" href="#">Family</a>
                                                <a class="dropdown-item" href="#">Social</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Primary</a>
                                                <a class="dropdown-item" href="#">Promotions</a>
                                                <a class="dropdown-item" href="#">Forums</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="float-left">
                                        <input type="text" placeholder="Search Messages"
                                            class="form-control search-message">
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-4 col-4 top-action-right">
                                    <div class="text-right">
                                        <span class="text-muted d-none d-md-inline-block">Showing 10 of 112 </span>
                                        <button type="button" title="Refresh" data-toggle="tooltip"
                                            class="btn btn-white d-none d-md-inline-block"><i
                                                class="fas fa-sync-alt"></i></button>
                                        <div class="btn-group">
                                            <a class="btn btn-white"><i class="fas fa-angle-left"></i></a>
                                            <a class="btn btn-white"><i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="email-content">
                            <div class="table-responsive">
                                <table class="table table-inbox table-hover">
                                    <thead class="thead-light">
                                        <tr>
                                            <th colspan="6">
                                                <input type="checkbox" class="checkbox-all">
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="unread clickable-row" data-href="mail-view.html">
                                            <td>
                                                <input type="checkbox" class="checkmail">
                                            </td>
                                            <td><span class="mail-important"><i class="fas fa-star starred"></i></span>
                                            </td>
                                            <td class="name">John Doe</td>
                                            <td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                            </td>
                                            <td><i class="fas fa-paperclip"></i></td>
                                            <td class="mail-date">13:14</td>
                                        </tr>
                                        <tr class="unread clickable-row" data-href="mail-view.html">
                                            <td>
                                                <input type="checkbox" class="checkmail">
                                            </td>
                                            <td><span class="mail-important"><i class="far fa-star"></i></span></td>
                                            <td class="name">Envato Account</td>
                                            <td class="subject">Important account security update from Envato</td>
                                            <td></td>
                                            <td class="mail-date">8:42</td>
                                        </tr>
                                        <tr class="clickable-row" data-href="mail-view.html">
                                            <td>
                                                <input type="checkbox" class="checkmail">
                                            </td>
                                            <td><span class="mail-important"><i class="far fa-star"></i></span></td>
                                            <td class="name">Twitter</td>
                                            <td class="subject">HRMS Bootstrap Admin Template</td>
                                            <td></td>
                                            <td class="mail-date">30 Nov</td>
                                        </tr>
                                        <tr class="unread clickable-row" data-href="mail-view.html">
                                            <td>
                                                <input type="checkbox" class="checkmail">
                                            </td>
                                            <td><span class="mail-important"><i class="far fa-star"></i></span></td>
                                            <td class="name">Richard Parker</td>
                                            <td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                            </td>
                                            <td></td>
                                            <td class="mail-date">18 Sep</td>
                                        </tr>
                                        <tr class="clickable-row" data-href="mail-view.html">
                                            <td>
                                                <input type="checkbox" class="checkmail">
                                            </td>
                                            <td><span class="mail-important"><i class="far fa-star"></i></span></td>
                                            <td class="name">John Smith</td>
                                            <td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                            </td>
                                            <td></td>
                                            <td class="mail-date">21 Aug</td>
                                        </tr>
                                        <tr class="clickable-row" data-href="mail-view.html">
                                            <td>
                                                <input type="checkbox" class="checkmail">
                                            </td>
                                            <td><span class="mail-important"><i class="far fa-star"></i></span></td>
                                            <td class="name">me, Robert Smith (3)</td>
                                            <td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                            </td>
                                            <td></td>
                                            <td class="mail-date">1 Aug</td>
                                        </tr>
                                        <tr class="unread clickable-row" data-href="mail-view.html">
                                            <td>
                                                <input type="checkbox" class="checkmail">
                                            </td>
                                            <td><span class="mail-important"><i class="far fa-star"></i></span></td>
                                            <td class="name">Codecanyon</td>
                                            <td class="subject">Welcome To Codecanyon</td>
                                            <td></td>
                                            <td class="mail-date">Jul 13</td>
                                        </tr>
                                        <tr class="clickable-row" data-href="mail-view.html">
                                            <td>
                                                <input type="checkbox" class="checkmail">
                                            </td>
                                            <td><span class="mail-important"><i class="far fa-star"></i></span></td>
                                            <td class="name">Richard Miles</td>
                                            <td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                            </td>
                                            <td><i class="fas fa-paperclip"></i></td>
                                            <td class="mail-date">May 14</td>
                                        </tr>
                                        <tr class="unread clickable-row" data-href="mail-view.html">
                                            <td>
                                                <input type="checkbox" class="checkmail">
                                            </td>
                                            <td><span class="mail-important"><i class="far fa-star"></i></span></td>
                                            <td class="name">John Smith</td>
                                            <td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                            </td>
                                            <td></td>
                                            <td class="mail-date">11/11/16</td>
                                        </tr>
                                        <tr class="clickable-row" data-href="mail-view.html">
                                            <td>
                                                <input type="checkbox" class="checkmail">
                                            </td>
                                            <td><span class="mail-important"><i class="fas fa-star starred"></i></span>
                                            </td>
                                            <td class="name">Mike Litorus</td>
                                            <td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                            </td>
                                            <td></td>
                                            <td class="mail-date">10/31/16</td>
                                        </tr>
                                    </tbody>
                                </table>
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

    <script src="assets/js/app.js"></script>
</body>

</html>