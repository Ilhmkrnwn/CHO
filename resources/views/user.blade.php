<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Counter HP Online</title>
    <link href="{{ asset('Admin/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('Admin/css/sb-admin.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('Admin/font-awesome/css/font-awesome.min.css') }}">
</head>

<body>

    <div id="wrapper">
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('user') }}">Counter HP Online</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active"><a><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li><a href="{{ route('laporan') }}"><i class="fa fa-check-square"></i> Laporan</a></li>
                    <li><a href="{{ url('/bio/1') }}"><i class="fa fa-cogs"></i> Pengaturan</a></li>

                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
                            Ilham Kurniawan <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> Inbox</a></li>
                            <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Dashboard <small>Counter HP Online</small></h1>
                    <ol class="breadcrumb">
                        <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
                    </ol>
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                </div>
            </div><!-- /.row -->
            <div class="row">
                <button class="button_pulsa" onclick="toPulsa()" id="bgPulsa">
                    <p>PULSA</p>
                </button>
                <button class="button_kuota" onclick="toKuota()" id="bgKuota">
                    <p>KUOTA</p>
                </button>
            </div>
            <div class="colm">
                <div class="col-lg-6">
                    <form action="{{ url('user')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Nomor Tujuan</label>
                            <input class="form-control" placeholder="0896xxxxx" name="noTujuan" autofocus required>
                        </div>
                        <div class="form-group">
                            <label>JUMLAH</label>
                            <input class="form-control" id="option" name="jumlah" required>
                            </input>
                            <script>
                                var option = document.querySelector('#option');
                                var pulsa = document.getElementById("bgPulsa");
                                var kuota = document.getElementById("bgKuota");

                                function toPulsa() {
                                    kuota.style.backgroundColor = '#1572A1';
                                    pulsa.style.backgroundColor = '#ff0000';
                                }

                                function toKuota() {
                                    kuota.style.backgroundColor = '#ff0000';
                                    pulsa.style.backgroundColor = '#1572A1';
                                }
                            </script>
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input class="form-control" name="harga" autofocus required>
                        </div>
                        <button type="reset" class="button_batal">Batal</button>
                        <button type="submit" class="button_kirim">Kirim</button>
                    </form>
                </div>
            </div>
        </div>

    </div><!-- /#wrapper -->

    <script src="{{ asset('Admin/js/jquery-1.10.2.js') }}"></script>
    <script src="{{ asset('Admin/js/bootstrap.js') }}"></script>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <script src="{{ asset('Admin/js/morris/chart-data-morris.js') }}"></script>
    <script src="{{ asset('Admin/js/tablesorter/jquery.tablesorter.js') }}"></script>
    <script src="{{ asset('Admin/js/tablesorter/tables.js') }}"></script>

</body>

</html>