<template>
  <!-- POV Mahasiswa -->
  <!-- v-if="profiles.role == 'user'" -->
  <div class="container-fluid py-2">
    <div class="row">
      <div class="col-12">
        <div class="row mt-4">
          <div class="card my-4 col-lg-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-info shadow-success border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Dokumen - Dokumen Pelengkap</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <div class="card ">
                  <div class="card-header pb-0 ">
                    <div class="row">
                      <div class="col-6 d-flex align-items-center">
                        <h6 class="text-secondary mb-0">Dokumen</h6>
                      </div>

                    </div>
                  </div>
                  <div class="card-body p-3 mb-0">
                    <ul class="list-group bg-gray-100 border-radius-lg">
                      <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg"
                        v-for="(DocSemhas, index) in DocSemhass.data" :key="index">
                        <div class="d-flex flex-column">
                          <h6 class="mb-2 text-dark font-weight-bold text-sm">
                            {{ DocSemhas.judul }}
                          </h6>
                          <span class="text-xs">{{ DocSemhas.keyword }}</span>
                        </div>
                        <a class="text-md my-2" :href="('http://127.0.0.1:8000/DocSidang/' + DocSemhas.file)"
                          target="_blank">
                          <span><i class="fas fa-file-pdf text-md me-2" aria-hidden="true"><br />PDF</i></span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <button @click="$router.push({ name: 'Tambah-Sidang' })" class="btn btn-dark mx-3" type="button"
            v-if="status.status === 1">
              <i class="fas fa-plus m-0 p-0 me-2"></i>Daftar Sidang Tugas Akhir
            </button>
            <button @click="$router.push({ name: 'Tambah-Sidang' })" class="btn btn-dark mx-3" type="button"
            v-else disabled>
              <i class="fas fa-plus m-0 p-0 me-2"></i>Daftar Sidang Tugas Akhir
            </button>
            <!-- Nilai-Semhas -->
            <!-- <router-link :to="{ name: '' }" class="btn btn-dark mx-3 disabled ">
              <i class="fas fa-duotone fa-hashtag m-0 p-0 me-2"></i>Lihat Nilai
            </router-link> -->
            <div class="col-lg-12 me-4">
              <div class="card">
                <div class="card-header pb-0 px-3">
                  <h6 class="mb-0">Riwayat Pengajuan</h6>
                </div>
                <div class="card-body pt-4 p-3">
                  <ul class="list-group">
                    <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg"
                      v-for="(View, index) in Views.data" :key="index">
                      <div class="d-flex flex-column">
                        <h6 class="mb-3 text-md">Senin, 11/01/19</h6>
                        <span class="mb-2 text-md">
                          Judul Tugas Akhir:
                          <span class="text-dark font-weight-bold ms-sm-2"> {{ View.t_a.judul }} </span>
                        </span>
                        <span class="mb-2 text-md">
                          Keyword:
                          <span class="text-dark ms-sm-2 font-weight-bold"> {{ View.t_a.keyword }} </span>
                        </span>
                        <span class="text-md">
                          Tanggal Seminar Proposal:
                          <span class="badge badge-sm bg-gradient-light text-dark"
                            v-if="View.user.jadwal_semhas === null">
                            Menunggu Konfirmasi
                          </span>
                          <span class="badge badge-sm bg-gradient-secondary" v-else>{{ View.user.jadwal_semhas.hari }}
                            ({{ View.user.jadwal_semhas.jam_mulai }} - {{ View.user.jadwal_semhas.jam_akhir }})</span>
                        </span>
                      </div>
                    </li>
                    <!-- <li  v-if="Views === null"
                      class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg justify-content-center text-center">
                      <div class="d-flex flex-column">
                        <h6 class="col-md-auto text-danger text-md"> Belum ada pengajuan</h6>
                        <router-link :to="{ name: 'Tambah-Sidang' }"
                          class="text-dark text-gradient font-weight-light text-sm">
                          Daftar Seminar</router-link>
                      </div>
                    </li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- POV Dosen -->
  <!-- v-if="profiles.role == 'dosen'" -->
  <div class="container-fluid py-2">
    <div class="row my-4">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-info shadow-success border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Data Mahasiswa Sidang Tugas Akhir</h6>
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
                      Judul TA
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Pembimbing I
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Pembimbing II
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Penguji I
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Penguji II
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Jadwal
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Status
                    </th>
                    <th class="text-dark opacity-2"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="(Sidang, index) in Sidangs.data" :key="index">
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="@/assets/img/user.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user2" />
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{ Sidang.user.name }}</h6>
                          <p class="text-sm text-secondary mb-0">
                            {{ Sidang.user.number }}
                          </p>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-normal">{{ Sidang.t_a.keyword }}</span>
                      <!-- <span v-if="Sidang.t_a.keyword == null"
                        class="badge badge-sm bg-gradient-light text-dark">-</span> -->
                    </td>
                    <td class="align-middle text-center">
                      <span class="badge badge-sm bg-gradient-light text-dark" v-if="Sidang.t_a.dosen1 === null"> -
                      </span>
                      <span class="text-secondary text-sm font-weight-bold" v-else>{{ Sidang.t_a.dosen1.name }}</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="badge badge-sm bg-gradient-light text-dark" v-if="Sidang.t_a.dosen2 === null"> -
                      </span>
                      <span class="text-secondary text-sm font-weight-bold" v-else>{{ Sidang.t_a.dosen2.name }}</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="badge badge-sm bg-gradient-light text-dark" v-if="Sidang.t_a.dosen3 === null"> -
                      </span>
                      <span class="text-secondary text-sm font-weight-bold" v-else>{{ Sidang.t_a.dosen3 === null ? '-' :
                          Sidang.t_a.dosen3.name
                      }}</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="badge badge-sm bg-gradient-light text-dark" v-if="Sidang.t_a.dosen4 === null"> -
                      </span>
                      <span class="text-secondary text-sm font-weight-bold" v-else>{{ Sidang.t_a.dosen4.name }}</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="badge badge-sm bg-gradient-light text-dark"
                        v-if="Sidang.user.jadwal_semhas === null">-</span>
                      <span class="badge badge-sm bg-gradient-light text-dark" v-else>{{
                          Sidang.user.jadwal_semhas.hari
                      }} ({{ Sidang.user.jadwal_semhas.jam_mulai }}-{{
    Sidang.user.jadwal_semhas.jam_akhir
}})</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="badge badge-sm bg-gradient-light text-dark"
                        v-if="Sidang.user.jadwal_semhas === null">-</span>
                      <span class="badge badge-sm bg-gradient-light text-dark" v-else>{{
                          Sidang.user.jadwal_semhas.type
                      }} ({{ Sidang.user.jadwal_semhas.ruangan }})</span>
                    </td>

                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid mx-2 row">
      <button @click=upStatus(1) class="btn btn-dark mx-3" type="button" v-if="status.status === 0">
        <i class="fas fa-lock-open m-0 p-0 me-2"></i>Buka Pendaftaran
      </button>
      <!-- Button trigger modal -->
      <button @click=upStatus(0) class="btn btn-primary mx-3" type="button" v-else>
        <i class="fas fa-lock m-0 p-0 me-2"></i>Tutup Pendaftaran
      </button>
    </div>

    <div class="row my-4">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-info shadow-success border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Data Mahasiswa Sidang Tugas Akhir</h6>
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
                      Judul TA
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Pembimbing I
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Pembimbing II
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Penguji I
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Penguji II
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Jadwal
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Status
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-5"> Action </th>
                    <th class="text-dark opacity-2"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="(Sidang, index) in Sidangs.data" :key="index">
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="@/assets/img/user.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user2" />
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{ Sidang.user.name }}</h6>
                          <p class="text-sm text-secondary mb-0">
                            {{ Sidang.user.number }}
                          </p>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-normal">{{ Sidang.t_a.keyword }}</span>
                      <!-- <span v-if="Sidang.t_a.keyword == null"
                        class="badge badge-sm bg-gradient-light text-dark">-</span> -->
                    </td>
                    <td class="align-middle text-center">
                      <span class="badge badge-sm bg-gradient-light text-dark" v-if="Sidang.t_a.dosen1 === null"> -
                      </span>
                      <span class="text-secondary text-sm font-weight-bold" v-else>{{ Sidang.t_a.dosen1.name }}</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="badge badge-sm bg-gradient-light text-dark" v-if="Sidang.t_a.dosen2 === null"> -
                      </span>
                      <span class="text-secondary text-sm font-weight-bold" v-else>{{ Sidang.t_a.dosen2.name }}</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="badge badge-sm bg-gradient-light text-dark" v-if="Sidang.t_a.dosen3 === null"> -
                      </span>
                      <span class="text-secondary text-sm font-weight-bold" v-else>{{ Sidang.t_a.dosen3 === null ? '-' :
                          Sidang.t_a.dosen3.name
                      }}</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="badge badge-sm bg-gradient-light text-dark" v-if="Sidang.t_a.dosen4 === null"> -
                      </span>
                      <span class="text-secondary text-sm font-weight-bold" v-else>{{ Sidang.t_a.dosen4.name }}</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="badge badge-sm bg-gradient-light text-dark"
                        v-if="Sidang.user.jadwal_semhas === null">-</span>
                      <span class="badge badge-sm bg-gradient-light text-dark" v-else>{{
                          Sidang.user.jadwal_semhas.hari
                      }} ({{ Sidang.user.jadwal_semhas.jam_mulai }}-{{
    Sidang.user.jadwal_semhas.jam_akhir
}})</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="badge badge-sm bg-gradient-light text-dark"
                        v-if="Sidang.user.jadwal_semhas === null">-</span>
                      <span class="badge badge-sm bg-gradient-light text-dark" v-else>{{
                          Sidang.user.jadwal_semhas.type
                      }} ({{ Sidang.user.jadwal_semhas.ruangan }})</span>
                    </td>
                    <td class="text-center">
                      <a class="btn btn-link text-dark mb-0" href="javascript:;">
                        <router-link :to="{ name: 'CreateSidang', params: { id: Sidang.id } }"><i
                            class="fas fa-calendar-plus text-gradient-dark fa-lg" aria-hidden="true"></i>
                        </router-link>
                      </a>
                      <a class="btn btn-link text-dark mb-0 " href="javascript:;">
                        <router-link :to="{ name: 'EditJadSemhas', params: { id: Sidang.id } }"><i
                            class="fas fa-pencil-alt text-dark me-0 fa-lg" aria-hidden="true"></i>
                        </router-link>
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
import { onMounted, ref } from "vue";

