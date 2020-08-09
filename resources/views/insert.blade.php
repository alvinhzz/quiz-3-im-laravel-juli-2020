@extends('layouts.master')

@section('content')
<div class="card-body p-0">
    <!-- Nested Row within Card Body -->
    <div class="row d-flex justify-content-center">
        <div class="col-lg-7">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Insert a New Project!</h1>
                </div>
                <form class="user" action="/project" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="projectName">Project Name</label>
                        <input type="text" class="form-control form-control-user" id="projectName" name="projectName">
                    </div>

                    <div class="form-group">
                        <label for="projectDesc">Project Description</label>
                        <textarea type="textarea" class="form-control form-control-user" id="projectDesc"
                            name="projectDesc" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="projectStart">Project Start</label>
                        <input type="date" class="form-control form-control-user" id="projectStart" name="projectStart">
                    </div>

                    <div class="form-group">
                        <label for="projectDeadline">Project Deadline</label>
                        <input type="date" class="form-control form-control-user" id="projectDeadline"
                            name="projectDeadline">
                    </div>

                    <div class="form-group">

                        <select class="form-control">
                            <option value=""></option>
                        </select>
                    </div>

                    <input type="submit" class="btn btn-primary btn-user btn-block" value="INSERT DATA">
                    <hr>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection