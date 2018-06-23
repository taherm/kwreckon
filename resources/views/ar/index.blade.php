@extends('layouts.master-ar')
@section('content')
<section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <ul class="breadcrumb">

              <li class="active">
                <h2>
                  الصفحة الرئيسية
                </h2>
              </li>
              </ul>
          </div>
        </div>
      </div>
    </section>
  <br>
<div class="container">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
  {{--  <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>


--}}
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
   
   @php
   $i=0;
   @endphp
    @foreach($slider as $slide)
    @if ($i==0)
      <div class="item active">
      @php
      $i++;
      @endphp
    @else
      <div class="item">
      
    @endif
      <img src="{{asset('uploads/'.$slide->image)}}"
                                data-bgposition="center center"
                                data-bgfit="cover"
                                data-bgrepeat="no-repeat"
                        >
                        
                    
              
      </div>
      @endforeach  
             
    </div>
    
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
</div>

<div class="container">

  <p style="font-size: 18px;" class="text-justify">
  يعد حفظ سجلات محاسبية دقيقة وشاملة جزءا ضروريا من ممارسة الأعمال والمشاريع التجارية ، لذلك فإن نجاح مشروعك يعتمد على تلك السجلات ، حيث أن السجلات المحاسبية تمكنك من قياس نبض مشروعك بدقة من خلال إكتشاف أي خلل في سير أعمال المشروع بهدف إتخاذ إجراءات التصحيح المناسبة قبل فوات الأوان .

إن إمتلاك وتشغيل مشروعك التجاري يتطلب منك تنفيذ العديد من المهام والمسئوليات للحفاظ على نجاح عملك . في الوقت الذي تود أن تكون فيه مطلع على الكثير من مسئولياتك اليومية في مشروعك التجاري ، فإنه من المفيد الإستعانة بالمختصين في مجال إعداد وحفظ السجلات المحاسبية والإدارة المالية. هنا في شركة ريكين نختص في إعداد وحفظ السجلات المحاسبية. فريق عملنا سيمكنك من التفرغ والتركيز على إدارة مشروعك التجاري بينما نهتم نحن في التعامل مع الأرقام. مع خدمات ريكين لإعداد وحفظ السجلات المحاسبية ، يمكنك تحويل جهدك والتركيز على الأعمال الأخرى التي تحتاج منك القيام بها.

لم يعد من الضروري بالنسبة لك توظيف محاسب بدوام كامل أو حتى بدوام جزئي ، من خلال الاستعانة بخدمات إعداد وحفظ السجلات المحاسبية من الشركات الإستشارية ستتاح لك فرصة خفض التكاليف وتوفير النفقات المتعلقة بالإدارة المالية كنفقات الموظفين بالإضافة إلى النفقات المتعلقة بالأنظمة والبرامج الآلية ، وسوف تستفيد من خبرات المحاسبين المحترفين والمؤهلين دون الحاجة إلى توظيفهم . </p>
  <br>
</div>




<div class="container">
      <h3 class="text-center">Reckon Services</h3>
      
    	
      <div class="row row-bottom-margin">
      @foreach($ser as $s)
        <div class="col-sm-4">
          <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
            <div class="mainflip">
            <div class="frontside">
            <div class="card" style="width:20rem;">
            <img class="card-img-top" src="{{asset('uploads/'.$s->image)}}" alt="card image">
           
            </div>
            </div>
            <div class="backside">
            <div class="card" style="width:20rem;">
            <div class="card-body">
            <center> <h5 class="text-center">{{$s->title_ar}}</h5></center>
            <center><a href="{{ url('services_ar/'.$s->id) }}" class="btn btn-info btn-md text-center">Click Here</a></center>
            </div>
            
            </div>
            </div>
            </div>
            </div>
        </div>
        @endforeach
        
      </div>
    
     

    </div>



@endsection