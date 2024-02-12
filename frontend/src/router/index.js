import { createRouter, createWebHistory } from 'vue-router'
import Login from '../components/Login.vue'
import SignInAdm from '../components/SignInAdm.vue'
import SignInCostumer from '../components/SignInCostumer.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: Login
    },
    {
      path: '/login',
      name: 'login',
      component: Login
    },
    {
      path: '/sign-in-adm',
      name: 'sign-in-adm',
      component: SignInAdm
    },
    {
      path: '/sign-in-costumer',
      name: 'sign-in-costumer',
      component: SignInCostumer
    }
  ]
})

export default router
