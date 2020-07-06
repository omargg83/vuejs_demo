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
        <th>nombre</th>
        <th>correo</th>
        <th>ciudad</th>
        <th>Localizacion</th>

        <tr v-for="item in datos">
          <td>{{item.name}}</td>
          <td>{{item.email}}</td>
          <td>{{item.address.city}}</td>
          <td>Lat: {{item.address.geo.lat}}
            Long:
            {{item.address.geo.lng}}
          </td>
        </tr>
      </table>

      <pre>
        {{ $data }}
      </pre>

    </main>

    <script src='https://cdn.jsdelivr.net/npm/vue/dist/vue.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.5.1/vue-resource.min.js'></script>

    <script>
      const url='https://jsonplaceholder.typicode.com/users'
      const app = new Vue({
        el:'#app',
        data:{
            datos:[]
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
