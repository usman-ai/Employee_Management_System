

    @extends('master')


    @section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apply leave</title>
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="container">
<h1>Daily Requirments</h1>
<br/>
@if(count($errors)>0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>

@endif
@if(\Session::has('success'))
<div class="col-md-7 col-md-offset-2">
        <div class="alert alert-success">
    <p>{{\Session::get('success') }}</p>
</div>
</div>
    </div>
@endif
<div class="text-center">
<h1 class="indigo-text"> <b>Assign your Requirments</b></h1><br><br>
</div>


<form method="post" action="{{ url('requirment') }}">
        {{csrf_field()}}
<div class="col-md-7 col-md-offset-2">
        <label>JobTitle</label><br>
    <input type="text" name="Jobtitle" class="form-control" placeholder="Enter the JobTitle" />
   </div>

   <div class="col-md-7 col-md-offset-2">
        <br> <label>Location </label>

    <input type="text" name="Location" class="form-control" placeholder="Enter the Location" />
   </div>

   <div class="col-md-7 col-md-offset-2">
        <br> <label>Client </label>

    <input type="text" name="Jobdesc" class="form-control" placeholder="Enter the Client Name" />
   </div>

   <div class="col-md-7 col-md-offset-2">
        <br>  <label>Company Offer Rate </label>

    <input type="text" name="Companyrate" class="form-control" placeholder="Enter Offer Rate" />
   </div>

    <div class="col-md-7 col-md-offset-2">

            <br> <label>Candidate Pay Rate </label>

        <input type="text" name="Canrate" class="form-control" placeholder="Candidate Pay Rate " />

       </div>

       <div class="col-md-7 col-md-offset-2">
            <br> <label>Recuriter name </label>

        <input type="text" name="Recname" class="form-control" placeholder="Enter Recuriter Name" />

       </div>

       <div class="col-md-7 col-md-offset-2">
<br><br>
<div class="text-center">
       <input type="submit"value="Submit" class="btn btn-primary" />
       </div>

    </div>
   </div>

</form>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>


        </div>


    </div>

</body>

</html>
