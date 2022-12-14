@extends('layout.main')

@section('style')
	<style>
		body{
			background-image: linear-gradient(to right top  , rgb(148, 29, 245),rgb(148, 29, 245), rgb(255, 197, 6));
			background-repeat: no-repeat;
            height: 100vh;
            
		}
        *{
            letter-spacing: 1px;
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
			position: relative;
			/* align-items: center; */
			box-shadow: 0px 20px 45px black;
			/* margin-bottom:400px; */

		}
		#img1{
			width: 10%;
			/* border: 1px solid red ; */
		}
		#img2{
			
			/* border: 1px solid red ; */
			/* margin-left: 30px; */
			width: 400px;
			height: 390px;
			margin-bottom:20px;
			position: relative;
			bottom: 45px;
		}
		#form1{
			position: relative;
			width: 350px;
			/* border: 1px solid red ; */
			text-align: center;
		}
		#h1{
			margin-bottom: 30px;
			font-family: 'Courier New', Courier, monospace;
			font-weight: bold;
			font-size: 30px;
			position: relative;
			bottom:30px;
		}
		#log , #pss{
			border: 0;
			border-bottom: 1px solid gray;
			font-family: 'Courier New', Courier, monospace;
			font-size: 16px;
			margin-top:10px;
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
		#link2{
			font-family: 'Courier New', Courier, monospace;
			font-size: 15px;
		}
        #par{
            margin-top:10px;
            font-family: 'Courier New', Courier, monospace;
			font-size: 16px;
            font-weight: bold;
        }
		#divsu{
			background-color: greenyellow;
			color:green;
			padding: 10px;
			border-radius: 10px;
		}
		#divsu ul{
			margin: 0;
			padding: 0;
			list-style: none;
			font-family: 'Courier New', Courier, monospace;
			font-weight: bold;
		}
		#divfa{
			background-color: pink;
			color:red;
			padding: 10px;
			border-radius: 10px;
			margin-bottom: 20px;
		}
		#divfa ul{
			margin: 0;
			padding: 0;
			list-style: none;
			font-family: 'Courier New', Courier, monospace;
			font-weight: bold;
		}

	</style>
	@endsection



	@section('Form')
	<div class="fakebox"></div>

		@if ($normal==1)

			<div class="container">
			
				<form action=" {{ route('check_email') }} " method="Post" id="form1">
					@csrf
					<h1 id="h1">Forgot Password?</h1>
					<p id="par">Enter your registered E-mail to reset the password</p><br>
					<i class="bi bi-envelope-fill"></i>
					<input type="email" name="Email" id="log" placeholder="Enter Your E-mail" required><br>
						<br><br>
					<input type="submit" value="Send" id="btn1"><br>
					<span id="link1"> Go back  ? <a href=" {{ route('singin') }} ">Sing In </a></span>

				</form>

				<img src="/img/9.jpg"  id="img2"/>
			</div>

		@endif
		@if ($normal==2)
		<div class="container">
			
			<form action=" {{ route('check_email') }} " method="Post" id="form1">
				@csrf
				<h1 id="h1">Rest The Password!</h1>
				<div id="divsu">
					<ul>
						<li>We Send A code To Your Gmail</li>
					</ul>
					
				</div>
				<br>
				<i class="bi bi-envelope-fill"></i>
				<input type="email" name="Email" id="log" placeholder="Enter Your Code"><br>
					<br><br>
				<input type="submit" value="Verfie" id="btn1"><br>
				<span id="link1"> Go back  ? <a href=" {{ route('singin') }} ">Sing In </a></span>

			</form>

			<img src="/img/9.jpg"  id="img2"/>
		</div>
		@endif

		@if ($normal==3)
		<div class="container">
			
			<form action=" {{ route('check_email') }} " method="Post" id="form1">
				@csrf
				<h1 id="h1">Forgot Password?</h1>
				
				<div id="divfa">
					<ul>
						<li>The E-mail not found</li>
					</ul>
				</div>
				<span id="link2"> Retry whidt Defrent E-mail<a href=" {{ route('password_forget') }} ">Click Hir !</a><br></span>
				<span id="link1"> Go back  ? <a href=" {{ route('singin') }} ">Sing In </a></span>

			</form>

			<img src="/img/9.jpg"  id="img2"/>
		</div>
		@endif
		
		

	@endsection
	

