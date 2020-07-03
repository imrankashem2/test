@extends('layouts.adminlayout')
@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Survey</h1>

        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card   text-black mb-4">
                    <div class="card-body">
                <img src="" alt="survey">
                    </div>

                </div>
            </div>
                    </div>

        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Create Survey  </div>
            <div class="card-body">
                <div class="table-responsive">

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">question</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="inputEmail3" placeholder="" name="img" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                        <button class="btn   btn-success" type="submit" style="margin-top:10px;">Add</button>
                        </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection

