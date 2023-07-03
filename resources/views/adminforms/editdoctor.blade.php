<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ajout docteur</title>

         <!-- Bootstrap -->
         <link href={{asset('templateDashboard/vendors/bootstrap/dist/css/bootstrap.min.css')}} rel="stylesheet">
        <!-- Font Awesome -->
        <link href={{asset('templateDashboard/vendors/font-awesome/css/font-awesome.min.css')}} rel="stylesheet">
        <!-- NProgress -->
        <link href={{asset('templateDashboard/vendors/nprogress/nprogress.css')}} rel="stylesheet">
        <!-- iCheck -->
        <link href={{asset('templateDashboard/vendors/iCheck/skins/flat/green.css')}} rel="stylesheet">
        <!-- bootstrap-wysiwyg -->
        <link href={{asset('templateDashboard/vendors/google-code-prettify/bin/prettify.min.css')}} rel="stylesheet">
        <!-- Select2 -->
        <link href={{asset('templateDashboard/vendors/select2/dist/css/select2.min.css')}} rel="stylesheet">
        <!-- Switchery -->
        <link href={{asset('templateDashboard/vendors/switchery/dist/switchery.min.css')}} rel="stylesheet">
        <!-- starrr -->
        <link href={{asset('templateDashboard/vendors/starrr/dist/starrr.css')}} rel="stylesheet">
        <!-- bootstrap-daterangepicker -->
        <link href={{asset('templateDashboard/vendors/bootstrap-daterangepicker/daterangepicker.css')}} rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href={{asset('templateDashboard/build/css/custom.min.css')}} rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="/dashboard" class="site_title"><i class="fa-sharp fa-solid fa-house-medical"></i> <span>HOSPITAL APP</span></a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <div class="profile clearfix">
                            <div class="profile_pic">
                                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                            </div>
                            <div class="profile_info">
                                <span>Bonjour et bienvenue</span>
                                <h2>{{ Auth::user()->name; }}</h2>
                            </div>
                        </div>
                        <!-- /menu profile quick info -->

                        <br />

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <h3>Général</h3>
                                <ul class="nav side-menu">
                                <li><a><i class="fa fa-home"></i> Accueil <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                    <li><a href="/dashboard">Tableau de bord</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-edit"></i> Création et ajouts <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                    <li><a href="/ajoutservice">Services</a></li>
                                    <li><a href="/ajoutbatiment">Batiments</a></li>
                                    <li><a href="/ajoutdepartement">Département</a></li>
                                    <li><a href="/ajoutdocteur">Docteur</a></li>
                                    <li><a href="/ajoutpatient">Patient</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-table"></i> Listes et gestion <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="listeservices">Liste des services</a></li>
                                        <li><a href="/listebatiment">Liste des batiment</a></li>
                                        <li><a href="/listedepartement">Liste des departements</a></li>
                                        <li><a href="/listepatient">Liste des patients</a></li>
                                        <li><a href="/listedoctor">Liste des docteurs</a></li>
                                        <li><a href="/listerendezvous">Liste des rendez-vous</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-bar-chart-o"></i> Rapports et statistiques<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                    <li><a href="chartjs.html">Chart JS</a></li>
                                    <li><a href="chartjs2.html">Chart JS2</a></li>
                                    <li><a href="morisjs.html">Moris JS</a></li>
                                    <li><a href="echarts.html">ECharts</a></li>
                                    <li><a href="other_charts.html">Other Charts</a></li>
                                    </ul>
                                </li>
                            </div>
                            <div class="menu_section">
                                <h3>Live On</h3>
                                <ul class="nav side-menu">
                                <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                    <li><a href="e_commerce.html">E-commerce</a></li>
                                    <li><a href="projects.html">Projects</a></li>
                                    <li><a href="project_detail.html">Project Detail</a></li>
                                    <li><a href="contacts.html">Contacts</a></li>
                                    <li><a href="profile.html">Profile</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                    <li><a href="page_403.html">403 Error</a></li>
                                    <li><a href="page_404.html">404 Error</a></li>
                                    <li><a href="page_500.html">500 Error</a></li>
                                    <li><a href="plain_page.html">Plain Page</a></li>
                                    <li><a href="login.html">Login Page</a></li>
                                    <li><a href="pricing_tables.html">Pricing Tables</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="#level1_1">Level One</a>
                                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li class="sub_menu"><a href="level2.html">Level Two</a>
                                            </li>
                                            <li><a href="#level2_1">Level Two</a>
                                            </li>
                                            <li><a href="#level2_2">Level Two</a>
                                            </li>
                                        </ul>
                                        </li>
                                        <li><a href="#level1_2">Level One</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                                </ul>
                            </div>

                            </div>
                            <!-- /sidebar menu -->

                            <!-- /menu footer buttons -->
                            <div class="sidebar-footer hidden-small">
                            <a data-toggle="tooltip" data-placement="top" title="Settings">
                                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Lock">
                                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            </a>
                            </div>

                        </div>
                        <!-- /sidebar menu -->

                        <!-- /menu footer buttons -->
                        <div class="sidebar-footer hidden-small">
                            <a data-toggle="tooltip" data-placement="top" title="Settings">
                                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Lock">
                                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            </a>
                        </div>
                        <!-- /menu footer buttons -->
                    </div>
                </div>

                <!-- top navigation -->
                <div class="top_nav">
                    <div class="nav_menu">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>
                        <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                            <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                <img src="images/img.jpg" alt="">{{ Auth::user()->name; }}
                            </a>
                            <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item"  href="javascript:;"> Profile</a>
                                <a class="dropdown-item"  href="javascript:;">
                                    <span class="badge bg-red pull-right">50%</span>
                                    <span>Settings</span>
                                </a>
                            <a class="dropdown-item"  href="javascript:;">Help</a>
                                <a class="dropdown-item"  href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                            </div>
                            </li>

                            <li role="presentation" class="nav-item dropdown open">
                            <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">6</span>
                            </a>
                            <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                                <li class="nav-item">
                                <a class="dropdown-item">
                                    <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                    <span>
                                    <span>John Smith</span>
                                    <span class="time">3 mins ago</span>
                                    </span>
                                    <span class="message">
                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                                </a>
                                </li>
                                <li class="nav-item">
                                <a class="dropdown-item">
                                    <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                    <span>
                                    <span>John Smith</span>
                                    <span class="time">3 mins ago</span>
                                    </span>
                                    <span class="message">
                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                                </a>
                                </li>
                                <li class="nav-item">
                                <a class="dropdown-item">
                                    <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                    <span>
                                    <span>John Smith</span>
                                    <span class="time">3 mins ago</span>
                                    </span>
                                    <span class="message">
                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                                </a>
                                </li>
                                <li class="nav-item">
                                <a class="dropdown-item">
                                    <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                    <span>
                                    <span>John Smith</span>
                                    <span class="time">3 mins ago</span>
                                    </span>
                                    <span class="message">
                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                                </a>
                                </li>
                                <li class="nav-item">
                                <div class="text-center">
                                    <a class="dropdown-item">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                                </li>
                            </ul>
                            </li>
                        </ul>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="">
                        <div class="page-title">
                            <div class="title_left">
                                <h3>Formulaire de modification de docteurs</h3>
                            </div>


                        </div>
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 ">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Veuillez remplir le formulaire</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a class="dropdown-item" href="#">Settings 1</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Settings 2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <br />
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <form class="" action="" method="POST" enctype="multipart/form-data" action="{{route('updatedocteur',['id'=>$docteur->id])}}">
                                            @csrf
                                            <div class="field item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3  label-align h6">Nom complet<span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input  type="text" class="form-control" data-validate-length-range="6" data-validate-words="2" name="name" value="{{ $docteur->user->name }}" placeholder="Nom complet..." required autofocus autocomplete="name"/>
                                                </div>
                                            </div>
                                            <div class="field item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3  label-align h6">Email<span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input class="form-control" name="email" class='email' required type="email" value="{{ $docteur->user->email }}" placeholder="Email..." autocomplete="username"/>
                                                </div>
                                            </div>
                                            <div class="field item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3  label-align h6">Mot de passe<span class="required"></span></label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input class="form-control" id="password" name="password"  type="password" autocomplete="new-password" placeholder="Mot de passe..." />
                                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                                </div>
                                            </div>
                                            <div class="field item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3  label-align h6">Confirmez le mot de passe<span class="required"></span></label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input class="form-control" id="password_confirmation" name="password_confirmation"  type="password" autocomplete="new-password" placeholder="Confirmez le mot de passe..." />
                                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                                </div>
                                            </div>
                                            <div class="field item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3  label-align h6">Adresse<span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="adresse" placeholder="Adresse..." required type="text" value="{{$docteur->user->adresse}}"/>
                                                </div>
                                            </div>
                                            <div class="field item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3  label-align h6">Téléphone<span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Téléphone..." data-inputmask="'mask' : '(+221) 99-999-9999'" name="telephone" required value="{{$docteur->user->telephone}}">
                                                </div>
                                            </div>
                                            <div class="field item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3  label-align h6">Genre</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <select class="form-control" name="genre" required>
                                                        @foreach($genres as $genre)
                                                        <option value="{{ $genre }}" {{ $genre == $docteur->user->genre ? 'selected' : '' }}>
                                                            {{ $genre }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="field item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3  label-align">Date de naissance<span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input class="form-control" class='date' type="date" name="date_de_naissance" required value="{{$docteur->user->date_de_naissance}}">
                                                </div>
                                            </div>
                                            <div class="field item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3  label-align">Groupe sanguin<span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input class="form-control" type="text" name="groupe_sanguin" required placeholder="Groupe sanguin..." value="{{$docteur->user->groupe_sanguin}}">
                                                </div>
                                            </div>
                                            <div class="field item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3  label-align h6">Horaire de consultation<span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input class="form-control" type="text" name="horaires_de_consultation" required placeholder="Horaire de consultation..." value="{{$docteur->horaires_de_consultation}}">
                                                </div>
                                            </div>
                                            <div class="field item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3  label-align h6">Département</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <select class="form-control" name="departement_id" required>
                                                        @foreach ( $departements as $departement)
                                                        <option value="{{ $departement->id }}" {{ $departement->id == $docteur->departement_id ? 'selected' : '' }}>
                                                            {{ $departement->nom }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="field item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3  label-align h6">Spécialité<span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input class="form-control" type="text" name="specialite" required placeholder="Spécialité..." value="{{$docteur->specialite}}">
                                                </div>
                                            </div>
                                            <div class="field item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3  label-align h6">Photo<span class="required" value="{{$docteur->photo}}">*</span></label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input class="form-control" type="file" name="photo" >
                                                </div>
                                            </div>
                                            <div class="ln_solid text-center">
                                                <div class="form-group mt-4">
                                                    <div class="col-md-6 offset-md-3">
                                                        <button type='reset' class="btn btn-primary">Effacer</button>
                                                        <button type='submit' class="btn btn-success">Modifier</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


            </div>
        </div>

        <!-- jQuery -->
        <script src={{ asset('templateDashboard/vendors/jquery/dist/jquery.min.js') }}></script>
        <!-- Bootstrap -->
        <script src={{ asset('templateDashboard/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}></script>
        <!-- FastClick -->
        <script src={{ asset('templateDashboard/vendors/fastclick/lib/fastclick.js') }}></script>
        <!-- NProgress -->
        <script src={{ asset('templateDashboard/vendors/nprogress/nprogress.js') }}></script>
        <!-- bootstrap-progressbar -->
        <script src={{ asset('templateDashboard/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}></script>
        <!-- iCheck -->
        <script src={{ asset('templateDashboard/vendors/iCheck/icheck.min.js') }}></script>
        <!-- bootstrap-daterangepicker -->
        <script src={{ asset('templateDashboard/vendors/moment/min/moment.min.js') }}></script>
        <script src={{ asset('templateDashboard/vendors/bootstrap-daterangepicker/daterangepicker.js') }}></script>
        <!-- bootstrap-wysiwyg -->
        <script src={{ asset('templateDashboard/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') }}></script>
        <script src={{ asset('templateDashboard/vendors/jquery.hotkeys/jquery.hotkeys.js') }}></script>
        <script src={{ asset('templateDashboard/vendors/google-code-prettify/src/prettify.js') }}></script>
        <!-- jQuery Tags Input -->
        <script src={{ asset('templateDashboard/vendors/jquery.tagsinput/src/jquery.tagsinput.js') }}></script>
        <!-- Switchery -->
        <script src={{ asset('templateDashboard/vendors/switchery/dist/switchery.min.js') }}></script>
        <!-- Select2 -->
        <script src={{ asset('templateDashboard/vendors/select2/dist/js/select2.full.min.js') }}></script>
        <!-- Parsley -->
        <script src={{ asset('templateDashboard/vendors/parsleyjs/dist/parsley.min.js') }}></script>
        <!-- Autosize -->
        <script src={{ asset('templateDashboard/vendors/autosize/dist/autosize.min.js') }}></script>
        <!-- jQuery autocomplete -->
        <script src={{ asset('templateDashboard/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js') }}></script>
        <!-- starrr -->
        <script src={{ asset('templateDashboard/vendors/starrr/dist/starrr.js') }}></script>
        <!-- Custom Theme Scripts -->
        <script src={{ asset('templateDashboard/build/js/custom.min.js') }}></script>

        <script src={{ asset('templateDashboard/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js') }}></script>


    </body>
</html>
