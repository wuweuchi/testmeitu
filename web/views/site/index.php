<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<section class="vbox">
<header class="bg-black dk header navbar navbar-fixed-top-xs">
    <div class="navbar-header aside-md"><a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen"
                                           data-target="#nav"> <i class="fa fa-bars"></i> </a> <a href="#"
                                                                                                  class="navbar-brand"
                                                                                                  data-toggle="fullscreen"><img
                src="images/logo.png" class="m-r-sm">Notebook</a> <a class="btn btn-link visible-xs"
                                                                     data-toggle="dropdown" data-target=".nav-user"> <i
                class="fa fa-cog"></i> </a></div>
    <ul class="nav navbar-nav hidden-xs">
        <li class="dropdown"><a href="#" class="dropdown-toggle dker" data-toggle="dropdown"> <i
                    class="fa fa-building-o"></i> <span class="font-bold">Activity</span> </a>
            <section class="dropdown-menu aside-xl on animated fadeInLeft no-borders lt">
                <div class="wrapper lter m-t-n-xs"><a href="#" class="thumb pull-left m-r"> <img
                            src="images/avatar.jpg" class="img-circle"> </a>

                    <div class="clear"><a href="#"><span class="text-white font-bold">@Mike Mcalidek</a></span>
                        <small class="block">Art Director</small>
                        <a href="#" class="btn btn-xs btn-success m-t-xs">Upgrade</a></div>
                </div>
                <div class="row m-l-none m-r-none m-b-n-xs text-center">
                    <div class="col-xs-4">
                        <div class="padder-v"><span class="m-b-xs h4 block text-white">245</span>
                            <small class="text-muted">Followers</small>
                        </div>
                    </div>
                    <div class="col-xs-4 dk">
                        <div class="padder-v"><span class="m-b-xs h4 block text-white">55</span>
                            <small class="text-muted">Likes</small>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="padder-v"><span class="m-b-xs h4 block text-white">2,035</span>
                            <small class="text-muted">Photos</small>
                        </div>
                    </div>
                </div>
            </section>
        </li>
        <li>
            <div class="m-t m-l"><a href="price.html" class="dropdown-toggle btn btn-xs btn-primary"
                                    title="Upgrade"><i class="fa fa-long-arrow-up"></i></a></div>
        </li>
    </ul>
    <ul class="nav navbar-nav navbar-right hidden-xs nav-user">
        <li class="hidden-xs"><a href="#" class="dropdown-toggle dk" data-toggle="dropdown"> <i
                    class="fa fa-bell"></i> <span class="badge badge-sm up bg-danger m-l-n-sm count">2</span> </a>
            <section class="dropdown-menu aside-xl">
                <section class="panel bg-white">
                    <header class="panel-heading b-light bg-light"><strong>You have <span class="count">2</span>
                            notifications</strong></header>
                    <div class="list-group list-group-alt animated fadeInRight"><a href="#"
                                                                                   class="media list-group-item">
                            <span class="pull-left thumb-sm"> <img src="images/avatar.jpg" alt="John said"
                                                                   class="img-circle"> </span> <span
                                class="media-body block m-b-none"> Use awesome animate.css<br> <small
                                    class="text-muted">10 minutes ago
                                </small> </span> </a> <a href="#" class="media list-group-item"> <span
                                class="media-body block m-b-none"> 1.0 initial released<br> <small class="text-muted">1
                                    hour ago
                                </small> </span> </a></div>
                    <footer class="panel-footer text-sm"><a href="#" class="pull-right"><i
                                class="fa fa-cog"></i></a> <a href="#notes"
                                                              data-toggle="class:show animated fadeInRight">See all the
                            notifications</a></footer>
                </section>
            </section>
        </li>
        <li class="dropdown hidden-xs"><a href="#" class="dropdown-toggle dker" data-toggle="dropdown"><i
                    class="fa fa-fw fa-search"></i></a>
            <section class="dropdown-menu aside-xl animated fadeInUp">
                <section class="panel bg-white">
                    <form role="search">
                        <div class="form-group wrapper m-b-none">
                            <div class="input-group"><input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-btn"> <button type="submit" class="btn btn-info btn-icon">
                                            <i class="fa fa-search"></i></button> </span></div>
                        </div>
                    </form>
                </section>
            </section>
        </li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span
                    class="thumb-sm avatar pull-left"> <img src="images/avatar.jpg"> </span> John.Smith <b
                    class="caret"></b> </a>
            <ul class="dropdown-menu animated fadeInRight"><span class="arrow top"></span>
                <li><a href="#">Settings</a></li>
                <li><a href="profile.html">Profile</a></li>
                <li><a href="#"> <span class="badge bg-danger pull-right">3</span> Notifications </a></li>
                <li><a href="docs.html">Help</a></li>
                <li class="divider"></li>
                <li><a href="modal.lockme.html" data-toggle="ajaxModal">Logout</a></li>
            </ul>
        </li>
    </ul>
