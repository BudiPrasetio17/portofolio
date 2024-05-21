@extends('dashboard.layout')

@section('konten')
 
    <form action="{{route('skill.update')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">Programming Language & Tools</label>
            <input type="text" class="form-control form-control-sm skill" id="language" name="language" placeholder="programming language" value="{{get_meta_value('language')}}">
        </div>
        <div class="mb-3">
            <label for="isi" class="form-label">Workflow</label>
            <textarea class="form-control summernote" rows="5" id="workflow" name="workflow" placeholder="workflow">{{get_meta_value('workflow')}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>   
@endsection