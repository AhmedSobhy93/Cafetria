<html>
<head>
    <title>Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        .nav{
            padding:5;
            background-color: #40bf80;
            border-color: #E7E7E7;
            text-color: #777;
        }
        .text-center{
            background-color: #40bf80;
            border-color: #E7E7E7;
            text-color: #777;
        }
        .bar {
            color:#BF4068;
        }
        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {
            width: 70%;
            margin: auto;
        }

        /* Add a dark background color to the footer */
        footer {
            background-color: #2d2d30;
            color: #f5f5f5;
            padding: 32px;
        }

        footer a {
            color: #f5f5f5;
        }

        footer a:hover {
            color: #777;
            text-decoration: none;
        }

        a {
            color: white;
            text-decoration: none; /* no underline */
        }

        .img-responsive2 {
            display: inline-block;
            max-width: 10%;
            height: 20%;
        }

        label.label{
            font-size:22;
        }
        .btn-file {
            position: relative;
            overflow: hidden;
        }
        .btn-file input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            min-width: 100%;
            min-height: 100%;
            font-size: 100px;
            text-align: right;
            filter: alpha(opacity=0);
            opacity: 0;
            outline: none;
            background: white;
            cursor: inherit;
            display: block;
        }
    </style>
</head>

<body>

<nav class="nav navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="nav-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#link1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <figure>
                    <img src="img/logo.png"class="logo" alt="logo" width="150" height="30"/>
                    <figcaption>Cafeteria Om 7asn</figcaption>
                </figure>
            </a>
        </div>
        <!-- nav-header-->
        <div class="collapse navbar-collapse" id="link1">
            <ul class="nav navbar-nav">
                <li class="# "><a href="#" class="glyphicon glyphicon-home"><strong> <span class="bar">Home</span></strong> <span class="sr-only">(current)</span></a></li>
                <li ><a href="#" class="glyphicon glyphicon-cutlery"> <strong><span class="bar">My Orders</span></strong></a></li>
            </ul>
            <figure class="nav navbar-nav navbar-right" >
                <img src="img/admin.jpg"   alt="Admin"  width="50" height="50"/>
                <figcaption  ><span>Admin Name</span></figcaption>
            </figure>
        </div>

    </div>
    <!-- container fluid-->
    <a name="myPage" >
</nav>
<br>
<br>
<br>
<br>
<br>
<br>



<div class="row" style="padding:5;margin:5;">
    <div class="col-md-4" style=" border: 2px solid; background: #73AD21; padding:5;margin:5;">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <tr>
                    <td>Product Name</td>
                    <td>Amount</td>
                    <td>Total Price</td>
                    <td>Cancel</td>
                </tr>

            </table>
        </div>

        <label class="control-label col-sm-2" for="notes">Notes</label>
        <textarea name="notes"  rows="4" cols="50" value=""></textarea>
        <br>
        <br>
        <br>
        <label class="control-label col-sm-2" for="room">Room</label>
        <select name="room">
            <option value="">Select Room</option>
        </select>
        <br>
        <hr>

        <div>
            <label class="control-label col-sm-6" for="notes">Total Price:</label>
            <p></p>
        </div>
        <br>
        <br>
        <br>
        <div  class="controls" style='float: right;'>
            <a href="#"><button class="btn btn-success"  >Confirm</button></a>
        </div>

    </div>
    <div class="col-md-7" style="padding:5;margin:5;">
        <div  style='float: right;' class="glyphicon glyphicon-search">
            <input type="text" id="product" name="product" placeholder="search for product"  >
        </div>
        <br>
        <br>
        <br>
        <div class="col-md-2"></div>

        <label class="control-label col-sm-2" for="add">Add to user</label>
        <select name="add">
             <option value="">Select User</option>
        </select>

        <br>
        <br>
        <br>
        <br>
        <hr style="height:30px">


    </div>
</div>

<footer class="text-center">
    <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a><br><br>
    <p>Cafetria Om Gamal Made By <a href="#" data-toggle="tooltip" title="Jaguars">Jaguars</a> &copy;</p>
</footer>

</body>
</html>
