  @extends('layouts.sidebar')
  @section('content')
  <br><br>
  <div class="container" style="margin-right: -10px;">
   <h2 align="center">Send a mail with Attachment using laravel 5.8</h2><br />
   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <button type="button" class="close" data-dismiss="alert">×</button>
     <ul>
      @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif
   @if ($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif
   <div style="margin-left: 80px">
<form method="post" action="{{ route('sendemail.store') }}" enctype="multipart/form-data" role="form" class="form-horizontal" id="location">
    {{ csrf_field() }}
    <div class="col-lg-6 form-group">
     <label>Enter Your Name</label>
     <input type="text" name="name" class="form-control" value="" />
    </div>
    <div class="col-lg-6 form-group">
     <label>Enter Your Email</label>
     <input type="text" name="email" class="form-control" value="" />
    </div>
    <div class="col-lg-6 form-group">
        <label for="resume" placeholder="(resume type *PDF*)">Document:<span class="text-danger font-weight-bold">*</span></label>
        <input type="file" class="w-100 p-1" name="image" value="{{old('resume')}}"/>
        <label class="text-danger mt-1" >(*File type- PDF & Maximum size 1 MB*)</label>
    </div>
    <div class="form-group ml-3">
     <input type="submit" name="send" class="btn btn-info" value="Send" />
    </div>
   </form>
  </div>
  </div>
  </div>
  @endsection