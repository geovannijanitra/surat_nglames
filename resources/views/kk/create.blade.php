@extends('master.main')
@section('judul','Tambah Data KK')
@section('content')
<div class="row">
    <div class="col-lg-6">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>Tambah Data KK</b></h4>
            <p class="text-muted font-13 m-b-30">
                Masukkan data KK baru
            </p>
            <form data-parsley-validate method="POST" action="{{url('/kk')}}" enctype="multipart/form-data" autocomplete="off">
                @csrf
                <div class="form-group">
                    <label for="noKk">No KK*</label>
                    <input min="1111111111111111" type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==16) return false;" name="noKk" parsley-trigger="change" required placeholder="Masukkan No KK" class="form-control">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat*</label>
                    <input type="text" name="alamat" parsley-trigger="change" required placeholder="Masukkan Alamat" class="form-control">
                </div>
                <div class="form-group">
                    <label for="rt">RT*</label>
                    <input id="rt" name="RT" type="number" placeholder="Masukkan RT" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="rw">RW*</label>
                    <input id="rw" name="RW" type="number" placeholder="Masukkan RT" required class="form-control">
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
