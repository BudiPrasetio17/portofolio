@extends('dashboard.layout')

@section('konten')
    <div class="pb-3"><a href="{{ route('education.index')}}" class="btn btn-secondary">
        << Kembali</a>
    </div>
    <form action="{{route('education.update', $data->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="judul" class="form-label">Universitas</label>
            <input type="text" class="form-control form-control-sm" id="judul" name="judul" placeholder="Universitas" value="{{$data->judul}}">
        </div>
        <div class="mb-3">
            <label for="info1" class="form-label">Nama Fakultas</label>
            <input type="text" class="form-control form-control-sm" id="info1" name="info1" placeholder="Nama Fakultas" value="{{$data->info1}}">
        </div>
        <div class="mb-3">
            <label for="info2" class="form-label">Nama Prodi</label>
            <input type="text" class="form-control form-control-sm" id="info2" name="info2" placeholder="Nama Prodi" value="{{$data->info2}}">
        </div>
        <div class="mb-3">
            <label for="info1" class="form-label">IPK</label>
            <input type="text" class="form-control form-control-sm" id="info1" name="info1" placeholder="IPK" value="{{$data->info3}}">
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
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>   
@endsection