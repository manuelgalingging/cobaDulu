<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SIPER</title>
	<link href="login.css" rel="stylesheet">
</head>
<body>
    <form action="{{ route('login') }}" method="post"> 
    @csrf
	<div class="form-box">
		<div class="header-text">Login Form</div>
        <div class="imgcontainer">
            <img src="https://cdn.kibrispdr.org/data/logo-perpustakaan-sekolah-1.jpg" alt="Avatar" class="avatar">
        </div>  
              
        <input placeholder="Your username" type="username" name="username"> 
        <input placeholder="Your Password" type="password" name="password"> 
        
       <button type="submit">Login</button>
	</div>
    </form>
</body>
</html>
