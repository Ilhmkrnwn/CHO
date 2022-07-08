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
                    <li><a href="{{route('user')}}"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="active"><a><i class="fa fa-check-square"></i> Laporan</a></li>
                    <li><a href="{{ url('/bio/1') }}"><i class="fa fa-cogs"></i> Pengaturan</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Ilham Kurniawan<b class="caret"></b></a>
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
                    <h1>Laporan <small> Report Counter Hp Online</small></h1>
                    <ol class="breadcrumb">
                        <li><a href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                        <li class="active"><i class="fa fa-check-square"></i> Laporan</li>
                    </ol>
                </div>
            </div><!-- /.row -->

            <div class="row">
                <div class="col-lg-6">
                    <h2>Laporan Transaksi</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover tablesorter">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nomor Telepon </th>
                                    <th>Jumlah</th>
                                    <th>Tanggal</th>
                                    <th>Harga</th>
                                    <th>Status </th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pelanggans as $pelanggan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $pelanggan->no_hp }}</td>
                                    <td>{{ $pelanggan->jumlah }}</td>
                                    <td>{{ $pelanggan->tanggal}}</td>
                                    <td>{{ $pelanggan->harga }}</td>
                                    <td {{ $pelanggan->status == "Berhasil" ? "style=color:green;font-weight:900": "style=color:red;font-weight:900"}}>{{$pelanggan->status}}</td>
                                    <script>

                                    </script>
                                    <td>
                                        <a href="{{url('edit/' .$pelanggan->id)}}" style="border-color: transparent; ;"> <i class="fa fa-pencil fa-2x " style="color: green;"> </i></a>

                                        <form action="{{url('edit/' .$pelanggan->id)}}" class="d-inline" method="POST" onsubmit="return confirm('Yakin Hapus Data?')">
                                            @method('delete')
                                            @csrf
                                            <button href="" style="border-color: transparent;"> <i class="fa fa-trash-o fa-2x" style="color: red;"> </i> </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- /#page-wrapper -->
        </div><!-- /#wrapper -->
        <!-- JavaScript -->
        <script src="{{asset('Admin/js/jquery-1.10.2.js')}}"></script>
        <script src="{{asset('Admin/js/bootstrap.js')}}"></script>
        <script src="{{asset('Admin/js/tablesorter/jquery.tablesorter.js')}}"></script>
        <script src="{{asset('Admin/js/tablesorter/tables.js')}}"></script>

</body>

</html>