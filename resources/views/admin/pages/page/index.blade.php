@extends('admin.layout.scaffold')
@push('title')
page
@endpush
@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
@endpush
@section('content')
    <div style="margin-left: 20%;">
        <div class="container">
    <h3 class="mt-3">Page</h3>
    @if(isset($page))
    <form class="mt-5" action="{{ route('page.update',$page->id) }}" method="POST"  enctype="multipart/form-data">
    @else
    <form class="mt-5" action="{{ route('page.store') }}" method="POST" enctype="multipart/form-data">
    @endif
       @csrf
       <div class="mt-5 card">
          <div class="card-body">
             @if(isset($page))
             <h5> UPDATE</h5>
             @else
             <h5> ADD NEW</h5>
             @endif
             <div class="row">
                 <div class="col-md-12 mt-3">
                     <label for="title">title</label>
                     <input type="name" name="title" class="form-control" value="{{isset($page) ? $page->title : old('title')}}"/>
                     <small class="text-danger">@error ('title') {{ $message }} @enderror</small>
                 </div>
                 <div class="col-md-12 mt-3">
                     <label for="description">Description</label>
                     <textarea name="description" class="form-control" id="description" cols="30" rows="10">{{isset($page) ? $page->description : old('description')}}</textarea>
                     <small class="text-danger">@error ('description') {{ $message }} @enderror</small>
                  </div>
                 <div class="col-md-12 mt-3">
                   <label for="status">Status</label>
                   <select class="form-control" name="status" id="status">
                      <option value="1" {{isset($page) && $page->status == 1 ? 'selected' : null }}>Active</option>
                      <option value="0" {{isset($page) && $page->status == 0 ? 'selected' : null }}>Deactive</option>
                   </select>
                   <small class="text-danger">@error ('status') {{ $message }} @enderror</small>
                </div>
             
                
             </div>
             @if(isset($page))
             <div style="float:right">
                 <a href="{{route('page.index')}}"><button  class="btn btn-primary mt-3 " type="button"><b>ADD NEW</b></button></a>&nbsp;&nbsp;
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
           <h5 class="pt-2 pb-2"> PAGES </h5>
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
                    <th>Title</th>
                    <th>Status</th>
                    <th>Action</th>
                 </tr>
              </thead>
              <tbody>
                 @forelse ($pages as $page)
                 <tr>
                    <td>{{ $page->id }}</td>
                    <td>{{ $page->title }}</td>
                    <td>
                       @if($page->status == 1)
                       <span class="badge badge-success p-2 text-white badge-shadow">Active</span>
                       @else
                       <span class="badge badge-danger p-2 text-white badge-shadow">Deactive</span>
                       @endif
                    </td>
                    <td>
                      <a href="{{route('page.edit',$page->id)}}"><i class="text-info fa fa-edit"></i></a>&nbsp;|&nbsp;
                       <a href="{{route('page.delete',$page->id)}}"><i class="text-danger fa fa-trash"></i></a>
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