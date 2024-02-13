<script>
import axios from 'axios';

export default {
  data() {
    return {
      formData: {
        nome: '',
        dataNasc: '',
        cpf: '',
        rg: '',
        telefone: '',
        endereco1: {
          rua: '',
          cidade: '',
          estado: '',
          cep: ''
        },
        endereco2: {
          rua: '',
          cidade: '',
          estado: '',
          cep: ''
        },
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
      <div class="item">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" v-model="formData.nome">
      </div>

      <div class="item">
        <label for="data">Data de Nascimento:</label>
        <input type="date" name="data" v-model="formData.dataNasc">
      </div>

      <div class="item">
        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" v-model="formData.cpf">
      </div>

      <div class="item">
        <label for="rg">RG:</label>
        <input type="text" name="rg" v-model="formData.rg">
      </div>

      <div class="item">
        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" placeholder="DDD + telefone" v-model="formData.telefone">
      </div>

      <div id="adresses">
        <div class="adress">
          <p>Endereço 1:</p>
          <div class="item">
            <label for="street">Rua:</label>
            <input type="text" name="street" v-model="formData.endereco1.rua">
          </div>
          <div class="item">
            <label for="city">Cidade:</label>
            <input type="text" name="city" v-model="formData.endereco1.cidade">
          </div>
          <div class="item">
            <label for="state">Estado:</label>
            <input type="text" name="state" v-model="formData.endereco1.estado">
          </div>
          <div class="item">
            <label for="postal-code">CEP:</label>
            <input type="text" name="postal-code" v-model="formData.endereco1.cep">
          </div>
        </div>

        <div class="adress">
          <p>Endereço 2:</p>
          <div class="item">
            <label for="street">Rua:</label>
            <input type="text" name="street" v-model="formData.endereco2.rua">
          </div>
          <div class="item">
            <label for="city">Cidade:</label>
            <input type="text" name="city" v-model="formData.endereco2.cidade">
          </div>
          <div class="item">
            <label for="state">Estado:</label>
            <input type="text" name="state" v-model="formData.endereco2.estado">
          </div>
          <div class="item">
            <label for="postal-code">CEP:</label>
            <input type="text" name="postal-code" v-model="formData.endereco2.cep">
          </div>
        </div>
      </div>

      <div>
        <button type="submit">Cadastrar</button>
      </div>
    </div>
  </form>
</template>

<style scoped>

#form {
  text-align: center;
  width: 60%;
  height: 100%;
  display: flex;
  margin: auto;
}

#container {
  display: flex;
  flex-direction: column;
  margin: auto;
}

#adresses {
  display: flex;
  flex-direction: row;
  justify-content: center;
}

.adress {
  display: flex;
  flex-direction: column;
  width: 50%;
  margin-left: 10px;
}
.item {
  margin: 5px;
}

.item > input {
  margin-left: 10px;
  border-radius: 10px;
  border-color: transparent;
}

button {
  margin: 60px;
  background-color: rgb(12, 100, 0);
  font-size: 15px;
  color: white;
  padding: 10px;
  border-radius: 10px;
  border: none;
  cursor: pointer;
}

button:hover {
  background-color: rgb(223, 0, 167);
}

</style>