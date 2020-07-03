@extends('layouts.adminlayout')
@section('content')

<main>
    <div class="container-fluid">

        <div class="row margins vdivide">
            <div class="col-md-4">
                <h3 style="margin-top:70px;">Add categories</h3>
                <form action="{{route('CategorySave')}}" method="POST" enctype="multipart/form-data">@csrf
                <div class="box box-success">

                <div class="input-group mb-3">
                    <input type="text" name="categoryName" class="form-control" placeholder="Category" aria-label="Category" aria-describedby="basic-addon2">
                    <div class="input-group-append">

                      <button class="btn btn-sm btn-success" type="submit">Save</button>
                    </div>
                  </div>
            </div>
                </form>
            </div>
            <div class="col-md-8">
                <h2 style="text-align: center;">Categories</h2>
                <div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable no-footer" role="grid" aria-describedby="example1_info">
                    <thead>
                      <tr role="row"><th class="text-center sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 69.0833px;" aria-sort="ascending" aria-label="No.: activate to sort column descending">No.</th><th class="text-center sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 201.083px;" aria-label="Category Name: activate to sort column ascending">Category Name</th><th class="text-center sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 216.267px;" aria-label="Action: activate to sort column ascending">Action</th></tr>
                    </thead>
                    @php($i=1)
                            <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td class="text-center">{{$i++}}</td>
                                    <td class="text-center">{{$category->categoryName}}</td>
                                    <td class="text-center">

                                    <a href="" data-toggle="modal" data-target="#modal-default{{$category->id}}"><button type="button"
                                          class="btn btn-success btn-sm"><i class="fa far fa-edit"></i> {{__('Edit')}}</button></a>

                           <div class="modal fade" id="modal-default{{$category->id}}">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header bg-green">
                                     <h4 class="modal-title">Category Edit</h4>
                                  </div>
                                  <form action="{{route('CategoryUpdate',[$category->id])}}" method="POST" enctype="multipart/form-data">@csrf

                                  <div class="modal-body">
                                    <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Category: </label>
                                        <input type="text" value="{{$category->categoryName}}" class="form-control" id="exampleInputEmail1"
                                          name="categoryName">

                                        <input type="hidden" value="{{$category->id}}" class="form-control" name="id">
                                      </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                      </div>
                                  </div>
                                </form>
                                  <!-- /.box-body -->



                                </div>

                              </div>
                              <!-- /.modal-content -->
                            </div>

                                      <a href="{{route('CategoryDelete',$category->id)}}"> <button type="button"
                                          class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> {{__('Delete')}}</button></a>


                                    </td>
                                  </tr>
                                @endforeach
                            </tbody>

                  </table></div>
                  {{$categories->links()}}
                </div>
            </div>

</div>
    </div>
</main>



@endsection

<style>
    .margins{
        margin-top: 50px;
    }
    .row.vdivide [class*='col-']:not(:last-child):after {
      background: #e0e0e0;
      width: 1px;
      content: "";
      display:block;
      position: absolute;
      top:0;
      bottom: 0;
      right: 0;
      min-height: 70px;
    }
</style>
