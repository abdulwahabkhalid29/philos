@extends('layout.scaffold')
@push('title')
Profile Index
@endpush
@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
@endpush
@section('content')

<div  class="container mt-5">
<div class="container mt-5">
<div class="row">
              @if(Session('success'))
              <div class="col-md-12 mt-3">
                 <div class="alert alert-success">{{ Session('success') }}
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
                 </div>
           
              </div>
              @endif
           </div>



    </div>
    <div class="card mb-5">
        <h5 style="font-family:arial;" class="card-header text-center  text-dark " > <b>USER PROFILE</b></h5>
        <div class="card-body p-4">
            <form action="{{route('pages.profile.update' )}}"  method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                <div class="col-md-6 mt-3">
                     <label for="name">Name</label>
                     <input type="text" name="name" class="form-control input-md form-full-width" value="{{(auth()->user()->name)}}"/>
                     <small class="text-danger">@error ('name') {{ $message }} @enderror</small>
                 </div>
                <div class="col-md-6 mt-3">
                    <label for="thumbnail">Thumbnail</label>
                    <input type="file" name="thumbnail" class="form-control input-md form-full-width" >
                    @if(!empty(auth()->user()->thumbnail))  
                        <img src="{{asset('upload/profile/'.$user->thumbnail)}}" alt="" width="200px" class="img-thumbnail mt-3">
                    @endif
                    <small class="text-danger">@error ('thumbnail') {{ $message }} @enderror</small>
                </div>
                <div class="col-md-12 mt-3">
                    <label for="about">About</label>
                    <textarea name="about" cols="20" rows="4" onKeyPress class="form-control">{{(auth()->user()->about)}}</textarea>
                    <small class="text-danger">@error ('about') {{ $message }} @enderror</small>
                </div>
                <div class="col-md-6 mt-3">
                    <label for="facebook">Facebook</label>
                    <input type="text" name="facebook" class="form-control input-md form-full-width" value="{{(auth()->user()->facebook)}}">
                    <small class="text-danger">@error ('facebook') {{ $message }} @enderror</small>
                </div>
                <div class="col-md-6 mt-3">
                    <label for="google">Google</label>
                    <input type="text" name="google" class="form-control input-md form-full-width" value="{{(auth()->user()->google)}}">
                    <small class="text-danger">@error ('google') {{ $message }} @enderror</small>
                </div>
                <div class="col-md-6 mt-3">
                    <label for="twitter" >Twitter</label>
                    <input type="text" name="twitter"  class="form-control input-md form-full-width" value="{{(auth()->user()->twitter)}}">
                    <small class="text-danger">@error ('twitter') {{ $message }} @enderror</small>
                </div>
                <div class="col-md-6 mt-3">
                    <label for="linkedin">LinkedIn</label>
                    <input type="text" name="linkedin" class="form-control input-md form-full-width" value="{{(auth()->user()->linkedin)}}">
                    <small class="text-danger">@error ('linkedin') {{ $message }} @enderror</small>
                </div>
                    <div class="mt-3 col-md-12">
                    <button style="float: right;" class="btn btn-primary submit btn btn-md btn-black " type="submit"><b>UPDATE NOW</b></button>
                    </div>
                </div>
            </form>
        </div>
      </div>
</div>
</div>
@endsection