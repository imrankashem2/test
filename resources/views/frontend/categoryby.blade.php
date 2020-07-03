@extends('layouts.newlayout')
@section('content')
<section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_page">
     
    <div>
       
     </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-4" >
        <aside class="right_content">

          @include('../frontend.partials.Popular')

          @include('../frontend.partials.ads')




        </aside>
      </div>
    </div>
  </section>

@endsection
