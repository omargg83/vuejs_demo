<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hola mundo</title>

  </head>
  <body>
    <main id='app'>
      <boton @mi-evento="saluda2">
      </boton>
    </main>

    <template id="miBoton">
      <button type="button" name="button" @click="saluda">click aqui</button>
    </template>


    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
      Vue.component('boton',{
        template:'#miBoton',
        data(){
          return {
            dato:'Hola soy el dato de mi propio componente',
            parametro:"hola como"
          }
        },
        methods:{
          saluda(){
            alert(this.dato);
            this.$emit("mi-evento",this.parametro)
          }
        }
      })
      const app = new Vue({
        el: '#app',
        data:{
          datos:"estas amigo"
        },
        methods:{
          saluda2(parametro){
            alert(parametro + ' '+ this.datos);
          }
        }
      })
    </script>

  </body>
</html>
