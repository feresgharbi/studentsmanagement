<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  @include("navbar")
    @if($layout == 'index')
        <div class="container-fluid">
          <div class="row">
            <section class="col">
                @include("studentlist")
            </section>
            <section class="col"></section>
          </div>
        </div>
    @elseif($layout == 'create')  
       <div class="container-fluid">
         <div class="row">
            <section class="col">
                @include("studentlist")
            </section>
            <section class="col">
            <form action="{{ url('/store') }}" method="post">
              @csrf
  <div class="mb-3">
    <label >CNE</label>
    <input name="one" type="text" class="form-control" placeholder="CNE ... ">
    
  </div>
  <div class="mb-3">
    <label >First Name</label>
    <input name="firstName" type="text" class="form-control" placeholder="firstname ">
  </div>
  <div class="mb-3">
    <label >Last Name</label>
    <input name="secondName" type="text" class="form-control" placeholder="lastname">
  </div>
  <div class="mb-3">
    <label >Age</label>
    <input name="age" type="text" class="form-control" placeholder="Age">
  </div>
  <div class="mb-3">
    <label >Speciality</label>
    <input name="speciality" type="text" class="form-control" placeholder="Speciality ... ">
  </div>
 
  <button type="submit" class="btn btn-success">Save</button>
  <button type="submit" class="btn btn-warning">Reset</button>
</form>
            </section>
</div>
        </div>
    
    @elseif($layout == 'show') 
        <div class="container-fluid">
          <div class="row">
            <section class="col">
                @include("studentlist")
            </section>
            <section class="col"></section>
</div>
        </div> 
    @elseif($layout == 'edit') 
        <div class="container-fluid">
          <div class="row">
            <section class="col">
                @include("studentlist")
            </section>
            <section class="col">
            <form action="{{ url('/update/' .$student->id) }}" method="post">
              @csrf
  <div class="mb-3">
    <label >CNE</label>
    <input value ="{{ $student->one }}" name="one" type="text" class="form-control" placeholder="CNE ... ">
    
  </div>
  <div class="mb-3">
    <label >First Name</label>
    <input value ="{{ $student->firstName }}" name="firstName" type="text" class="form-control" placeholder="firstname ">
  </div>
  <div class="mb-3">
    <label >Last Name</label>
    <input value ="{{ $student->secondName }}" name="secondName" type="text" class="form-control" placeholder="lastname">
  </div>
  <div class="mb-3">
    <label >Age</label>
    <input value ="{{ $student->age }}" name="age" type="text" class="form-control" placeholder="Age">
  </div>
  <div class="mb-3">
    <label >Speciality</label>
    <input value ="{{ $student->speciality }}" name="speciality" type="text" class="form-control" placeholder="Speciality ... ">
  </div>
 
  <button type="submit" class="btn btn-success">Update</button>
  <button type="submit" class="btn btn-warning">Reset</button>
</form>
            </section>
</div>
        </div> 

    @endif  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>