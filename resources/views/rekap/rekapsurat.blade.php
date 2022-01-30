@extends('master.main')
@section('judul','Rekapitulasi Data Surat')
@section('content')
<div class="row">
    <div class="col-sm-10">
        <h4 class="page-title">Rekapitulasi Surat</h4>
        <p class="text-muted page-title-alt">Data Rekapitulasi surat dapat dilihat pada tabel dibawah ini</p>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
            <table id="datatable-buttons" class="table table-striped table-bordered">

                <thead>
                    <tr>
                        <th>Tanggal Surat</th>
                        <th>Jenis Surat</th>
                        <th>No Surat</th>
                        <th>Pemohon</th>
                    </tr>
                </thead>


                <tbody>
                    @foreach ( $surat as $surat)
                    <tr>
                        <td>{{ $surat->tanggalSurat }}</td>
                        <td>{{ $surat->jenisSurat }}</td>
                        <td>{{ $surat->noSurat }}</td>
                        <td>{{ $surat->penduduk['nama'] }}</td>

                    </tr>
                    @endforeach
                    @foreach ( $kematian as $kematian)
                    <tr>
                        <td>{{ $kematian->tanggalSurat }}</td>
                        <td>{{ $kematian->jenisSurat }}</td>
                        <td>{{ $kematian->noSurat }}</td>
                        <td>{{ $kematian->penduduk['nama'] }}</td>

                    </tr>
                    @endforeach
                    @foreach ( $kelahiran as $kelahiran)
                    <tr>
                        <td>{{ $kelahiran->tanggalSurat }}</td>
                        <td>{{ $kelahiran->jenisSurat }}</td>
                        <td>{{ $kelahiran->noSurat }}</td>
                        <td>{{ $kelahiran->namaAnak }}</td>

                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
