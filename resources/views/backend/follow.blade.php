@extends('layouts.adminlayout')
@section('content')
<main>
    <div class="container-fluid">
         <div class="card text-left">

                <div class="col-xl-10 col-md-6" style="margin-top;20px;" >
                    <div class="card">
                        <div class="card-body">
                            <strong>Facebook: &nbsp; {{$follow->facebook}}</strong>
                            <br>
                            <br>
                            <strong>twitter: &nbsp;{{$follow->twitter}}</strong>
                            <br>
                            <br>
                            <strong>youtube: &nbsp;{{$follow->youtube}}</strong>
                            <br>
                            <br>
                            <strong>Linkdin: &nbsp;{{$follow->linkedin}}</strong>
                            <br>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="col-xl-10 col-md-6" >
          <div class="card-body">
            <h4 class="card-title">Add Links</h4>
            <form action="{{route('addLink')}}" method="POST" enctype="multipart/form-data">@csrf
                <div class="form-group">
            @if($follow)

                <input type="text" class="form-control" placeholder="facebook" value="{{$follow->facebook}}" name="facebook">
                <br>
                <input type="text" class="form-control" placeholder="twitter"value="{{$follow->twitter}}" name="twitter">
                <br>
                <input type="text" class="form-control" placeholder="linkedin" value="{{$follow->linkedin}}"name="linkedin">
                <br>
                <input type="text" class="form-control" placeholder="youtube"value="{{$follow->youtube}}" name="youtube">
                <br>
                @endif
                <button class="  btn btn-success" type="submit">submit</button>
            </div>
            </form>
          </div>
        </div>

    </div>
    </div>
</main>

@endsection

