<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hola mundo</title>

  </head>
  <body>
    <main id='app'>
      <mi-encabezado titulo="Curso" subtitulo="Desarrollo web con vue" :contenido="datos" alineacion="justify"></mi-encabezado>


    </main>

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
      Vue.component('mi-encabezado',{
        props:['titulo','subtitulo','contenido', 'alineacion'],
        template:`
          <div style="width:300px;">
            <h1>{{titulo}}</h1>
            <h4>{{subtitulo}}</h4>
            <p :align="alineacion">{{contenido}}</p>
          </div>
        `
      })
      const app = new Vue({
        el: '#app',
        data:{
          datos:'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        }
      })
    </script>

  </body>
</html>
