<template>
  <button type="button" name="button" @click="click">{{messaje}}</button>
</template>

<script>
export default {
  name:'miBoton',
  data(){
    return {
      messaje:'da click aqui'
    }
  },
  methods:{
    click(){
      alert("componente");
    }
  }
}
</script>
