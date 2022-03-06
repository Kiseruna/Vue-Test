<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shift Active Test</title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <section class="home">
  <div class="in-flex">
    <img id="ceipa" src="http://web.ceipa.edu.co/images/logo.png">
    <div id="app">
      <div class="p_data" v-for="(dato,index) of datos">
        <div id="username">
          {{showName()}} estos son tus datos
        </div>
        <table id="table-data">
          <tr>
            <td>
              <label class="titles">Nombre completo</label>
              <input id="nombre" v-model="dato.n_comp" class="inputs" type="text" required>
            </td>
          </tr>
          <tr>
            <td>
              <label class="titles">Identificación</label>
              <select id="tipoId" class="inputs" v-model="dato.tipo_id" required>
                <option v-for="value in tipoId" :value="value.nombreMenu">{{value.nombreMenu}}</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>
              <label class="titles">Número de identificación</label>
              <input id="numeroId" v-model="dato.n_id" class="inputs" type="number" required>
            </td>
          </tr>
          <tr>
            <td>
              <label class="titles">Fecha de nacimiento</label>
              <input id="fechaNac" v-model="dato.f_nac" class="inputs" type="date" required>
            </td>
          </tr>
          <tr>
            <td>
              <input id="aceptar" v-model="aceptar" type="checkbox">
              <label class="titles">Acepto términos y condiciones</label>
            </td>
          </tr>
          <tr>
            <td>
              <button id="submit-button" title="Actualizar datos" @click="btnActualizar(dato.id, dato.n_comp, dato.tipo_id, dato.n_id, dato.f_nac)" value="Actualizar datos">Actualizar datos</button>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</section>
<!-- Vue -->
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<!-- Axios -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.15.2/axios.js"></script>
<!-- Métodos -->
<script src="main.js"></script>
<!-- Sweet Alert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
