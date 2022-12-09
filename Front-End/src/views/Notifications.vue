<template>
  <div class="container-fluid py-4">
    <div class="row my-4">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-light shadow-success border-radius-lg pt-4 pb-3">
              <h6 class="text-dark text-capitalize ps-3 ml-2">Daftar Pengumuman</h6>
              <div class="text-end">
                <router-link :to="{ name: 'Info' }" class="btn btn-info my-0 me-4 py-1 px-2" type="button">
                  <i class="fas fa-plus m-0 p-0 me-2"></i> Masukkan Pengumuman
                </router-link>
              </div>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      ID
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Judul Pengumuman
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Keyword Pengumuman
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Status
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Keterangan
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
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-5"> Action </th>
                    <!-- <th class="text-dark opacity-2"></th> -->
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="(Info, index) in Infos.data" :key="index">
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-medium">{{ Info.id }}</span>
                    </td>
                    <td>
                      <div class="text-center px-2 py-1">
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{ Info.judul }}</h6>
                          <!-- <p class="text-sm text-secondary mb-0">
                            
                          </p> -->
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-medium">{{ Info.keyword }}</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-medium">{{ Info.judul }}</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-sm font-weight-medium">{{ Info.time }}</span>
                    </td>
                    <td class="text-center">
                      <a class="btn btn-link text-dark mb-0" href="javascript:;">
                        <router-link :to="{ name: 'EyeInfo' }"><i class="fas fa-regular fa-eye text-gradient-dark fa-lg"
                            aria-hidden="true"></i>
                        </router-link>
                      </a>
                      <a class="btn btn-link text-dark mb-0 " href="javascript:;">
                        <router-link :to="{ name: 'Edit-Info', params: { id: Info.id } }"><i class="fas fa-pencil-alt text-dark fa-lg"
                            aria-hidden="true"></i>
                        </router-link>
                      </a>
                      <a class="btn btn-link mb-0 " href="javascript:;" @click.prevent="destroy(Info.id)">
                        <i class="far fa-trash-alt me-0 fa-lg" aria-hidden="true"></i>
                      </a>
                    </td>
                  </tr>
                  <!-- <div class="text-end">
                    <material-pagination :totalPages="3" :perPage="2" :currentPage="currentPage"
                      @pagechanged="onPageChange">
                      <material-pagination-item prev />
                      <material-pagination-item label="1" active />
                      <material-pagination-item label="2" disabled />
                      <material-pagination-item label="3" />
                      <material-pagination-item next />
                    </material-pagination>
                  </div> -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="">
        <div class="nav-wrapper position-relative col-lg-4 col-sm-8 mb-4 end-0">
          <ul class="nav nav-pills nav-fill p-1" role="tablist">
            <li class="nav-item">
              <a @click="getDocsempro()" class="nav-link mb-0 px-0 py-1 active active" data-bs-toggle="tab"
                href="#doc-sempro" role="tab" aria-selected="false">Seminar
                Proposal</a>
            </li>
            <li class="nav-item">
              <a @click="getDocsemhas()" class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#doc-semhas"
                role="tab" aria-selected="false">Seminar
                Hasil</a>
            </li>
          </ul>
        </div>
        <div class="tab-content row my-4">
          <div class="tab-pane card fade show col-12  active my-4" id="doc-sempro" role="tabpanel"
            aria-labelledby="doc-sempro">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-light shadow-success border-radius-lg pt-4 pb-3">
                <h6 class="text-dark text-capitalize ps-3 ml-2">Daftar Dokumen Pendukung Pendaftaran</h6>
                <div class="text-end">
                  <router-link :to="{ name: 'Doc-Sempro' }" class="btn btn-info my-0 me-4 py-1 px-2" type="button">
                    <i class="fas fa-plus m-0 p-0 me-2"></i> Masukkan Dokumen
                  </router-link>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive  p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                        ID
                      </th>
                      <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                        Judul Dokumen
                      </th>
                      <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                        Keyword Dokumen
                      </th>
                      <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                        Status
                      </th>
                      <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                        Keterangan
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
                    <tr v-for="(DocSempro, index) in DocSempros.data" :key="index">
                      <td class="align-middle text-center">
                        <span class="text-sm font-weight-medium"> {{ DocSempro.id }} </span>
                      </td>
                      <td>
                        <div class="text-center px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ DocSempro.judul }}</h6>
                            <!-- <p class="text-sm text-secondary mb-0">
                            
                          </p> -->
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-sm font-weight-medium">{{ DocSempro.keyword }} </span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-sm font-weight-medium">{{ DocSempro.judul }} </span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-sm font-weight-medium">{{ DocSempro.time }}</span>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-link text-dark mb-0" href="javascript:;">
                          <router-link :to="{ name: 'EyeDoc-Sempro' }"><i
                              class="fas fa-regular fa-eye text-gradient-dark fa-lg" aria-hidden="true"></i>
                          </router-link>
                        </a>
                        <a class="btn btn-link text-dark mb-0 " href="javascript:;">
                          <router-link :to="{ name: 'Edit-DocSempro', params: { id: DocSempro.id } }"><i class="fas fa-pencil-alt text-dark fa-lg"
                              aria-hidden="true"></i>
                          </router-link>
                        </a>
                        <a class="btn btn-link mb-0 " href="javascript;" @click.prevent="drop(DocSempro.id)">
                          <i class="far fa-trash-alt me-0 fa-lg" aria-hidden="true"></i>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class=" tab-pane card col-12 my-4" id="doc-semhas" role="tabpanel"
            aria-labelledby="doc-semhas">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-light shadow-success border-radius-lg pt-4 pb-3">
                <h6 class="text-dark text-capitalize ps-3 ml-2">Daftar Dokumen Pendukung Pendaftaran</h6>
                <div class="text-end">
                  <router-link :to="{ name: 'Doc-Semhas' }" class="btn btn-info my-0 me-4 py-1 px-2" type="button">
                    <i class="fas fa-plus m-0 p-0 me-2"></i> Masukkan Dokumen
                  </router-link>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0" id="doc-semhas">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                        ID
                      </th>
                      <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                        Judul Dokumen
                      </th>
                      <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                        Keyword Dokumen
                      </th>
                      <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                        Status
                      </th>
                      <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                        Keterangan
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
                    <tr v-for="(DocSemha, index) in DocSemhas.data" :key="index">
                      <td class="align-middle text-center">
                        <span class="text-sm font-weight-medium"> {{ DocSemha.id }} </span>
                      </td>
                      <td>
                        <div class="text-center px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ DocSemha.judul }}</h6>
                            <!-- <p class="text-sm text-secondary mb-0">
                            
                          </p> -->
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-sm font-weight-medium">{{ DocSemha.keyword }} </span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-sm font-weight-medium">{{ DocSemha.judul }} </span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-sm font-weight-medium">{{ DocSemha.time }}</span>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-link text-dark mb-0" href="javascript:;">
                          <router-link :to="{ name: 'EyeDoc-Semhas' }"><i
                              class="fas fa-regular fa-eye text-gradient-dark fa-lg" aria-hidden="true"></i>
                          </router-link>
                        </a>
                        <a class="btn btn-link text-dark mb-0 " href="javascript:;">
                          <router-link :to="{ name: 'Edit-DocSemhas', params: { id: DocSemha.id } }"><i class="fas fa-pencil-alt text-dark fa-lg"
                              aria-hidden="true"></i>
                          </router-link>
                        </a>
                        <a class="btn btn-link mb-0 " href="javascript;" @click.prevent="del(DocSemha.id)">
                          <i class="far fa-trash-alt me-0 fa-lg" aria-hidden="true"></i>
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


    <div class="row">
      <div class="col-md-8 mx-auto">
        <div class="card mt-4">
          <div class="card-header p-3">
            <h5 class="mb-0">Alerts</h5>
          </div>
          <div class="card-body p-3 pb-0">
            <material-alert class="font-weight-light" color="primary" dismissible>
              <span class="text-sm">A simple primary alert with
                <a href="javascript:;" class="alert-link text-white">an example link</a>. Give it a click if you
                like.</span>
            </material-alert>
            <material-alert class="font-weight-light" color="secondary" dismissible>
              <span class="text-sm">A simple secondary alert with
                <a href="javascript:;" class="alert-link text-white">an example link</a>. Give it a click if you
                like.</span>
            </material-alert>
            <material-alert class="font-weight-light" color="success" dismissible>
              <span class="text-sm">A simple success alert with
                <a href="javascript:;" class="alert-link text-white">an example link</a>. Give it a click if you
                like.</span>
            </material-alert>
            <material-alert class="font-weight-light" color="danger" dismissible>
              <span class="text-sm">A simple danger alert with
                <a href="javascript:;" class="alert-link text-white">an example link</a>. Give it a click if you
                like.</span>
            </material-alert>
            <material-alert class="font-weight-light" color="warning" dismissible>
              <span class="text-sm">A simple warning alert with
                <a href="javascript:;" class="alert-link text-white">an example link</a>. Give it a click if you
                like.</span>
            </material-alert>
            <material-alert class="font-weight-light" color="info" dismissible>
              <span class="text-sm">A simple info alert with
                <a href="javascript:;" class="alert-link text-white">an example link</a>. Give it a click if you
                like.</span>
            </material-alert>
            <material-alert class="font-weight-light" color="light" dismissible>
              <span class="text-sm">A simple light alert with
                <a href="javascript:;" class="alert-link text-white">an example link</a>. Give it a click if you
                like.</span>
            </material-alert>
            <material-alert color="dark" dismissible>
              <span class="text-sm">A simple dark alert with
                <a href="javascript:;" class="alert-link text-white">an example link</a>. Give it a click if you
                like.</span>
            </material-alert>
          </div>
        </div>
        <div class="card mt-4">
          <div class="card-header p-3">
            <h5 class="mb-0">Notifications</h5>
            <p class="text-sm mb-0">
              Notifications on this page use Toasts from Bootstrap. Read more
              details
              <a href="https://getbootstrap.com/docs/5.0/components/toasts/" target="
          ">here</a>.
            </p>
          </div>
          <div class="card-body p-3">
            <div class="row">
              <div class="col-lg-3 col-sm-6 col-12">
                <button class="btn bg-gradient-success w-100 mb-0 toast-btn" type="button" data-target="successToast"
                  @click="snackbar = 'success'">
                  Success
                </button>
              </div>
              <div class="col-lg-3 col-sm-6 col-12 mt-sm-0 mt-2">
                <button class="btn bg-gradient-info w-100 mb-0 toast-btn" type="button" data-target="infoToast"
                  @click="snackbar = 'info'">
                  Info
                </button>
              </div>
              <div class="col-lg-3 col-sm-6 col-12 mt-lg-0 mt-2">
                <button class="btn bg-gradient-warning w-100 mb-0 toast-btn" type="button" data-target="warningToast"
                  @click="snackbar = 'warning'">
                  Warning
                </button>
              </div>
              <div class="col-lg-3 col-sm-6 col-12 mt-lg-0 mt-2">
                <button class="btn bg-gradient-danger w-100 mb-0 toast-btn" type="button" data-target="dangerToast"
                  @click="snackbar = 'danger'">
                  Danger
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="position-fixed bottom-1 end-1 z-index-2">
      <material-snackbar v-if="snackbar === 'success'" title="Material Dashboard" date="11 mins ago"
        description="Hello, world! This is a notification message." :icon="{ component: 'done', color: 'white' }"
        color="success" :close-handler="closeSnackbar" />
      <material-snackbar v-if="snackbar === 'info'" title="Material Dashboard" date="11 mins ago"
        description="Hello, world! This is a notification message."
        :icon="{ component: 'notifications', color: 'white' }" color="info" :close-handler="closeSnackbar" />
      <material-snackbar v-if="snackbar === 'warning'" title="Material Dashboard" date="11 mins ago"
        description="Hello, world! This is a notification message."
        :icon="{ component: 'travel_explore', color: 'white' }" color="warning" :close-handler="closeSnackbar" />
      <material-snackbar v-if="snackbar === 'danger'" title="Material Dashboard" date="11 mins ago"
        description="Hello, world! This is a notification message." :icon="{ component: 'campaign', color: 'white' }"
        color="danger" :close-handler="closeSnackbar" />
    </div>
  </div>
