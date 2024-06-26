@extends('dashboard.layout')

@section('konten')
 
    <form action="{{route('pengaturanHalaman.update')}}" method="post">
        @csrf
        <div class="form-group row">
            <label class="col-sm-2">About</label>  
            <div class="col-sm-6">
                <select class="form-control form-control-sm" name="_halaman_about">
                    <option value="">Pilih</option>
                    @foreach ($dataHalaman as $item)
                        <option value="{{$item->id}}" {{ get_meta_value('_halaman_about') == $item->id ? 'selected' : ''}}>{{$item->judul}}</option>
                    @endforeach
                </select>
            </div>  
        </div>  
        <div class="form-group row">
            <label class="col-sm-2">Interest</label>  
            <div class="col-sm-6">
                <select class="form-control form-control-sm" name="_halaman_interest">
                    <option value="">Pilih</option>
                    @foreach ($dataHalaman as $item)
                        <option value="{{$item->id}}" {{ get_meta_value('_halaman_interest') == $item->id ? 'selected' : ''}}>{{$item->judul}}</option>
                    @endforeach
                </select>
            </div>  
        </div>  
        <div class="form-group row">
            <label class="col-sm-2">Award</label>  
            <div class="col-sm-6">
                <select class="form-control form-control-sm" name="_halaman_award">
                    <option value="">Pilih</option>
                    @foreach ($dataHalaman as $item)
                        <option value="{{$item->id}}" {{ get_meta_value('_halaman_award') == $item->id ? 'selected' : ''}}>{{$item->judul}}</option>
                    @endforeach
                </select>
            </div>  
        </div>  
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>   
@endsection
