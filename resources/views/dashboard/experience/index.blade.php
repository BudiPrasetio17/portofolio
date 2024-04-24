@extends('dashboard.layout')

@section('konten')
    <p class="card-title">Experience</p>
    <div class="pb-3"><a href="{{ route('experience.create')}}" class="btn btn-primary">+ Tambah Experience</a></div>
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
                            <a href='{{ route('halaman.edit', $item->id)}}' class="btn btn-warning">Edit</a>
                            <form onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?')" method="post" action='{{ route('halaman.destroy', $item->id)}}' class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            
                        </td>
                    </tr>
                    <?php $i++; ?>
                @endforeach
                
            </tbody>
        </table>
    </div>
@endsection