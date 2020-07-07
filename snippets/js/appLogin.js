const app=new Vue({
  el:'#app',
  data:{
    pass:'',
    passC:'',
    respuesta:'',
    correo:'',
    boton:'btn blue disabled',
    menu:false
  },
  methods:{
    registro(){
      if (this.pass == this.passC) {
        const form = document.getElementById('formRegistro');
        axios.post('../api/loginRegistro/registro.php',new FormData(form))
        .then( res=> {
            this.respuesta=res.data
            this.direccionamiento()
        })
      }
      else{
        Swal.fire({
          title: "Error!",
          text: 'Los password no coinciden',
          icon: 'error',
          confirmButtonText: 'Cool'
        })
      }
    },
    direccionamiento(){
      if(this.respuesta == 'success'){
        location.href='index.php'
      }
      else{
        Swal.fire({
          title: "Error!",
          text: 'No se pudo registrar',
          icon: 'error',
          confirmButtonText: 'Cool'
        })
      }
    },
    validarCorreo(){
      if(this.validEmail(this.correo)){
        const formData = new FormData();
        formData.append('correo',this.correo);
        axios.post('../api/loginRegistro/validarEmail.php',formData)
        .then( res=> {
            this.respuesta=res.data
            if(res.data == "success"){
              this.boton="btn blue";
            }
            else{
              Swal.fire({
                title: "Error!",
                text: 'El correo electrónico ya existe!',
                icon: 'error',
                confirmButtonText: 'Cool'
              })
            }
        })
      }
      else{
        Swal.fire({
          title: "Error!",
          text: 'Escribe el correo de forma correcta!',
          icon: 'error',
          confirmButtonText: 'Cool'
        })
      }
    },
    validEmail(email){
      var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
    },
    login(){
      const form = document.getElementById('inicioSesion');
      axios.post('../api/loginRegistro/login.php',new FormData(form))
      .then( res=> {
          this.respuesta=res.data
          if(res.data=="success"){
            location.href="../principal";
          }
          else{
            Swal.fire({
              title: "Error!",
              text: 'Usuario o contraseña incorrecta!',
              icon: 'error',
              confirmButtonText: 'Cool'
            })
          }
      })
    }

  }
})
