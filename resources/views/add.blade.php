<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Shop</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">



</head>
<body style="background-color:rgb(0, 249, 253)"  >
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <div class="mt-4"></div>
	<nav style="background-color:rgb(0, 253, 186)" class="navbar navbar-expand-lg">
		<div class="container-fluid" >
			<a class="navbar-brand"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ">
					<li class="nav-item "> <a class="nav-link active" aria-current="page" href="/">Ali express</a> </li>
					<li class="nav-item"> <a class="nav-link active " href="/login">Login</a></li>
					<li class="nav-item"> <a class="nav-link active" href="/register">Register</a></li>
				</ul>
			</div>
		</div>
	</nav>
  <div class="container-fluid mt-5">
	<div class="container text-center">
		<div class="row align-items-center">
			<div class="col mt-5">
				<h1 style="color:#ffffff" >Pridėkite nauja prekę</h1> </div>
		</div>
	</div>


    <div class=" mb-3">
        <label class="form-label">Pavadinimas prekės</label>
        <input class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Kaina</label>
        <input class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Kategorija</label>
        <input class="form-control">
    </div>
    <label class="form-label">Nuotrauka</label>
    <div class="input-group mb-3">
        <input type="file" class="form-control" id="inputGroupFile02">
        <label class="input-group-text" for="inputGroupFile02">Upload</label>
    </div>

    <hr>
     <button href="submit" class="btn btn-success">Sukurti</button>
     </form>


</div>



</body>
</html>
