<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 {{ __('managers Detail') }}
 </div>
 <div class="card-body">
 id : {{ $managers->id }}
 <br>
 Fname : {{ $managers->Fname }}
 <br>
 <br>
 Lname : {{ $managers->Lname }}
 <br>
 sex : {{ $managers->sex }}
 <br>
 zone : {{ $managers->zone }}
 <br>
 woreda : {{ $managers->woreda }}
 <br>
 <br>
 address : {{ $managers->address }}
 <br>
 phone : {{ $managers->phone }}
 <br>
 </div>
 </div>
 </div>
 </div>
</div>
<div class="container ">
 <div class="col-md-8">
 <a class="btn btnsuccess" href="{{ route('managers/list') }}" role="button"> {{ __('Back') }}</a>
 </div>
</div>
@endsection