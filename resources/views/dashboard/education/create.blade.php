@extends('dashboard.layout')

@section('konten')
    <div class="pb-3"><a href="{{ route('education.index')}}" class="btn btn-secondary">
        << Kembali</a>
    </div>
    <form action="{{route('education.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">Universitas</label>
            <input type="text" class="form-control form-control-sm" id="judul" name="judul" placeholder="Universitas" value="{{Session::get('judul')}}">
        </div>
        <div class="mb-3">
            <label for="info1" class="form-label">Nama Fakultas</label>
            <input type="text" class="form-control form-control-sm" id="info1" name="info1" placeholder="Nama Fakultas" value="{{Session::get('info1')}}">
        </div>
        <div class="mb-3">
            <label for="info2" class="form-label">Nama Prodi</label>
            <input type="text" class="form-control form-control-sm" id="info2" name="info2" placeholder="Nama Prodi" value="{{Session::get('info2')}}">
        </div>
        <div class="mb-3">
            <label for="info3" class="form-label">IPK</label>
            <input type="text" class="form-control form-control-sm" id="info3" name="info3" placeholder="IPK" value="{{Session::get('info3')}}">
        </div>
        <div class="mb-3">
           <div class="row">
               <div class="col-auto">Tanggal Mulai</div> 
               <div class="col-auto"><input type="date" class="form-control form-control-sm" id="tgl_mulai" name="tgl_mulai" placeholder="dd/mm/yyyy" value="{{Session::get('tgl_mulai')}}"></div>
               <div class="col-auto">Tanggal Akhir</div>
               <div class="col-auto"><input type="date" class="form-control form-control-sm" id="tgl_akhir" name="tgl_akhir" placeholder="dd/mm/yyyy" value="{{Session::get('tgl_akhir')}}"></div>
            </div> 
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>   
@endsection