<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>KeKeM [Kelah Keluh Masyarkaat] - Admin</title>
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
							<h4 class="card-title">Register [Admin]</h4>
                            <form method="POST" action="{{url('loginadmin/store')}}" enctype="multimedia/form-data">
                            {{ csrf_field() }}
								<div class="form-group">
									<label for="nama_petugas">Nama</label>
									<input id="nama_petugas" type="text" class="form-control" name="nama_petugas" required>
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

								<div class="form-group"> 
                                    <label for="level">Status <span>*</span></label> 
									<select id="form_need" name="level" class="form-control" required="required" data-error="Pilih status Anda">
                                        <option value="" selected disabled>--Pilih Status Anda--</option>
                                        <option value="petugas">Petugas</option>
                                    </select>
                                </div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Register
									</button>
								</div>
								<div class="mt-4 text-center">
									Sudah punya akun? <a href="/login_admin">Login</a>
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