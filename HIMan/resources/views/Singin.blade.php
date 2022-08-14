@extends('layout.main')


	@section('style')
	<style>
		body{
			background-image: linear-gradient(to right top  , rgb(148, 29, 245),rgb(148, 29, 245), rgb(255, 197, 6));
			background-repeat: no-repeat;
			/* margin-bottom: 11%; */
			height: 100vh;
		}
		a{
			text-decoration: none;
		}
		a:hover{
			color:hotpink;
		}
		.fakebox{
			height: 100px;
		}
		.container{
			display: flex;
			flex: row;
			margin: auto;
			width: 700px;
			height: 300px;
			background-color: white; 
			padding: 50px;
			border-radius: 20px;
			justify-content: space-around;
			align-items: center;
			box-shadow: 0px 20px 45px black;
			/* margin-bottom:400px; */

		}
		#img1{
			width: 10%;
			/* border: 1px solid red ; */
		}
		#img2{
			/* width: 10%; */
			/* border: 1px solid red ; */
			/* margin-left: 30px; */
			width: 400px;
			height: 350px;
			/* margin-left: 10px; */
		}
		#form1{
			position: relative;
			width: 250px;
			margin-left: 15px;
			/* border: 1px solid red ; */
			/* text-align: center; */
		}
		#h1{
			margin-bottom: 30px;
			font-family: 'Courier New', Courier, monospace;
			font-weight: bold;
			font-size: 30px;
			position: relative;
			bottom:20px;
		}
		#log , #pss{
			border: 0;
			border-bottom: 1px solid gray;
			font-family: 'Courier New', Courier, monospace;
			font-size: 16px;
			margin-top:10px;
			margin-left:6px;
			margin-bottom: 5px;
		}
		
		

		#link{
			display: block;
			margin-top:25px;
			text-decoration: none ;
			font-family: 'Courier New', Courier, monospace;
			font-size: 14px;

		}
		#btn1{
			width: 240px;
			background-image: linear-gradient(to right  , rgb(141, 13, 245), rgb(255, 197, 6));
			border: none;
			font-family: 'Courier New', Courier, monospace;
			font-size: 20px;
			border-radius: 20px;
			text-align: center;
			height: 30px;
			margin-bottom: 35px;
			font-weight: bolder;
		}
		#btn1:hover{
			cursor: pointer;
			background-image: linear-gradient(to right  , rgb(141, 13, 245),rgb(159, 51, 247), rgb(255, 197, 6));
		}
		#link1{
			font-family: 'Courier New', Courier, monospace;
			font-size: 15px;
		}
		

	</style>
	@endsection



	@section('Form')
	<div class="fakebox"></div>
		<div class="container">
			
			<form action="{{route("log_in")}}" method="post" id="form1">
				@csrf
				<h1 id="h1">Sign In</h1>
				<i class="bi bi-envelope-fill"></i><input type="text" name="log" id="log" placeholder="E-mail"><br>
				<i class="bi bi-shield-lock"></i></i><input type="text" name="pass" id="pss" placeholder="Password"><br>
				<a href=" {{route('password_forget')}} " id="link"> Forget your password ? </a><br>
				<input type="submit" value="Sign in" id="btn1"><br>
				<span id="link1"> Don't Have An Account Yet ? <a href=" {{ route('singup') }} ">Sing Up </a></span>
			</form>

			<img src="../img/10.jpg"  id="img2">
		</div>
		

	@endsection
	


	

