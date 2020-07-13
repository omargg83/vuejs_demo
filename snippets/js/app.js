const app=new Vue({
  el:'#app',
  data:{
    menu:true,
    respuesta:'',
    listar:[],
    buscar:"",
    itemId:"",
    formEditar:{},
    userPost:''
  },
  created(){
    this.getCategoria();
    this.getUser();
    this.getId();
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
    },
    getId(){
      let uri=window.location.href.split('?');
      if (uri.length==2) {
        let vars = uri[1].split('&');
        let getVars = {};
        let tmp='';
        vars.forEach(function(v){
          tmp = v.split('=');
          if(tmp.length == 2){
            getVars[tmp[0]]=tmp[1];
          }
        });
        this.itemId=getVars;
        console.log(this.itemId.id);
        axios.get('http://localhost/vuejs_demo/snippets/api/crud/getId.php?id=' + this.itemId.id)
        .then (res=>{
          this.formEditar=res.data
        })
      }
    },
    editar(){
      const form = document.getElementById('editarPost');
      axios.post('../api/crud/editarPost.php',new FormData(form))
      .then( res=> {
          this.respuesta=res.data
          if(res.data=="success"){
            location.href="index.php"
          }
          else{

            Swal.fire({
              title: "Error!",
              text: 'no se pudo editar',
              icon: 'error',
              confirmButtonText: 'OK!'
            })
          }
      })
    },
    eliminar(id){
      Swal.fire({
        title: 'Estas seguro de eliminar el registro?',
        text: "No podras deshacer esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.value) {
          axios.get('http://localhost/vuejs_demo/snippets/api/crud/eliminarId.php?id=' + id)
          .then (res=>{
            if(res.data="success"){
              Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
              )
            }
            else{
              Swal.fire(
                'Deleted!',
                'No eliminado',
                'Error'
              )
            }
            this.getCategoria();
          })
        }
        else{
          return false;
        }
      })
    },
    getUser(){
      axios.get('http://localhost/vuejs_demo/snippets/api/crud/getUser.php')
      .then (res =>{
        console.log(res.data);
        this.userPost=res.data
      })
    },
    getCategoria(){
      let uri=window.location.href.split('?');
      if (uri.length==2) {
        let vars = uri[1].split('&');
        let getVars = {};
        let tmp='';
        vars.forEach(function(v){
          tmp = v.split('=');
          if(tmp.length == 2){
            getVars[tmp[0]]=tmp[1];
          }
        });
        this.itemId=getVars;
        console.log(this.itemId.cat);
        axios.get('http://localhost/vuejs_demo/snippets/api/crud/getCategoria.php?cat=' + this.itemId.cat)
        .then (res=>{
          this.listar=res.data
        })
      }
      else{
        axios.get("http://localhost/vuejs_demo/snippets/api/crud/getPost.php")
        .then(res=>{
          this.listar= res.data
        })
      }
    }
  }
})
