<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Student Manager System</title>
  </head>
  <body>
    @include('header')

    @if($layout == 'index')
      <div class="container-fluid mt-4">
        <div class="row justify-content-center">
          <section class="col-10 text-center">
            @include('studentslist')
          </section>
        </div>
      </div>
    @elseif($layout == 'create')
      <div class="container-fluid mt-4">
        <div class="row">
          <section class="col-8">
            @include('studentslist')
          </section>
          <section class="col-4">
            <form method="post" action="{{ url('/store') }}">
              @csrf
              <div class="form-group">
                <label>cne</label>
                <input type="text" name="cne" class="form-control" placeholder="Enter cne">
              </div>

              <div class="form-group">
                <label>firstName</label>
                <input type="text" name="firstName" class="form-control" placeholder="Enter firstName">
              </div>

              <div class="form-group">
                <label>secondName</label>
                <input type="text" name="secondName" class="form-control" placeholder="Enter secondName">
              </div>

              <div class="form-group">
                <label>age</label>
                <input type="text" name="age" class="form-control" placeholder="Enter age">
              </div>

              <div class="form-group">
                <label>speciality</label>
                <input type="text" name="speciality" class="form-control" placeholder="Enter speciality">
              </div>
              
              <input type="submit" class="btn btn-info" value="Create">
              <input type="reset" class="btn btn-warning" value="Reset">

            </form>
          </section>
        </div>
      </div>
    @elseif($layout == 'show')
      <div class="container-fluid mt-4">
        <div class="row">
          <section class="col-8">
            @include('studentslist')
          </section>
          <section class="col-4">
            
          </section>
        </div>
      </div>
    @elseif($layout == 'edit')
      <div class="container-fluid mt-4">
        <div class="row">
          <section class="col-8">
            @include('studentslist')
          </section>
          <section class="col-4">
            <form method="post" action="{{ url('/update/'.$student->id) }}">
              @csrf
              <div class="form-group">
                <label>CNE</label>
                <input value="{{ $student->cne }}" type="text" name="cne" class="form-control" placeholder="Enter cne">
              </div>

              <div class="form-group">
                <label>FirstName</label>
                <input value="{{ $student->firstName }}" type="text" name="firstName" class="form-control" placeholder="Enter firstName">
              </div>

              <div class="form-group">
                <label>SecondName</label>
                <input value="{{ $student->secondName }}" type="text" name="secondName" class="form-control" placeholder="Enter secondName">
              </div>

              <div class="form-group">
                <label>Age</label>
                <input value="{{ $student->age }}" type="text" name="age" class="form-control" placeholder="Enter age">
              </div>

              <div class="form-group">
                <label>Speciality</label>
                <input value="{{ $student->speciality }}" type="text" name="speciality" class="form-control" placeholder="Enter speciality">
              </div>
              
              <input type="submit" class="btn btn-info" value="Edit">
              <a href="{{ url('/')}}" class="btn btn-warning">
                Cancel
              </a>

            </form>
          </section>
        </div>
      </div>
    @endif


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>