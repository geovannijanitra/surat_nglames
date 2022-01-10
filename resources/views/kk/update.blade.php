@extends('master.main')
@section('judul','Ubah Data KK')
@section('content')
<div class="row">
    <div class="col-lg-6">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>Ubah Data KK</b></h4>
            <p class="text-muted font-13 m-b-30">
                Ubah data KK
            </p>
            <form data-parsley-validate method="POST" action="/kk/{{ $kk->noKk }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="noKk">No KK*</label>
                    <input type="text" name="noKk" parsley-trigger="change" required placeholder="Masukkan No KK" class="form-control" value="{{$kk->noKk}}">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat*</label>
                    <input type="text" name="alamat" parsley-trigger="change" required placeholder="Masukkan Alamat" class="form-control" value="{{$kk->alamat}}">
                </div>
                <div class="form-group">
                    <label for="rt">RT*</label>
                    <input id="rt" name="RT" type="text" placeholder="Masukkan RT" required class="form-control" value="{{$kk->RT}}">
                </div>
                <div class="form-group">
                    <label for="rw">RW*</label>
                    <input id="rw" name="RW" type="text" placeholder="Masukkan RT" required class="form-control" value="{{$kk->RW}}">
                </div>


                <div class="form-group text-right m-b-0">
                    <button class="btn btn-primary btn-custom btn-rounded waves-effect waves-lightt" type="submit">
                        Perbarui
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
