@include('admin.header')

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Tambah Siswa</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Siswa</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">

    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel">

                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Siswa</h3>
                </div>
                <div class="panel-body">

                    <div class="pull-right">
                        <a href="{{ url('showSiswa') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>
                    <br>
                    <br>

                    <form method="post" action="{{ url('siswa_aksi') }}" enctype="multipart/form-data">

                        @csrf

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="siswa_nama" required="required">
                        </div>

                        <div class="form-group">
                            <label>Kelas</label>
                            <input type="text" class="form-control" name="siswa_kelas" required="required">
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <input type="text" class="form-control" name="siswa_status" required="required">
                        </div>

                        <div class="form-group">
                            <label>Kategori</label>
                            <select class="form-control" name="kategori" required="required">
                                <option value="">Pilih kategori</option>
                                @foreach($kategoriSiswa as $p)
                                    <option value="{{ $p->kategori_id }}">{{ $p->kategori_nama }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <label></label>
                            <input type="submit" class="btn btn-primary" value="Simpan">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


