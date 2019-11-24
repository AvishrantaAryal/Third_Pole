@extends('cd-admin.home-master')
@section('page-title')  
FAQ
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="container-fluid">
  
  <section class="content-header">
    <h1>
       FAQ
    </h1>
   <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">FAQ</a></li>
        <li class="active">View FAQ</li>
      </ol>
  </section> <section class="content">
    <div class="row">
      <div class="col-xs-12">
         <div class="box">
          <div class="box-header">
            <h3 class="box-title">
               <a href="{{url('/faq-add')}}"><button class="btn btn-success" style="margin-bottom: 10px; ">Add FAQ</button></a>
            </h3>
            @if(Session::has('success'))
      <div class="alert alert-success alert-dismissible">
        <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Data Inserted Successfully</strong>
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
                 
                <th>Action</th>
                
              </tr>
              </thead>
              <tbody>
                
              @foreach($d as $pa)
              
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$pa->title}}</td>
                
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
      <h3 class="modal-title" id="exampleModalLongTitle"><strong>{{$t->title}}</strong></h3>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      
      <strong><h3 >Description:</h3></strong> {!!$t->description!!}</p> 
     

      
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
             <a href="{{url('/deletefaq/'.$t->id)}}"> <button type="button" class="btn btn-outline">Yes</button></a>
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
      <div class="modal-title" id="exampleModalLongTitle"><b>EDIT :</b>{{$t->title}}</div>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
    <form role="form" action= "{{url('/updatefaq/'.$t->id)}}" enctype="multipart/form-data" method="post">
        {{csrf_field()}}
          
             <div class="form-group">

          
            
            <label for="title" >Title</label>
            <div class="text text-danger">{{$errors->first('title')}}</div>
            <input type="text" class="form-control" name="title" id="title" value="{{$t->title}}">
          </div>
            
            
            
          <div class="form-group">
            
            <label for="description" > Description</label>
            <div class="text text-danger">{{$errors->first('description')}}</div>
            <textarea id="summernote" rows="10" cols="80" name="description" >
              {!!$t->description!!}
            </textarea>
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