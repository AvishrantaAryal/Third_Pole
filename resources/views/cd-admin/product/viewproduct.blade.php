@extends('cd-admin.home-master')

@section('page-title')  
View Product
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Product List
        
      </h1>
     
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Product</a></li>
        <li class="active">Product List </li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
           <div class="box">
            <div class="box-header">
              <h3 class="box-title">
                 <a href="{{url('/product-add')}}"><button class="btn btn-success" style="margin-bottom: 10px; ">Add Product</button></a>
              </h3>
              @if(Session::has('success'))
          <div class="alert alert-success alert-dismissible">
          <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Data Inserted Sucistcessfully</strong>
          {{Session::get("message", '')}}
        </div>
        @elseif(Session::has('updatesuccess'))
        <div class="alert alert-info alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Data Updated Successfully</strong>
          {{Session::get("message", '')}}
        </div>
        @elseif(Session::has('deletesuccess'))
        <div class="alert alert-danger alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Data Deleted Successfully</strong>
          {{Session::get("message", '')}}
        </div>
        @endif
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <table id="example1" class="table table-bordered table-striped">
                <thead>

                <tr>
                  <th>SN</th>
                  <th>Name</th>
                   <th>Status</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                @foreach($test as $pa)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$pa->name}}</td>
                  <td height="75px">
                     <form action="{{url('/statusproduct/'.$pa->id)}}" method="POST">
                      {{csrf_field()}}
                    <div class="btn-group">

                 @if($pa->status == 'active')
                 <button type="button" class="btn btn-success">Available</button>
                 @else
                  <button type="button" class="btn btn-danger">Not Available</button>
                  @endif
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  @if($pa->status == 'active')
                  <div class="dropdown-menu" role="menu" style="min-width: 0px;">
                    <li> <button class="btn btn-danger" type="submit">Not Available</button>
                    </li>
                  </div>
                  @else
                  <div class="dropdown-menu" role="menu" style="min-width: 0px;">
                    <li> <button class="btn btn-success" type="submit">Available</button>
                    </li>
                     </div>
                     @endif
                </div>
              </form>
                     </td>
                  <td>
                    <button class="btn btn-info" data-toggle="modal" data-target="#edit{{$pa->id}}" ><i class="fa fa-edit">
                    </i></button></a>
                    <button class="btn btn-danger" data-toggle="modal" data-target="#modal-danger{{$pa->id}}"><i class="fa fa-trash"> </i></button>
                   <button class="btn btn-success" data-toggle="modal" data-target="#view{{$pa->id}}"><i class="fa  fa-eye"> </i></button>
                 </td>
                </tr>
                @endforeach
                
                </tbody>
                <tfoot>
                <tr>
                  <th>S.N</th>
                  <th>Name</th>
                  <th>Status</th>
                  <th>Action</th>
                  
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

  </div>


 
            
        

        <!--MODEL-->


@foreach($er as $t)
<div class="modal fade" id="view{{$t->id}}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle"><strong>{{$t->name}}</strong></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        @if($t->status=='active')
        Status :<div class="btn btn-success">Available</div>

        @else
         Status :<div class="btn btn-danger">Not Available</div>
        @endif
        <strong><h3 >Details :</h3></strong><p> {!!$t->description!!}</p> 
        <p> <img src="{{url('/imageupload/'.$t->image)}}" style="height: 100px;"></p>
        <h4>Price : {{$t->price}} </h4>
        <h4>Regular Price : {{$t->regularprice}} </h4>
        <h4>size : {{$t->size}} </h4>
        <h4>Dimension : {{$t->dimension}} </h4>
        <h4>Category : {{$t->category}} </h4>
        <h4>Sub Category : {{$t->subcategory}} </h4>
        <h4>Price : {{$t->price}} </h4>
        <p>
            {!!$t->review!!}
        </p>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<!--Delete-->

