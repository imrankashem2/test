@extends('layouts.adminlayout')
@section('content')
<main>
    <div class="container-fluid">
<br>

        <div class="row">

            <div class="col-xl-10 col-md-6" >
                <div class="card   text-black mb-4">
                    <div class="card-header">Footer </div>
                    <div class="card-body">
                    <p>{{$footer->info}}</p>
                    </div>

                </div>
            </div>
                    </div>

        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Create footer  </div>
            <div class="card-body">
                <div class="table-responsive">
					<form action="{{route('addFooter')}}" method="POST" enctype="multipart/form-data">@csrf

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">info</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="inputEmail3" placeholder="" name="info" type="text"></textarea>
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

