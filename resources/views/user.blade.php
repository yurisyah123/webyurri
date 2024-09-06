<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <form action="/keranjang" method="get">
        @csrf
    <nav class="navbar navbar-expad-sm bg-light  fixed-top" style="height: 90px;">
        <ul class="nav">
            <a class="navbar-brand" href="javascript:void(0)">The Comport zone</a>
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Future</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="product">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Shop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">News</a>
            </li>
        </ul>
        <a href="/logout" class="btn btn-secondry" style="margin-left:-5%;">Logout</a>
    </nav>
    <div class="row">
    <div class="p-5 bg-image" style="background-color:#D9B99F; height:400px; margin-right:70px; margin-left:70px; ">
    <h2 style="margin-top: 150px; color:black; margin-left:100px; ">Giorgetti Denny</h2>
    <h3 style=" color:black; margin-left:150px; ">Armchair and tool</h3>
    <h7 style="margin-top:20%; margin-left:90px; color:black;">Lorem ipsum dolor sit, amet consectetur adipisicing elit.adipisicing elit. Expedita iste quidem</h7>
       <img style="margin-top:-290px; margin-left:600px; width:25%;" src="{{asset('storage/foto/download__3_-removebg-preview.png')}}" alt="">
        </div>
    </div>
<div class="text">
    <h3 style="margin-left:40%;">Trending Products</h3>
    <h5 style="margin-left:27%;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit dolorum laudantium nihi</h5>
    <h5 style="margin-left:38%;">Lorem ipsum dolor sit amet, consectetur</h5>
</div>

    <div class="row">
    <div class="col-md-3">
    <div class="card" style=" background-color:#EDF1F6; width: 80%; margin-left:30%; margin-top:10%;">
        <img src="https://i0.wp.com/ajeg.co.id/artikel/wp-content/uploads/2020/12/sofa-premium-series-b-2.png?resize=522%2C522&ssl=1" class="card-img-top" alt="" style="width: 80%;" height="230px; margin-left:70px">
        <div class="card-body">
            <h6  style="color:black; margin-left:25%; font-size:20px; "class="card-title">
                Sofa
            </h6>
        </div>
    </div>
  </div>

<div class="col-md-3">
    <div class="card" style=" background-color:#EDF1F6; width: 80%; margin-left:30%; margin-top:10%;">
        <img src="{{asset('storage/foto/lampu.png')}}" class="card-img-top" alt="" style="width: 80%;" height="230px; margin-left:60%;">
        <div class="card-body">
            <h6  style="color:black; margin-left:25%; font-size:20px; "class="card-title">
                Lampu Tidur
            </h6>
        </div>
    </div>
  </div>

<div class="col-md-3">
    <div class="card" style=" background-color:#EDF1F6; width: 80%; margin-left:30%; margin-top:10%;">
        <img src="https://asset.olympicfurniture.co.id/OLYMPIC/NIMBUS/MT/mt-1.webp" class="card-img-top" alt="" style="width: 90%;" height="230px; margin-left:50%;">
        <div class="card-body">
            <h6  style="color:black; margin-left:20%; font-size:20px; "class="card-title">
                Meja minimalis
            </h6>
        </div>
    </div>
</div>
<div class="col-md-3">
    <div class="card" style=" background-color:#EDF1F6; width: 80%; margin-left:30%; margin-top:10%;">
        <img src="https://asset.morefurniture.id/OLYMPIC/COCOBOLO/WRD/wrd-2.webp" class="card-img-top" alt="" style="width: 90%;" height="230px; margin-left:50%;">
        <div class="card-body">
            <h6  style="color:black; margin-left:30%; font-size:20px; "class="card-title">
                Lemari
            </h6>
        </div>
    </div>
  </div>

<div class="text-1">
    <h1 style="margin-left:15%;">Product</h1>
</div>

  
<div class="container">
        <div class="row d-flex justify-content-center">
            @foreach ($product as $item)
                <div class="col-4">
                    <div class="thumbnail shadow px-3 py-4 mb-4">
                        <img src="{{ asset('storage/foto/'.$item->foto) }}" alt="Paris" width="150" height="100">
                        <br>
                        <p><strong>{{ $item->name }}</strong></p>
                        <p style="margin-top: -5%;">${{ $item->harga}}</p>
                        <img style="margin-top: -5%; margin-left:-1%;" src="https://st4.depositphotos.com/2046901/19949/v/450/depositphotos_199492008-stock-illustration-five-stars-rating-icon-vector.jpg" alt=""  width="100" height="50" >
                        <form action="/user/show/{{$item->id}}" method="get" >
                            @csrf
                            <button style="margin-left:35%; margin-top:-1%;" type="submit" class="btn btn-danger">Beli Sekarang</button>
                        </form>
                    </div>
                </div>

            @endforeach
        </div>
   

    </table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</from>
</body>
</html>