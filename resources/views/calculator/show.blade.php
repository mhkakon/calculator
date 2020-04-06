@extends('layouts.master')



@section('title')
    Edit Table
@endsection


@section('content')

    <h1>Bangladesh</h1>
    
  




    <table class="table table-striped  table-bordered table-hover">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
            
            </tr>
        
        
        </thead>
        @foreach($honda as $hondas)
        <tbody>
            <tr>
                <td>{{$hondas->FirstName}} {{<a href="/calulator/$hondas->id">Edit</a>}}</td>
                <td>{{$hondas->LastName}} {{<a href="/calulator/$hondas->id">Edit</a>}}</td>
            
            </tr>
        
        </tbody>
        @endforeach
    
    
    </table>
      






@endsection