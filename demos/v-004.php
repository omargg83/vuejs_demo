<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hola mundo</title>

  </head>
  <body>
    <main id='app'>
      <h2>escribe tu edad</h2>
      <input type="number" v-model="edad">
      <div>
        {{ rangoEdad }}
      </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
      const app = new Vue({
        el: '#app',
        data:{
          edad:0
        },
        computed:{
          rangoEdad: function(){
            return this.edad >=18 ? 'eres mayor de edad' : 'eres menor de edad'
          }
        }
      })
    </script>

  </body>
</html>