</header>
<section>
    <section class="hbox stretch"> <!-- .aside -->
        <aside class="bg-black lter aside-md hidden-print" id="nav">
            <section class="vbox">
                <header class="header bg-primary lter text-center clearfix">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-dark btn-icon" title="New project"><i
                                class="fa fa-plus"></i></button>
                        <div class="btn-group hidden-nav-xs">
                            <button type="button" class="btn btn-sm btn-primary dropdown-toggle"
                                    data-toggle="dropdown"> Switch Project <span class="caret"></span></button>
                            <ul class="dropdown-menu text-left">
                                <li><a href="#">Project</a></li>
                                <li><a href="#">Another Project</a></li>
                                <li><a href="#">More Projects</a></li>
                            </ul>
                        </div>
                    </div>
                </header>
                <section class="w-f scrollable">
                    <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0"
                         data-size="5px" data-color="#333333"> <!-- nav -->
                        <nav class="nav-primary hidden-xs">
                            <ul class="nav">
                                <li><a href="index.html"> <i class="fa fa-dashboard icon"> <b class="bg-danger"></b>
                                        </i> <span>Workset</span> </a></li>
                                <li class="active"><a href="#layout" class="active"> <i class="fa fa-columns icon">
                                            <b class="bg-warning"></b> </i> <span class="pull-right"> <i
                                                class="fa fa-angle-down text"></i> <i
                                                class="fa fa-angle-up text-active"></i> </span> <span>Layouts</span> </a>
                                    <ul class="nav lt">
                                        <li class="active"><a href="layout-c.html" class="active"> <i
                                                    class="fa fa-angle-right"></i> <span>Color option</span> </a></li>
                                        <li><a href="layout-r.html"> <i class="fa fa-angle-right"></i> <span>Right nav</span>
                                            </a></li>
                                        <li><a href="layout-h.html"> <i class="fa fa-angle-right"></i> <span>H-Layout</span>
                                            </a></li>
                                    </ul>
                                </li>
                                <li><a href="#uikit"> <i class="fa fa-flask icon"> <b class="bg-success"></b> </i>
                                        <span class="pull-right"> <i class="fa fa-angle-down text"></i> <i
                                                class="fa fa-angle-up text-active"></i> </span> <span>UI kit</span> </a>
                                    <ul class="nav lt">
                                        <li><a href="buttons.html"> <i class="fa fa-angle-right"></i>
                                                <span>Buttons</span> </a></li>
                                        <li><a href="icons.html"> <b class="badge bg-info pull-right">369</b> <i
                                                    class="fa fa-angle-right"></i> <span>Icons</span> </a></li>
                                        <li><a href="grid.html"> <i class="fa fa-angle-right"></i> <span>Grid</span>
                                            </a></li>
                                        <li><a href="widgets.html"> <b class="badge pull-right">8</b> <i
                                                    class="fa fa-angle-right"></i> <span>Widgets</span> </a></li>
                                        <li><a href="components.html"> <i class="fa fa-angle-right"></i> <span>Components</span>
                                            </a></li>
                                        <li><a href="list.html"> <i class="fa fa-angle-right"></i>
                                                <span>List group</span> </a></li>
                                        <li><a href="#table"> <i class="fa fa-angle-down text"></i> <i
                                                    class="fa fa-angle-up text-active"></i> <span>Table</span> </a>
                                            <ul class="nav bg">
                                                <li><a href="table-static.html"> <i class="fa fa-angle-right"></i>
                                                        <span>Table static</span> </a></li>
                                                <li><a href="table-datatable.html"> <i
                                                            class="fa fa-angle-right"></i> <span>Datatable</span> </a>
                                                </li>
                                                <li><a href="table-datagrid.html"> <i class="fa fa-angle-right"></i>
                                                        <span>Datagrid</span> </a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#form"> <i class="fa fa-angle-down text"></i> <i
                                                    class="fa fa-angle-up text-active"></i> <span>Form</span> </a>
                                            <ul class="nav bg">
                                                <li><a href="form-elements.html"> <i class="fa fa-angle-right"></i>
                                                        <span>Form elements</span> </a></li>
                                                <li><a href="form-validation.html"> <i
                                                            class="fa fa-angle-right"></i> <span>Form validation</span>
                                                    </a></li>
                                                <li><a href="form-wizard.html"> <i class="fa fa-angle-right"></i>
                                                        <span>Form wizard</span> </a></li>
                                            </ul>
                                        </li>
                                        <li><a href="chart.html"> <i class="fa fa-angle-right"></i>
                                                <span>Chart</span> </a></li>
                                        <li><a href="fullcalendar.html"> <i class="fa fa-angle-right"></i> <span>Fullcalendar</span>
                                            </a></li>
                                        <li><a href="portlet.html"> <i class="fa fa-angle-right"></i>
                                                <span>Portlet</span> </a></li>
                                        <li><a href="timeline.html"> <i class="fa fa-angle-right"></i> <span>Timeline</span>
                                            </a></li>
                                    </ul>
                                </li>
                                <li><a href="#pages"> <i class="fa fa-file-text icon"> <b class="bg-primary"></b>
                                        </i> <span class="pull-right"> <i class="fa fa-angle-down text"></i> <i
                                                class="fa fa-angle-up text-active"></i> </span> <span>Pages</span> </a>
                                    <ul class="nav lt">
                                        <li><a href="gallery.html"> <i class="fa fa-angle-right"></i>
                                                <span>Gallery</span> </a></li>
                                        <li><a href="profile.html"> <i class="fa fa-angle-right"></i>
                                                <span>Profile</span> </a></li>
                                        <li><a href="invoice.html"> <i class="fa fa-angle-right"></i>
                                                <span>Invoice</span> </a></li>
                                        <li><a href="intro.html"> <i class="fa fa-angle-right"></i>
                                                <span>Intro</span> </a></li>
                                        <li><a href="master.html"> <i class="fa fa-angle-right"></i>
                                                <span>Master</span> </a></li>
                                        <li><a href="gmap.html"> <i class="fa fa-angle-right"></i>
                                                <span>Google Map</span> </a></li>
                                        <li><a href="signin.html"> <i class="fa fa-angle-right"></i>
                                                <span>Signin</span> </a></li>
                                        <li><a href="signup.html"> <i class="fa fa-angle-right"></i>
                                                <span>Signup</span> </a></li>
                                        <li><a href="404.html"> <i class="fa fa-angle-right"></i> <span>404</span>
                                            </a></li>
                                    </ul>
                                </li>
                                <li><a href="mail.html"> <b class="badge bg-danger pull-right">3</b> <i
                                            class="fa fa-envelope-o icon"> <b class="bg-primary dker"></b> </i> <span>Message</span>
                                    </a></li>
                                <li><a href="notebook.html"> <i class="fa fa-pencil icon"> <b class="bg-info"></b>
                                        </i> <span>Notes</span> </a></li>
                            </ul>
                        </nav>
                        <!-- / nav --> </div>
                </section>
                <footer class="footer lt hidden-xs b-t b-black">
                    <div id="chat" class="dropup">
                        <section class="dropdown-menu on aside-md m-l-n">
                            <section class="panel bg-white">
                                <header class="panel-heading b-b b-light">Active chats</header>
                                <div class="panel-body animated fadeInRight"><p class="text-sm">No active chats.</p>

                                    <p><a href="#" class="btn btn-sm btn-default">Start a chat</a></p></div>
                            </section>
                        </section>
                    </div>
                    <div id="invite" class="dropup">
                        <section class="dropdown-menu on aside-md m-l-n">
                            <section class="panel bg-white">
                                <header class="panel-heading b-b b-light"> John <i
                                        class="fa fa-circle text-success"></i></header>
                                <div class="panel-body animated fadeInRight"><p class="text-sm">No contacts in your
                                        lists.</p>

                                    <p><a href="#" class="btn btn-sm btn-facebook"><i
                                                class="fa fa-fw fa-facebook"></i> Invite from Facebook</a></p></div>
                            </section>
                        </section>
                    </div>
                    <a href="#nav" data-toggle="class:nav-xs" class="pull-right btn btn-sm btn-black btn-icon"> <i
                            class="fa fa-angle-left text"></i> <i class="fa fa-angle-right text-active"></i> </a>

                    <div class="btn-group hidden-nav-xs">
                        <button type="button" title="Chats" class="btn btn-icon btn-sm btn-black"
                                data-toggle="dropdown" data-target="#chat"><i class="fa fa-comment-o"></i></button>
                        <button type="button" title="Contacts" class="btn btn-icon btn-sm btn-black"
                                data-toggle="dropdown" data-target="#invite"><i class="fa fa-facebook"></i></button>
                    </div>
                </footer>
            </section>
        </aside>
        <!-- /.aside -->
        <section id="content">
            <section class="vbox">
                <header class="header bg-white b-b b-light"><p>Layout with black color</p></header>
                <section class="scrollable wrapper w-f"><p class="h4">Contents...</p></section>
                <footer class="footer bg-white b-t b-light"><p>This is a footer</p></footer>
            </section>
            <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
        </section>
        <aside class="bg-light lter b-l aside-md hide" id="notes">
            <div class="wrapper">Notification</div>
        </aside>
    </section>
</section>
</section>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
