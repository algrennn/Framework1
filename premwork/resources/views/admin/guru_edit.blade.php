@include('admin.header')

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Edit Guru</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="{{ url('/') }}">Home</a> <span class="bread-slash">/</span></li>
                                <li><a href="{{ url('showGuru') }}">Data Guru</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Edit Guru</span></li>
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
                    <h3 class="panel-title">Edit Guru</h3>
                </div>
                <div class="panel-body">
                    <div class="pull-right">
                        <a href="" class="btn btn-primary">
                            <i class="fa fa-arrow-left"></i> Kembali
                        </a>
                    </div>
                    <br>
                    <br>
                        <form method="post" action="{{ route('guru.update', $guru->guru_id) }}">
                            @csrf
                            @method('put')

                            <div class="form-group">
                                <label for="guru_nama">Nama</label>
                                <input type="text" class="form-control" name="guru_nama"  value="{{ $guru->guru_nama }}">
                            </div>

                            <div class="form-group">
                                <label for="guru_anggota">NIP</label>
                                <input type="text" class="form-control"  name="guru_username" value="{{ $guru->guru_username }}">
                            </div>

                            <div class="form-group">
                                <label for="guru_tahunAjaran">Status</label>
                                <input type="text" class="form-control" name="guru_status" value="{{ $guru->guru_status }}">
                            </div>

                            <div class="form-group">
                                <label for="guru_tahunAjaran">Kontak</label>
                                <input type="text" class="form-control" name="guru_kontak" value="{{ $guru->guru_kontak }}">
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
