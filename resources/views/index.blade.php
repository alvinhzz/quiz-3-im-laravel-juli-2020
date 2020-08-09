@extends('layouts.master')

@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
@endpush

@section('content')
<a href="/projects/create" class="btn btn-success btn-circle mb-3 ml-3">
    <i class="fas fa-plus"></i>
</a>
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Start</th>
            <th>Deadline</th>
            <th>Status</th>
            {{-- <th>Manager Project</th> --}}
            <th>#</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $a)
        <?php
        $status;
        if ($a->status == 0) $status = "On Progres";
        else $status = "Done!";
        ?>

        <tr>
            <td>{{ $a->project_name }}</td>
            <td>{{ $a->project_desc }}</td>
            <td>{{ $a->start_at }}</td>
            <td>{{ $a->deadline }}</td>
            <td><?= $status ?></td>
            {{-- <td>{{  }}</td> --}}
            <td>
                <div class="d-flex">
                    <a href="/proyek/{{ $a->id }}" class="btn btn-info btn-circle mr-1">
                        <i class="fas fa-info-circle"></i>
                    </a>
                    <a href="/proyek/{{ $a->id }}/edit" class="btn btn-warning btn-circle">
                        <i class="fas fa-pen"></i>
                    </a>
                    <form action="/proyek/{{ $a->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-circle ml-1"><i
                                class="fas fa-trash"></i></button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
@endsection

@push('table')
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(function () {
    $("#example").DataTable();
  });
</script>
@endpush

@push('scripts')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Selamat Datang!!',
        icon: 'success',
        confirmButtonText: 'Terimakasih!'
    })
</script>
@endpush