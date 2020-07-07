const app=new Vue({
  el:'#app',
  data:{
    menu:true,
    respuesta:'',
    listar:[],
    buscar:""
  },
  created(){
    axios.get("http://localhost/vuejs_demo/snippets/api/crud/getPost.php")
    .then(res=>{
      this.listar= res.data
    })
  },
  computed:{
    datosFiltrados(){
      return this.listar.filter((filtro)=>{
        return filtro.titulo.toUpperCase().match(this.buscar.toUpperCase()) || filtro.descripcion.toUpperCase().match(this.buscar.toUpperCase())
      })
    }
  },
  methods:{
    alta(){
      const form = document.getElementById('altaPost');
      axios.post('../api/crud/altaPost.php',new FormData(form))
      .then( res=> {
          this.respuesta=res.data
          if(res.data=="success"){
            Swal.fire({
              title: "success!",
              text: 'buen trabajo',
              icon: 'success',
              confirmButtonText: 'OK!'
            })
            form.reset()
          }
          else{
            Swal.fire({
              title: "Error!",
              text: 'no se pudo guardar',
              icon: 'error',
              confirmButtonText: 'OK!'
            })
          }
      })
    }
  }
})
