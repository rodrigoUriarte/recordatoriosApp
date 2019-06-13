

<template>
  <div class="card">
    <div class="card-header">Bienvenido A LaravelVue</div>
    <div class="card-body">
      <form v-on:submit.prevent="nuevoRecordatorio()">
        <div class="form-group">
          <label for="recordatorio">Ingrese su recordatorio:</label>
          <input type="text" class="form-control" name="recordatorio" v-model="descripcion">
        </div>
        <button type="submit" class="btn btn-primary">Subir recordatorio</button>
      </form>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      descripcion: ""
    };
  },
  mounted() {
    console.log("Component mounted.");
  },
  methods: {
    nuevoRecordatorio() {
      const params = {
        descripcion: this.descripcion
      };
      this.descripcion = "";

      axios.post("/recordatorios", params).then(response => {
        const recordatorio = response.data;
        this.$emit('new', recordatorio);
      });
    }
  }
};
</script>
