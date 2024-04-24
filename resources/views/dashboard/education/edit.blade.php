@extends('dashboard.layout')

@section('konten')
    <div class="pb-3"><a href="{{ route('experience.index')}}" class="btn btn-secondary">
        << Kembali</a>
    </div>
    <form action="{{route('experience.update', $data->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="judul" class="form-label">Posisi</label>
            <input type="text" class="form-control form-control-sm" id="judul" name="judul" placeholder="Posisi" value="{{$data->judul}}">
        </div>
        <div class="mb-3">
            <label for="info1" class="form-label">Nama Perusahaan</label>
            <input type="text" class="form-control form-control-sm" id="info1" name="info1" placeholder="Nama Perusahaan" value="{{$data->info1}}">
        </div>
        <div class="mb-3">
           <div class="row">
               <div class="col-auto">Tanggal Mulai</div> 
               <div class="col-auto">
                <input type="date" class="form-control form-control-sm" id="tgl_mulai" name="tgl_mulai" placeholder="dd/mm/yyyy" value="{{$data->tgl_mulai}}"></div>
               <div class="col-auto">Tanggal Akhir</div>
               <div class="col-auto"><input type="date" class="form-control form-control-sm" id="tgl_akhir" name="tgl_akhir" placeholder="dd/mm/yyyy" value="{{$data->tgl_akhir}}"></div>
            </div> 
        </div>
        <div class="mb-3">
            <label for="isi" class="form-label">Isi</label>
            <textarea class="form-control summernote" rows="5" id="isi" name="isi" placeholder="Isi">{{$data->isi}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>   
@endsection