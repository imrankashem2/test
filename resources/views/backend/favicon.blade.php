@extends('layouts.adminlayout')
@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Favicon</h1>

        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card   text-black mb-4">
                    <div class="card-header">Favicon </div>
                    <div class="card-body">


                        @if(!empty($favicon->faviconImage))
                        <p><a href="{{Storage::url($favicon->faviconImage)}}">Ads Price</a></p>
                    @else
                        <p>Please upload cover letter</p>
                    @endif
                    </div>

                </div>
            </div>
                    </div>

        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Create Favicon image </div>
            <div class="card-body">
                <div class="table-responsive">
                    <form action="{{route('addFavicon')}}" method="POST" enctype="multipart/form-data">@csrf

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="inputEmail3" placeholder="" name="faviconImage" type="file">
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

