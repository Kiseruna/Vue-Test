var url = "bd/crud.php";

var app = new Vue({
el: "#app",
data:{
     datos:[],
     nombre:"",
     tipoId:[{nombreMenu:'Tarjeta de identidad'},
             {nombreMenu:'Cédula de ciudadanía'},
             {nombreMenu:'Cédula de extranjería'},
             {nombreMenu:'Otro'}],
     numeroId:"",
     fechaNac:"",
     aceptar:"",
     //showName:showName,
 },
 methods:{
   showName:function(nombre){
     var fullName = this.datos[0]["n_comp"].split(" ");
     var firstName = fullName[0];
     return firstName;
   },

   btnActualizar:async function(id, nombre, tipoId, numeroId, fechaNac, aceptar){
     if (this.aceptar == "") {
       Swal.fire({
         type: 'info',
         title: 'Acepta los términos y condiciones',
       })
     }else{
       this.editarDatos(id, nombre, tipoId, numeroId, fechaNac);
       Swal.fire({
         type: 'success',
         title: '¡Datos Actualizados!'
       })
     }
     this.aceptar = document.getElementById('aceptar').checked = false;
  },
   //---------------------Proceso para actualizar datos-------------------------
   //Enlistar
   listarDatos:function(){
       axios.post(url, {opcion:1}).then(response =>{
          this.datos = response.data;
       });
   },

   //Actualizar
   editarDatos:function(id, nombre, tipoId, numeroId, fechaNac){
      axios.post(url, {opcion:2, id:id, nombre:nombre, tipoId: tipoId, numeroId:numeroId, fechaNac:fechaNac }).then(response =>{
          this.listarDatos();
       });
   },
 },
 created: function(){
    this.listarDatos();
 },
});
