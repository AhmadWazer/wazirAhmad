
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">AIMS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('students/create')}}">Registration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/students/view')}}">Student</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/register')}}">SignUp</a>
        </li>
      </ul>
    </div>
  </div>
</nav>    



<form action="{{$url}}" method="post">
    @csrf
    
    @if ($students)
        <input type="hidden" name="student_id" value="{{ $students->student_id }}">
    @endif
    <div class="contanier mt-4 card p-3 bg-white">
    <h2 class="text-center text-info-emphasis">{{$tittle}}</h2>
    <div class="row">
   <div class="form-group col-md-6 required">
    <label for="name" class="form-label">Name:</label>
    <input type="text" class="form-control" name="name" placeholder="Student Name" value="{{ $students ? $students->name : '' }}">
   <!-- <span class="text-denger">
        @error('name')
        {{$message}}
        @enderror
    </span>-->
  </div>
  <div class="form-group col-md-6 required">
    <label for="email" class="form-label">Email address:</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{$students ? $students->email : ''}}">
   <!-- <span class="text-denger">
        @error('email')
        {{$message}}
        @enderror
    </span>-->
  </div>
</div>
<div class="row">
  <div class="form-group col-md-6">
    <label for="Password" class="form-label">Password:</label>
    <input type="password" class="form-control" id="Password" name="password" placeholder="Password">
    <span class="text-denger">
        @error('password')
        {{$message}}
        @enderror
    </span>
  </div>
  <div class="form-group col-md-6 required form-check">
  <label class="form-check-label d-flex" for="gender">
    Gender:
  </label>
  <div class="d-md-flex gap-2">
  <div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="gender" value="M" 
  {{($students ? $students ->gender : '') == "M" ? 'checked' : ""}} 
  >
  <label class="form-check-label" for="gender">
    Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="gender" value="F" 
  {{($students ? $students ->gender : '') == "F" ? 'checked' : ""}}
  >
  <label class="form-check-label" for="gender">
    Femal
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="gender" value="O" 
  {{($students ? $students ->gender : '') == "O" ? 'checked' : ""}}
  >
  <label class="form-check-label" for="gender">
    Others
  </label>
</div>
  </div>
</div>
</div>
<div class="row">
  <div class="form-group col-md-6">
    <label for="dob"class="form-label">Date Of Birth:</label>
    <input type="date" class="form-control" id="" name="dob" placeholder="" value="{{$students ? $students->DOB : ''}}" />
    <span class="text-denger">
        @error('dob')
        {{$message}}
        @enderror
    </span>
  </div>
  <div class="form-group col-md-6 required">
    <label for="address" class="form-label">Address:</label>
    <textarea class="form-control" id="address" name="address" placeholder="Address" >{{$students ? $students->address : ''}}</textarea>
    <span class="text-denger">
        @error('adderss')
        {{$message}}
        @enderror
    </span>
  </div>
  </div>
<div class="row">
  <div class="form-group col-md-6 required">
    <label for="state" class="form-label">State:</label>
    <input type="text" class="form-control" id="state" name="state" placeholder="State Name"  value="{{$students ? $students->state : ''}}" >
    <span class="text-denger">
        @error('state')
        {{$message}}
        @enderror
    </span>
  </div>
  <div class="form-group col-md-6 required">
    <label for="country" class="form-label">Country:</label>
    <input type="text" class="form-control" id="country" name="country" placeholder="Country Name" value="{{$students ? $students->country : ''}}">
    <span class="text-denger">
        @error('country')
        {{$message}}
        @enderror
    </span>
  </div>
  </div>
<div class="row">
  <div class="form-group col-md-6">
    <label for="status" class="form-label">Status:</label>
    <input type="text" class="form-control" id="status" name="status" placeholder="Status"  value="{{$students ? $students->status : ''}}">
    <span class="text-denger">
        @error('status')
        {{$message}}
        @enderror
    </span>
  </div>
  <div class="form-group col-md-6">
    <label for="addrpointsess" class="form-label">Points:</label>
    <input type="text" class="form-control" id="points" name="points" placeholder="Points" value="{{$students ? $students->points : ''}}">
    <span class="text-denger">
        @error('points')
        {{$message}}
        @enderror
    </span>
  </div>
</div>
<br>
<div class=" col-2">
  <button type="submit" class="btn btn-primary"><b>Submit</b></button>
</div>
  </div>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>