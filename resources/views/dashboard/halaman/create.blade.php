@extends('dashboard.layout')

@section('konten')
    <div class="pb-3"><a href="{{ route('halaman.index')}}" class="btn btn-secondary">
        << Kembali</a>
    </div>
    <form action="{{route('halaman.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control form-control-sm" id="judul" name="judul" placeholder="Judul" value="{{Session::get('judul')}}">
        </div>
        <div class="mb-3">
            <label for="isi" class="form-label">Isi</label>
            <textarea class="form-control summernote" rows="5" id="isi" name="isi" placeholder="Isi">{{Session::get('isi')}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>   
@endsection