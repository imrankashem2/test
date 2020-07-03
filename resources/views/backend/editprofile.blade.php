@extends('layouts.adminlayout')
@section('content')
<main>
    <div class="container-fluid">
        <div class="content">
            <!-- Content Header (Page header) -->
            <section class="content-header">
              <h1>
              <span><a href="http://ifwl-bd.com/profile/manage"><button type="button" class="btn btn-primary">
          <i class="fa fa-backward"></i> Back</button></a></span>

              </h1>

            </section>

            <!-- Main content -->
            <section class="content">
              <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                <div class="card">

                  <!-- Form Element sizes -->


                  <div class="box box-success">
                    <div class="card-header with-border">
                      <h3 class="box-title">Update Profile</h3>
                    </div>
                    <div class="card-body">
                    <form method="POST"  action="http://ifwl-bd.com/profile/update/11" accept-charset="UTF-8" class="form-vertical" enctype="multipart/form-data"><input name="_method" value="PATCH" style="" type="hidden"><input name="_token" value="vyZ8RFr7w59szWUwx2Ub7ZbAeQXwC9oPW7Gi1UAx" style="" type="hidden">
                      <div class="row">

                        <div class="col-xs-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1"> Full Name</label>
                          <input class="form-control" id="exampleInputEmail1" name="name" value="Admin user" type="text">
                        </div>


                        <div class="form-group">
                          <label for="exampleInputEmail1">Email</label>
                          <input class="form-control" aria-placeholder="admin@gmail.com" id="exampleInputEmail1" name="email" value="admin@gmail.com" readonly="true" type="text">
                        </div>


                        <div class="form-group">
                          <label for="exampleInputEmail1">Contact No</label>
                          <input class="form-control" id="exampleInputEmail1" name="number" value="001295809589" type="text">
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">Profile Picture</label>
                          <input class="form-control" id="exampleInputEmail1" name="img" type="file">
                        </div>
                        </div>
                        <div  style="margin-left:20px" class="col-xs-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Address</label>
                          <input class="form-control" id="exampleInputEmail1" name="address" value="66 North Tower, Gulshan" type="text">
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">Job Title</label>
                          <input class="form-control" id="exampleInputEmail1" name="job_title" value="Admin" type="text">
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">Gender</label>
                          <select class="form-control" name="gender">
                          <option> Select Gender</option>
                          <option value="1">Male</option>
                          <option value="0">Female</option>
                        </select>
                        </div>

                        <div class="form-group">
                        <img src="http://ifwl-bd.com/Image/ProfileImage/8255.png" style="width:100px;height:100px" alt="img">
                        </div>
                        </div>

                      </div>
                    </form></div>
                    <!-- /.box-body -->
                    <div class="box-footer ">
                        <button type="submit" class="btn btn-primary">Update Profile</button>
                      </div>
                  </div>
                  <!-- /.box -->



                </div>
            </div>
              </div>
              <!-- /.row -->
            </section>
            <!-- /.content -->
          </div>
    </div>
</main>

@endsection

