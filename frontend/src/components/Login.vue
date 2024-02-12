<script>
import axios from 'axios';

export default {
  data() {
    return {
      formData: {
        cpf: '',
        password: '',
        url: window.location.href
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
          console.log(response.data);
          if (response.data === 'User Authenticated!') {
            this.$router.push('/costumers');
          }
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
        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" v-model="formData.cpf">
      </div>

      <div>
        <label for="password">Senha:</label>
        <input type="password" name="password" v-model="formData.password">
      </div>

      <div id="btn-recover-pass">
        <button type="submit">Logar</button>
        <p>Esqueceu a senha?</p>
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

#btn-recover-pass {
  display: flex;
  justify-content: center;
  background-color: aqua;
}

</style>