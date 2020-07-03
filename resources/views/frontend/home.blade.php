
@extends('layouts.newlayout')

@section('content')

  <section id="sliderSection">
    <div class="row">
      @include('../frontend.partials.sliderSection')
      @include('../frontend.partials.latest_post')

    </div>
  </section>
  <section id="contentSection">
    <div class="row">
        @include('../frontend.partials.categories')

      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
            @include('../frontend.partials.Popular')
            @include('../frontend.partials.live')
            <br><br>
            @include('../frontend.partials.poll')
            @include('../frontend.partials.ads')

          <div class="single_sidebar wow fadeInDown">
            <h2><span>Category Archive</span></h2><br>
            <div class="card-body">
            @foreach ($catss as  $cats)
            <a href="" >  <button class="btn btn-danger">{{$cats->categoryName}}</button></a>

<?php

?>
            @endforeach
        </div>

          </div>
          @include('../frontend.partials.hotnews')
          @include('../frontend.partials.survey')
        </aside>
      </div>
    </div>
  </section>





@endsection
