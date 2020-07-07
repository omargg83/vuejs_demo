<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hola mundo</title>

  </head>
  <body>
    <main id='app'>
      <me-gusta></me-gusta>
    </main>

    <template id='meGusta'>
      <button type="button" name="button" @click="incremento">{{total}} Me gusta</button>
    </template>

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
      Vue.component('me-gusta',{
        template:'#meGusta',
        data:function(){
          return {
            total:0
          }
        },
        methods:{
          incremento:function(){
            this.total+=1
          }
        }
      })
      const app = new Vue({
        el: '#app'
      })
    </script>

  </body>
</html>
