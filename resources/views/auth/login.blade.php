<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>

<style>
    body{
	background: url("{{ asset('frontend') }}/img/istockphoto-1274428125-170667a.jpg");
	background-repeat: no-repeat;
	background-size: cover;
	font-family: Arial Balck;
}
.image {
    width: 105px;
    height: 100px;
    position: absolute;
    top: -80px;
    left: 100px;
}
.shovon{
	width: 320px;
	height: 400px;
	background: rgba(0, 0, 0, 0.5);
	color: white;
	top: 50%;
	left: 50%;
	position: absolute;
	transform: translate(-50%, -50%);
	box-sizing: border-box;
	padding: 20px 20px;
	border-radius: 10px;
}
h1{
	margin: 0;
	padding: 0;
	text-align:center;
	font-size: 30px;
	border-bottom: 3px solid green;
}
.shovon p{
	font-weight:bold;
	font-size: 20px;
}
.shovon input{
	width:100%;
	margin-bottom: 5px;
}
.shovon  [type="text"], [type="password"]{
	border: none;
	border-bottom: 2px solid green;
	background:transparent;
	outline: none;
	height: 30px;
	color: white;
	font-size: 18px;
}
.shovon  [type="submit"]{
	border:none;
	outline:none;
	height: 30px;
	background: #34de19;
	color: white;
	font-size: 20px;
	border-radius: 5px;
	margin-top: 20px;
    margin-bottom: 20px;
}
.shovon  [type="submit"]:hover {
	cursor: pointer;
	background: green;
	color: white;
}
.shovon a {
	text-align:center;
	text-decoration: none;
	font-size: 15px;
	color: White;
}
.shovon a:hover {
	font-size: 18px;
}
.skip {
    bottom: 5%;
    left: 45%;
    position: absolute;
}
.skip img {
	width: 100px;
	border-radius: 30px;
}
.skip a{
	cursor: pointer;
}
.skip a img:hover {
	width: 105px;
	opacity: 70%;
}

</style>
</head>
<body>

	<div class="shovon">
		<img src="{{ asset('frontend') }}/img/login_icon.png" class="image">

		<h1> Login Here </h1>

		<form action="{{ route('login') }}" method="post">
            @csrf
			<p> Email </p>
			<input type="text" name="email" required placeholder=" Enter Your Email">

			<p> Password </p>
			<input type="password" name="password" required placeholder=" Enter Your Password">

			<input type="submit" name="submit" value="Login">
			<a href="{{ route('register') }}"> Create A New Account ???</a>
		</form>
	</div>
	<div class="skip">
		<a href="{{ url()->previous() }}"><img src="{{ asset('frontend') }}/img/unnamed.png"></a>
	</div>
</body>
</html>
