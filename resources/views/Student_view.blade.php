<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      @if(session()->has('user_name'))
      {{session()->get('user_name')}}
      @else
      AIMS
      @endif
    </a>
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


<div class="container mt-5">
<h2>Registred Students:</h2>
<form action="">
  <div class="form group m-1">
     <input type="text" name="search" id="" class="form-control" placeholder="Search By Name" value="{{$search}}">
  </div>
  <button class="btn btn-info"> Search</button>

  <a href="{{url('/students/view')}}">
    <button type="button" class=" btn btn-primary">Reset</button>
  </a>
</form>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
<a href="{{route('student.create')}}">
<button type="button" class="btn btn-primary d-inline-block mb-2">Add</button>
</a>
<a href="{{route('students.trash')}}">
<button type="button" class="btn btn-danger d-inline-block mb-2">go to trash</button>
</a>
</div>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Gender</th>
      <th>Date of Birth</th>
      <th>State</th>
      <th>Country</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($students as $student)
    <tr>
      <td>{{$student->student_id}}</td>
      <td>{{$student->name}}</td>
      <td>{{$student->email}}</td>
      <td>
        @if($student->gender == "M")
        Male
        @elseif($student->gender == "F")
        Female
        @else
        Others
        @endif
    </td>
      <td>{{$student->DOB}}</td>
      <td>{{$student->state}}</td>
      <td>{{$student->country}}</td>
      <td>
        @if($student->status == "1")
        
         <span class="">Active</span>
         
        @else
        <span class="">Inactive</span>
        
        @endif
    </td>
     <td>
     <div class="d-grid gap-2 d-md-flex justify-content-md-end">
       <a href="{{route('students.delete',['id'=>$student->student_id])}}"><button class="btn btn-danger">Trash</button></a> 
       <a href="{{route('students.edit',['id'=>$student->student_id])}}"><button class="btn btn-success">Edit</button></a> 
      </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="container d-flex justify-content-center mt-5 ">
  <h2>Page#</h2>
    {{$students->links()}}
  </div>
</div>
</body>
</html>