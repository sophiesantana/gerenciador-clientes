<script setup>
import { computed } from 'vue';
import { useRoute } from 'vue-router';
import Header from './components/Header.vue';

const $route = useRoute();

const showAdmLink = computed(() => {
  if ($route.path === '/login' || $route.path === '/sign-in-adm')
  return true;
});

const showCustomerLink = computed(() => {
  if ($route.path === '/sign-in-costumer' || $route.path === '/costumers') {
    return true;
  }
});
</script>

<template>
  <main>
    <Header />
    <nav id="links-header">
      <RouterLink v-if="showAdmLink" to="/login">Login Adm</RouterLink>
      <RouterLink v-if="showAdmLink" to="/sign-in-adm">Cadastro de Adm</RouterLink>
      <RouterLink v-if="showCustomerLink" to="/login">Voltar</RouterLink>
      <RouterLink v-if="showCustomerLink" to="/sign-in-costumer">Cadastro de Cliente</RouterLink>
      <RouterLink v-if="showCustomerLink" to="/costumers">Listar Clientes</RouterLink>
    </nav>
  <RouterView />
  </main>
</template>

<style scoped>

nav {
  font-size: 15px;
  text-align: center;
  margin: 2rem 2rem;
  color: rgba(0, 39, 46, 0.986);
}

nav a {
  color: rgb(255, 198, 241);
}

nav a.router-link-exact-active {
  color: rgb(223, 0, 167);
  font-weight: bolder;
  font-size: 20px;
}

nav a:hover {
  font-size: 20px;
}

nav a {
  display: inline-block;
  padding: 0 1rem;
  border-left: 1px solid black;
}

nav a:first-of-type {
  border: 0;
}

</style>