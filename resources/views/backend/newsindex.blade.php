@extends('layouts.adminlayout')
@section('content')

<main>
    <div class="container-fluid">
    <div class="row" style="margin-top:50px;">
        <a   href="http://ifwl-bd.com/news/add"> <button type="button" class="btn btn-primary">
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
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">News Postion</th>
                <th scope="col">Status</th>
                <th scope="col">Dates</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>

              <tr>
                <td  >3</td>
                <td  >Larry the Bird</td>

                <td>@twitter</td>
                <td>@twitter</td>
                <td>@twitter</td>
                <td>@twitter</td>
                <td>@twitter</td>

                <td>
        <a href=" "><button class="btn btn-primary">Edit</button></a>


                      <!-- Button trigger modal -->
  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal ">
    Delete
  </button>

  <!-- Modal -->
          <div class="modal fade" id="exampleModal " tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Delete Post</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Do you want to delete?
            </div>
            <form action=" " method="POST">@csrf
            <div class="modal-footer">
              <input type="hidden" name="id" value=" ">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-danger">delete</button>
            </div>
        </form>
          </div>
          </div>
          </div>




                </td>
              </tr>
            </tbody>
          </table>
      </div>
    </div>
 </main>
@endsection
