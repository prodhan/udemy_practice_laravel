@extends('layouts.admin')

@section('content')
    <h2>Users</h2>

    <table class="table">
       <thead>
         <tr>
           <th>Id</th>
           <th>Name</th>
           <th>Email</th>
           <th>Updated</th>
         </tr>
       </thead>
       <tbody>

         <tr>
           <td>John</td>
           <td>Doe</td>
           <td>john@example.com</td>
         </tr>
       </tbody>

     </table>
    @endsection