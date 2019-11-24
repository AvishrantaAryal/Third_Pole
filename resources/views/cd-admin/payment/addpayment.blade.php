@extends('cd-admin.home-master')

@section('page-title')  
Payment Form
@endsection

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
  Add Payment
  </h1>
   
     
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Payment</a></li>
        <li class="active">Add Payment </li>
      </ol>
    </section>

    <section class="content"> 
<div class="row">
  <div class="col-md-12 box1">
    <div class="box box-default">
      <div class="box-header">
        <h3 class="box-title">Add Paymet</h3>
      </div>
      <div class="box-body">
        <!-- Date dd/mm/yyyy -->
        <form role="form" method="post" action= "{{url('storepayment')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            
              
              
              <!-- ========================================================================== -->
                      
                <!-- ============================================================================= -->
              
                


                <div class="form-group">
                <label for="imgalt">Title </label>
                <div class="text text-danger">{{$errors->first('title')}}</div>
                <input type="text" class="form-control" name="title" id="tagline" placeholder="Enter Title" value="{{Request::old('tagline')}}">
              </div>

                

                <div class="form-group">
                <label for="name">Details</label>
                <div class="text text-danger">{{$errors->first('description')}}</div>
                 <textarea name="description" id="summernote" rows="20" cols="80">
                  {{old('description')}}
                    
                  </textarea>
              
              </div>

               
       
         
            <button class="btn btn-success pull-right" type="submit">Add Paymet</button>
          
         
            <a href="{{URL()->Previous()}}" class="btn btn-danger">Cancel</a>
         
          </form>

      </div>
    </div>
  </div>


</div>



</section>
</div>

      

      <!-- /.box -->


    <style type="text/css">
      .test1 
      {
        margin-left:15px;
        margin-right: 15px; 
      }
      .box1
      {
        margin-bottom: 15px;
        margin-top: 15px;
      }
    </style>





@endsection