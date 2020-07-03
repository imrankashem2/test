@extends('layouts.adminlayout')
@section('content')
<main>
    <div class="container-fluid">
<br>

        <div class="row">
            <div class="col-xl-5 col-md-8">
                 <div class="card" style="width: 25rem;">
                    <div class="card-header">TopAd</div>

                 <a target="_blank" href="{{url('storage/'.$topAd->img)}}"> <img class="card-img-top" src="{{asset('storage/'.$topAd->img)}}"
                   alt="Card image cap">
                </a>
                  </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card" style="width: 25rem;">
                    <div class="card-header">SideAd</div>
                    <a target="_blank" href="{{url('storage/'.$sideAd->img)}}"> <img class="card-img-top" src="{{asset('storage/'.$sideAd->img)}}" alt="Card image cap">
                    </a>
                  </div>
            </div>

        </div>
<br>
<br>
        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Create Ads </div>
            <div class="card-body">
                <div class="table-responsive">
					<form action="{{route('adsSave')}}" method="POST" enctype="multipart/form-data">@csrf

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="inputEmail3" placeholder="" name="title" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Ads Category</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="category" required>
                                    <option value=""> Select Ads Category </option>
                                                  <option value="1">Single Top Ad</option>
                                                   <option value="2">Single Side Ad</option>
                                 </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Description</label>
                            <div class="col-sm-10">
                                <textarea id="textareaa" class="form-control" name="description"
                                ></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="inputEmail3" placeholder="" name="img" type="file" required>
                            </div>
                        </div><br>
                        <div class="form-group">

                            <div class="col-sm-10">
                                <button class="btn btn-success"  type="submit" >Save</button>
                            </div>
                        </div>
					</form>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection

