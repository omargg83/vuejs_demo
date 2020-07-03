<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hola mundo</title>

  </head>
  <body>
    <main id='app'>
      <h1>Calculadora</h1>
      <input type="numer" v-model="v1" placeholder="Valor1" @keyup="operacion">
      <input type="numer" v-model="v2" placeholder="Valor2" @keyup="operacion"><br>
      <input type="radio" v-model="ope" value="suma">Suma
      <input type="radio" v-model="ope" value="resta">Resta
      <input type="radio" v-model="ope" value="multi">Multiplicación
      <input type="radio" v-model="ope" value="div">División
      <br>
      <button type="button" name="button" v-on:click="operacion">Calcular</button>
      <label for="">{{res}}</label>
      <br>
      <button type="button" name="button" @click="saludo('hola como estas')">Saludo</button><br>
      <input type="text" name="" @keyup.enter="saludo(dato)" v-model="dato">
      <!-- enter ,tab , delete, esc, space, left, up, down, right-->
      <!--
        <input type="text" name="" @keyup.alt.13="saludo(dato)" v-model="dato">
        ctrl.alt, shift,meta
      -->
      <br>
      <hr>

      <h1>To do list</h1>

      <form @submit.prevent="agregarpersonas">
        <input type="text" v-model="persona">
        <input type="submit" name="" value="agregar">
      </form>


      <br>

      <ul>
        <ol v-for="per in personas">
          {{per}}
        </ol>
      </ul>



    </main>

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
      const app = new Vue({
        el: '#app',
        data:{
          v1:0,
          v2:0,
          res:0,
          ope:'suma',
          dato:'',
          personas:['Maria','Pedro','luis'],
          persona:''
        },
        methods:{
          operacion: function(){
            switch (this.ope) {
              case 'suma':
                this.res=parseInt(this.v1) + parseInt(this.v2);
                break;
              case 'resta':
                this.res=parseInt(this.v1) - parseInt(this.v2);
                break;
              case 'multi':
                this.res=parseInt(this.v1) * parseInt(this.v2);
                break;
              case 'div':
                this.res=parseInt(this.v1) / parseInt(this.v2);
                break;
            }
          },
          saludo:function(mensaje){
            alert(mensaje);
            /*
            if(event){
              alert("evento ejecutado");
            }
            */
          },
          agregarpersonas:function(){
            if(!this.persona==''){
              this.personas.unshift(this.persona);
              //this.personas.push(this.persona);
              this.persona="";
            }
          }
        }
      })
    </script>

  </body>
</html>
