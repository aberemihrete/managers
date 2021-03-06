<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
@extends('layouts.app')
@section('content')
<div class="container pb-2">
 <a class="btn btnsuccess" href="{{ route('managers/register') }}" role="button"> {{ __('New managers') }}
</a>
</div>
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 {{ __('managers list') }}
 </div>
 <div class="card-body">
 <table border="1" class="table table-striped table-bordered ">
 <thead class="thead-inverse">
 <tr bgcolor="lightgreen">
 
 <th><i>
 id
 </th></i>
<th><i>
Fname
 </th></i>
 <th><i>
Lname
 </th></i>
<th><i>
sex
 </th></i>
<th><i>
zone
 </th></i>
 <th><i>
woreda
 </th><i>
 <th><i>
address
 </th></i>
 <th><i>
phone
 </th></i>
 <th>Operation perform</th></i>
 </tr>
 </thead>
 <tbody bgcolor="lightblue">
 @foreach($managers as $managers)
 <tr>
 <td> {{ $managers->id }}</td>
 <td> {{ $managers->Fname }}</td>
 <td> {{ $managers->Lname }}</td>
 <td> {{ $managers->sex }}</td>
 <td> {{ $managers->zone}}</td>
 <td> {{ $managers->woreda }}</td>
 <td> {{ $managers->address }}</td>
 <td> {{ $managers->phone}}</td>
 <td>
 <a class="btn btn-xs btninfo" title="Detail" href="/managers/search/{{ $managers->id }}">Details</a>
 <a class="btn btn-xs btnsuccess" title="Edit" href="/managers/edit/{{$managers->id }}">Edit</a>
 <a class="btn btn-xs btndanger" title="Delete" href="/managers/delete/{{ $managers->id }}">Delete</a>
 </td>
 </tr>
@endforeach
 </tbody>
 </table>
 </div>
 </div>
 </div>
 </div>
</div>
@endsection