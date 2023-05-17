<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel - Vue 3</title>
</head>
<body>

    <!-- L'élément HTML d'identifiant "app" -->
    <div id="app" >
        <h1>Bonjour</h1>
        <h1>Bonsoir</h1>
    </div>

    <!-- On importe le fichier « /public/js/app.js » -->
    <script type="text/javascript   " src="{{ asset('js/app.js') }}" >
    
    </script>

</body>
</html>