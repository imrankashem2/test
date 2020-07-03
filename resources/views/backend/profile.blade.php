@extends('layouts.adminlayout')
@section('content')
<main>
    <div class="container-fluid">
        <div class="content">
            <!-- Content Header (Page header) -->
            <section class="content-header">
              <h2>
            Admin Profile &amp; Password Setup

              </h2>

            </section>

            <!-- Main content -->
            <section class="content">




              <div class="row">
                <div class="col-md-12">
                          <!-- Custom Tabs -->
                  <div class="card ">
                    <ul class="card-header nav row">
                        <li style="margin-left:30px;" class=""><a href="#tab_1" data-toggle="tab" aria-expanded="false"> Change profile </a></li>
                       <li style="margin-left:30px;" class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false"> Change Password </a></li>
                     </ul>
                    <div class="tab-content">
                      <div class="tab-pane active" id="tab_1">
                       <!-- /.box-header -->
                  <div class="box-body no-padding table-responsive">
                    <table class="table table-striped">
                      <tbody><tr>
                        <th>Image</th>
                        <th>Full Name</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Job Title</th>
                        <th>Contact No</th>
                        <th>Gender</th>
                        <th>Action</th>
                      </tr>
                         <tr>
                        <td><img src="http://ifwl-bd.com/Image/ProfileImage/8255.png" style="width:120px;height:120px" alt="img">
                        </td>
                        <td>Admin user</td>
                        <td>66 North Tower, Gulshan</td>
                        <td>admin@gmail.com</td>
                        <td>Admin</td>
                        <td>001295809589</td>
                        <td>Female</td>
                        <td>

                          <a href="http://ifwl-bd.com/profile/edit/11"><button type="button" class="btn btn-danger"><i class="fa far fa-edit"></i>Edit</button></a>
                        </td>
                      </tr>


                    </tbody></table>
                  </div>
                      </div>
                      <!-- /.tab-pane -->
                      <div class="tab-pane" id="tab_2">

              <div class="card-body">
                      <form method="POST" action="http://ifwl-bd.com/profile/passwordSave" accept-charset="UTF-8" class="form-vertical"><input name="_token" value="vyZ8RFr7w59szWUwx2Ub7ZbAeQXwC9oPW7Gi1UAx" style="" type="hidden">
                            <div class="box-body">

                                <div class="row">

                                    <div class="col-xs-8">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Current Password</label>
                                            <input class="form-control" id="exampleInputEmail1" name="current-password" value="" required="" type="password">

                                                                            </div>


                                        <div class="form-group">
                                            <label for="exampleInputEmail1">New Password</label>
                                            <input class="form-control" id="exampleInputEmail1" name="password_confirmation" value="" required="" type="password">
                                                                                </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Confirm New Password</label>
                                            <input class="form-control" id="exampleInputEmail1" name="password" value="" required="" type="password">

                                                                            </div>

                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer ">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                            <!-- /.box -->

                            </form>
                        </div>
                      </div>
                      <!-- /.tab-pane -->

                    </div>
                    <!-- /.tab-content -->
                  </div>
                  <!-- nav-tabs-custom -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <!-- END CUSTOM TABS -->

            </section>
            <!-- /.content -->
          </div>
    </div>
</main>

@endsection

