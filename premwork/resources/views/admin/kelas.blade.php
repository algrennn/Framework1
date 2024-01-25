<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.4/css/select.dataTables.min.css">
    <style>
        table.dataTable thead .sorting:after,
        table.dataTable thead .sorting:before,
        table.dataTable thead .sorting_asc:after,
        table.dataTable thead .sorting_asc:before,
        table.dataTable thead .sorting_asc_disabled:after,
        table.dataTable thead .sorting_asc_disabled:before,
        table.dataTable thead .sorting_desc:after,
        table.dataTable thead .sorting_desc:before,
        table.dataTable thead .sorting_desc_disabled:after,
        table.dataTable thead .sorting_desc_disabled:before {
            bottom: .5em;
        }

    </style>
    <title>SIPENSI-SPED</title>
</head>
<body>

    @include('admin.header')

    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcome-heading">
                                    <h4 style="margin-bottom: 0px">Data Kelas</h4>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <ul class="breadcome-menu" style="padding-top: 0px">
                                    <li><a href="{{ url('showGuru') }}">Home</a> <span class="bread-slash">/</span></li>
                                    <li><span class="bread-blod">Kelas</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="panel panel">
            <div class="panel-heading">
                <h3 class="panel-title">Data Kelas</h3>
            </div>
            <div class="panel-body">
                <div class="pull-right">
                    <a href="{{ url('kelas_tambah') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Kelas</a>
                </div>

                <br>
                <br>
                <br>
                <table id="table" class="table table-bordered table-striped table-hover table-datatable">
                    <thead>
                        <tr>
                            <th width="1%">No</th>
                            <th>Nama</th>
                            <th>Jumlah Siswa</th>
                            <th>Tahun Ajaran</th>
                            <th class="text-center" width="10%">OPSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($kelas as $p)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $p->kelas_nama ?? '' }}</td>
                                <td>{{ $p->kelas_anggota ?? '' }}</td>
                                <td>{{ $p->kelas_tahunAjaran ?? '' }}</td>
                                <td class="text-center">
                                    <div class="btn-group">  
                                        <a href="{{ url('kelas_edit', ['kelas_id' => $p->kelas_id]) }}" class="btn btn-default"><i class="fa fa-wrench"></i> Edit</a>
                                        <a href="{{ url('kelas_hapus', ['kelas_id' => $p->kelas_id]) }}" class="btn btn-default"><i class="fa fa-trash"></i> Hapus</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('admin.footer')

    
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
   
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    
    <script src="https://cdn.datatables.net/select/1.3.4/js/dataTables.select.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#table').DataTable();
        });
    </script>

</body>
</html>
