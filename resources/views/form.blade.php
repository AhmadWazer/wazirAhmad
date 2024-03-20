<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <form action="{{url('/')}}/register" method="post">
        @csrf
        <div class="mb-3 mt-3 pb-2 container card">
            <h1>Sign Up Page</h1>
            <div>
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{old('name')}}">
                <span class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div>
                <label for="email" class="form-label">Email</label>
                <input type="" name="email" class="form-control" placeholder="Email" value="{{old('email')}}" >
                <span class="text-danger">
                    @error('email')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div>
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" placeholder="Password" class="form-control">
                <span class="text-danger">
                    @error('password')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div>
                <label for="password-confirmation" class="form-label">Conform-Password</label>
                <input type="password" name="password-confirmation" placeholder="Conform-Password" class="form-control">
                <span class="text-danger">
                    @error('password')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <br><br>
            <button class="btn btn btn-primary">Submit</button>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>