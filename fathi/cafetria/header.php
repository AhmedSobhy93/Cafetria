<html>
<head>
<title>Checks</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<!--<script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>-->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/my_order.js"></script>


 <script type="text/javascript">
//		   
//             $(document).ready(function()
//             {
//                 $('.RowToClick').click(function ()
//                 {
//                     $(this).nextAll('tr').each( function()
//                     {
//                         if ($(this).is('.RowToClick'))
//                        {
//                           return false;
//                        }
//                        $(this).toggle(350);
//                     });
//                 });
//             });
//             
$(document).ready(function(){
    $('button#input-submit').click(function (){
        console.log('ha');
       $user_id=$(this).attr('user_id');
       $from=$(this).attr('from');
       $to=$(this).attr('to');

        //event.preventDefult();
        $.ajax({
            
            url:"../cafetria/get_my_order.php",
            method:"post",
           // data:$('form').serialize(),
           data: ({user_id: $user_id,from:$from,to:$to}),
            datatype:"html",
            success:function (Result){
                $('#mytable').html(Result);
                console.log('leh');
            }
        });
    });
    
});
 </script>

     <link rel="stylesheet" type="text/css" href="css/main.css">

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
					<img src="img/logo1.png"class="logo" alt="logo" width="200" height="80"/>
					
				</figure>
			</a>	
		</div>
		<!-- nav-header-->
		<div class="collapse navbar-collapse" id="link1">
			<ul class="nav navbar-nav">
				<li class="AdminHome.html "><a href="AdminHome.html" class="glyphicon glyphicon-home"><strong> <span class="bar">Home</span></strong> <span class="sr-only">(current)</span></a></li> 
				<li ><a href="AddProducts.html" class="glyphicon glyphicon-cutlery"><strong> <span class="bar">Products</span></strong></a></li>
				<li ><a href="all_user.html" class="glyphicon glyphicon-user"> <strong><span class="bar">Users</span></strong></a></li>
				<li ><a href="order_admin.php" class="glyphicon glyphicon-cutlery"> <strong><span class="bar">ManualOrders</span></strong></a></li>
				<li ><a href="Checks.html" class="glyphicon glyphicon-log-out"> <strong><span class="bar">Checks</span></strong></a></li>
			</ul>
				 <figure class="nav navbar-nav navbar-right" >
					<img src="img/admin.jpg"  alt="Admin"  width="50" height="50"/>
					<figcaption class="bar" ><span>User Name</span></figcaption>
				 </figure>
		</div>

	</div>
	<!-- container fluid-->
	<a name="myPage" >
	
	
</nav>
	
	<div class="row">
		<div class="col-sm-12">
			<pre>
			
			</pre>
		</div>
		
	</div>

	<hr>
	<!-- body -->
	<div class="row">
		<div class="col-sm-12">
			<pre>
			<h2>Checks</h2>
			</pre>
		</div>
		
	</div>
	 <div class="row">
	 <div class="col-md-3"></div>
  	<div class="col-md-6">

    </div> 
  </div>
 