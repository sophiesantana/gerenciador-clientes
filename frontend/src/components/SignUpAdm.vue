<script>
import axios from 'axios';

export default {
  data() {
    return {
      formData: {
        nome: '',
        cpf: '',
        password: ''
      },
      isLoading: false,
      error: null,
    };
  },
  methods: {
    async handleSubmit() {
      this.isLoading = true;
      this.error = null;

      axios.post('http://localhost/backend/', this.formData, {
        headers: {
          'Content-Type': 'application/json'
        },
      }).then(response => {
          console.log('Data sent successfully', response.data);
        }).catch(error => {
          console.error('Error sending data', error);
        });
    },
  },
};
</script>

<template>
  <form id="form" @submit.prevent="handleSubmit">
    <div id="container">
      <div>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" v-model="formData.nome">
      </div>

      <div>
        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" v-model="formData.cpf">
      </div>

      <div>
        <label for="password">Senha:</label>
        <input type="password" id="password" v-model="formData.password">
      </div>

      <div>
        <button type="submit">Cadastrar</button>
      </div>
    </div>
  </form>
</template>

<style scoped>

#form {
  background-color: blueviolet;
  text-align: center;
}

#container {
  display: flex;
  flex-direction: column;
}

</style>