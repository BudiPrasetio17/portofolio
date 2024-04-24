@extends('dashboard.layout')

@section('konten')
    <p class="card-title">Education</p>
    <div class="pb-3"><a href="{{ route('experience.create')}}" class="btn btn-primary">+ Tambah Education</a></div>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-1">No</th>
                    <th>Posisi</th>
                    <th>Nama Perusahaan</th>
                    <th>Tgl Mulai</th>
                    <th>Tgl Akhir</th>
                    <th class="col-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i =1; ?>
                @foreach ($data as $item)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$item->judul}}</td>
                        <td>{{$item->info1}}</td>
                        <td>{{$item->tgl_mulai_indo}}</td>
                        <td>{{$item->tgl_akhir_indo}}</td>
                        <td>
                            <a href='{{ route('experience.edit', $item->id)}}' class="btn btn-warning">Edit</a>
                            <form onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?')" method="post" action='{{ route('experience.destroy', $item->id)}}' class="d-inline">
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