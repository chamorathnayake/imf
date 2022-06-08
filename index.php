<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

body {
  width: 100%;
  min-height: 100vh;
  background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(bg.jpg);
  background-position: center;
  background-size: cover;
  display: flex;
  justify-content: center;
  align-items: center;
}

.container {
  width: 400px;
  min-height: 400px;
  background: #FFF;
  border-radius: 5px;
  box-shadow: 0 0 5px rgba(0,0,0,.3);
  padding: 40px 30px;
}

.container .login-text {
  color: #111;
  font-weight: 500;
  font-size: 1.1rem;
  text-align: center;
  margin-bottom: 20px;
  display: block;
  text-transform: capitalize;
}

.container .login-social {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(50%, 1fr));
  margin-bottom: 25px;
}

.container .login-social a {
  padding: 12px;
  margin: 10px;
  border-radius: 3px;
  box-shadow: 0 0 5px rgba(0,0,0,.3);
  text-decoration: none;
  font-size: 1rem;
  text-align: center;
  color: #FFF;
  transition: .3s;
}

.container .login-social a i {
  margin-right: 5px;
}

.container .login-social a.facebook {
  background: #4267B2;
}

.container .login-social a.twitter {
  background: #1DA1F2;
}

.container .login-email .input-group {
  width: 100%;
  height: 50px;
  margin-bottom: 25px;
}

.container .login-email .input-group input {
  width: 100%;
  height: 100%;
  border: 2px solid #e7e7e7;
  padding: 15px 20px;
  font-size: 1rem;
  border-radius: 30px;
  background: transparent;
  outline: none;
  transition: .3s;
}

.container .login-email .input-group input:focus, .container .login-email .input-group input:valid {
  border-color: #a29bfe;
}

.container .login-email .input-group .btn {
  display: block;
  width: 100%;
  padding: 15px 20px;
  text-align: center;
  border: none;
  background: #a29bfe;
  outline: none;
  border-radius: 30px;
  font-size: 1.2rem;
  color: #FFF;
  cursor: pointer;
  transition: .3s;
}

.container .login-email .input-group .btn:hover {
  transform: translateY(-5px);
  background: #6c5ce7;
}

.login-register-text {
  color: #111;
  font-weight: 600;
}

.login-register-text a {
  text-decoration: none;
  color: #6c5ce7;
}

@media (max-width: 430px) {
  .container {
      width: 300px;
  }
  .container .login-social {
      display: block;
  }
  .container .login-social a {
      display: block;
  }
}
</style>


	<title>Main login</title>
</head>
<body>
	<div class="container">
		<form  class="login-email">
			<div class="input-group">
		<h1 class="center"> Main Login System</h1><br>
		<h1></h1>
			 </div>
			<div class="input-group">
		<a class="btn "href="director/index.php">Director</a>
			</div>
			<div class="input-group">
		<a class="btn "href="principal/index.php">Principal</a>
			</div>	<div class="input-group">
			<a class="btn "href="teacher/index.php"> Teacher</a>
				</div>
		</form>
	</div>
</body>
</html>