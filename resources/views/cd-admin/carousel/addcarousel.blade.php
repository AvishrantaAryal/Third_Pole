@extends('cd-admin.home-master')

@section('page-title')  
Add Carousel
@endsection

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
  Add Carousel
  </h1>
  
     
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Carousel</a></li>
        <li class="active">Add Carousel</li>
      </ol>
    </section>


<section class="content"> 
<div class="row">
  <div class="col-md-12 box1">
    <div class="box box-default">
      <div class="box-header">
        <h3 class="box-title">Add Carousel</h3>
      </div>
      <div class="box-body">
        <!-- Date dd/mm/yyyy -->
        <form role="form" method="post" action= "{{url('storecarousel')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Carousel Name</label>
                <div class="text text-danger">{{$errors->first('name')}}</div>
                <input type="text" class="form-control" name="name"  id="name" placeholder="Enter Carousel Name" value="{{Request::old('name')}}">
              
            </div>
              
            <div class="form-group">
                <label for="exampleInputFile">Image for Carousel</label>
                <div class="text text-danger">{{$errors->first('image')}}</div>
                <input type="file" class="form-control" name="image" id="image" placeholder="Choose Image" value="{{Request::old('image')}}">
              </div>

                <div class="form-group">
                <label for="imgalt">Alternative Image Text </label>
                <div class="text text-danger">{{$errors->first('alt')}}</div>
                <input type="text" class="form-control" name="alt" id="alt" placeholder="Alternative Image Text" value="{{Request::old('alt')}}">
            </div>

                <div class="form-group">
                <label for="name">Description</label>
                <div class="text text-danger">{{$errors->first('description')}}</div>
                 <textarea name="description" id="summernote" rows="20" cols="80">
                  {{old('description')}}
                    
                  </textarea>
              
              </div>

               <div class="form-group">
        <p>Status</p>
        <div class="text text-danger">{{$errors->first('status')}}</div>
                <label>
                <input type="radio" class="minimal" name="status" value="active" <?php echo old('status')=='active' ? 'checked' : ' '  ?> >
                Active
              </label>
              <label>
                <input type="radio" class="minimal" name="status" value="inactive" <?php echo old('status')=='inactive' ? 'checked' : ' '  ?>>
                Inactive
              </label>
                
              </div>
       
          
            <button class="btn btn-success pull-right " type="submit">Add Carousel</button>
          
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



