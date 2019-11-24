@extends('frontend.home-master')

<!-- page title -->
@section('page-title')	
	
@endsection


<!-- page content -->
@section('content')

<!--  =============Slider Start==================================--> 
     <div class="row">
    <div class="twelve columns">


	
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{url('imageupload/'.$getonecarosels['image'])}}" alt="{{$getonecarosels['alt']}}">
    </div>
    @foreach($getcarosels as $getcarosel)
    <div class="carousel-item">
      <img class="d-block w-100" src="{{url('imageupload/'.$getcarosel['image'])}}" alt="{{$getcarosel['alt']}}">
    </div>
    @endforeach
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>





  </div>
  
  </div>
  
  
  
  
<!--  =============Slider End==================================-->
	<!-- don't mind this script, I just added them for fun! -->
	<script charset="ISO-8859-1" src="http://fast.wistia.com/static/popover-v1.js"></script>
	
	<div class="row">
		<div class="twelve columns">
			<div class="row">
		    <div class="twelve columns" align="center">
					<h3>Welcome toThird Pole Handicraft</h3>
					<p>
					We feature products designed, prepared, crafted and produced by small and medium Nepalese manufacturers. Some of these products are manufactured by deprived communities. We help these small and medium manufacturer to sell their product through us and reach their product to global market and improve their financials </p>
          <p><a href="{{url('abouts')}}">read more &raquo;</a></p>
	          <hr />					
				</div>
              <div class="nine columns">
		
					<h3>Categories</h3>
<div class="product">
<div><a href="{{url('products')}}"><img src="{{url('public/images/hat/CM004WL.jpg')}}"><br>Sunset Convertible Mitten</a></div>
<div><a href="{{url('products')}}"><img src="{{url('public/images/hat/CM004WL.jpg')}}"><br>Twilight Convertible Mitten</a></div>
<div><a href="{{url('products')}}"><img src="{{url('public/images/hat/CM004WL.jpg')}}"><br>Pancha Gloves</a></div>
<div><a href="{{url('products')}}"><img src="{{url('public/images/hat/CM004WL.jpg')}}"><br>Taidai Handwarmers</a></div>
<div><a href="{{url('products')}}"><img src="{{url('public/images/hat/CM004WL.jpg')}}"><br>Taidai Legwarmer</a></div>
<div><a href="{{url('products')}}"><img src="{{url('public/images/hat/CM004WL.jpg')}}"><br>Colorful Legwarmer</a></div>
<div><a href="{{url('products')}}"><img src="{{url('public/images/hat/CM004WL.jpg')}}"><br>Sunset Convertible Mitten</a></div>
<div><a href="{{url('products')}}"><img src="{{url('public/images/hat/CM004WL.jpg')}}"><br>Flower Net Muffler </a></div>
<div><a href="{{url('products')}}"><img src="{{url('public/images/hat/CM004WL.jpg')}}"><br>Ribbon Spiral  Hat</a></div>
</div>

      
      </div>      		
				<div class="three columns" align="center">
					<h4>Recent Product</h4>
					
					<!-- don't mind these, I just added them for fun! -->
		          <a href="product-details.html"><img src="{{url('public/images//recent-product/BC-NC-01.jpg')}}">
         <b>Seven Beads Bracelet</b><br>Code : BC-NC-01</a>
            <br><br>


           <a href="product-details.html"><img src="{{url('public/images//recent-product/BC-NC-01.jpg')}}">
         <b>Seven Beads Bracelet</b><br>Code : BC-NC-01</a>
            <br><br>
<a href="product-details.html"><img src="{{url('public/images//recent-product/BC-NC-01.jpg')}}">
         <b>Seven Beads Bracelet</b><br>Code : BC-NC-01</a>
            <br><br>
<a href="product-details.html"><img src="{{url('public/images//recent-product/BC-NC-01.jpg')}}">
         <b>Seven Beads Bracelet</b><br>Code : BC-NC-01</a>
            <br><br>

            
            
            
					
					<br />

				</div>
			</div>
		</div>
	</div>









@endsection