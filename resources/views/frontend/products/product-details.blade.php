@extends('frontend.home-master')

<!-- page title -->
@section('page-title')  
  
@endsection


<!-- page content -->
@section('content')

   <div class="row">
   <div class="eight column">
  <h4> Product Name</h4>
  <div class="four column">
  
  <link rel="stylesheet" href="lightbox/lightbox.css" type="text/css" media="screen">
<script src="lightbox/prototype.js" type="text/javascript"></script>
<script src="lightbox/scriptaculous.js?load=effects,builder" type="text/javascript"></script>

<script type="text/javascript" src="lightbox/effects.js"></script>
<script src="lightbox/lightbox.js" type="text/javascript"></script>


<a href="{{url('public/images/hat/CM004WL.jpg')}}" rel="lightbox"><img src="product/hat/BC-NC-01.jpg" border=0/></a>

  </div>
   <div class="eight column">
   <h5> Product Details</h5>
   <strong>Product Code No.:</strong> BC-NC-01 <br>

<br><strong>Product Description:</strong><br>
High quality fabric Product.<br>
Ribbon Spiral  <br>
Hand knitted, do not use warm watter to wash	<br>
Wool	<br>
Knitted product	Hat<br>



   Call Us : 9801046609 / 9818757042 / 9803216049.
   </div>
   <div class="twelve columns"> 
   <h5>Please Fillup your reservation</h5>
<form>
<b>Your Name :</b>
<input type="text" name="name" id="textdetails" />  
<b>Address : </b>
<input type="text" name="address" id="textdetails"/>
<b>Email :</b> 
<input type="text" name="email" id="textdetails"/>
<b>Phone :</b> 
<input type="text" name="phone" id="textdetails"/>
<b>Quantity :</b> 
<input type="text" name="quantity" id="textdetails"/>
<b>Details :</b> 
<textarea type="text" name="details" id="textareadetails"/></textarea>
<input type="submit" value="Submit" /> <input type="reset" value="Reset" />
</form>
   
   </div>
   </div>
   <div class="three columns"> <h4>Recent Product</h4></div>
   </div>

<div class="row">
		<div class="twelve columns">
		<hr />
		
   <p align="center">     

    <a href="#">Home</a> |   
    <a href="#">About Us</a> |
    <a href="#">Products</a> |
    <a href="#">Delivery and Shipment</a> |  
    <a href="#">Payment Method</a> | <a href="#">FAQ</a> | <a href="#">Contact Us</a> 
    <br>
<strong>© 2019 Third Pole Handicraft Pvt. Ltd.</strong><br>
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