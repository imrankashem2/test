@extends('layouts.adminlayout')
@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Live</h1>

        <div class="row" >
            <div class="col-xl-3 col-md-6" >
                <div class="card   text-black mb-4">

                       {!! $live->video_html !!}


                </div>
            </div>
                    </div>

        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Create footer  </div>
            <div class="card-body">
                <div class="table-responsive">
					<form action="{{route('addLive')}}" method="POST" enctype="multipart/form-data">@csrf

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">name</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="inputEmail3" placeholder="" name="title" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Youtube Link</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="inputEmail3" placeholder="" name="youtube" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                        <button class="btn   btn-success" type="submit" style="margin-top:10px;">Add</button>
                        </div>
					</form>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection

