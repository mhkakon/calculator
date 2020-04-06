@extends('layouts.master')

@section('title')
    registration form 
@endsection








        @section('content')

        <div class="container id="registraionForm">


                    <h1 class="fun">Bangladesh</h1>
                        
                 
                    <form method="POST" action="/calculator">

                            {{csrf_field()}}


                        <div class="form-group">
                            <label for="email">First Name:</label>
                            <input type="text" class="form-control" name="fname">
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="email">Last Name:</label>
                            <input type="text" class="form-control" name="lname">
                        </div>
                        

                        <div class="form-group">
                            <label for="email">SSC GPA:</label>
                            <input type="text" class="form-control" name="SSCGPA">
                        </div>


                         <div class="form-group">
                            <label for="email">HSC GPA:</label>
                            <input type="text" class="form-control" name="HSCGPA">
                        </div>
                        
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>


                    
        
        
                       
        
        

        </div>

        


        @endsection



       




