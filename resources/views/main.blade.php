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
	<div class="text-center "> <a  style="background-color:#222831; text-color:#EEEEEE" href="/add" class="btn btn-dark" >Add new product</a> </div>
	<div class="container text-center">
		<div class="row align-items-center">
			<div class="col mt-5">
				<h1 style="color:#ffffff" >Shop</h1>
                <div class="mt-5">
            </div>
            </div>
		</div>

    <div >
        <select style="background-color:#00ffe5;" class="form-select " aria-label="Default select example">
            <option selected>Paieška pagal kategoriją</option>
            <option value="1">Sportas</option>
            <option value="2">Laisvalaikis</option>
            <option value="3">Ekstremalūs pojūčiai</option>
          </select>
          <div class="mt-4">
          <a href="/oro_linijos_ieskoti" style="background-color:#00a6ff" class="btn">Ieškoti</a>
          <div class="mt-5">
        </div>
    </div>
    </div>
</div>


    <div class="container ">
        <div class="row">
            <div class="col-35">
            <table class="table table-dark table-image">
		        <thead>
			<tr class="table-active text-center" >
				<th scope="row"></th>
				<th class="table-active"></th>
				<th>Pavadinimas</th>
				<th>Kaina</th>
				<th>Kategorija</th>
                <th></th>
			</tr>
        </thead>
        <tbody>
				<tr class="text-center align-middle">
                        <th class="w-25"> <img src="https://lt2.pigugroup.eu/colours/422/226/93/42222693/mini-riedlente-spartan-mini-board-43cm_reference.jpg" class="img-fluid img-thumbnail" alt="pic">
                        </th>
                        <td></td>
                        <td>Mini riedlentė </td>
						<td>29.99 EUR</td>
                        <td>Sportas</td>
			<td><a href="/info" class="btn btn-primary btn-lg">Plačiau</a></td>
		 </tr>
         <tr class="text-center align-middle">
            <th class="w-25"> <img src="https://lt1.pigugroup.eu/colours/422/226/93/42222693/mini-riedlente-spartan-mini-board-43cm-kaina_reference.jpg" class="img-fluid img-thumbnail" alt="pic">
            </th>
            <td></td>
            <td>Mini riedlentė</td>
            <td>39.99 EUR</td>
            <td>Sportas</td>
<td><a href="/info" class="btn btn-primary btn-lg">Plačiau</a></td>
</tr>




      </tbody>
	</table>
  </div>
</div>
</div>


    <div>
<a href="/info" class="btn btn-primary btn-md">kitas puslapis</a>
    </div>


</body>
</html>
