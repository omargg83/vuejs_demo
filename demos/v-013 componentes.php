<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hola mundo</title>

  </head>
  <body>
    <main id='app'>
      <mi-encabezado titulo="Curso" subtitulo="Desarrollo web con vue" :contenido="datos" alineacion="justify"></mi-encabezado>
      <br>

      <mi-tabla :lista="personas"></mi-tabla>
      <mi-tabla :lista="peoples"></mi-tabla>


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

      Vue.component('mi-tabla',{
        props:['lista'],
        template:`
          <div>
            <table>
              <th>Nombre</th>
              <th>Dirección</th>
              <th>Telefono</th>
              <tr v-for="dato in lista">
                <td>{{dato.nombre}}</td>
                <td>{{dato.direccion}}</td>
                <td>{{dato.telefono}}</td>
              </tr>
            </table>
          </div>
        `
      })

      const app = new Vue({
        el: '#app',
        data:{
          datos:'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
          personas:[
            {nombre:'pedro',direccion:'jardines',telefono:312164},
            {nombre:'Maria',direccion:'valles',telefono:5778998},
            {nombre:'cecilia',direccion:'perez',telefono:544546}
          ],
          peoples:[
            {nombre:'a1',direccion:'jardines',telefono:312164},
            {nombre:'a2',direccion:'valles',telefono:5778998},
            {nombre:'a3',direccion:'perez',telefono:544546}
          ]
        }
      })
    </script>

  </body>
</html>
