<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hola mundo</title>

  </head>
  <body>
    <main id='app'>
      <mi-encabezado titulo="Curso" subtitulo="Desarrollo web con vue"></mi-encabezado>
      <mi-encabezado titulo="otro Curso" subtitulo="otro curso web con vue"></mi-encabezado>


    </main>

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
      Vue.component('mi-encabezado',{
        props:['titulo','subtitulo'],
        template:`
          <div>
            <h1>{{titulo}}</h1>
            <h4>{{subtitulo}}</h4>
          </div>
        `
      })
      const app = new Vue({
        el: '#app',
        data:{
          datos:''
        }
      })
    </script>

  </body>
</html>
