@extends('layout.admin.header')

@section('title', 'Afdal Analytics knowledge base')

@section('content')


<div class="page-wrapper wrap10">
   <div class="container-fluid">
      <div class="row page-titles">
         <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">knowledge baset</h4>
         </div>
         
      </div>
      	@if ($message = Session::get('success'))

                <div class="alert alert-success alert-block">
                
                    <button type="button" class="close" data-dismiss="alert">×</button>    
                
                    <strong>{{ $message }}</strong>
                
                </div>
                
                @endif
                
                  
                
                @if ($message = Session::get('error'))
                
                <div class="alert alert-danger alert-block">
                
                    <button type="button" class="close" data-dismiss="alert">×</button>    
                
                    <strong>{{ $message }}</strong>
                
                </div>
                
                @endif
                <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="register-box-body">
                            <p class="login-box-msg">Knowledge Base</p>
                            <form id="add_form" action="{{asset('submit-knowlegebase')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                <div class="col-xs-6">
                                <div class="form-group has-feedback">
                                    <input type="text" class="form-control" id="title" name="title" value="{{@$getData['0']['title']}}" placeholder="Enter title">
                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="form-group has-feedback ">
                                        <input type="file" class="form-control" id="" name="image" >
                                        <input type="hidden" value="{{@$getData['image']}}" name="u_image">
                                    </div>
                                 </div>
                                 <div class="col-xs-3">
                                    <div class="form-group has-feedback ">
                                    <img class="profile-user-img img-responsive img-circle" height="50px" width="100px" src="{{asset('public/images/knowlage-images')}}/{{@$getData['0']['image']}}"
                                    </div>
                                    </div>
                                 </div>
                                
                                <div class="col-xs-6">
                                <div class="form-group has-feedback">
                                <textarea name="description" id="description" cols="60" rows="5" placeholder="Short Description">{!! @$getData['0']['description'] !!}</textarea>
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                </div>
                                </div>
                                 </div>
                                <input type="hidden" id="table_id" value="{{@$getData['0']['id']}}" name="table_id">
                            
                                <div class="row">
                                    <div class="col-xs-8">
                            
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-xs-4">
                                        <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
                                        <a href="{{asset('knowledge_base')}}" class="btn btn-primary btn-block btn-flat">Back</a>
                                    </div>
                            
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                </div>
            
            </div>
        </div>
   </div>
</div> 

@endsection