@extends('layouts.app', ['activePage' => user-management, 'title' => Users, 'navName' => Users])

@section('content')
<div class="content">
   <div class="container-fluid">
       <div class="row">
           <div class="col-md-12">
               <div class="card data-tables">


                   <div class="card-header">
                       <div class="row align-items-center">
                           <div class="col-8">
                               <h3 class="mb-0">Users</h3>
                           </div>
                           <div class="col-4 text-right">
                               <a href="{{ route('user.create') }}" class="btn btn-sm"><i class="mr-2 fa fa-user-plus"></i>Add User</a>
                           </div>
                       </div>
                   </div>


                   @include('alerts.success')


                   <div class="card-body table-full-width table-responsive">
                     
                       <div class="d-flex justify-content-center">
   {!! $user->links() !!}
</div>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
