@extends('admin.layout.scaffold')
@push('title')
Clothe
@endpush
@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
@endpush
@section('content')
    <div style="margin-left: 20%;">
        <div class="container">
    <h3 class="mt-3">Clothe</h3>
    @if(isset($clothe))
    <form class="mt-5" action="{{ route('clothe.update',$clothe->id) }}" method="POST"  enctype="multipart/form-data">
    @else
    <form class="mt-5" action="{{ route('clothe.store') }}" method="POST" enctype="multipart/form-data">
    @endif
       @csrf
       <div class="mt-5 card">
          <div class="card-body">
             @if(isset($clothe))
             <h5> UPDATE</h5>
             @else
             <h5> ADD NEW</h5>
             @endif
             <div class="row">
                 <div class="col-md-6 mt-3">
                     <label for="name">Name</label>
                     <input type="text" name="name" class="form-control" value="{{isset($clothe) ? $clothe->name : old('name')}}"/>
                     <small class="text-danger">@error ('name') {{ $message }} @enderror</small>
                 </div>
                 <div class="col-md-6 mt-3">
                     <label for="category_id">Category</label>
                     <select name="category_id" id="category_id" class="form-control">
                        <option value="">Please Select</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                     </select>
                     <small class="text-danger">@error ('category_id') {{ $message }} @enderror</small>
                    </div>    
                 <div class="col-md-6 mt-3">
                     <label for="price">price</label>
                     <input type="number" name="price" class="form-control" value="{{isset($clothe) ? $clothe->price : old('price')}}"/>
                     <small class="text-danger">@error ('price') {{ $message }} @enderror</small>
                 </div>
                 <div class="col-md-6 mt-3">
                     <label for="description">Description</label>
                     <input type="text" name="description" class="form-control" value="{{isset($clothe) ? $clothe->description : old('description')}}"/>
                     <small class="text-danger">@error ('description') {{ $message }} @enderror</small>
                 </div>
                 
                <div class="col-md-6 mt-3">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image">
                    @isset(($clothe->image))
                        <img src="{{asset('upload/image/'.$clothe->image)}}" class="img-photo mt-3 img-thumbnail" style="height:100px; width:100px; ">
                        @endisset
                        <small class="text-danger">@error ('image') {{ $message }} @enderror</small>
                 </div>
                 <div class="col-md-6 mt-3">
                   <label for="status">Status</label>
                   <select class="form-control" name="status" id="status">
                      <option value="1" {{isset($clothe) && $clothe->status == 1 ? 'selected' : null }}>Active</option>
                      <option value="0" {{isset($clothe) && $clothe->status == 0 ? 'selected' : null }}>Deactive</option>
                   </select>
                   <small class="text-danger">@error ('status') {{ $message }} @enderror</small>
                </div>
             
                
             </div>
             @if(isset($clothe))
             <div style="float:right">
                 <a href="{{route('clothe.index')}}"><button  class="btn btn-primary mt-3 " type="button"><b>ADD NEW</b></button></a>&nbsp;&nbsp;
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
           <h5 class="pt-2 pb-2"> CLOTHES </h5>
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
                    <th>Category</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Action</th>
                 </tr>
              </thead>
              <tbody>
                 @forelse ($clothes as $clothe)
                 <tr>
                    <td>{{ $clothe->id }}</td>
                    <td>{{ $clothe->name }}</td>
                    <td>{{ $clothe->category->name }}</td>
                    <td>{{ $clothe->price }}</td>
                    <td style="width:10%"><img class="rounded img-thumbnail" src="{{asset('upload/image/'.$clothe->image)}}" alt="" width="100%"></td>
                    <td>
                       @if($clothe->status == 1)
                       <span class="badge badge-success p-2 text-white badge-shadow">Active</span>
                       @else
                       <span class="badge badge-danger p-2 text-white badge-shadow">Deactive</span>
                       @endif
                    </td>
                    <td>
                      <a href="{{route('clothe.edit',$clothe->id)}}"><i class="text-info fa fa-edit"></i></a>&nbsp;|&nbsp;
                       <a href="{{route('clothe.delete',$clothe->id)}}"><i class="text-danger fa fa-trash"></i></a>
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