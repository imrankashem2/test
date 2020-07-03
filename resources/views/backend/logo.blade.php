@extends('layouts.adminlayout')
@section('content')
<main>
    <div class="container-fluid">
         <br>

        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card" style="width: 25rem;">
                    <div class="card-header">Logo showing</div>

                 <img class="card-img-top" src="{{asset('storage/'.$logo->logoImage)}}"
                   alt="Card image cap">

                  </div>
            </div>
                    </div>
                    <br>
                    <br>

        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Create logo image </div>
            <div class="card-body">
                <div class="table-responsive">
					<form action="{{route('addLogo')}}" method="POST" enctype="multipart/form-data">@csrf

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="inputEmail3" placeholder="" name="logoImage" type="file">
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

