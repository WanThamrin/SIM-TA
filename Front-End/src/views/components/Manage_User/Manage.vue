<template>
  <div class="container-fluid py-4">
    <div class="row align-items-center">
      <div class="">
        <h5>Akses Super Admin</h5>
        <div class="nav-wrapper position-relative col-lg-4 col-sm-8 mb-4 end-0">
          <ul class="nav nav-pills nav-fill p-1" role="tablist">
            <li class="nav-item">
              <a @click="getSupAdmin()" class="nav-link mb-0 px-0 py-1 active active" data-bs-toggle="tab"
                href="#get-supadmin" role="tab" aria-selected="false">Akses Super Admin</a>
            </li>
            <li class="nav-item">
              <a @click="getSupDosen()" class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#get-supdosen" role="tab"
                aria-selected="false">Daftar Dosen</a>
            </li>
          </ul>
        </div>
        <div class="tab-content row my-4">
          <div class="tab-pane card fade show col-12  active my-4" id="get-supadmin" role="tabpanel"
            aria-labelledby="get-supadmin">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-light shadow-success border-radius-lg pt-4 pb-3">
                <h6 class="text-dark text-capitalize ps-3 ml-2">Daftar Akses Super Admin</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive  p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                        Nama Dosen
                      </th>
                      <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                        NIPH
                      </th>
                      <!-- <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Info
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Penguji II
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Jadwal
                    </th> -->
                      <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-5"> Action
                      </th>
                      <!-- <th class="text-dark opacity-2"></th> -->
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="(supdosen, index) in supdosens.superadmin" :key="index">
                      <td class="align-middle text-center">
                        <span class="text-sm font-weight-medium"> {{ supdosen.name }} </span>
                      </td>
                      <td>
                        <div class="text-center px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ supdosen.number }}</h6>
                            <!-- <p class="text-sm text-secondary mb-0">
                            
                          </p> -->
                          </div>
                        </div>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-link text-dark mb-0" href="javascript:;">
                          <router-link :to="{ name: 'Detail-Dosen', params: { id: supdosen.id } }">
                            <i class="fas fa-regular fa-eye text-gradient-dark fa-lg" aria-hidden="true"></i>
                          </router-link>
                        </a>
                        <a class="btn btn-sm bg-gradient-danger  mb-0 me-2" href="javascript:;"
                          @click="hapusStatusSup(supdosen.id)">Hapus
                        </a>
                        <!-- <a class="btn btn-link mb-0 " href="javascript;" @click.prevent="drop(DocSempro.id)">
                          <i class="far fa-trash-alt me-0 fa-lg" aria-hidden="true"></i>
                        </a> -->
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class=" tab-pane card col-12 my-4" id="get-supdosen" role="tabpanel" aria-labelledby="get-supdosen">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-light shadow-success border-radius-lg pt-4 pb-3">
                <h6 class="text-dark text-capitalize ps-3 ml-2">Daftar Dosen</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0" id="get-supdosen">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                        Nama Dosen
                      </th>
                      <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                        NIPH
                      </th>
                      <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-5"> Action
                      </th>
                      <!-- <th class="text-dark opacity-2"></th> -->
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="(dosen, index) in supdosens.dosen" :key="index">
                      <td class="align-middle text-center">
                        <span class="text-sm font-weight-medium"> {{ dosen.name }} </span>
                      </td>
                      <td>
                        <div class="text-center px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ dosen.number }}</h6>
                            <!-- <p class="text-sm text-secondary mb-0">
                            
                          </p> -->
                          </div>
                        </div>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-link text-dark mb-0" href="javascript:;">
                          <router-link :to="{ name: 'Detail-Dosen', params: { id: dosen.id } }">
                            <i class="fas fa-eye m-0 p-0 me-2 text-gradient-dark fa-lg" aria-hidden="true"></i>
                          </router-link>
                        </a>
                        <a class="btn btn-sm bg-gradient-success  mb-0 me-2" href="javascript:;"
                          @click="updateStatusSup(dosen.id)">Pilih
                        </a>
                      </td>
                    </tr>

                  </tbody>

                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="">
        <h5>Akses Admin</h5>
        <div class="nav-wrapper position-relative col-lg-4 col-sm-8 mb-4 end-0">
          <ul class="nav nav-pills nav-fill p-1" role="tablist">
            <li class="nav-item">
              <a @click="getAdmin()" class="nav-link mb-0 px-0 py-1 active active" data-bs-toggle="tab"
                href="#get-admin" role="tab" aria-selected="false">Akses Admin</a>
            </li>
            <li class="nav-item">
              <a @click="getDosen()" class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#get-dosen" role="tab"
                aria-selected="false">Daftar Dosen</a>
            </li>
          </ul>
        </div>
        <div class="tab-content row my-4">
          <div class="tab-pane card fade show col-12  active my-4" id="get-admin" role="tabpanel"
            aria-labelledby="get-admin">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-light shadow-success border-radius-lg pt-4 pb-3">
                <h6 class="text-dark text-capitalize ps-3 ml-2">Daftar Akses Admin</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive  p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                        Nama Dosen
                      </th>
                      <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                        NIPH
                      </th>
                      <!-- <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Info
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Penguji II
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Jadwal
                    </th> -->
                      <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-5"> Action
                      </th>
                      <!-- <th class="text-dark opacity-2"></th> -->
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="(dosen, index) in dosens.admin" :key="index">
                      <td class="align-middle text-center">
                        <span class="text-sm font-weight-medium"> {{ dosen.name }} </span>
                      </td>
                      <td>
                        <div class="text-center px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ dosen.number }}</h6>
                            <!-- <p class="text-sm text-secondary mb-0">
                            
                          </p> -->
                          </div>
                        </div>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-link text-dark mb-0" href="javascript:;">
                          <router-link :to="{ name: 'Detail-Dosen', params: { id: dosen.id } }">
                            <i class="fas fa-regular fa-eye text-gradient-dark fa-lg" aria-hidden="true"></i>
                          </router-link>
                        </a>
                        <a class="btn btn-sm bg-gradient-danger  mb-0 me-2" href="javascript:;"
                          @click="hapusStatus(dosen.id)">Hapus
                        </a>
                        <!-- <a class="btn btn-link mb-0 " href="javascript;" @click.prevent="drop(DocSempro.id)">
                          <i class="far fa-trash-alt me-0 fa-lg" aria-hidden="true"></i>
                        </a> -->
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class=" tab-pane card col-12 my-4" id="get-dosen" role="tabpanel" aria-labelledby="get-dosen">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-light shadow-success border-radius-lg pt-4 pb-3">
                <h6 class="text-dark text-capitalize ps-3 ml-2">Daftar Dosen</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0" id="get-dosen">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                        Nama Dosen
                      </th>
                      <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                        NIPH
                      </th>
                      <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-5"> Action
                      </th>
                      <!-- <th class="text-dark opacity-2"></th> -->
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="(dosen, index) in dosens.dosen" :key="index">
                      <td class="align-middle text-center">
                        <span class="text-sm font-weight-medium"> {{ dosen.name }} </span>
                      </td>
                      <td>
                        <div class="text-center px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ dosen.number }}</h6>
                            <!-- <p class="text-sm text-secondary mb-0">
                            
                          </p> -->
                          </div>
                        </div>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-link text-dark mb-0" href="javascript:;">
                          <router-link :to="{ name: 'Detail-Dosen', params: { id: dosen.id } }">
                            <i class="fas fa-eye m-0 p-0 me-2 text-gradient-dark fa-lg" aria-hidden="true"></i>
                          </router-link>
                        </a>
                        <a class="btn btn-sm bg-gradient-success  mb-0 me-2" href="javascript:;"
                          @click="updateStatus(dosen.id)">Pilih
                        </a>
                      </td>
                    </tr>

                  </tbody>

                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
  