export default {
  name: "sidang",
  data() {
    return {
      Sidangs: {
        user: {
          jadwal_semhas: {}
        },
        t_a: {
          dosen1: {},
          dosen2: {},
          dosen3: {},
          dosen4: {},

        }
      },

      Views: {
        user: {
          jadwal_sempro: {}
        },
        t_a: {}
      },
      status:{}
      // profiles:{}
    }
  },
  components: {

  },
  methods: {

    getStatus() {
      let token = localStorage.getItem("token")
      axios.get('http://127.0.0.1:8000/api/status',
        { headers: { "Authorization": `Bearer ${token}` } })
        .then((result) => {
          this.status = result.data.data[0]
          console.log(this.status)
        }).catch((err) => {
          console.log(err.response)
        })
    },
    upStatus(status) {
      let token = localStorage.getItem("token")
      axios.post(
        'http://127.0.0.1:8000/api/status-update',
        {
          status: status,
          type: 'semhas'
        },
        { headers: { Authorization: `Bearer ${token}` } })

        .then((result) => {
          console.log(result)
          this.$router.go()

        }).catch((err) => {
          console.log(err.response.data)
        });
    },

    getSidang() {
      let token = localStorage.getItem("token")
      axios.get('http://127.0.0.1:8000/api/semhas',
        { headers: { Authorization: `Bearer ${token}` } })
        .then((result) => {
          this.Sidangs = result.data,
            console.log(this.Sidangs)
        }).catch((err) => {
          console.log(err.response)

        })
    },

    getData() {
      let token = localStorage.getItem("token")
      axios.get('http://127.0.0.1:8000/api/get-semhas',
        { headers: { Authorization: `Bearer ${token}` } })
        .then((result) => {
          this.Views = result.data,
            console.log(this.Views)
        }).catch((err) => {
          console.log(err.response)

        })
    },
  },
  setup() {
    let DocSemhass = ref([]);

    onMounted(() => {

      axios.get('http://127.0.0.1:8000/api/doc-semhas')
        .then((result) => {
          DocSemhass.value = result.data

        }).catch((err) => {
          console.log(err.response)

        })
    });

    return {
      DocSemhass,
    };
  },
  mounted() {
    this.getSidang();
    this.getData();
    this.getStatus();

  }
  // beforeMount() {
  //     this.toggleEveryDisplay();
  //     this.toggleHideConfig();
  //     // body.classList.remove("bg-gray-100");
  // },
  // beforeUnmount() {
  //     this.toggleEveryDisplay();
  //     this.toggleHideConfig();
  //     // body.classList.add("bg-gray-100");
  // },
  // methods: {
  //     ...mapMutations(["toggleEveryDisplay", "toggleHideConfig"]),
  // },
};
</script>
