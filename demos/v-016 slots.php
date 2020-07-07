<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hola mundo</title>

  </head>
  <body>
    <main id='app'>
      <mi-encabezado>
        <h5>sbtitulo</h4>
      </mi-encabezado>
    </main>

    <template id='miTemplate'>
      <div>
        <h1>soy el titulo del articulo</h1>
        <slot></slot>
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
