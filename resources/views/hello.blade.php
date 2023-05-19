<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel - Vue 3</title>
    <script src="https://unpkg.com/vue@2"></script>
    <link rel="stylesheet" type="text/css" href="/style.css" />

    <!-- component template -->
    <script type="text/x-template" id="grid-template">
        <table>
          <thead>
            <tr>
              <th v-for="key in columns">
                <span class="arrow">
                </span>
              </th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="entry in filteredHeroes">
              <td v-for="key in columns">
                AZAE
              </td>
            </tr>
          </tbody>
        </table>
      </script>
</head>
<body>

    <!-- L'élément HTML d'identifiant "app" -->
    <div id="app" >
        <h1>Bonjour</h1>
        <h1>Bonsoir</h1>
        <form id="forms" action="https://vuejs.org/" method="post">
            Name :<input type="text" name="name" v-model="name"><br>
            Email :<input type="email" name="email" v-model="name"><br>
            M <input type="checkbox" name="M" value="M">
            Mme <input type="checkbox" name="Mme" value="Mme"><br>
            <input type="button" value="Submit">
        </form>
          
    </div>

    <!-- On importe le fichier « /public/js/app.js » -->
    <script type="text/javascript   " src="{{ asset('js/app.js') }}" >
      
    </script>

</body>
</html>