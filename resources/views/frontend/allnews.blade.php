@extends('layouts.newlayout')

@section('content')
<div class="row">

    <div class="col-md-12">
        <div class="rounded border jobs-wrap">
            @if(count($news)>0)
                @foreach($news as $newss)
        <p>{{$newss->title}}</p>


            @endforeach
            @else
            No jobs found
            @endif

           {{$news->links()}}
            </div>
        </div>
</div>
@endsection
