@extends('layouts.adminlayout')
@section('content')
<main>
    <div class="container-fluid">
    <div class="row" style="margin-top:50px; margin-left:10px;">
        <a   href="{{route('news')}}"> <button type="button" class="btn btn-primary">
            <svg class="svg-inline--fa fa-plus-square fa-w-14" aria-hidden="true" focusable="false"
            data-prefix="fas" data-icon="plus-square" role="img" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor"
            d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-32 252c0 6.6-5.4 12-12 12h-92v92c0 6.6-5.4 12-12 12h-56c-6.6 0-12-5.4-12-12v-92H92c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h92v-92c0-6.6 5.4-12 12-12h56c6.6 0 12 5.4 12 12v92h92c6.6 0 12 5.4 12 12v56z"></path>
        </svg><!-- <i class=" fa fas fa-plus-square"></i> --> Back</button>
         </a>
    </div>
    <br>
    <div class="card" style="background:white;">
        <div class="card-header">
             news detials
        </div>
        <div class="card-body">
            <table class="table table-news table-bordered bg-success">
                <tbody><tr>

                  <th>Task</th>
                  <th>Details</th>

                </tr>


                <tr>

                  <td><strong> Information Details </strong></td>
                   <td>
                  <strong>{{$newsd->information}}</strong>
                 </td>
                 </tr>

                <tr>

                  <td><strong>Image</strong></td>
                   <td>
                  <img src="{{asset('storage/'.$newsd->img)}}" style="width:120px;height:120px" alt="img">
                  </td>
                 </tr>
               </tbody></table>
        </div>

    </div>

    </div></main>
@endsection
