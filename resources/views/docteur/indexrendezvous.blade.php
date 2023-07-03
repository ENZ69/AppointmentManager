<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ajout section</title>

        <!-- Bootstrap -->
        <link href="templateDashboard/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="templateDashboard/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="templateDashboard/vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- iCheck -->
        <link href="templateDashboard/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
        <!-- bootstrap-wysiwyg -->
        <link href="templateDashboard/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
        <!-- Select2 -->
        <link href="templateDashboard/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
        <!-- Switchery -->
        <link href="templateDashboard/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
        <!-- starrr -->
        <link href="templateDashboard/vendors/starrr/dist/starrr.css" rel="stylesheet">
        <!-- bootstrap-daterangepicker -->
        <link href="templateDashboard/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="templateDashboard/build/css/custom.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">

                        <!-- /menu profile quick info -->




                            <!-- sidebar menu -->
                            @include('layouts.sidebardoc')
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
                @include('layouts.nav')
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main" style="display: flex; flex-direction: column;">
                    <div class="">
                      <div class="page-title">
                        <div class="title_left">
                          <h3>Liste des rendez-vous</h3>
                        </div>

                        <div class="title_right">
                          <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="Search for...">
                              <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Go!</button>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="clearfix"></div>
                      <div class="col-md-12 col-sm-6  ">
                        <div class="x_panel">
                          <div class="x_title">
                            <h2>Rendez-vous confirmé par l'admin</h2>
                            <ul class="nav navbar-right panel_toolbox">
                              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                              </li>
                              <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                  </div>
                              </li>
                              <li><a class="close-link"><i class="fa fa-close"></i></a>
                              </li>
                            </ul>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
                            <table class="table table-hover">
                              <thead>
                                <tr>
                                  <th>Depuis</th>
                                  <th>Motif</th>
                                  <th >Patient</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                  @forelse ($rendezVousConfirmes as $rdvadmin)
                                      <tr>
                                      <td>{{ \Carbon\Carbon::parse($rdvadmin->created_at->format('Y-m-d H:i:s'))->format('H:i') }}</td>
                                      <td>{{ $rdvadmin->motif}}</td>
                                      <td>{{ $rdvadmin->patient->user->name }} | {{ $rdvadmin->patient->user->telephone }}</td>
                                      <td><a href="/listerendezvousD/{{ $rdvadmin->id }}" class="btn btn-secondary" title="Prendre"> <i class="fa-solid fa-check"></i></a></td>
                                    </tr>
                                  @empty
                                    <h4>Aucun rendez-vous confirmé par l'admin</h4>
                                  @endforelse
                              </tbody>
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="text-center">
                                          <ul class="pagination">
                                              {{-- Lien vers la page précédente --}}
                                              @if ($rendezVousConfirmes->currentPage() > 1)
                                                  <li class="page-item">
                                                      <a class="page-link" href="{{ $rendezVousConfirmes->previousPageUrl() }}" rel="prev">&laquo;</a>
                                                  </li>
                                              @endif

                                              {{-- Liens vers les pages --}}
                                              @for ($i = 1; $i <= $rendezVousConfirmes->lastPage(); $i++)
                                                  <li class="page-item {{ ($rendezVousConfirmes->currentPage() === $i) ? 'active' : '' }}">
                                                      <a class="page-link" href="{{ $rendezVousConfirmes->url($i) }}">{{ $i }}</a>
                                                  </li>
                                              @endfor

                                              {{-- Lien vers la page suivante --}}
                                              @if ($rendezVousConfirmes->hasMorePages())
                                                  <li class="page-item">
                                                      <a class="page-link" href="{{ $rendezVousConfirmes->nextPageUrl() }}" rel="next">&raquo;</a>
                                                  </li>
                                              @endif
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                            </table>

                          </div>
                        </div>
                      </div>

                      <div class="clearfix"></div>
                      <div class="col-md-12 col-sm-6  ">
                        <div class="x_panel">
                          <div class="x_title">
                            <h2>Rendez-vous planifiés aujourd'hui</h2>
                            <ul class="nav navbar-right panel_toolbox">
                              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                              </li>
                              <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                  </div>
                              </li>
                              <li><a class="close-link"><i class="fa fa-close"></i></a>
                              </li>
                            </ul>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
                            <table class="table table-hover">
                              <thead>
                                <tr>
                                    <th>Heure</th>
                                    <th>Motif</th>
                                    <th >Patient</th>
                                    <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                  @forelse ($RendezVousAujourdhui as $rdva)
                                      <tr>
                                      <td>{{ \Carbon\Carbon::parse($rdva->date_et_heure)->format('H:i') }}</td>
                                      <td>{{ $rdva->motif }}</td>
                                      <td>{{ $rdva->patient->user->name }} | {{ $rdva->patient->user->telephone }}</td>
                                      <td><a href="/listerendezvousD/{{ $rdva->id }}" class="btn btn-secondary" title="Prendre"> <i class="fa-solid fa-check"></i></a></td>
                                    </tr>
                                  @empty
                                    <h4>Aucun rendez-vous planifié pour aujourd'hui</h4>
                                  @endforelse
                              </tbody>
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="text-center">
                                          <ul class="pagination">
                                              {{-- Lien vers la page précédente --}}
                                              @if ($RendezVousAujourdhui->currentPage() > 1)
                                                  <li class="page-item">
                                                      <a class="page-link" href="{{ $RendezVousAujourdhui->previousPageUrl() }}" rel="prev">&laquo;</a>
                                                  </li>
                                              @endif

                                              {{-- Liens vers les pages --}}
                                              @for ($i = 1; $i <= $RendezVousAujourdhui->lastPage(); $i++)
                                                  <li class="page-item {{ ($RendezVousAujourdhui->currentPage() === $i) ? 'active' : '' }}">
                                                      <a class="page-link" href="{{ $RendezVousAujourdhui->url($i) }}">{{ $i }}</a>
                                                  </li>
                                              @endfor

                                              {{-- Lien vers la page suivante --}}
                                              @if ($RendezVousAujourdhui->hasMorePages())
                                                  <li class="page-item">
                                                      <a class="page-link" href="{{ $RendezVousAujourdhui->nextPageUrl() }}" rel="next">&raquo;</a>
                                                  </li>
                                              @endif
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                            </table>

                          </div>
                        </div>
                      </div>

                      <div class="row" style="display: block;">
                        <div class="col-md-12 col-sm-6  ">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2>Rendez-vous planifiés pour plus tard</h2>
                              <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="#">Settings 1</a>
                                      <a class="dropdown-item" href="#">Settings 2</a>
                                    </div>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                              </ul>
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>Date et heure</th>
                                    <th>Motif</th>
                                    <th>Durée</th>
                                    <th>Statut</th>
                                    <th >Docteur</th>
                                    <th >Patient</th>
                                    <th>Plus</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @forelse ($rendezVousPlanifie as $rdvp)
                                        <tr>
                                            <td>le {{ \Carbon\Carbon::parse($rdvp->date_et_heure)->format('d F') }} à {{ \Carbon\Carbon::parse($rdvp->date_et_heure)->format('H:i') }}</td>
                                            <td>{{ $rdvp->motif }}</td>
                                            <td>{{ $rdvp->duree }} min</td>
                                            <td>{{ $rdvp->statut }}</td>
                                            <td>{{ $rdvp->docteur->user->name }} | {{ $rdvp->docteur->user->telephone }}</td>
                                            <td>{{ $rdvp->patient->user->name }} | {{ $rdvp->patient->user->telephone }}</td>
                                            <td><a href="/listerendezvous/{{ $rdvp->id }}"> <i class="fa-solid fa-plus fa-2x"></i> </a></td>
                                        </tr>
                                    @empty
                                        <h4>Aucun rendez-vous planifié</h4>
                                    @endforelse
                                </tbody>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="text-center">
                                                <ul class="pagination">
                                                    {{-- Lien vers la page précédente --}}
                                                    @if ($rendezVousPlanifie->currentPage() > 1)
                                                        <li class="page-item">
                                                            <a class="page-link" href="{{ $rendezVousPlanifie->previousPageUrl() }}" rel="prev">&laquo;</a>
                                                        </li>
                                                    @endif

                                                    {{-- Liens vers les pages --}}
                                                    @for ($i = 1; $i <= $rendezVousPlanifie->lastPage(); $i++)
                                                        <li class="page-item {{ ($rendezVousPlanifie->currentPage() === $i) ? 'active' : '' }}">
                                                            <a class="page-link" href="{{ $rendezVousPlanifie->url($i) }}">{{ $i }}</a>
                                                        </li>
                                                    @endfor

                                                    {{-- Lien vers la page suivante --}}
                                                    @if ($rendezVousPlanifie->hasMorePages())
                                                        <li class="page-item">
                                                            <a class="page-link" href="{{ $rendezVousPlanifie->nextPageUrl() }}" rel="next">&raquo;</a>
                                                        </li>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                              </table>

                            </div>
                          </div>
                        </div>


                        <div class="clearfix"></div>
                            <div class="col-md-12 col-sm-6  ">
                                <div class="x_panel">
                                <div class="x_title">
                                    <h2>Rendez-vous Terminé</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Settings 1</a>
                                            <a class="dropdown-item" href="#">Settings 2</a>
                                        </div>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <table class="table table-hover">
                                    <thead>
                                        <tr>
                                        <th>Heure</th>
                                        <th>Motif</th>
                                        <th >Statut</th>
                                        <th >Patient</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($RendezVousTerminé as $rdvt)
                                            <tr>
                                            <td>{{ \Carbon\Carbon::parse($rdvt->date_et_heure)->format('H:i') }}</td>
                                            <td>{{ $rdvt->motif }}</td>
                                            <td>{{ $rdvt->statut }}</td>
                                            <td>{{ $rdvt->patient->user->name }} | {{ $rdvt->patient->user->telephone }}</td>
                                            </tr>
                                        @empty
                                            <h4>Aucun rendez-vous terminé</h4>
                                        @endforelse
                                    </tbody>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="text-center">
                                                <ul class="pagination">
                                                    {{-- Lien vers la page précédente --}}
                                                    @if ($RendezVousTerminé->currentPage() > 1)
                                                        <li class="page-item">
                                                            <a class="page-link" href="{{ $RendezVousTerminé->previousPageUrl() }}" rel="prev">&laquo;</a>
                                                        </li>
                                                    @endif

                                                    {{-- Liens vers les pages --}}
                                                    @for ($i = 1; $i <= $RendezVousTerminé->lastPage(); $i++)
                                                        <li class="page-item {{ ($RendezVousTerminé->currentPage() === $i) ? 'active' : '' }}">
                                                            <a class="page-link" href="{{ $RendezVousTerminé->url($i) }}">{{ $i }}</a>
                                                        </li>
                                                    @endfor

                                                    {{-- Lien vers la page suivante --}}
                                                    @if ($RendezVousTerminé->hasMorePages())
                                                        <li class="page-item">
                                                            <a class="page-link" href="{{ $RendezVousTerminé->nextPageUrl() }}" rel="next">&raquo;</a>
                                                        </li>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    </table>

                                </div>
                                </div>
                            </div>

                      </div>
                    </div>
                  </div>
            </div>

            </div>
        </div>

        <!-- jQuery -->
        <script src="templateDashboard/vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="templateDashboard/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <!-- FastClick -->
        <script src="templateDashboard/vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="templateDashboard/vendors/nprogress/nprogress.js"></script>
        <!-- bootstrap-progressbar -->
        <script src="templateDashboard/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
        <!-- iCheck -->
        <script src="templateDashboard/vendors/iCheck/icheck.min.js"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="templateDashboard/vendors/moment/min/moment.min.js"></script>
        <script src="templateDashboard/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
        <!-- bootstrap-wysiwyg -->
        <script src="templateDashboard/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
        <script src="templateDashboard/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
        <script src="templateDashboard/vendors/google-code-prettify/src/prettify.js"></script>
        <!-- jQuery Tags Input -->
        <script src="templateDashboard/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
        <!-- Switchery -->
        <script src="templateDashboard/vendors/switchery/dist/switchery.min.js"></script>
        <!-- Select2 -->
        <script src="templateDashboard/vendors/select2/dist/js/select2.full.min.js"></script>
        <!-- Parsley -->
        <script src="templateDashboard/vendors/parsleyjs/dist/parsley.min.js"></script>
        <!-- Autosize -->
        <script src="templateDashboard/vendors/autosize/dist/autosize.min.js"></script>
        <!-- jQuery autocomplete -->
        <script src="templateDashboard/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
        <!-- starrr -->
        <script src="templateDashboard/vendors/starrr/dist/starrr.js"></script>
        <!-- Custom Theme Scripts -->
        <script src="templateDashboard/build/js/custom.min.js"></script>

        <script src="templateDashboard/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>

    </body>
</html>
