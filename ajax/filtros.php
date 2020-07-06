<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ciclo de vida de instancia</title>
</head>
<body>

    <main id='app'>
      <table>
        <th v-for="campo in campos">{{campo | capitalize }}</th>
        <tr v-for="item in datos">
          <td>{{item.name.toUpperCase()}}</td>
          <td>{{item.email.toLowerCase()}}</td>
          <td>{{item.address.city}}</td>
          <td>Lat: {{item.address.geo.lat}}
            Long:
            {{item.address.geo.lng}}
          </td>
          <td>{{'$' + precio.toFixed(2)}}</td>
          <td>{{texto | vermas(15,' ver mas...') | capitalize }}</td>
        </tr>
      </table>
    </main>



    <script src='https://cdn.jsdelivr.net/npm/vue/dist/vue.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.5.1/vue-resource.min.js'></script>

    <script>
      Vue.filter('capitalize',function(valor){
        return valor[0].toUpperCase() + valor.slice(1)
      })

      Vue.filter('vermas',function(valor,tamano,sufijo){
        return valor.substring(0,tamano) + sufijo
      })

      const url='https://jsonplaceholder.typicode.com/users'
      const app = new Vue({
        el:'#app',
        data:{
            datos:[],
            campos:['nombre','email','ciudad','localizacion','precio'],
            precio:1234,
            texto:'lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        },
        methods:{
          usuarios(){
            this.$http.get(url).then(function(respuesta){
              this.datos = respuesta.data
            })
          }
        },
        created(){
          this.usuarios()
        }
      })
    </script>
</body>
</html>
