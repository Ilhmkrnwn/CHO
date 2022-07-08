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
                <a class="navbar-brand" href="{{route('user')}}">Counter HP Online</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li><a href="{{route('user')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li><a href="{{route('laporan')}}"><i class="fa fa-check-square"></i> Laporan</a></li>
                    <li class="active"><a><i class="fa fa-cogs"></i> Pengaturan</a></li>

                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Ilham Kurniawan <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> Inbox</a></li>
                            <li><a href="{{route('setting')}}"><i class="fa fa-gear"></i> Settings</a></li>
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
                    <h1>Setting <small>Counter HP Online</small></h1>
                    <ol class="breadcrumb">
                        <li class="active"><i class="fa fa-dashboard"></i> Setting</li>
                    </ol>

                </div>
            </div><!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <form action="{{ url('bio/' .$userx->id)}}" method="POST">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label>Nama Pemilik</label>
                            <input class="form-control" name="namapemilik" value="{{$userx -> namapemilik}}" required>
                        </div>
                        <div class="form-group">
                            <label>Nama Counter</label>
                            <input class="form-control" name="namacon" value="{{$userx -> namacounter}}" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" name="email" value="{{$userx -> email}}" required>
                        </div>
                        <div class="form-group">
                            <label>Nomor Telepon</label>
                            <input class="form-control" name="telf" value="{{$userx -> telp}}" required>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input class="form-control" name="alamat" value="{{$userx -> alamat}}" required>
                        </div>
                        <button type="submit" class="button_save">Edit</button>
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