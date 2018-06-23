<!DOCTYPE html>
<html lang="en">
<head>
  <title>Reckon</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('/css/bootstrap-rtl.min.css')}}">
  <link rel="stylesheet" href="{{asset('/css/style.css')}}">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="{{asset('/js/bootstrap.min.js')}}"></script>
  
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
<div id="container">
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">
            <img src="../img/logo.png">
          </a>
        </div>

        <div class="collapse navbar-collapse" id="myNavbar">

          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="/home-ar">الصفحة الرئيسية</a>
            </li>
            <li>
              <a href="/about-ar">
                من نحن
              </a>
            </li>
            @foreach($cat as $item)
			                @if($item->services->count())
							<li class="dropdown">
								<a href=""onclick="return false" class="dropdown-toggle disabled" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">{{$item->title_ar}} <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu">
								@foreach($item->services as $submenu)
					<li><a href="{{url('services_ar'.'/'.$submenu->id)}}">{{$submenu->title_ar}}</a></li>
					@endforeach
				</ul>
			</li>
							
							
					
				@else
				<li><a href="">{{$item->title_ar}}</a></li>
				@endif
				@endforeach

            <li>
              <a href="/contact-ar">اتصل بنا</a>
            </li>
            <li>
              <a href="/"> English

              </a>
            </li>
            
            <li>
              <a href="#">
                <span class="glyphicon glyphicon-search"></span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<hr>
<br>
<br>

@yield('content')

<!-- Footer -->
<footer class="text-center" id="main-footer">
          <div>
          <a href="{{url('http://ideasowners.net/')}}">  <p class="pull-left" style="padding:10px">IdeasOwners</p> </a>
            <a class="up-arrow pull-right" href="#myPage" style="padding:10px" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  
  </div>
</footer>
</div>
<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>