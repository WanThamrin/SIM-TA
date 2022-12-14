<template>
  <navbar btnBackground="bg-gradient-success" />
  <div class="page-header align-items-start min-vh-100" style="
    background-image: url('https://itk.ac.id/wp-content/uploads/2020/06/4-980x488.jpeg')">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container my-auto">
      <div class="row">
        <div class="col-lg-4 col-md-8 col-12 mx-auto">
          <div class="card z-index-0 fadeIn3 fadeInBottom">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-light shadow-success border-radius-lg py-3 pe-1">
                <div class="row">
                  <div class=" text-center ml-4 mb-4 mt-4">
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
                  Sistem Informasi Manajemen Tugas Akhir Informatika {{ isLogin }}
                </h6>
              </div>
            </div>
            <div class="card-body">
              <form role="form" class="text-start mt-3" @submit.prevent="store()">
                <!--  -->
                <div>{{ this.login.message }}</div>
                <div v-if="isLogin">
                  <material-alert class="font-weight-light" color="danger" dismissible>
                    <span class="text-sm">{{ this.messageError }}</span>
                  </material-alert>
                </div>
                <div class="mb-3">
                  <input placeholder="Masukkan E-Mail" class="input-group border border-info rounded py-2 px-2 text-sm"
                    v-model="login.email" id="username" type="username" label="Username" name="username" />
                </div>
                <div class="input-group mb-3">
                  <input :type="passwordIcon" v-model="login.password"
                    class="form-control input-group border border-info rounded py-2 px-2 text-sm"
                    placeholder="Masukan Password Anda..." id="password" label="Password" name="password" required
                    pattern=".{8,}" title="Please enter 8 characters or more." aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button @click.prevent="ToggleButtonIcon" type="button" class=" btn btn-link text-dark mb-0 px-2"
                      href="javascript:;">
                      <!-- <i class="fas fa-regular fa-eye text-gradient-dark fa-lg" aria-hidden="true"></i> -->
                      <i v-if="passwordIcon == 'password'" class="fas fa-eye text-gradient-dark fa-lg"></i>
                      <i v-else class="fas fa-eye-slash text-gradient-dark fa-lg"></i>
                    </button>
                  </div>
                </div>
                <!-- <material-switch id="rememberMe" name="rememberMe">Remember me</material-switch> -->
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
              ©
              {{ new Date().getFullYear() }}, made by

              <a href="https://if.itk.ac.id/" class="font-weight-bold" target="_blank">Informatika ITK</a>
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
import logo from "@/assets/img/SIM-TA.png";
import logoDark from "@/assets/img/SIM-TA.png";
import MaterialAlert from "@/components/MaterialAlert.vue";


import axios from 'axios';
// import Vue from 'vue';
// import Vuex from 'vuex';

import Navbar from "@/examples/PageLayout/Navbar.vue";
// import MaterialSwitch from "@/components/MaterialSwitch.vue";
import MaterialButton from "@/components/MaterialButton.vue";
import { mapMutations } from "vuex";

export default {
  name: "sign-in",
  components: {
    Navbar,
    // MaterialSwitch,
    MaterialButton,
    MaterialAlert,
  },
  data() {
    return {
      logo,
      logoDark,
      isLogin: null,
      messageError: null,
      login: {},

      passwordIcon: 'password'
    };
  },
  beforeMount() {
    this.toggleEveryDisplay();
    this.toggleHideConfig();
    // this.ToggleButtonIcon();
  },
  beforeUnmount() {
    this.toggleEveryDisplay();
    this.toggleHideConfig();
    // this.ToggleButtonIcon();
  },
  methods: {

    // switchVisibility() { this.passwordText = this.passwordText === 'password' ? 'text' : 'password' } ,
    ToggleButtonIcon() {
      this.passwordIcon =
        this.passwordIcon === "password" ? "text" : "password";
    },
    store() {
      axios.post(
        'https://api-gerbang2.itk.ac.id/api/siakad/login',
        this.login
      )
        .then((res) => {
          let email = ""
          let phone = ""
          let role = ""
          if (res.data.data.biodata.MA_Email) {
            email = res.data.data.biodata.MA_Email
            phone = res.data.data.biodata.MA_TelpMhs
            role = "user"
          } else {
            email = res.data.data.biodata.PE_Email
            phone = res.data.data.biodata.PE_Telepon
            role = "dosen"
          }
          let request = {
            email: email,
            phone: phone,
            role: role,
            number: res.data.data.XNAMA,
            name: res.data.data.USERDESC
          }
          axios.post(
            'http://127.0.0.1:8000/api/login',
            request
          ).then((ress) => {
            localStorage.setItem('token', ress.data.token);
            let token = localStorage.getItem("token")
            axios.get(
              'http://127.0.0.1:8000/api/me',
              { headers: { Authorization: `Bearer ${token}` } }
            ).then((ress) => {
              localStorage.setItem('profile', JSON.stringify(ress.data.data))
              console.log(JSON.stringify(ress.data.data), 'res')
              console.log(localStorage.getItem('profile'), 'bhgygy')
              this.$router
                .push({ name: 'Dashboard' })
                .then(() => { this.$router.go() })
            })
          })
          // localStorage.removeItem('profile')



        }).catch((err) => {
          this.isLogin = true
          this.messageError = err.response.data.message
          console.log(err.response.data, 'token error')
          // alert(err.response.data.message)
        });
    },
    ...mapMutations(["toggleEveryDisplay", "toggleHideConfig"]),
  },
};
</script>
