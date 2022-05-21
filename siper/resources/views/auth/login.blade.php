
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link href="/css/login.css" rel="stylesheet">
</head>
<body>
    <form action="/postlogin" method="post">
        {{ csrf_field() }}
	<div class="form-box">
		<div class="header-text">Login Form</div>
        <div class="imgcontainer">
            <img src="https://cdn.kibrispdr.org/data/logo-perpustakaan-sekolah-1.jpg" alt="Avatar" class="avatar">
        </div>        
        <input placeholder="Your Username" type="text" name="username"> 
        <input placeholder="Your Password" type="password" name="password"> 
        
        <select class="form-select" aria-label="Default select example" >
         <option selected>--Level--</option>
         <option value="1">Petugas</option>
         <option value="2">Pengunjung</option>
</select>
      <a href=""></a></span> <button>login</button>
	</div>
</form>
</body>
</html>

