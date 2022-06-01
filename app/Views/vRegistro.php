<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registro</title>
</head>
<body>
    <div class="container">
        <h1>Registro de usuario nuevo</h1>
        <form method="POST" action="../Home/insertarForm">
            <label for="nombre">Nombre:</label>
            <input type="" id="nombre" name="nombre"><br><br>
            <label for="telefono">Teléfono:</label>
            <input type="number" id="telefono" name="telefono"><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="email@example.com"><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password"><br><br>
            <button type="submit">Registrar</button>

        </form>

    </div>
</body>
<footer>
   <div class="text-center text-dark p-3" 
   style="background-color: rgba(0, 0, 0, 0.2);">
    <i class="bi bi-badge-cc"></i> 2022:
    <a class="text-dark" href="#">Mario</a>
</div>     
    </footer>
</html>