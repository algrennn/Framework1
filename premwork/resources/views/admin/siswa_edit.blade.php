@include('admin.header')

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Edit Siswa</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="{{ url('/') }}">Home</a> <span class="bread-slash">/</span></li>
                                <li><a href="{{ url('showSiswa') }}">Data Siswa</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Edit Siswa</span></li>
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
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Edit Siswa</h3>
                </div>
                <div class="panel-body">
                    <div class="pull-right">
                        <a href="" class="btn btn-primary">
                            <i class="fa fa-arrow-left"></i> Kembali
                        </a>
                    </div>
                    <br>
                    <br>
                        <form method="post" action="{{ route('siswa.update', $siswa->siswa_id) }}">
                            @csrf
                            @method('put')

                            <div class="form-group">
                                <label for="siswa_nama">Nama</label>
                                <input type="text" class="form-control" name="siswa_nama"  value="{{ $siswa->siswa_nama }}">
                            </div>

                            <div class="form-group">
                                <label for="siswa_kelas">Kelas</label>
                                <input type="text" class="form-control"  name="siswa_kelas" value="{{ $siswa->siswa_kelas }}">
                            </div>

                            <div class="form-group">
                                <label for="siswa_status">Status</label>
                                <input type="text" class="form-control" name="siswa_status" value="{{ $siswa->siswa_status }}">
                            </div>

                            <div class="form-group">
                                <label for="siswa_kategori">Kategori</label>
                                <input type="text" class="form-control" name="siswa_kategori" value="{{ $siswa->siswa_kategori }}">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.footer')
