<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Startmin - Bootstrap Admin Theme</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="{{asset('backend/css/metisMenu.min.css')}}" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="{{asset('backend/css/timeline.css')}}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{asset('backend/css/startmin.css')}}" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="{{asset('backend/css/morris.css')}}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{asset('backend/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

               {{-- NAVBAR --}}
                    @include('layouts.bagian.navbar')
               {{-- /NAVBAR --}}

               {{-- SIDEBAR --}}
                    @include('layouts.bagian.sidebar')
               {{-- /SIDEBAR --}}


            </nav>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Ubah Berita</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>

                    {{-- TABLE --}}
                      <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Edit Data berita
                                </div>
                                    <form Action="{{ route('berita.update',$berita->id)}}" method="post" enctype="multipart/form-data">
                                     @csrf
                                     @method('put')

                                   <div class="panel-body">
                            <label>judul</label>
                              <input type="text" class="form-control" name="judul" value="{{$berita->judul}}">

                               <!-- @foreach($kategori as $data)
                               <option value="{{$data->id}}">{{$data->judul}}</option>
                               @endforeach -->

        </div>
                                        <div class="panel-body">
                                                 <label>Isi</label>
                                    <textarea input type="text" class="form-control" name="isi" value="{{$berita->isi}}"></textarea>
                                       </div>


                                        <div class="panel-body">
                                            <label>Kategori</label>
                                            <input type="text" class="form-control" name="id_kategori" value="{{$berita->id_kategori}}">
                                        </div>


                                         <div class="panel-body">
                                            <label>foto</label>
                                            <img src="{{ $berita->image() }}" height="75" style="padding:10px;" />
                                            <input type="file" class="form-control" name="foto" value="{{$berita->foto}}">
                                        </div>

                                         <div class="panel-body">
                                            <label>Penulis</label>
                                            <input type="text" class="form-control" name="nama_penulis" value="{{$berita->nama_penulis}}">
                                        </div>

                                         <div class="panel-body">
                                            <label>Tanggal</label>
                                            <input type="text" class="form-control" name="tanggal" value="{{$berita->tanggal}}">
                                        </div>

                                        <div class="panel-body">
                                           <button type="reset" class="btn btn-warning">Reset</button>
                                           <button type="submit" class="btn btn-primary">Ubah</button>
                                        </div>
                                    </form>
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    {{-- /TABLE --}}


                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="{{ asset('backend/js/jquery.min.js')}}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('backend/js/bootstrap.min.js')}}"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{ asset('backend/js/metisMenu.min.js')}}"></script>

        <!-- Morris Charts JavaScript -->
        <script src="{{ asset('backend/js/raphael.min.js')}}"></script>
        <script src="{{ asset('backend/js/morris.min.js')}}"></script>
        <script src="{{ asset('backend/js/morris-data.js')}}"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{{ asset('backend/js/startmin.js')}}"></script>

    </body>
</html>
