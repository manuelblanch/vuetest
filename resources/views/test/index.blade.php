<body>
  <div id="mute"></div>
  <div id="app"></div>
  <script src="js/app.js"></script>
</body>
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Crud</title>
  <style>
    html, body {
      margin: 0;
      padding: 0;,
      height: 100%;
      width: 100%;
      background-colour: #01A9DB
    }
