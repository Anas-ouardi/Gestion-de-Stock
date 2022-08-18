@extends('layout.main')

	@section('style')
	<style>
		body{
			background-image: linear-gradient(to right top  , rgb(148, 29, 245),rgb(148, 29, 245), rgb(255, 197, 6));
			background-repeat: no-repeat;
			/* margin-bottom: 4%; */
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
			height: 70px;
		}
		.container{
			display: flex;
			flex: row;
			margin: auto;
			width: 900px;
			/* height: 300px; */
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
            margin-left: 10px;
		}
		#img2{
			width: 10%;
			/* border: 1px solid red ; */
			/* margin-left: 30px; */
			width: 420px;
		}
		#form1{
			position: relative;
			width: 500px;
			/* border: 1px solid red ; */
			text-align: center;
		}
		#h1{
			margin-bottom: 10px;
			font-family: 'Courier New', Courier, monospace;
			font-weight: bold;
			font-size: 30px;
			position: relative;
			bottom:13px;
		}
		.input{
			border: 0;
			border-bottom: 1px solid gray;
			font-family: 'Courier New', Courier, monospace;
			font-size: 16px;
			margin-top:30px;
            margin-left: 7px;
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
            margin-top:30px;
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
        #span1{
            font-family: 'Courier New', Courier, monospace;
			font-size: 14px;
            font-weight: bold;
        }
        #span1:hover{
            color:blue;
        }
        #Avatar{
			font-family: 'Courier New', Courier, monospace;
			background: white;
			border-radius: 5px 5px 0 0;
			/* box-shadow: 5px 5px 10px black; */
			border-bottom:1px solid gray;
			margin-bottom: 25px;
			width: 250px;
			outline: none;
        }
		::-webkit-file-upload-button{
			color:white;
			background:#206a5d;
			padding: 5px;
			border: none;
			
			/* box-shadow: 1px 0 1px 1px #6b4559; */
			outline: none;
		}
		::-webkit-file-upload-button:hover{
			background: #40b46c;
		}
		.div1{
			position: relative;
			display: inline-block;
		}
		.message{
			position: absolute;
			top: 50px;
			left: 0px;
			/* background:wheat; */
			border-radius: 25px;
			opacity: 70%;
			font-size: 14px;
			font-family: 'Courier New', Courier, monospace;
			font-weight: bold;
		}
		#span{
			font-family: 'Courier New', Courier, monospace;
			font-size: 15px;
			margin-left: 5px;
		}

	</style>
	@endsection



	@section('Form')
	<?php
	
	 ?>
	<div class="fakebox"></div>
		<div class="container">
			
			<form action=" {{ route('stor') }} " method="POST" enctype="multipart/form-data" id="form1" >
				@csrf
				<h1 id="h1">Sign Up</h1>

                

				<div class="div1">
					<i class="bi bi-building"></i>
					<input type="text" name="Entroprise_Name" class="input" placeholder="Entroprise-Name" >

					@error('Entroprise_Name')
					<small  style="color: red" class="message" >
						{{ $message }}
					</small><br>
           			@enderror
				</div>

				<div class="div1">
					<i class="bi bi-person"></i>
					<input type="text" name="User_Name"  class="input" placeholder="User-Name" >
				
					@error('User_Name')
					<small  style="color: red" class="message" >
						{{ $message }}
					</small><br>
					@enderror
				</div>

				<div class="div1">
					<i class="bi bi-envelope"></i>
					<input type="email" name="Email" class="input"  placeholder="Email" >

					@error('Email')
					<small  style="color: red" class="message" >
						{{ $message }}
					</small><br>
					@enderror
				</div>

				<div class="div1">
					<i class="bi bi-telephone"></i>
					<input type="text" name="Phone_Number"  class="input" placeholder="Phone Nomber">

					@error('Phone_Number')
					<small  style="color: red" class="message" >
						{{ $message }}
					</small><br>
					@enderror
				</div>

				<div class="div1">
					<i class="bi bi-shield-lock"></i>
					<input type="password" name="password" class="input"  placeholder="Set Password">

					@error('password')
					<small  style="color: red" class="message" >
						{{ $message }}
					</small><br>
					@enderror
				</div>

				<div class="div1">
					<i class="bi bi-shield-check"></i>
					<input type="password" name="re_password" class="input"  placeholder="Re-Enter Password">
					@error('re_password')
						<small  style="color: red" class="message" >
							{{ $message }}
						</small><br>
					@enderror
				</div>
					<br><br><br>
				
				<i class="bi bi-person"></i>
				<span id="span">Choise Your Avatar</span>
				<input type="file" name="Avatar" id="Avatar" accept=".jpg, .png, image/jpeg, image/png" multiple ><br>

                <input type="checkbox" name="Agre" id="Ag"> <label for="Ag" id="span1"> I Read And Agree To Terms & Conditions </label>  
				<input type="submit" value="Sign Up" id="btn1"><br>
				<span id="link1"> Do You Have A Account ? <a href=" {{ route('singin') }} ">Sing In </a></span>
			</form>

			<img src="../img/171.jpg"  id="img2">
		</div>

	@endsection
	