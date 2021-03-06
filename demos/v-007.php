<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hola mundo</title>
    <style>
      .femenino{
        color:pink;
        font-family: 'Lucida sans'
        font-size: 25px;
        font-weight: bolder;
      }
      .masculino{
        color:blue;
        font-family: 'Times New Roman'
        font-size: 15px;
      }
    </style>
  </head>
  <body>
    <main id='app'>
      <h2>escribe tu edad</h2>
      <input type="number" v-model="edad">
      <input type="text" v-model="nombre">
      <div v-html="rangoEdad"></div>
      <label :class="genero"> {{concatenacion}} </label><br>

      <label><input type="radio" v-model="gen" value="f">Femenino</label>
      <label><input type="radio" v-model="gen" value="m">Masculino</label>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
      const app = new Vue({
        el: '#app',
        data:{
          edad:0,
          nombre:'Pedro',
          apellidoP:'Mendez',
          apellidoM:'Jardines',
          gen:'f'
        },
        computed:{
          rangoEdad: function(){
            return this.edad >=18 ? '<h1>eres mayor de edad</h1>' : '<h2>eres menor de edad</h2>';
          },
          concatenacion: function(){
            return this.nombre + ' ' + this.apellidoP + ' ' + this.apellidoM;
          },
          genero: function(){
            return this.gen=='f' ? 'femenino' : 'masculino';
          }
        }
      })
    </script>

  </body>
</html>
