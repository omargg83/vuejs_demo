<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hola mundo</title>

  </head>
  <body>
    <main id='app'>
      <h1>frutas favoritas</h1>
      <ul>
        <ol v-for="dato in datos">
          {{dato.id}} - {{dato.valor}}
        </ol>
      </ul>

      <br>
      <select class="" name="" v-model="datos.id">
        <option v-for="dato in datos" :value="dato.id">{{dato.valor}}</option>
      </select>

      <br>
      <input type="text" name="" :value="datos.id">

    </main>

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
      const app = new Vue({
        el: '#app',
        data:{
          datos:[
            {valor:'uvas',id:1},
            {valor:'Manzanas',id:2},
            {valor:'Sandias',id:3},
            {valor:'mangos',id:4}
          ]
        }
      })
    </script>

  </body>
</html>
