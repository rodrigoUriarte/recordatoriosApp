<template>
  <div class="row justify-content-center">
    <div class="col-md-8">

      <div id="app">
        <form-component @new="agregarRecordatorio"></form-component>
      </div>

      <div id="app">
        <recordatorio-component
          v-for="(recordatorio, index) in recordatorios"
          :key="recordatorio.id"
          :recordatorio="recordatorio"
          @delete="eliminarRecordatorio(index)"
          @update="updateRecordatorio(index,...arguments)"
        ></recordatorio-component>
      </div>
      
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      recordatorios: []
    };
  },

  mounted() {
    axios.get('/recordatorios').then((response) => {
      this.recordatorios = response.data;
    });
  },

  methods: {
    agregarRecordatorio(recordatorio) {
      this.recordatorios.push(recordatorio);
    },
    updateRecordatorio(index, recordatorio) {
      this.recordatorios[index] = recordatorio ;
    },
    eliminarRecordatorio(index) {
      this.recordatorios.splice(index, 1);
    }
  }
};
</script>
