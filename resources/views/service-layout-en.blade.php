@extends('layouts.master-en')
@section('content')
    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="breadcrumb">

              <li class="active">
                <h2>
                {{$ser->title_en}}
                </h2>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <br>

    <div class="container">
   

    <p style="color: black;text-align:justify; font-size: 18px; line-height: 30px;">
                {!!$ser->description_en!!}
                 </p>
    </div>

@endsection
  