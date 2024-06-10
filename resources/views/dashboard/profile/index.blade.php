@extends('dashboard.layout')

@section('konten')
 
    <form action="{{route('profile.update')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-between">
            <div class="col-5">
                <h3>Profile</h3>
                @if(get_meta_value('_foto'))
                    <img style="max-width: 100px"; max-height="100px" src="{{asset('foto').'/'.get_meta_value('_foto')}}">
                @endif
                <div class="mb-3">
                    <label for="_foto" class="form-label">Foto</label>
                    <input type="file" class="form-control form-control-sm" id="_foto" name="_foto">
                </div>
                <div class="mb-3">
                    <label for="_kota" class="form-label">kota</label>
                    <input type="text" class="form-control form-control-sm" id="_kota" name="_kota" value="{{get_meta_value('_kota')}}">
                </div>
                <div class="mb-3">
                    <label for="_provinsi" class="form-label">Provinsi</label>
                    <input type="text" class="form-control form-control-sm" id="_provinsi" name="_provinsi" value="{{get_meta_value('_provinsi')}}">
                </div>
                <div class="mb-3">
                    <label for="_notelp" class="form-label">No Telephone</label>
                    <input type="text" class="form-control form-control-sm" id="_notelp" name="_notelp" value="{{get_meta_value('_notelp')}}">
                </div>
                <div class="mb-3">
                    <label for="_email" class="form-label">Email</label>
                    <input type="text" class="form-control form-control-sm" id="_email" name="_email" value="{{get_meta_value('_email')}}">
                </div>
            </div>
            <div class="col-5">
                <h3>Akun Media Sosial</h3>
                <div class="mb-3">
                    <label for="_facebook" class="form-label">Facebook</label>
                    <input type="text" class="form-control form-control-sm" id="_facebook" name="_facebook" value="{{get_meta_value('_facebook')}}">
                </div>
                <div class="mb-3">
                    <label for="_twitter" class="form-label">Twitter</label>
                    <input type="text" class="form-control form-control-sm" id="_twitter" name="_twitter" value="{{get_meta_value('_twitter')}}">
                </div>
                <div class="mb-3">
                    <label for="_linkedin" class="form-label">Linkedin</label>
                    <input type="text" class="form-control form-control-sm" id="_linkedin" name="_linkedin" value="{{get_meta_value('_linkedin')}}">
                </div>
                <div class="mb-3">
                    <label for="_github" class="form-label">Github</label>
                    <input type="text" class="form-control form-control-sm" id="_github" name="_github" value="{{get_meta_value('_github')}}">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>   
@endsection
