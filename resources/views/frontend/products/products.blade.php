@extends('frontend.home-master')

<!-- page title -->
@section('page-title')	
	
@endsection


<!-- page content -->
@section('content')

	<div class="row">
		<div class="twelve columns">
			<div class="row">
            
            <div class="three columns">
			  <h3>Categories</h3>
					<ul>
					  <li><a href="categories.html">Sunset Convertible Mitten                      </a></li>
					  <li><a href="categories.html">Twilight Convertible Mitten                      </a></li>
					  <li><a href="categories.html">Pancha Gloves                      </a></li>
					  <li><a href="categories.html">Taidai Handwarmers                      </a></li>
					  <li><a href="categories.html">Taidai Legwarmer                      </a></li>
					  <li><a href="categories.html">Colorful Legwarmer                      </a></li>
              </ul>
            </div>
                
                
<div class="nine columns">


<div class="product">
<h3>Sunset Convertible Mitten </h3>
<div id="image"><a href="{{url('product_details')}}"><img src="{{url('public/images/hat/CM004WL.jpg')}}"><br>Product Name<br>Code </a></div>
<div><a href="{{url('product_details')}}"><img src="{{url('public/images/hat/CM004WL.jpg')}}"><br>Product Name<br>Code </a></div>
<div><a href="{{url('product_details')}}"><img src="{{url('public/images/hat/CM004WL.jpg')}}"><br>Product Name<br>Code </a></div>
<span class="clearfix"></span><br>
<p align="right"><a href="#">+ view more  </a></p>
<hr />
<h3>Twilight Convertible Mitten </h3>
<div><a href="{{url('product_details')}}"><img src="{{url('public/images/hat/CM004WL.jpg')}}"><br>Product Name<br>Code </a></div>
<div><a href="{{url('product_details')}}"><img src="{{url('public/images/hat/CM004WL.jpg')}}"><br>Product Name<br>Code </a></div>
<div><a href="{{url('product_details')}}"><img src="{{url('public/images/hat/CM004WL.jpg')}}"><br>Product Name<br>Code </a></div>
<span class="clearfix"></span><br>
<p align="right"><a href="categories.html">+ view more  </a></p>
<hr />
</div>
					
				</div>
              
		
		  
			</div>
		</div>
	</div>
	<div class="row">
		<div class="twelve columns">
		<hr />
		<p align="center"><strong>© 2019 Third Pole Handicraft Pvt. Ltd.</strong><br>
 Lalitpur Metropolitan City – 22, 
 Bungamati, Lalitpur, Nepal<br>

E-mail: thirdpolehandicraft@gmail.com, 

	info@thirdpolehandicraft.com.np<br>

Phone: 977-1-5173420, 

Mobile: 977-9851173849/9841934690/9843406003
</p>
		</div>
	</div>


	@endsection