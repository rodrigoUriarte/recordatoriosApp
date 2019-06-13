<template>
  <div class="card">
    <div class="card-header">Publicado el dia: {{ recordatorio.created_at }}</div>

    <div class="card-body">
      <input v-if="editMode" type="text" class="form-control" v-model="recordatorio.descripcion">
      <p v-else>{{recordatorio.descripcion}}</p>
    </div>

    <div class="card-footer">
      <button v-if="editMode" class="btn btn-success" v-on:click="onClickUpdate()">Guardar Cambios</button>
      <button v-else class="btn btn-default" v-on:click="onClickEdit()">Editar</button>
      <button class="btn btn-danger" v-on:click="onClickDelete()">Eliminar</button>
    </div>
  </div>
</template>

<script>
export default {
  props: ["recordatorio"],
  data() {
    return {
      editMode: false
    };
  },

  mounted() {
    console.log("Component mounted.");
  },

  methods: {
    onClickDelete() {
      const params = {
        descripcion: this.recordatorio.descripcion
      };
      axios.delete(`/recordatorios/${this.recordatorio.id}`).then(() => {
        this.$emit("delete");
      });
    },

    onClickEdit() {
      this.editMode = true;
    },

    onClickUpdate() {
      const params = {
        descripcion: this.recordatorio.descripcion
      };
      axios
        .put(`/recordatorios/${this.recordatorio.id}`, params)
        .then(response => {
          this.editMode = false;
          const recordatorio = response.data;
          this.$emit("update", recordatorio);
        });
    }
  }
};
</script>
