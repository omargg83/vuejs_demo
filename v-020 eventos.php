<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hola mundo</title>

  </head>
  <body>
    <main id='app'>
      <boton >
      </boton>
      <mensaje>
      </mensaje>
    </main>

    <template id="miBoton">
      <button type="button" name="button" @click="saluda">click aqui</button>
    </template>

    <template id="miMensaje">
      <h1>{{mensaje}}</h1>
    </template>


    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
      Vue.component('boton',{ /////////componente a
        template:'#miBoton',
        data(){
          return {
            dato:'Hola soy el dato de mi propio componente',
            parametro:"ejecutando en el componente B"
          }
        },
        methods:{
          saluda(){
            alert(this.dato);
            puente.$emit("mi-evento",this.parametro)
          }
        }
      })

      Vue.component('mensaje',{ ///////////////componenten b
        template:'#miMensaje',
        data(){
          return {
            mensaje:'segundo componente',

          }
        },
        created(){
          puente.$on('mi-evento',function(){
            
          })
        }
      })

      const puente = new Vue({
        el: '#app',
        data:{
          datos:""
        }
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
