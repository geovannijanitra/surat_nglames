@extends('master.main')
@section('judul','Tambah Data Perangkat Desa')
@section('content')
<div class="row">
    <div class="col-lg-6">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>Tambah Perangkat Desa</b></h4>
            <p class="text-muted font-13 m-b-30">
                Masukkan data Perangkat Desa baru
            </p>
            <form data-parsley-validate method="POST" action="{{url('/perangkat')}}" enctype="multipart/form-data" autocomplete="off">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama*</label>
                    <input type="text" name="nama" parsley-trigger="change" required placeholder="Masukkan Nama" class="form-control">
                </div>
                <div class="form-group">
                    <label for="tanggalLahir">Tanggal Lahir*</label>
                    <input type="date" name="tanggalLahir" parsley-trigger="change" required placeholder="dd/mm/yyyy" class="form-control">
                </div>
                <div class="form-group">
                    <label for="jabatan">Jabatan*</label>

                        <select name="jabatan" class="form-control">
                            <option value="Pejabat Kelurahan">Pejabat Kelurahan</option>
                            <option value="Ketua RT atau RW">Ketua RT atau RW</option>
                        </select>

                </div>
                <div class="form-group">
                    <label for="detail">Detail*</label>
                    <input id="detail" name="detail" type="text" placeholder="Masukkan Detail Jabatan" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat*</label>
                    <input type="text" name="alamat" parsley-trigger="change" required placeholder="Masukkan Alamat" class="form-control">
                </div>
                <div class="form-group text-right m-b-0">
                    <button class="btn btn-primary btn-custom btn-rounded waves-effect waves-lightt" type="submit">
                        Simpan
                    </button>
                    <button type="reset" class="btn btn-default btn-custom btn-rounded waves-effect waves-light m-l-5">
                        Hapus
                    </button>
                    <a href="/kk" type="button" class="btn btn-danger btn-custom btn-rounded waves-effect waves-light">
                        Batal
                    </a>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
