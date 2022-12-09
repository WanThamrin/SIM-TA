<template>
  <div class="container-fluid">
    <div class="page-header min-height-200 border-radius-xl mt-4" style="
       background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');
         ">
      <span class="mask bg-gradient-success opacity-6"></span>
      <router-link :to="{ name: 'Relasi' }" class="btn btn-light mx-4 material-icons me-2" type="button">
        arrow_back</router-link>
    </div>
    <div class="card card-body mx-3 mx-md-4 mt-n6">
      <div class="row gx-4">
        <div class="col-auto">
          <div class="" style="width: 150px">
            <img src="@/assets/img/bruce-mars.jpg" alt="profile_image" class="shadow-sm w-100 border-radius-lg" />
          </div>
        </div>
        <div class="col-auto my-auto">
          <div class="h-100">
            <h5 class="mb-1">{{ dosens.name }}</h5>
            <p class="mb-0 font-weight-normal text-sm"> Dosen Informatika </p>
            <h6 class="mb-1">Sertifikasi A </h6>
          </div>
        </div>
      </div>
    </div>
    <div class="row align-items-center mt-4">
      <div class="col-lg-4 col-sm-8">
        <div class="nav-wrapper position-relative end-0">
          <ul class="nav nav-pills nav-fill p-1" role="tablist">
            <li class="nav-item">
              <a @click="getDosen1()" class="nav-link mb-0 px-0 py-1 active " data-bs-toggle="tab" href="#get-dosen1"
                role="tab" aria-selected="false">Pembimbing 1</a>
            </li>
            <li @click="getDosen2()" class="nav-item">
              <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#get-dosen2" role="tab"
                aria-selected="false">Pembimbing 2</a>
            </li>
            <li @click="getDosen3()" class="nav-item">
              <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#get-dosen3" role="tab"
                aria-selected="false">Penguji 1</a>
            </li>
            <li @click="getDosen4()" class="nav-item">
              <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#get-dosen4" role="tab"
                aria-selected="false">Penguji 2</a>
            </li>
          </ul>

        </div>

      </div>
    </div>
    <div class="tab-content row my-4">
      <div class="tab-pane fade show active col-12 py-2" id="get-dosen1" role="tabpanel" aria-labelledby="get-dosen1">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Daftar Mahasiswa Bimbingan</h6>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="Mahasiswa" tabindex="-1" aria-labelledby="Mahasiswa" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="Mahasiswa">Data Mahasiswa</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body overflow-auto">
                  <ul class="list-group">
                    <li v-for="(mahasiswa, index) in mahasiswas.data" :key="index"
                      class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                      <div class="d-flex flex-column">
                        <h6 class="mb-1 text-dark font-weight-bold text-sm">
                          {{ mahasiswa.name }}
                        </h6>
                        <span class="text-xs">{{ mahasiswa.number }}</span>
                      </div>
                      <div ms-auto text-end>
                        <a class="btn btn-link mb-0 px-0 ms-4" href="javascript:;" @click.prevent="">
                          <i class="fas fa-plus me-0 fa-lg" aria-hidden="true"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Nama Mahasiswa
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      NIM
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Judul TA
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-5">
                      Action
                    </th>

                  </tr>
                </thead>
                <tbody>
                  <tr v-for="(relasi, index) in relasis.dospem1" :key="index">
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="@/assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg"
                            alt="user1" />
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{ relasi.name }}</h6>
                          <p class="text-sm text-secondary mb-0">
                            {{ relasi.email }}
                          </p>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-normal">{{ relasi.number }}</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-normal">{{ relasi.keyword }}</span>
                    </td>

                    <td class="text-center">
                      <a class="btn btn-link mb-0 px-0" href="javascript:;" @click="updateData(relasi.id,'dospem1')">
                        <i class="fas fa-trash fa-lg ml-2" aria-hidden="true"></i>
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade show col-12 py-2" id="get-dosen2" role="tabpanel" aria-labelledby="get-dosen2">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Daftar Mahasiswa Bimbingan</h6>
            </div>

          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Nama Mahasiswa
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      NIM
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Judul TA
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-5">
                      Action
                    </th>

                  </tr>
                </thead>
                <tbody>
                  <tr v-for="(relasi, key) in relasis.dospem2" :key="key">
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="@/assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg"
                            alt="user1" />
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{ relasi.name }}</h6>
                          <p class="text-sm text-secondary mb-0">
                            {{ relasi.email }}
                          </p>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-normal">{{ relasi.number }}</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-normal">{{ relasi.keyword }}</span>
                    </td>

                    <td class="text-center">
                      <a class="btn btn-link mb-0 px-0" href="javascript:;" @click="updateData(relasi.id,'dospem2')">
                        <i class="fas fa-trash fa-lg ml-2" aria-hidden="true"></i>
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade show col-12 py-2" id="get-dosen3" role="tabpanel" aria-labelledby="get-dosen3">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Daftar Mahasiswa Bimbingan</h6>
            </div>

          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Nama Mahasiswa
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      NIM
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Judul TA
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-5">
                      Action
                    </th>

                  </tr>
                </thead>
                <tbody>
                  <tr v-for="(relasi, idk) in relasis.dospeng1" :key="idk">
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="@/assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg"
                            alt="user1" />
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{ relasi.name }}</h6>
                          <p class="text-sm text-secondary mb-0">
                            {{ relasi.email }}
                          </p>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-normal">{{ relasi.number }}</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-normal">{{ relasi.keyword }}</span>
                    </td>

                    <td class="text-center">
                      <a class="btn btn-link mb-0 px-0" href="javascript:;" @click="updateData(relasi.id,'dospeng1')">
                        <i class="fas fa-trash fa-lg ml-2" aria-hidden="true"></i>
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade show col-12 py-2" id="get-dosen4" role="tabpanel" aria-labelledby="get-dosen4">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Daftar Mahasiswa Bimbingan</h6>
            </div>

          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Nama Mahasiswa
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      NIM
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Judul TA
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-5">
                      Action
                    </th>

                  </tr>
                </thead>
                <tbody>
                  <tr v-for="(relasi, idx) in relasis.dospeng2" :key="idx">
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="@/assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg"
                            alt="user1" />
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{ relasi.name }}</h6>
                          <p class="text-sm text-secondary mb-0">
                            {{ relasi.email }}
                          </p>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-normal">{{ relasi.number }}</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-normal">{{ relasi.keyword }}</span>
                    </td>

                    <td class="text-center">
                      <a class="btn btn-link mb-0 px-0" href="javascript:;" @click="updateData(relasi.id,'dospeng2')">
                        <i class="fas fa-trash fa-lg ml-2" aria-hidden="true"></i>
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

