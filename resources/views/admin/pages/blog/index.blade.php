@extends('admin.layout.scaffold')
@push('title')
Blog
@endpush
@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
@endpush
@section('content')
    <div style="margin-left: 20%; padding-top: 7%;">
        <div class="container">
    <h3>Blog</h3>
    @if(isset($blog))
    <form class="mt-5" action="{{ route('blog.update',$blog->slug) }}" method="POST"  enctype="multipart/form-data">
    @else
    <form class="mt-5" action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
    @endif
       @csrf
       <div class="mt-5 card">
          <div class="card-body">
             @if(isset($blog))
             <h5> UPDATE</h5>
             @else
             <h5> ADD NEW</h5>
             @endif
             <div class="row">
             <div class="col-md-6 mt-3">
                     <label for="name">Name</label>
                     <input type="text" name="name" class="form-control" value="{{isset($blog) ? $blog->name : old('name')}}"/>
                     <small class="text-danger">@error ('name') {{ $message }} @enderror</small>
                 </div>
                 <div class="col-md-6 mt-3">
                     <label for="title">Title</label>
                     <input type="text" name="title" class="form-control" value="{{isset($blog) ? $blog->title : old('title')}}"/>
                     <small class="text-danger">@error ('title') {{ $message }} @enderror</small>
                 </div>
                 <div class="col-md-12 mt-3">
                     <label for="description">Description</label>
                     <textarea type="text" name="description" id="description" class="form-control">{{isset($blog) ? $blog->description : old('description')}}</textarea>
                     <small class="text-danger">@error ('description') {{ $message }} @enderror</small>
                 </div>
                 <div class="col-md-6 mt-3">
                     <label for="link">Link</label>
                     <input type="text" name="link" class="form-control" value="{{isset($blog) ? $blog->link : old('link')}}"/>
                     <small class="text-danger">@error ('link') {{ $message }} @enderror</small>
                 </div>
                 <div class="col-md-6 mt-3">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image">
                    @isset(($blog->image))
                        <img src="{{asset('upload/image/'.$blog->image)}}" class="img-photo mt-3 img-thumbnail" style="height:100px; width:100px; ">
                        @endisset
                        <small class="text-danger">@error ('image') {{ $message }} @enderror</small>
                 </div>
                 <div class="col-md-12 mt-3">
                   <label for="status">Status</label>
                   <select class="form-control" name="status" id="status">
                      <option value="1" {{isset($blog) && $blog->status == 1 ? 'selected' : null }}>Active</option>
                      <option value="0" {{isset($blog) && $blog->status == 0 ? 'selected' : null }}>Deactive</option>
                   </select>
                   <small class="text-danger">@error ('status') {{ $message }} @enderror</small>
                </div>
                
             </div>
             @if(isset($blog))
             <div style="float:right">
                 <a href="{{route('blog.index')}}"><button  class="btn btn-primary mt-3 " type="button"><b>ADD NEW</b></button></a>&nbsp;&nbsp;
                 <button  class="btn btn-primary mt-3 " type="submit"><b>UPDATE</b></button>
             </div>
             @else
             <button style="float: right;" class="btn btn-primary mt-3 " type="submit"><b>SUBMIT</b></button>
             @endif
          </div>
       </div>
    </form>


    <div class="mt-5 card">
        <div class="card-body">
           <h5 class="pt-2 pb-2"> Blog </h5>
           <div class="row">
              @if(Session('success'))
              <div class="col-md-12 mt-3">
                 <div class="alert alert-success">{{ Session('success') }}</div>
              </div>
              @endif
           </div>
           <table class="table table-striped table-hover" id="table">
              <thead class="table-condensed">
                 <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Link</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Action</th>
                 </tr>
              </thead>
              <tbody>
                 @forelse ($blogs as $blog)
                 <tr>
                    <td>{{ $blog->id }}</td>
                    <td>{{ $blog->name }}</td>
                    <td>{{ $blog->title }}</td>
                    <td>{{ $blog->description }}</td>
                    <td>{{ $blog->link }}</td>
                    <td style="width:10%"><img class="rounded img-thumbnail" src="{{asset('upload/image/'.$blog->image)}}" alt="" width="100%"></td>
                    <td>
                       @if($blog->status == 1)
                       <span class="badge badge-success p-2 text-white badge-shadow">Active</span>
                       @else
                       <span class="badge badge-danger p-2 text-white badge-shadow">Deactive</span>
                       @endif
                    </td>
                    <td>
                      <a href="{{route('blog.edit',$blog->slug)}}"><i class="text-info fa fa-edit"></i></a>&nbsp;|&nbsp;
                       <a href="{{route('blog.delete',$blog->slug)}}"><i class="text-danger fa fa-trash"></i></a>
                    </td>
                    @empty 
                 </tr>
                 @endforelse
              </tbody>
           </table>
        </div>
     </div>
</div>
        </div>
@endsection
@push('scripts')
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.1/tinymce.min.js"></script>
<script>
   $(document).ready(function () {
       $('#table').DataTable();
   });
</script>
<script>
   tinymce.init({ selector:'#description' });
</script>
@endpush