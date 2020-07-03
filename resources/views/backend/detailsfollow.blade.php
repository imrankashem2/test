@extends('layouts.adminlayout')
@section('content')
<main>
    <div class="container-fluid">
        <button class="btn btn-sm btn-dark" style="margin-top:10px;">
            Create new Links</button>
        <h1 class="mt-4">  social network links</h1>
        <div class="card text-left">

          <div class="card-body">
            <h4 class="card-title"> Links</h4>

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <input class="form-control" aria-placeholder="admin@gmail.com" id="exampleInputEmail1" name="email" value="admin@gmail.com" readonly="true" type="text">
                    <br>
                    <input class="form-control" aria-placeholder="admin@gmail.com" id="exampleInputEmail1" name="email" value="admin@gmail.com" readonly="true" type="text">
                    <br>
                    <input class="form-control" aria-placeholder="admin@gmail.com" id="exampleInputEmail1" name="email" value="admin@gmail.com" readonly="true" type="text">
                    <br>

                    <input class="form-control" aria-placeholder="admin@gmail.com" id="exampleInputEmail1" name="email" value="admin@gmail.com" readonly="true" type="text">
                    <br>
                </table>
            </div>

          </div>
        </div>

    </div>
</main>

@endsection