<script>
import axios from 'axios';

import setNavPills from "@/assets/js/nav-pills.js";

export default {
  name: "Manage",
  data() {
    return {
      dosens: {},
      supdosens: {},
    }

  },

  methods: {
    getDosen() {
      let token = localStorage.getItem("token")
      axios.get('http://127.0.0.1:8000/api/manage-dosen',
        { headers: { "Authorization": `Bearer ${token}` } })
        .then((result) => {
          this.dosens = result.data.data
          console.log(this.dosens)
        }).catch((err) => {
          console.log(err.response)
        })
    },

    getSupDosen() {
      let token = localStorage.getItem("token")
      axios.get('http://127.0.0.1:8000/api/manage-superadmin',
        { headers: { "Authorization": `Bearer ${token}` } })
        .then((result) => {
          this.supdosens = result.data.data
          console.log(this.supdosens)
        }).catch((err) => {
          console.log(err.response)
        })
    },

    updateStatus(id) {
      console.log(id)
      let token = localStorage.getItem("token")
      axios.get('http://127.0.0.1:8000/api/dosen-status/' + id,
        { headers: { "Authorization": `Bearer ${token}` } })
        .then((result) => {
          // this.dosens = result.data.data
          this.getDosen()
          this.$router.go()
          console.log(result)
        }).catch((err) => {
          console.log(err.response)
        })
    },

    hapusStatus(id) {
      console.log(id)
      let token = localStorage.getItem("token")
      axios.get('http://127.0.0.1:8000/api/dosen-hapus/' + id,
        { headers: { "Authorization": `Bearer ${token}` } })
        .then((result) => {
          // this.dosens = result.data.data
          this.getDosen()
          this.$router.go()
          console.log(result)
        }).catch((err) => {
          console.log(err.response)
        })
    },

    updateStatusSup(id) {
      console.log(id)
      let token = localStorage.getItem("token")
      axios.get('http://127.0.0.1:8000/api/dosen-supstatus/' + id,
        { headers: { "Authorization": `Bearer ${token}` } })
        .then((result) => {
          // this.dosens = result.data.data
          this.getSupDosen()
          this.$router.go()
          console.log(result)
        }).catch((err) => {
          console.log(err.response)
        })
    },

    hapusStatusSup(id) {
      console.log(id)
      let token = localStorage.getItem("token")
      axios.get('http://127.0.0.1:8000/api/dosen-suphapus/' + id,
        { headers: { "Authorization": `Bearer ${token}` } })
        .then((result) => {
          // this.dosens = result.data.data
          this.getSupDosen()
          this.$router.go()
          console.log(result)
        }).catch((err) => {
          console.log(err.response)
        })
    },
  },
  mounted() {
    this.getDosen()
    this.getSupDosen()

    setNavPills();
  }
};
</script>
  