<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>KeKeM [Kelah Keluh Masyarkaat]</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/login/css/my-login.css">
</head>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="login/img/logo.jpg" alt="bootstrap 4 login page">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Register</h4>
                            <form method="POST" action="{{url('masyarakat/store')}}" enctype="multimedia/form-data">
                            {{ csrf_field() }}
								<div class="form-group">
									<label for="nik">Nomor Induk</label>
									<input id="nik" type="text" class="form-control" name="nik" required autofocus>
									<div class="invalid-feedback">
										Berapa nomor induk Anda?
									</div>
								</div>

								<div class="form-group">
									<label for="nama">Nama</label>
									<input id="nama" type="text" class="form-control" name="nama" required>
									<div class="invalid-feedback">
										Siapa nama Anda ?
									</div>
								</div>

								<div class="form-group">
									<label for="username">Username</label>
									<input id="username" type="text" class="form-control" name="username" required>
									<div class="invalid-feedback">
										Username tidak valid
									</div>
								</div>

								<div class="form-group">
									<label for="password">Password</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
									<div class="invalid-feedback">
										Password dibutuhkan
									</div>
								</div>

                                <div class="form-group">
									<label for="telp">Telephone</label>
									<input id="telp" type="text" class="form-control" name="telp" required>
									<div class="invalid-feedback">
										Telephone dibutuhkan
									</div>
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Register
									</button>
								</div>
								<div class="mt-4 text-center">
									Sudah punya akun? <a href="/login_masyarakat">Login</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="{{ url('login/js/my-login.js')}}"></script>
</body>
</html>