</template>

<script>
import axios from 'axios';
// import { onMounted, ref } from "vue";

import MaterialAlert from "@/components/MaterialAlert.vue";
import MaterialSnackbar from "@/components/MaterialSnackbar.vue";
import setNavPills from "@/assets/js/nav-pills.js";

// import MaterialPagination from "@/components/MaterialPagination.vue";
// import MaterialPaginationItem from "@/components/MaterialPaginationItem.vue";

export default {
  name: "Notifications",
  data() {
    return {
      // snackbar: null,
      // currentPage: 1,
      Infos: {},
      DocSempros: {},
      DocSemhas: {}
    };
  },
  components: {
    MaterialAlert,
    MaterialSnackbar,
    // MaterialPagination,
    // MaterialPaginationItem
  },

  methods: {
    // closeSnackbar() {
    //   this.snackbar = null;
    // },
    // onPageChange(page) {
    //   console.log(page)
    //   this.currentPage = page;
    // },

    getInfo() {
      axios.get('http://127.0.0.1:8000/api/info')
        .then((result) => {
          this.Infos = result.data
          console.log(this.Infos)
        }).catch((err) => {
          console.log(err.response)
        })
    },

    getDocsempro() {
      axios.get('http://127.0.0.1:8000/api/doc-sempro')
        .then((result) => {
          this.DocSempros = result.data
          console.log(this.DocSempros)

        }).catch((err) => {
          console.log(err.response)

        })
    },
    getDocsemhas() {
      axios.get('http://127.0.0.1:8000/api/doc-semhas')
        .then((result) => {
          this.DocSemhas = result.data
          console.log(this.DocSemhas)

        }).catch((err) => {
          console.log(err.response)

        })
    },

    destroy(id) {
      axios.delete(
        'http://127.0.0.1:8000/api/info/' + id
      )
        .then(() => {
          this.Infos.value.splice(this.Infos.value.indexOf(id), 1);
          this.$router.go()

        }).catch((err) => {
          console.log(err.response.data);
        });
    },

    drop(id) {
      if (confirm('Apakah anda yakin?'))
      axios.delete(
        'http://127.0.0.1:8000/api/doc-sempro/' + id
      )
        .then(() => {
          this.DocSempros.value.splice(this.DocSempros.value.indexOf(id), 1);
          this.$router.go()
          this.drop()

        }).catch((err) => {
          console.log(err.response.data);
        });
    },

    del(id) {
      axios.delete(
        'http://127.0.0.1:8000/api/doc-semhas/' + id
      )
        .then(() => {
          this.DocSemhas.value.splice(this.DocSemhas.value.indexOf(id), 1);
          this.del()
          this.$router.go()
        }).catch((err) => {
          console.log(err.response.data);
        });
    }
  },
  mounted() {
    this.getInfo()
    this.getDocsempro()
    this.getDocsemhas()
    setNavPills();
  }
};
</script>
