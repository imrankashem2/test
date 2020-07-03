@extends('layouts.adminlayout')
@section('content')

<main>
    <div class="container-fluid">
    <div class="row" style="margin-top:50px;">
    <a   href="{{route('newsAdd')}}"> <button type="button" class="btn btn-primary">
            <svg class="svg-inline--fa fa-plus-square fa-w-14" aria-hidden="true" focusable="false"
            data-prefix="fas" data-icon="plus-square" role="img" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor"
            d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-32 252c0 6.6-5.4 12-12 12h-92v92c0 6.6-5.4 12-12 12h-56c-6.6 0-12-5.4-12-12v-92H92c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h92v-92c0-6.6 5.4-12 12-12h56c6.6 0 12 5.4 12 12v92h92c6.6 0 12 5.4 12 12v56z"></path>
        </svg><!-- <i class=" fa fas fa-plus-square"></i> --> Add</button>
         </a>
    </div>
    <br>
    <div class="row">
      <h3>News List</h3>
      <br>
    </div>
      <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                  <th class="text-center" width="5%">{{__('No.')}}</th>
                  <th class="text-center" width="10%">{{__('Image')}}</th>
                  <th class="text-center" width="25%">{{__('Title')}}</th>
                  <th class="text-center" width="10%">{{__('Category')}}</th>
                   <th class="text-center" width="5%">{{__('Status')}}</th>
                  <th class="text-center" width="5%">{{__('Dates')}}</th>
                  <th class="text-center" width="30%">{{__('Action')}}</th>
                </tr>
              </thead>
            @php($i=1)
            <tbody>

                @foreach($news as $newss)
                <tr>
                  <td class="text-center">{{$i++}}</td>
                  <td class="text-center"><img src="{{asset('storage/'.$newss->img)}}" width="80"></td>
                  <td class="text-center">{{$newss->title}}</td>
                  <td class="text-center">{{$newss->categoryName}}</td>

                  <td class="text-center">
                    @if($newss->publicationStatus==1)
                   <span class="badge badge-success" style="width:100%; "> Live</span>
                    @else
                  <span class="badge badge-danger"> Draft</span>
                    @endif
                  </td>
                  <td class="text-center">{{date('m-d-Y',strtotime($newss->created_at))}}</td>

                  <td >
                 <div style="margin-left:100px;">
                  <a href="{{route('newsEdit',$newss->id)}}"> <button type="button"
                        class="btn btn-success btn-sm"><i class="fa far fa-edit"></i>{{__('Edit')}}</button></a>
                        <a href="{{route('newsView',$newss->id)}}"> <button type="button"
                        class="btn btn-warning btn-sm"><i class="fa fa-file-text-o"></i> {{__('Details')}}</button></a>
                   <form action="{{route('newsDelete',$newss->id)}}" method="POST">@csrf <button type="submit"
                        class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> {{__('Delete')}}</button></form>


                    </div>
                  </td>
                </tr>
                @endforeach

            </tbody>
          </table>
          {{$news->links()}}
      </div>
    </div>
 </main>
@endsection
