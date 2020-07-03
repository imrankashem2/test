@extends('layouts.adminlayout')
@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body  d-flex align-items-center justify-content-center ">News Count</div>
                    <div class="card-footer d-flex align-items-center justify-content-center">
                    <p   >{{$news}}</p>

                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-dark text-white mb-4">
                    <div class="card-body  d-flex align-items-center justify-content-center ">Category Count</div>
                    <div class="card-footer d-flex align-items-center justify-content-center">
                    <p   >{{$category}}</p>

                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body  d-flex align-items-center justify-content-center ">Ads Count</div>
                    <div class="card-footer d-flex align-items-center justify-content-center">
                    <p   >{{$ads}}</p>

                    </div>
                </div>
            </div>



        </div>


    </div>
</main>

@endsection

