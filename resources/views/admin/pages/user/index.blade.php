@extends('admin.layout.scaffold')
@push('title')
User
@endpush
@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
@endpush
@section('content')
<div style="margin-left: 20%; padding-top: 2%;">
   <div class="container">
      <h3>User</h3>

      <div class=" card">
         <div class="card-body">
            <h5 class=" pb-2"> User </h5>
            <table class="table table-striped table-hover" id="table">
               <thead class="table-condensed">
                  <tr>
                     <th>ID</th>
                     <th>Profile Pic</th>
                     <th>Name</th>
                     <th>About</th>
                     <th>Facebook</th>
                     <th>Google</th>
                     <th>Twitter</th>
                     <th>Linkedin</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($users as $user)
                  <tr>
                     <td>{{ $user->id }}</td>
                     <td>@if(!empty($user->thumbnail))
                     <img width="80px" height="40px" src="{{asset('upload/profile/'.$user->thumbnail)}}" class="img-thumbnail">
                     @else
                     <img width="80px" height="40px" class="avatar" src="{{asset('assets/admin/images/avatar.jpg')}}" alt="">
                     @endif</td>
                     <td>{{ $user->name }}</td>
                     <td>{{ $user->about }}</td>
                     <td>{{ $user->facebook }}</td>
                     <td>{{ $user->google }}</td>
                     <td>{{ $user->twitter }}</td>
                     <td>{{ $user->linkedin }}</td>
                  </tr>
                  @endforeach
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