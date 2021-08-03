<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/slick/slick-theme.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <title>Kantin FTI | Registration Page</title>
</head>
<body class="d-flex h-100 text-dark text-justify bg-primary">
  <!-- Menu -->
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto p-auto flex-column">
        <div class="container p-3 my-auto bg-light rounded">
          <div class="row col-lg-12 col-md-12">
            <div class="col-md-6 col-lg-6 ">
              <img src="/assets/img/makananregist.jpg" class="w-100"> 
            </div>
            
              
            <div class="col-md-6 col-lg-6 ">
              <h1>Register</h1>
              <form action="">
              <div class="form-group">
                <label class="form-label">Nama	</label>
                <input type="text" name="Nama" placeholder="(Your Name)" class="form-control">
              </div>
				      <div class="form-group">
                <label class="form-label">Username	</label>
				    	  <input type="text" name="Username" class="form-control" placeholder="(Username)" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
				      </div>
              <div class="form-group">
                <label class="form-label">Email/Number	</label>
				    	  <input type="text" name="Email/Number" class="form-control" placeholder="(Email or Number)" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
				      </div>
              <div class="form-group">
                <label class="form-label">ID	</label>
					      <input type="number" name="id" class="form-control" placeholder="(ID)" required>
			      	</div>
              <div class="form-group">
                <label class="form-label">Password	</label>
				        <input type="password" name="Password" placeholder="(Password)"class="form-control">
              </div>
              <div class="form-group">
                <button class="btn btn-primary w-100">Register</button>
              </div>
              </form>
            </div>
            

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