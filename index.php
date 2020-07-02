<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hola mundo</title>

  </head>
  <body>
    <main id='app'>
      <h1>{{message}}</h1>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
      const app = new Vue({
        el: '#app',
        data:{
          message: 'Hola mundo VUE.js'
        }
      })
    </script>

  </body>
</html>
