@extends('layouts.master');

@section('content')
<div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Entity Relations Diagrams</h6>
        <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
            </a>
        </div>
    </div>
    <!-- Card Body -->
    <div class="card-body">
        <img src="{{ asset('/images/Project-Management-ERD.png') }}" class="img-fluid" alt="">
    </div>
</div>
@endsection