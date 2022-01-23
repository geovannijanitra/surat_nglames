@extends('master.main')
@section('judul','Ubah Data Surat')
@section('content')
<div class="row">
    <div class="col-lg-6">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>Ubah Data Surat</b></h4>
            <p class="text-muted font-13 m-b-30">
                Ubah Data Surat
            </p>
            <form data-parsley-validate method="POST" action="/surat/{{ $surat->idSurat }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label class="control-label">NIK - Nama</label>
                    <select class="form-control select2" placeholder="Nama" required id="nik" name="nik">
                        <option selected value="{{ $surat->nik }}">{{ $surat->nik}} - {{ $surat->penduduk['nama'] }}</option>
                        @foreach ($penduduk as $pndk)
                        <option value="{{ $pndk->nik }}">{{ $pndk->nik}} - {{ $pndk->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="keperluan">Keperluan</label>
                    <input id="keperluan" name="keperluan" value="{{$surat->keperluan}}" type="text" placeholder="Keperluan Surat" required
                        class="form-control">
                </div>
                <div class="form-group">
                    <label for="noSurat">No Surat</label>
                    <input id="noSurat" name="noSurat" value="{{$surat->noSurat}}" type="text" placeholder="Nomor Surat" required
                        class="form-control">
                </div>
                <div class="form-group">
                    <label for="jabatan" class="control-label">Pejabat Kelurahan (Yang bertanda tangan)</label>
                    <select name="tandatangan" id="tandatangan" class="form-control select2">
                        <option value selected="{{ $surat->perangkat['idPerangkat'] }}">{{ $surat->perangkat['detail']}} - {{ $surat->perangkat['nama'] }}</option>

                        @foreach ($perangkat as $perangkat)
                        <option value="{{ $perangkat->idPerangkat }}">{{ $perangkat->nama}} - {{ $perangkat->detail }}
                        </option>
                        @endforeach
                    </select>
                </div>
                {{-- <div class="form-group">
                    <label for="nama">Nama*</label>
                    <input type="text" name="nama" parsley-trigger="change" required placeholder="Masukkan Nama" class="form-control" value="{{$perangkat->nama}}">
                </div>
                <div class="form-group">
                    <label for="tanggalLahir">Tanggal Lahir*</label>
                    <input type="date" name="tanggalLahir" parsley-trigger="change" required placeholder="dd/mm/yyyy" class="form-control" value="{{$perangkat->tanggalLahir}}">
                </div>
                <div class="form-group">
                    <label for="jabatan">Jabatan*</label>

                        <select name="jabatan" class="form-control" value="{{$perangkat->jabatan}}">
                            <option value="Pejabat Kelurahan">Pejabat Kelurahan</option>
                            <option value="Ketua RT atau RW">Ketua RT atau RW</option>
                        </select>

                </div>
                <div class="form-group">
                    <label for="detail">Detail*</label>
                    <input type="text" name="detail" parsley-trigger="change" required placeholder="Masukkan Detail Pekerjaan" class="form-control" value="{{$perangkat->detail}}">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat*</label>
                    <input type="text" name="alamat" parsley-trigger="change" required placeholder="Masukkan Alamat" class="form-control" value="{{$perangkat->alamat}}">
                </div> --}}

                <div class="form-group text-right m-b-0">
                    <button class="btn btn-primary btn-custom btn-rounded waves-effect waves-lightt" type="submit">
                        Perbarui
                    </button>
                    <button type="reset" class="btn btn-default btn-custom btn-rounded waves-effect waves-light m-l-5">
                        Hapus
                    </button>
                    <a href="/perangkat" type="button" class="btn btn-danger btn-custom btn-rounded waves-effect waves-light">
                        Batal
                    </a>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
