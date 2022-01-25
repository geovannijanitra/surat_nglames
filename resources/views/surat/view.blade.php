@extends('master.main')
@section('judul','Data Surat Keterangan')
@section('content')
{{-- header --}}
<div class="row">
    <div class="col-sm-10">
        <h4 class="page-title">Data Surat Keterangan</h4>
        <p class="text-muted page-title-alt">Data Surat Keterangan dapat ditambahkan dan dilihat pada tabel di bawah ini</p>
    </div>
</div>
{{-- add --}}
<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <form data-parsley-validate method="POST" action="{{url('/surat')}}" enctype="multipart/form-data" autocomplete="off">
                @csrf
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">NIK - Nama</label>
                        <select class="form-control select2" placeholder="Nama" id="nik" name="nik" required>
                        <option value="" disabled selected> Pilih nama penduduk </option>
                            @foreach ($penduduk as $pndk)
                            <option value="{{ $pndk->nik }}">{{ $pndk->nik}} - {{ $pndk->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="usaha">Usaha</label>
                        <input id="usaha" name="usaha" type="text" placeholder="Usaha" required
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="keperluan">Pinjaman di</label>
                        <input id="keperluan" name="keperluan" type="text" placeholder="Instansi Pinjaman" required
                            class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div  class="form-group">
                        <label for="noSurat">Jenis Surat</label>
                        <input id="jenis" name="jenis" type="text" placeholder="Nomor Surat" required
                            class="form-control" disabled value="Surat Keterangan Domisili">
                    </div>
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
                        <th>Usaha</th>
                        <th>Instansi Pinjaman</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $surat as $surat)
                    <tr>
                        <td>{{ $surat->noSurat }}</td>
                        <td>{{ $surat->tanggalSurat }}</td>
                        <td>{{ $surat->penduduk['nama'] }}</td>
                        <td>{{ $surat->usaha }}</td>
                        <td>{{ $surat->keperluan }}</td>
                        <td>
                            <a href="/surat/{{ $surat->idSurat }}/printsurat" class="btn btn-icon waves-effect waves-light btn-warning col-md-5"> <i class="md md-print"></i></a>
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
