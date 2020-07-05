<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hola mundo</title>

  </head>
  <body>
    <main id='app'>
      <mi-encabezado>
        <h4 slot="sub">subtitulo</h4>
        <p slot="parrafo">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </mi-encabezado>
    </main>

    <template id='miTemplate'>
      <div>
        <slot name="sub"></slot>
        <h1>soy el titulo del articulo</h1>
        <slot name="parrafo"></slot>
      </div>
    </template>

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
    Vue.component('mi-encabezado',{
      template:'#miTemplate'
    })
      const app = new Vue({
        el: '#app',
        data:{
        datos:""
        }
      })
    </script>

  </body>
</html>
