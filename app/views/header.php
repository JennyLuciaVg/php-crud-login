
<!DOCTYPE html>
<html lang="es">
	<head>
		<title></title>

        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" />

        <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
	</head>
    <body>
			<nav class="navbar navbar-default">
			    <div class="container">
			      <div class="navbar-header">
			        <a class="navbar-brand" href="#">Developero</a>
			      </div>

			      <ul class="nav navbar-nav navbar-right">
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $_SESSION['email'] ?> <span class="caret"></span></a>
			          <ul class="dropdown-menu">
			            <li><a href="/tuto-login/main/logout">Cerrar sesión</a></li>
			          </ul>
			        </li>
			      </ul>

			    </div>
			  </nav>
    <div class="container">
