import { createRouter, createWebHistory } from 'vue-router'
import Login from '../components/Login.vue'
import SignUpAdm from '../components/SignUpAdm.vue'
import SignUpCostumer from '../components/SignUpCostumer.vue'

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
      component: SignUpAdm
    },
    {
      path: '/sign-in-costumer',
      name: 'sign-in-costumer',
      component: SignUpCostumer
    }
  ]
})

export default router
