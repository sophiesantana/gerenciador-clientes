<script setup>
import Header from './components/Header.vue';
</script>

<template>
  <main>
    <Header />
    <nav id="links-header">
      <RouterLink to="/login">Login Adm</RouterLink>
      <RouterLink to="/sign-in-adm">Cadastro de Adm</RouterLink>
      <RouterLink to="/sign-in-costumer">Cadastro de Cliente</RouterLink>
    </nav>
  <RouterView />
  </main>
</template>

<style scoped>

#links-header {
  background-color: yellow;
}

nav {
  width: 100%;
  font-size: 12px;
  text-align: center;
  margin-top: 2rem;
}

nav a.router-link-exact-active {
  color: green;
}

nav a.router-link-exact-active:hover {
  background-color: transparent;
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