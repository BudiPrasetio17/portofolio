@extends('dashboard.layout')

@section('konten')
    <p class="card-title">Halaman</p>
    <div class="pb-3"><a href="{{ route('halaman.create')}}" class="btn btn-primary">+ Tambah Halaman</a></div>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-1">No</th>
                    <th>Judul</th>
                    <th class="col-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i =1; ?>
                @foreach ($data as $item)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$item->judul}}</td>
                        <td>
                            <a href='' class="btn btn-primary">Edit</a>
                            <a href='' class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                @endforeach
                
            </tbody>
        </table>
    </div>
@endsection