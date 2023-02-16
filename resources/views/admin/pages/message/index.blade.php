@extends('admin.layout.scaffold')
@push('title')
message
@endpush
@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
@endpush
@section('content')
<div style="margin-left: 20%; padding-top: 7%;">
   <div class="container">
      <h3>Message</h3>

      <div class="mt-5 card">
         <div class="card-body">
            <h5 class="pt-2 pb-2"> Message </h5>
            <table class="table table-striped table-hover" id="table">
               <thead class="table-condensed">
                  <tr>
                     <th>ID</th>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Subject</th>
                     <th>Phone</th>
                     <th>Commint</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($messages as $message)
                  <tr>
                     <td>{{ $message->id }}</td>
                     <td>{{ $message->name }}</td>
                     <td>{{ $message->email }}</td>
                     <td>{{ $message->subject }}</td>
                     <td>{{ $message->number }}</td>
                     <td>{{ $message->comment }}</td>
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