<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cuerpo Email</title>
</head>
<body>
  <h1>Email</h1>
<p>Recibiste un mensaje de {{ $msg['name']  }} - {{ $msg['email']  }}</p>
<p><strong>Asunto:</strong>{{ $msg['subject']  }}</p>
<p><strong>Contenido:</strong>{{ $msg['content']  }}</p>
</body>
</html>