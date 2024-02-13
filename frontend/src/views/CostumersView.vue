<script>
import axios from 'axios';

export default {
  mounted() {
    this.fetchData();
  },
  data() {
    return {
      url: 'http://localhost/backend/', // Adjust the URL as needed
      isLoading: false,
      error: null,
      usersData: [],
    };
  },
  methods: {
    fetchData() {
      this.isLoading = true;
      axios.get(this.url, {
        headers: {
          'Content-Type': 'application/json'
        },
      }).then(response => {
        this.usersData = response.data;
        console.log('Solicitado:', this.customers);
      }).catch(error => {
        this.error = 'Error getting data: ' + error.message;
        console.error(this.error);
      }).finally(() => {
        this.isLoading = false;
      });
    },
  },
  computed: {
    uniqueUsers() {
      const uniqueUsersMap = new Map();
      this.usersData.forEach((user) => {
        const key = `${user.nome}-${user.data_nasc}-${user.cpf}-${user.rg}-${user.telefone}`;
        if (!uniqueUsersMap.has(key)) {
          uniqueUsersMap.set(key, {
            id: user.id,
            nome: user.nome,
            data_nasc: user.data_nasc,
            cpf: user.cpf,
            rg: user.rg,
            telefone: user.telefone,
            addresses: [],
          });
        }
        uniqueUsersMap.get(key).addresses.push({
          id: user.id,
          rua: user.rua,
          cidade: user.cidade,
          estado: user.estado,
          cep: user.cep,
        });
      });

      return Array.from(uniqueUsersMap.values());
    },
  },
};
</script>

<template>
  <div>
    <table class="excel-style-table">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Data de Nascimento</th>
          <th>CPF</th>
          <th>RG</th>
          <th>Telefone</th>
          <th>Endereços</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="user in uniqueUsers" :key="user.id">
          <td>{{ user.nome }}</td>
          <td>{{ user.data_nasc }}</td>
          <td>{{ user.cpf }}</td>
          <td>{{ user.rg }}</td>
          <td>{{ user.telefone }}</td>
          <td>
            <ul class="line-below">
              <li v-for="address in user.addresses" :key="address.id">
                {{ address.rua }}, {{ address.cidade }}, {{ address.estado }}, {{ address.cep }}
              </li>
            </ul>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<style>
.excel-style-table {
  border-collapse: collapse;
  width: 100%;
}

.excel-style-table th,
.excel-style-table td {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: left;
}

.excel-style-table .line-below td {
  border-bottom: 1px solid #ddd;
}

.excel-style-table .line-below:last-child td {
  border-bottom: none;
}
</style>