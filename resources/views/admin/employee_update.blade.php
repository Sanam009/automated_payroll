<!DOCTYPE html>
<html lang="en">
<head>
@include('admin.includes.head')
</head>
<body>
<div class="container" style="background-color:#44e0e680" >
        <div class="row" >
            <h2 class="mt-3"  style="margin-left:450px" >update employee </h2>
            
        </div>
        <div class="col-md-9" >
        <div class="row-md-3" >
        
     </div>   
    </div>
    <div class="row mt-2 p-3" style="background-color:#44e0e680">
            <div class="col-md-3">
            @include('admin.includes.sidebar')
            </div>
            <div class="col-md-9">
            <table class="table">
                   
            <form action="{{URL::to('employee-update/'.$employee->id)}}" method="post">
    @csrf
    <h3 class="text-center text -primary"> table</h3>

  <div class="form-group">
    <label for="name">name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{$employee->name}}">
    
  </div>
  <div class="form-group">
    <label for="address">address</label>
    <input type="text" class="form-control" id="address" name="address" value="{{$employee->address}}">
    
  </div>
  <div class="form-group">
    <label for="email">email</label>
    <input type="email" class="form-control" id="email" name="email" value="{{$employee->email}}">
  </div>
  <div class="form-group">
    <label for="contact">contact</label>
    <input type="text" class="form-control" id="contact" name="contact" value="{{$employee->contact_no}}">
  </div>
  
  <button type="submit" class="btn btn-primary">update</button>

  <br>
  <a class="btn btn-primary" href ="{{URL::to('generate-pdf/'.$employee->id)}}">Generate Pdf</a>
  
</form>
        
            </div>
        </div>
    </div>
      

    
  
    </div>
    </div>
</body>
</html>