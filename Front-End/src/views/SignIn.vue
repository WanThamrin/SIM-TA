<template>
  <navbar btnBackground="bg-gradient-success" />
  <div class="page-header align-items-start min-vh-100" style="
      background-image: url('https://itk.ac.id/wp-content/uploads/2020/06/4-980x488.jpeg');
    ">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container my-auto">
      <div class="row">
        <div class="col-lg-4 col-md-8 col-12 mx-auto">
          <div class="card z-index-0 fadeIn3 fadeInBottom">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-light shadow-success border-radius-lg py-3 pe-1">
                <div class="row">
                  <div class=" text-center ml-2">
                    <a href="/">
                      <img :src="
                        sidebarType === 'bg-white' ||
                          (sidebarType === 'bg-transparent' && !isDarkMode)
                          ? logoDark
                          : logo
                      " style="height: 100px;" alt="main_logo" />
                    </a>
                  </div>
                </div>
                <!-- <h4 class="text-dark font-weight-bolder text-center mt-2 mb-0">
                  SIM-TA JMTI
                </h4> -->
                <h6 class="text-dark font-weight-normal text-center mt-2 mb-0">
                  Sistem Informasi Manajemen Tugas Akhir - JMTI
                </h6>
              </div>
            </div>
            <div class="card-body">
              <form role="form" class="text-start mt-3" @submit.prevent="store()">
                <div class="mb-3">
                  <input v-model="login.email" id="username" type="username" label="Username" name="username" />
                </div>
                <div class="mb-3">
                  <input v-model="login.password" id="password" type="password" label="Password" name="password" />
                </div>
                <material-switch id="rememberMe" name="rememberMe">Remember me</material-switch>
                <div class="text-center">
                  <material-button class="my-4 mb-2" variant="gradient" color="info" fullWidth>Sign in
                  </material-button>
                </div>
                <!-- <p class="mt-4 text-sm text-center">
                  Don't have an account?
                  <router-link
                    :to="{ name: 'SignUp' }"
                    class="text-success text-gradient font-weight-bold"
                    >Sign up</router-link
                  >
                </p> -->
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer position-absolute bottom-2 py-2 w-100">
      <div class="container">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-12 col-md-6 my-auto">
            <div class="copyright text-center text-sm text-white text-lg-start">
              © {{ new Date().getFullYear() }}, made with
              <i class="fa fa-heart" aria-hidden="true"></i> by
              <a href="https://www.creative-tim.com" class="font-weight-bold text-white" target="_blank">MOG_MOG</a>
              for a better web.
            </div>
          </div>
          <!-- <div class="col-12 col-md-6">
            <ul
              class="nav nav-footer justify-content-center justify-content-lg-end"
            >
              <li class="nav-item">
                <a
                  href="https://www.creative-tim.com"
                  class="nav-link text-white"
                  target="_blank"
                  >Creative Tim</a
                >
              </li>
              <li class="nav-item">
                <a
                  href="https://www.creative-tim.com/presentation"
                  class="nav-link text-white"
                  target="_blank"
                  >About Us</a
                >
              </li>
              <li class="nav-item">
                <a
                  href="https://www.creative-tim.com/blog"
                  class="nav-link text-white"
                  target="_blank"
                  >Blog</a
                >
              </li>
              <li class="nav-item">
                <a
                  href="https://www.creative-tim.com/license"
                  class="nav-link pe-0 text-white"
                  target="_blank"
                  >License</a
                >
              </li>
            </ul>
          </div> -->
        </div>
      </div>
    </footer>
  </div>
</template>

<script>
import logo from "@/assets/img/Logo SIM-TA.png";
import logoDark from "@/assets/img/Logo SIM-TA.png";

import axios from 'axios';
// import Vue from 'vue';
// import Vuex from 'vuex';

import Navbar from "@/examples/PageLayout/Navbar.vue";
import MaterialSwitch from "@/components/MaterialSwitch.vue";
import MaterialButton from "@/components/MaterialButton.vue";
import { mapMutations } from "vuex";

export default {
  name: "sign-in",
  components: {
    Navbar,
    MaterialSwitch,
    MaterialButton,
  },
  data() {
    return {
      logo,
      logoDark,
      login: {
        email: ""
      }
    };
  },
  beforeMount() {
    this.toggleEveryDisplay();
    this.toggleHideConfig();
  },
  beforeUnmount() {
    this.toggleEveryDisplay();
    this.toggleHideConfig();
  },
  methods: {
    store() {
      axios.post(
        'https://api-gerbang2.itk.ac.id/api/siakad/login',
        this.login
      )
        .then((res) => {
          let email = ""
          if(res.data.data.biodata.MA_Email){
            email = res.data.data.biodata.MA_Email
          } else{
            email = res.data.data.biodata.PE_Email
          }
          let request = {
              email:email,
              number:res.data.data.XNAMA,
              name:res.data.data.USERDESC
            }
          axios.post(
            'http://127.0.0.1:8000/api/login',
            request
          ) .then((ress) => { 
            // console.log(ress)
            localStorage.setItem('token', ress.data.token);
            this.$router.push({
              name: 'Dashboard'
            })
            // console.log(localStorage.getItem('token'))
          })


        }).catch((err) => {
          console.log(err.response.data)
          alert(err.response.data.message)
        });
    },
    ...mapMutations(["toggleEveryDisplay", "toggleHideConfig"]),
  },
};
</script>