</template>
  
<script>
import axios from 'axios';
import setNavPills from "@/assets/js/nav-pills.js";
export default {
  name: "Lihat",
  data() {
    return {
      dosens: {},
      relasis: {
        dospem1: {},
        dospem2: {},
        dospeng1: {},
        dospeng2: {}
      },
      mahasiswas: {}
    }
  },

  methods: {
    getDosen() {
      let token = localStorage.getItem("token")
      axios.get('http://127.0.0.1:8000/api/get-dosen/' + this.$route.params.id,
        { headers: { "Authorization": `Bearer ${token}` } })
        .then((result) => {
          this.dosens = result.data.data
          console.log(this.dosens)
        }).catch((err) => {
          console.log(err.response)
        })
    },

    getRelasi() {
      let token = localStorage.getItem("token")
      axios.get('http://127.0.0.1:8000/api/relasi/' + this.$route.params.id,
        { headers: { "Authorization": `Bearer ${token}` } })
        .then((result) => {
          console.log(this.relasis)
          this.relasis = result.data.data
          console.log(this.relasis)
        }).catch((err) => {
          console.log(err.response)
        })
    },

    updateData(id, Type) {
      console.log(id, Type)
      let token = localStorage.getItem("token")
      axios.post
      ('http://127.0.0.1:8000/api/relasi-delete/' + id,
      {type:Type},
      { headers: { "Authorization": `Bearer ${token}` } },
        )
        .then((result) => {
          // this.dosens = result.data.data
          // this.$router.go()
          console.log(result)
        }).catch((err) => {
          console.log(err.response)
        })
    },
  },
  mounted() {
    this.getDosen()
    this.getRelasi()
    setNavPills();
  },
};
</script>
  