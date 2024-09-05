<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Profil pengguna</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        .navbar{
            margin-bottom: 50px;
            border-radius: 0;
            margin-left: 30px;
        }
        .jumbotron{
            margin-bottom: 0;
            margin-left: 30px;
        }
        footer{
            padding: 25px;
        }
        .affix{
            top: 0;
            width: 100%;
            z-index: 999 !important;
        }
        .affix + .container-fluid{
            padding-top: 70px;
        }
        .col-sm-3{
            font-family: 'incida console',sans-serif;
            font-size: 18px;
            color: black;
            text-align: center;
            margin-top: 10px;
            padding-left: 5px;
        }
        .col-sm-4{
            margin-inline: 40px;
            margin-left: 13px;
        }
        .pager{
            padding-left: 20px;
        }
    </style>
</head>
<body>
    <div class="" data-spy="scroll" data-target=".navbar" data-offset="50" style="background-color: black">
        <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197" style="background-color: black; color:white">
            <ul class="nav navbar-nav">
                    <li class="active"><a href="#" style="background-color: black; color:white">Home</a></li>
                    <li class="active"><a href="#" style="background-color: black; color:white">produk</a></li>
                    <li class="active"> <a href="#"style="background-color: black; color:white">Sourcess</a></li>
                    <li class="active"><a href="#" style="background-color: black; color:white">Search</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right" style="margin-inline: 2%">
                <li><a href="#" style="background-color: black; color:white"><span class="glyphicon glyphicon-user"></spann>YourAccount</a></li>
                    <li><a href="#" style="background-color: black; color:white"><span class="glyphicon glyphicon-shopping-cart"></spann>cart</a></li>
            </ul>
        </nav>
        </div>
         </nav>
         <br>
         <div class="container">
        <div class="row">
        <!-- @foreach ($product as $item) -->
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <h5>Harga: {{ $product->harga }}</h5>
                        <img src="{{ asset('/storage/foto/' . $product->foto) }}" alt="Product Image" width="400" height="300">
                        <br>
                    </div>
                </div>
            <!-- @endforeach -->
        </div>
    </div>
        <div class="col-sm-4" style="padding-top: 0%;">
            <div class="well" >
                <div class="input-group" >
                    <label for="quantity">jumlah</label>
                    <input type="number" class="form-control" id="quantity" placeholder="masukan jumlah produk">
                </div>
                <ul class="pager">
                    <li><a href="/checkout">&nbsp;cekout</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                    <!-- <li><a href="/chekout">&nbsp;Beli sekarang</a></li> -->
                </ul>
            </div>
             </div>
            </div>
             </div>
            </div>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/ajax/bootstrap/3.4.1/js/bootstrap.min.js"></script>



            <script src="https://stackpath.bootstrap.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
