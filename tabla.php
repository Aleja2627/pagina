<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Redirección con botón</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
  <button id="botonRedireccion">Llévame a otro lado</button>

  <script>
    $(document).ready(function(){
      $('#botonRedireccion').click(function(){
        window.location.href = 'mostrar_tabla.html';
      });
    });
  </script>
</body>
</html>