@extends('master.main')
@section('judul','Data Surat Keterangan Pindah')
@section('content')
{{-- header --}}
<div class="row">
    <div class="col-sm-10">
        <h4 class="page-title">Data Surat Keterangan Pindah</h4>
        <p class="text-muted page-title-alt">Data Surat Keterangan Pindah dapat ditambahkan dan dilihat pada tabel di bawah ini</p>
    </div>
    <div class="col-sm-2">
        <br>
        <a href="pindah/create" type="button" class="btn btn-default waves-effect waves-light">Tambah
            <span class="btn-label btn-label-right"><i class="fa fa-plus"></i>
            </span>
        </a>
    </div>
</div>
{{-- add --}}

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
                        <th>Pindah ke</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $surat as $surat)
                    <tr>
                        <td>{{ $surat->noSurat }}</td>
                        <td>{{ $surat->tanggalSurat }}</td>
                        <td>{{ $surat->penduduk['nama'] }}</td>
                        <td>{{ $surat->desaKe }}, Kecamatan {{ $surat->kecamatanKe }}</td>
                        <td>
                            <a href="/pindah/{{ $surat->idSurat }}/printPindah" class="btn btn-icon waves-effect waves-light btn-warning col-md-5"> <i class="md md-print"></i></a>
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

<script>
        $('thead').on('click','.addRow2', function(){
             var tr =  "<tr>"+

                "<td><input name='progres[]' id='progres[]' type='number' class='form-control' placeholder='%'></td>"+
                "<td><input type='text' id='tahapan[]' name='tahapan[]' class='form-control' placeholder='tahapan'></td>"+
               " <th><a href='javascript:void(0)' class='btn btn-danger deleteRow2'><i class='fa fa-minus'></i></th>"+
            "</tr>"
            $('tbody').append(tr);
         });

         $('tbody').on('click', '.deleteRow2' , function(){
             $(this).parent().parent().remove();
         });
    </script>
@endsection
