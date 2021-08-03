<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/slick/slick-theme.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/register.css') }}">
  <title>Kantin FTI | Registration Page</title>
</head>
<body class="form-v6">
  <!-- Menu -->
  
	<div class="page-content">
		<div class="form-v6-content">
			<div class="form-left">  
      <div class="row col-lg-12 col-md-12">
            <div class="col-md-6 col-lg-6 ">
              <img src="/assets/img/makananregist.jpg" class="w-100"> 
            </div>
            
              
            <div class="col-md-6 col-lg-6 ">
            <form class="form-detail" action="#" method="post">
              <h2><strong>Registrasi Kantin UKSW</strong></h2>
              <div class="form-row">
                <input type="text" name="Nama" placeholder="Your Name" class="input-text">
              </div>
				      <div class="form-row">
				    	  <input type="text" name="Username" class="input-text" placeholder="Username" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
				      </div>
              <div class="form-row">
				    	  <input type="text" name="Email/Number" class="input-text" placeholder="Email or Number" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
				      </div>
              <div class="form-row">
					      <input type="number" name="id" class="input-text" placeholder="ID" required>
			      	</div>
              <div class="form-row">
				        <input type="password" name="Password" placeholder="Password"class="input-text">
              </div>
              <div class="form-row-last">
				    	  <input type="submit" name="register" class="register" value="Register">
			      	</div>   
              <center>
              <h3>
                <font size="3" color="black">Sudah punya akun? </font>
                <a href="#" title="Menuju halaman Login"><font size="3">Silahkan Login</font></a>
              </h3>
              </center>
              </form>
            </div>

          </div>
          <div class="form-bottom">
          <form action="#" method="get">
              <center>
                <h3>space<input type='checkbox' name='kebijakanprivasi' value='kebijakanprivasi' />
                <font size="3" color="black">Saya telah membaca dan menyetujui </font>
                <a href="#" title="Menuju halaman Penggunaan"><font size="3">Penggunaan</font></a>
                <font size="3" color="black" margin-bottom:-2px> dan </font>
                <a href="#"  title="Menuju halaman Kebijakan Privasi"><font size="3">Kebijakan Privasi</font></a>
                </h3>
              </center>
            </form>
          </div>
        </div>
    </div>
</footer>
  <script src="{{ asset('assets/js/script.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    
  <script src="{{ asset('assets/slick/slick.min.js') }}"></script>
  <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>