<div class="modal modal-danger fade" id="modal-danger{{$t->id}}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Message from web</h4>
              </div>
              <div class="modal-body">
                <p>Are you sure you want to delete ?&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancel</button>
               <a href="{{url('/deleteproduct/'.$t->id)}}"> <button type="button" class="btn btn-outline">Yes</button></a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>


        <!--Edit-->
   
        <div class="modal fade" id="edit{{$t->id}}" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title" id="exampleModalLongTitle"><b>EDIT :</b>{{$t->name}}</div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form role="form" action= "{{url('/productupdate/'.$t->id)}}" enctype="multipart/form-data" method="post">
          {{csrf_field()}}
            
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Product Name</label>
                  <input type="text" class="form-control" name="name"  id="pname" value="{{$t->name}}">
                
                </div>
                <div class="form-group">
              
                    <label for="title" >Product Colour</label>
                    <div class="text text-danger">{{$errors->first('color')}}</div>
                    <input type="text" class="form-control" name="color" id="title" value="{{$t->color}}" >
                  </div>
    
    
                  <div class="form-group">
                  <label for="Image"> Image</label>
                  <div class="text text-danger">{{$errors->first('image')}}</div>
                  <input type="file" class="form-control" id="image" name="image" value="{{old('image')}}">
                </div>  
    
                <div class="form-group">
                  <label for="Alternative Image Name" > Alternative Image Name</label>
                  <div class="text text-danger">{{$errors->first('alt')}}</div>
                  <input type="textarea" class="form-control" name="alt" id="altimage" value="{{$t->alt}}" >
                </div>
    
                <div class="form-group">
                  
                    <label for="title" >Product Weight</label>
                    <div class="text text-danger">{{$errors->first('weight')}}</div>
                    <input type="text" class="form-control" name="weight" id="title" value="{{$t->weight}}" >
                  </div>
                  <div class="form-group">
                  
                      <label for="title" >Size</label>
                      <div class="text text-danger">{{$errors->first('size')}}</div>
                      <input type="text" class="form-control" name="size" id="title" value="{{$t->size}}" >
                    </div>
    
                    <div class="form-group">
                  
                        <label for="title" >Dimension</label>
                        <div class="text text-danger">{{$errors->first('dimension')}}</div>
                        <input type="text" class="form-control" name="dimension" id="title" value="{{$t->dimension}}" >
                      </div>
    
                      <div class="form-group">
                  
                          <label for="title" >Product Category</label>
                          <div class="text text-danger">{{$errors->first('category')}}</div>
                          <input type="text" class="form-control" name="category" id="title" value="{{$t->category}}" >
                        </div>
                        <div class="form-group">
                  
                            <label for="title" >Product Sub Category</label>
                            <div class="text text-danger">{{$errors->first('subcategory')}}</div>
                            <input type="text" class="form-control" name="subcategory" id="title" value="{{$t->subcategory}}" >
                          </div>
                          <div class="form-group">
                  
                              <label for="title" >Product Price</label>
                              <div class="text text-danger">{{$errors->first('price')}}</div>
                              <input type="text" class="form-control" name="price" id="title" value="{{$t->price}}" >
                            </div>
                            <div class="form-group">
                  
                                <label for="title" >Regular Price</label>
                                <div class="text text-danger">{{$errors->first('regularprice')}}</div>
                                <input type="text" class="form-control" name="regularprice" id="title" value="{{$t->regularprice}}" >
                              </div>
    
                <div class="form-group">
                  
                  <label for="description" > Description</label>
                  <div class="text text-danger">{{$errors->first('description')}}</div>
                  <textarea id="summernote" rows="10" cols="80" name="description" >
                    {{$t->description}}
                  </textarea>
                </div>
    
                 <div class="form-group">
                  
                  <label for="description" >Product Review</label>
                  <div class="text text-danger">{{$errors->first('review')}}</div>
                  <textarea name="review" cols="80" >
                    {{$t->review}}
                  </textarea>
                </div>
    
                
                
                <div class="form-group" >
                  
                  <label for="status">Status</label>
                  <div class="text text-danger">{{$errors->first('status')}}</div>
                   <label>
                      <input type="radio" class="minimal" <?php echo $t['status'] == 'active' ? 'checked' :  '' ?> checked name="status" value="active">Active
                  </label>
                  <label>
                      <input type="radio" class="minimal" <?php echo $t['status'] == 'inactive' ? 'checked' :  '' ?> checked name="status" value="inactive">Inactive
                  </label>
                </div>
                
                <div class="form-group" >
                  
                    <label for="status">New Arrival</label>
                    <div class="text text-danger">{{$errors->first('arrival')}}</div>
                     <label>
                        <input type="radio" class="minimal" <?php echo $t['arrival'] == 'yes' ? 'checked' :  '' ?> checked name="arrival" value="yes">Yes
                    </label>
                    <label>
                        <input type="radio" class="minimal" <?php echo $t['arrival'] == 'no' ? 'checked' :  '' ?> checked name="arrival" value="active">No
                    </label>
                  </div>
              
               <div class="modal-footer">
               <button type="submit" class="btn btn-primary">Update</button>
              </div>
         </div>
         </form>
         </div>
         </div>
         </div>
         </div>     



<style type="text/css">
  .p{
    width: 100px;
  }
</style>

 
@endforeach

@endsection