@extends('master.main')
@section('judul','Data SKCK')
@section('content')
{{-- header --}}
<div class="row">
    <div class="col-sm-10">
        <h4 class="page-title">Data SKCK</h4>
        <p class="text-muted page-title-alt">Data SKCK dapat ditambahkan dan dilihat pada tabel di bawah ini</p>
    </div>
    {{-- <div class="col-sm-2">
        <br>
        <a  type="button" class="btn btn-default waves-effect waves-light" data-toggle="modal" data-target="#full-width-modal">Tambah
            <span class="btn-label btn-label-right"><i class="fa fa-plus"></i>
            </span>
        </a>
    </div> --}}
</div>
{{-- add --}}
<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <form data-parsley-validate method="POST" action="{{url('/skck')}}" enctype="multipart/form-data" autocomplete="off">
                @csrf
                <div class="col-md-6">
                    <div  class="form-group">
                        <label for="noSurat">Jenis Surat</label>
                        <input id="jenis" name="jenis" type="text" placeholder="Nomor Surat" required
                            class="form-control" disabled value="SKCK">
                    </div>
                    <div class="form-group">
                        <label class="control-label">NIK - Nama</label>
                        <select class="form-control select2" placeholder="Nama" required id="nik" name="nik">
                        <option value="" disabled selected> Pilih nama penduduk </option>
                            @foreach ($penduduk as $pndk)
                            <option value="{{ $pndk->nik }}">{{ $pndk->nik}} - {{ $pndk->nama }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="jabatan" class="control-label">Pejabat Kelurahan (Yang bertanda tangan)</label>
                        <select name="tandatangan" id="tandatangan" class="form-control select2">
                            <option value="" disabled selected> Pilih orang yang bertanda tangan </option>
                            @foreach ($perangkat as $perangkat)
                            <option value="{{ $perangkat->idPerangkat }}">{{ $perangkat->detail}} - {{ $perangkat->nama }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="noSurat">No Surat</label>
                        <input id="noSurat" name="noSurat" type="text" placeholder="Nomor Surat" required
                            class="form-control">
                    </div>

                </div>

                <div class="form-group text-right m-b-0">
                    <button class="btn btn-primary btn-custom btn-rounded waves-effect waves-lightt" type="submit">
                        Simpan
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
{{-- table --}}
<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
            <table id="datatable-buttons" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No Surat</th>
                        <th>Tanggal Surat</th>
                        <th>Pemohon</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $surat as $surat)
                    <tr>
                        <td>{{ $surat->noSurat }}</td>
                        <td>{{ $surat->tanggalSurat }}</td>
                        <td>{{ $surat->penduduk['nama'] }}</td>
                        <td>
                            <a href="/skck/{{ $surat->idSurat }}/printSKCK" class="btn btn-icon waves-effect waves-light btn-warning col-md-5"> <i class="md md-print"></i></a>
                            <form action="/surat/{{ $surat->idSurat }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" onclick="return confirm('Apakah Anda Yakin untuk Menghapus Data ini?')" class="btn btn-icon waves-effect waves-light btn-danger col-md-5"> <i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
