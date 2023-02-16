@extends('admin.layout.scaffold')
@push('title')
Category
@endpush
@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
@endpush
@section('content')
    <div style="margin-left: 20%; padding-top: 7%;">
        <div class="container">
    <h3>Category</h3>
    @if(isset($category))
    <form class="mt-5" action="{{ route('category.update',$category->slug) }}" method="POST"  enctype="multipart/form-data">
    @else
    <form class="mt-5" action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
    @endif
       @csrf
       <div class="mt-5 card">
          <div class="card-body">
             @if(isset($category))
             <h5> UPDATE</h5>
             @else
             <h5> ADD NEW</h5>
             @endif
             <div class="row">
                 <div class="col-md-12 mt-3">
                     <label for="name">Name</label>
                     <input type="text" name="name" class="form-control" value="{{isset($category) ? $category->name : old('name')}}"/>
                     <small class="text-danger">@error ('name') {{ $message }} @enderror</small>
                 </div>
                 <div class="col-md-12 mt-3">
                   <label for="status">Status</label>
                   <select class="form-control" name="status" id="status">
                      <option value="1" {{isset($category) && $category->status == 1 ? 'selected' : null }}>Active</option>
                      <option value="0" {{isset($category) && $category->status == 0 ? 'selected' : null }}>Deactive</option>
                   </select>
                   <small class="text-danger">@error ('status') {{ $message }} @enderror</small>
                </div>
                
             </div>
             @if(isset($category))
             <div style="float:right">
                 <a href="{{route('category.index')}}"><button  class="btn btn-primary mt-3 " type="button"><b>ADD NEW</b></button></a>&nbsp;&nbsp;
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
           <h5 class="pt-2 pb-2"> Category </h5>
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
                    <th>Status</th>
                    <th>Action</th>
                 </tr>
              </thead>
              <tbody>
                 @forelse ($categories as $category)
                 <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                       @if($category->status == 1)
                       <span class="badge badge-success p-2 text-white badge-shadow">Active</span>
                       @else
                       <span class="badge badge-danger p-2 text-white badge-shadow">Deactive</span>
                       @endif
                    </td>
                    <td>
                      <a href="{{route('category.edit',$category->slug)}}"><i class="text-info fa fa-edit"></i></a>&nbsp;|&nbsp;
                       <a href="{{route('category.delete',$category->slug)}}"><i class="text-danger fa fa-trash"></i></a>
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
<script>
    $(document).ready(function () {
        $('#table').DataTable();
    });
</script>
@endpush