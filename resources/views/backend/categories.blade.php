@extends('layouts.adminlayout')
@section('content')

<main>
    <div class="container-fluid">

        <div class="row margins vdivide">
            <div class="col-md-4">
                <h3 style="margin-top:70px;">Add categories</h3>
                <div class="box box-success">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <span class="input-group-text" id="basic-addon2">Save</span>
                    </div>
                  </div>
            </div>
            </div>
            <div class="col-md-8">
                <h2 style="text-align: center;">Categories</h2>
                <div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable no-footer" role="grid" aria-describedby="example1_info">
                    <thead>
                      <tr role="row"><th class="text-center sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 69.0833px;" aria-sort="ascending" aria-label="No.: activate to sort column descending">No.</th><th class="text-center sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 201.083px;" aria-label="Category Name: activate to sort column ascending">Category Name</th><th class="text-center sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 216.267px;" aria-label="Action: activate to sort column ascending">Action</th></tr>
                    </thead>
                                  <tbody>

                    <tr role="row" class="odd">
                        <td class="text-center sorting_1">1</td>
                        <td class="text-center">Bangladesh</td>
                        <td class="text-center">

                        <a href="" data-toggle="modal" data-target="#modal-default1"><button type="button" class="btn btn-success btn-sm"><i class="fa far fa-edit"></i> Edit</button></a>

               <div class="modal fade" id="modal-default1">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header bg-green">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Category Edit</h4>
                      </div>
                      <div class="modal-body">
                        <form method="POST" action="http://ifwl-bd.com/categories/update" accept-charset="UTF-8" class="form-vertical"><input name="_token" value="s5nR8jRzJAWjSSjZeNeprqasL21zjPPHb1L95RQr" style="" type="hidden">
                        <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Category: </label>
                            <input value="Bangladesh" class="form-control" id="exampleInputEmail1" name="categoryName" type="text">

                            <input value="1" class="form-control" name="id" style="" type="hidden">
                          </div>
                        </div>
                      </form></div>
                      <!-- /.box-body -->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>


                    </div>

                  </div>
                  <!-- /.modal-content -->
                </div>

                          <a href="http://ifwl-bd.com/categories/delete/1"> <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Delete</button></a>


                        </td>
                      </tr><tr role="row" class="even">
                        <td class="text-center sorting_1">2</td>
                        <td class="text-center">International</td>
                        <td class="text-center">

                        <a href="" data-toggle="modal" data-target="#modal-default2"><button type="button" class="btn btn-success btn-sm"><i class="fa far fa-edit"></i> Edit</button></a>

               <div class="modal fade" id="modal-default2">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header bg-green">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Category Edit</h4>
                      </div>
                      <div class="modal-body">
                        <form method="POST" action="http://ifwl-bd.com/categories/update" accept-charset="UTF-8" class="form-vertical"><input name="_token" value="s5nR8jRzJAWjSSjZeNeprqasL21zjPPHb1L95RQr" style="" type="hidden">
                        <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Category: </label>
                            <input value="International" class="form-control" id="exampleInputEmail1" name="categoryName" type="text">

                            <input value="2" class="form-control" name="id" style="" type="hidden">
                          </div>
                        </div>
                      </form></div>
                      <!-- /.box-body -->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>


                    </div>

                  </div>
                  <!-- /.modal-content -->
                </div>

                          <a href="http://ifwl-bd.com/categories/delete/2"> <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Delete</button></a>


                        </td>
                      </tr><tr role="row" class="odd">
                        <td class="text-center sorting_1">3</td>
                        <td class="text-center">Sports</td>
                        <td class="text-center">

                        <a href="" data-toggle="modal" data-target="#modal-default3"><button type="button" class="btn btn-success btn-sm"><i class="fa far fa-edit"></i> Edit</button></a>

               <div class="modal fade" id="modal-default3">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header bg-green">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Category Edit</h4>
                      </div>
                      <div class="modal-body">
                        <form method="POST" action="http://ifwl-bd.com/categories/update" accept-charset="UTF-8" class="form-vertical"><input name="_token" value="s5nR8jRzJAWjSSjZeNeprqasL21zjPPHb1L95RQr" style="" type="hidden">
                        <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Category: </label>
                            <input value="Sports" class="form-control" id="exampleInputEmail1" name="categoryName" type="text">

                            <input value="3" class="form-control" name="id" style="" type="hidden">
                          </div>
                        </div>
                      </form></div>
                      <!-- /.box-body -->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>


                    </div>

                  </div>
                  <!-- /.modal-content -->
                </div>

                          <a href="http://ifwl-bd.com/categories/delete/3"> <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Delete</button></a>


                        </td>
                      </tr><tr role="row" class="even">
                        <td class="text-center sorting_1">4</td>
                        <td class="text-center">Opinion</td>
                        <td class="text-center">

                        <a href="" data-toggle="modal" data-target="#modal-default4"><button type="button" class="btn btn-success btn-sm"><i class="fa far fa-edit"></i> Edit</button></a>

               <div class="modal fade" id="modal-default4">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header bg-green">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Category Edit</h4>
                      </div>
                      <div class="modal-body">
                        <form method="POST" action="http://ifwl-bd.com/categories/update" accept-charset="UTF-8" class="form-vertical"><input name="_token" value="s5nR8jRzJAWjSSjZeNeprqasL21zjPPHb1L95RQr" style="" type="hidden">
                        <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Category: </label>
                            <input value="Opinion" class="form-control" id="exampleInputEmail1" name="categoryName" type="text">

                            <input value="4" class="form-control" name="id" style="" type="hidden">
                          </div>
                        </div>
                      </form></div>
                      <!-- /.box-body -->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>


                    </div>

                  </div>
                  <!-- /.modal-content -->
                </div>

                          <a href="http://ifwl-bd.com/categories/delete/4"> <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Delete</button></a>


                        </td>
                      </tr><tr role="row" class="odd">
                        <td class="text-center sorting_1">5</td>
                        <td class="text-center">Economy</td>
                        <td class="text-center">

                        <a href="" data-toggle="modal" data-target="#modal-default5"><button type="button" class="btn btn-success btn-sm"><i class="fa far fa-edit"></i> Edit</button></a>

               <div class="modal fade" id="modal-default5">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header bg-green">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Category Edit</h4>
                      </div>
                      <div class="modal-body">
                        <form method="POST" action="http://ifwl-bd.com/categories/update" accept-charset="UTF-8" class="form-vertical"><input name="_token" value="s5nR8jRzJAWjSSjZeNeprqasL21zjPPHb1L95RQr" style="" type="hidden">
                        <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Category: </label>
                            <input value="Economy" class="form-control" id="exampleInputEmail1" name="categoryName" type="text">

                            <input value="5" class="form-control" name="id" style="" type="hidden">
                          </div>
                        </div>
                      </form></div>
                      <!-- /.box-body -->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>


                    </div>

                  </div>
                  <!-- /.modal-content -->
                </div>

                          <a href="http://ifwl-bd.com/categories/delete/5"> <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Delete</button></a>


                        </td>
                      </tr><tr role="row" class="even">
                        <td class="text-center sorting_1">6</td>
                        <td class="text-center">Entertainment</td>
                        <td class="text-center">

                        <a href="" data-toggle="modal" data-target="#modal-default6"><button type="button" class="btn btn-success btn-sm"><i class="fa far fa-edit"></i> Edit</button></a>

               <div class="modal fade" id="modal-default6">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header bg-green">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Category Edit</h4>
                      </div>
                      <div class="modal-body">
                        <form method="POST" action="http://ifwl-bd.com/categories/update" accept-charset="UTF-8" class="form-vertical"><input name="_token" value="s5nR8jRzJAWjSSjZeNeprqasL21zjPPHb1L95RQr" style="" type="hidden">
                        <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Category: </label>
                            <input value="Entertainment" class="form-control" id="exampleInputEmail1" name="categoryName" type="text">

                            <input value="6" class="form-control" name="id" style="" type="hidden">
                          </div>
                        </div>
                      </form></div>
                      <!-- /.box-body -->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>


                    </div>

                  </div>
                  <!-- /.modal-content -->
                </div>

                          <a href="http://ifwl-bd.com/categories/delete/6"> <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Delete</button></a>


                        </td>
                      </tr><tr role="row" class="odd">
                        <td class="text-center sorting_1">7</td>
                        <td class="text-center">Lifestyle</td>
                        <td class="text-center">

                        <a href="" data-toggle="modal" data-target="#modal-default7"><button type="button" class="btn btn-success btn-sm"><i class="fa far fa-edit"></i> Edit</button></a>

               <div class="modal fade" id="modal-default7">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header bg-green">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Category Edit</h4>
                      </div>
                      <div class="modal-body">
                        <form method="POST" action="http://ifwl-bd.com/categories/update" accept-charset="UTF-8" class="form-vertical"><input name="_token" value="s5nR8jRzJAWjSSjZeNeprqasL21zjPPHb1L95RQr" style="" type="hidden">
                        <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Category: </label>
                            <input value="Lifestyle" class="form-control" id="exampleInputEmail1" name="categoryName" type="text">

                            <input value="7" class="form-control" name="id" style="" type="hidden">
                          </div>
                        </div>
                      </form></div>
                      <!-- /.box-body -->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>


                    </div>

                  </div>
                  <!-- /.modal-content -->
                </div>

                          <a href="http://ifwl-bd.com/categories/delete/7"> <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Delete</button></a>


                        </td>
                      </tr><tr role="row" class="even">
                        <td class="text-center sorting_1">8</td>
                        <td class="text-center">Science &amp; Tech</td>
                        <td class="text-center">

                        <a href="" data-toggle="modal" data-target="#modal-default8"><button type="button" class="btn btn-success btn-sm"><i class="fa far fa-edit"></i> Edit</button></a>

               <div class="modal fade" id="modal-default8">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header bg-green">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Category Edit</h4>
                      </div>
                      <div class="modal-body">
                        <form method="POST" action="http://ifwl-bd.com/categories/update" accept-charset="UTF-8" class="form-vertical"><input name="_token" value="s5nR8jRzJAWjSSjZeNeprqasL21zjPPHb1L95RQr" style="" type="hidden">
                        <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Category: </label>
                            <input value="Science &amp; Tech" class="form-control" id="exampleInputEmail1" name="categoryName" type="text">

                            <input value="8" class="form-control" name="id" style="" type="hidden">
                          </div>
                        </div>
                      </form></div>
                      <!-- /.box-body -->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>


                    </div>

                  </div>
                  <!-- /.modal-content -->
                </div>

                          <a href="http://ifwl-bd.com/categories/delete/8"> <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Delete</button></a>


                        </td>
                      </tr></tbody>

                  </table></div></div>
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
