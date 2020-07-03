<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hola mundo</title>

  </head>
  <body>
    <main id='app'>
      <h1>{{message}}</h1>
      <input type="text" v-model="message">
      <h1 v-text="message"></h1>
      <div v-html='mensajehtml'></div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
      const app = new Vue({
        el: '#app',
        data:{
          message: 'Hola mundo VUE.js',
          mensajehtml: "<h1><b><i>hola</i></b></h1>"

        }
      })
    </script>

  </body>
</html>
