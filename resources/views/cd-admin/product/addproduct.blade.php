@extends('cd-admin.home-master')

@section('page-title')  
Add Product
@endsection

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
  Add Product
  </h1>
  
     
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Product</a></li>
        <li class="active">Add Product</li>
      </ol>
    </section>


<section class="content"> 
<div class="row">
  <div class="col-md-12 box1">
    <div class="box box-default">
      <div class="box-header">
        <h3 class="box-title">Add Product</h3>
      </div>
      <div class="box-body">
        <!-- Date dd/mm/yyyy -->
        <form role="form" method="post" action= "{{url('storeproduct')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            
            <div class="form-group">
              
                <label for="title" >Choose Product Category</label>
                <div class="text text-danger">{{$errors->first('category')}}</div>
                <select class="form-control" name="category" value="{{old('category')}}">
                    
                    @foreach($cat as $ca)
                <option value="{{$ca->name}}">{{$ca->name}}</option>
                  @endforeach
                  </select>
              </div>
            
              <div class="form-group">
              
              <label for="title" >Product Name</label>
              <div class="text text-danger">{{$errors->first('name')}}</div>
              <input type="text" class="form-control" name="name" id="title" value="{{old('name')}}" >
            </div>

            <div class="form-group">
              
                <label for="title" >Product Colour</label>
                <div class="text text-danger">{{$errors->first('color')}}</div>
                <input type="text" class="form-control" name="color" id="title" value="{{old('color')}}" >
              </div>


              <div class="form-group">
              <label for="Image"> Image</label>
              <div class="text text-danger">{{$errors->first('image')}}</div>
              <input type="file" class="form-control" id="image" name="image" value="{{old('image')}}">
            </div>  

            <div class="form-group">
              <label for="Alternative Image Name" > Alternative Image Name</label>
              <div class="text text-danger">{{$errors->first('alt')}}</div>
              <input type="textarea" class="form-control" name="alt" id="altimage" value="{{old('alt')}}" >
            </div>

            <div class="form-group">
              
                <label for="title" >Product Weight</label>
                <div class="text text-danger">{{$errors->first('weight')}}</div>
                <input type="text" class="form-control" name="weight" id="title" value="{{old('weight')}}" >
              </div>
              <div class="form-group">
              
                  <label for="title" >Size</label>
                  <div class="text text-danger">{{$errors->first('size')}}</div>
                  <input type="text" class="form-control" name="size" id="title" value="{{old('size')}}" >
                </div>

                <div class="form-group">
              
                    <label for="title" >Dimension</label>
                    <div class="text text-danger">{{$errors->first('dimension')}}</div>
                    <input type="text" class="form-control" name="dimension" id="title" value="{{old('dimension')}}" >
                  </div>

                    <div class="form-group">
              
                        <label for="title" >Product Sub Category</label>
                        <div class="text text-danger">{{$errors->first('subcategory')}}</div>
                        <input type="text" class="form-control" name="subcategory" id="title" value="{{old('subcategory')}}" >
                      </div>
                      <div class="form-group">
              
                          <label for="title" >Product Price</label>
                          <div class="text text-danger">{{$errors->first('price')}}</div>
                          <input type="text" class="form-control" name="price" id="title" value="{{old('price')}}" >
                        </div>
                        <div class="form-group">
              
                            <label for="title" >Regular Price</label>
                            <div class="text text-danger">{{$errors->first('regularprice')}}</div>
                            <input type="text" class="form-control" name="regularprice" id="title" value="{{old('price')}}" >
                          </div>

            <div class="form-group">
              
              <label for="description" > Description</label>
              <div class="text text-danger">{{$errors->first('description')}}</div>
              <textarea id="summernote" rows="10" cols="80" name="description" >
                {{old('description')}}
              </textarea>
            </div>

             <div class="form-group">
              
              <label for="description" >Product Review</label>
              <div class="text text-danger">{{$errors->first('review')}}</div>
              <textarea name="review" cols="80" >
                {{old('review')}}
              </textarea>
            </div>

            
            
            <div class="form-group" >
              
              <label for="status">Status</label>
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
            
            <div class="form-group" >
              
                <label for="status">New Arrival</label>
                <div class="text text-danger">{{$errors->first('arrival')}}</div>
                 <label>
                  <input type="radio" class="minimal" name="arrival" value="yes" <?php echo old('arrival')=='yes' ? 'checked' : ' '  ?> >
                  Yes
                </label>
                <label>
                  <input type="radio" class="minimal" name="status" value="no" <?php echo old('arrival')=='no' ? 'checked' : ' '  ?>>
                  No
                </label>
              </div>
          
            <button class="btn btn-success pull-right" type="submit">Add Product</button>
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



