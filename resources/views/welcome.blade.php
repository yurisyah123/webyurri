<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
   
    <form action="/user" method="get">
        @csrf
        @if(Session::has('pesanLogin'))
        {{Session::get('pesanLogin')}}
        @endif
        <div class="p-5 bg-image" style="
       background-color:#D9B99F;
       height: 628px;
       
       "></div>
        
        <div class="card mx-4 mx-md-5 shadow-5-strong bg-body-tertiary" style="
    widht:300px;
    margin-right:100px;
    margin-top:-550px;  
    margin-left:-2000px;
    backdrop-filter:blur(30px);">
         <div class="card-body py-5 px-md-5" style="margin-right: 200px; ">
             <div class="row d-flex justify-content-center" style="margin-left: 200px;">
                 <div class="col-lg-8">
                     <h2 class="fw-bold mb-8 " style="margin-left: 200px;" >login</h2>
                     <div class="input" >
        <div class="row">
        <div data-mdb-input-init class="form-outline mb-4">
                <input type="email" name="email" id="" placeholder="Masukan Email Anda"style="width:500px;margin-top:20px;" >
            </div>
            </div>
        </div>
                            
        <div class="row">
        <div data-mdb-input-init class="form-outline mb-4">
            <div data-mdb-input-init class="form-outline mb-4">
            <div class="col-md-10">
                
                <input type="password" name="password" id="" placeholder="Masukan Password Anda"style="width:500px;margin-top:20px;">
            </div>
        </div>
        </div>
        <div class="row" >
            <div class="col-md-12 ">
                <input type="submit"value="LOGIN"class="btn btn-dark btn-block mb-4" style="width:500px; margin-top:20px; border-radius:25px">
            </div>
        </div>
        </div>
        </div>
        <div class="" style="margin-left: 80%;">
    <p><a href="#!"></a></p>
  </div>
    </div>
        
        </div>
        
        
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
<script src="bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>