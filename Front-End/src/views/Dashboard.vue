<template>
  <div class="py-4 container-fluid">
    <div class="row mb-4">
      <h4 class="mb-4"> Selamat Datang di SIM-TA , 
        <span>{{ profiles.name }}</span>
      </h4>
      <div class="col-lg-12 position-relative z-index-2">
        <div class="row">
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                      Tugas Akhir</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ Total.Task }} Mahasiswa</div>
                  </div>
                  <div class="col-auto">
                    <i class="material-icons-round opacity-10 fs-5">weekend</i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                      Seminar Proposal</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ Total.sempro }} Mahasiswa</div>
                  </div>
                  <div class="col-auto">
                    <i class="material-icons-round opacity-10 fs-5">cast_for_education</i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                      Sidang Tugas Akhir</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ Total.semhas }} Mahasiswa</div>
                  </div>
                  <div class="col-auto">
                    <i class="material-icons-round opacity-10 fs-5">school</i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                      Wisuda</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ Total.semhas }} Mahasiswa</div>
                  </div>
                  <div class="col-auto">
                    <i class="material-icons-round opacity-10 fs-5">school</i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row  ">
      <div class=" card justify-content-center col-lg-8 col-md-6 mb-md-0 mb-4 my-4 ">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 text-center font-weight-bolder">
          <div class="bg-gradient-light shadow-success border-radius-lg pt-4 pb-3">
            <h5 class="text-black text-capitalize ps-3">Pengumuman</h5>
          </div>
        </div>
        <div class="card-body pt-4">
          <ul class="list-group">
            <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg"
              v-for="(Info, index) in Infos.data" :key="index">
              <div class="d-flex flex-column">
                <h6 class="mb-3 text-md">{{ Info.judul }}</h6>
                <span class="mb-2 text-md">
                  <span class="text-dark font-weight-bold ms-sm-2">{{ Info.keyword }}</span>
                </span>
                <span class="mb-2 text-md">
                  Waktu:
                  <span class="text-dark m-2 ms-sm-2 font-weight-bold">{{ Info.time }}</span>
                </span>
                <span class="text-md">
                  Note:
                  <span class="text-dark ml-4 ms-sm-2 font-weight-bold">{{ Info.note }}</span>
                </span>
                <span class="text-md">
                  File:
                  <a class="btn btn-link text-sm mb-0" :href="'http://127.0.0.1:8000/info/' + Info.file" target="_blank">
                    <i class="fas fa-file-pdf text-lg me-2" aria-hidden="true"><span class="m-2">{{ Info.file
                    }}</span></i>

                  </a>
                </span>
                <!-- <a href= "http://127.0.0.1:8000/api/storage/app/public/Info/file_1670090385.pdf">aaaa</a> -->
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import axios from 'axios';
// import { onMounted, ref } from "vue";


export default {
  name: "dashboard-default",
  data() {
    return {
      profiles: {},
      Infos: {},
      Total: {}
    };
  },

  methods: {
    getNama() {

      console.log(localStorage.getItem('profile'), 'dashboardni')
      let token = localStorage.getItem("token")
      axios.get('http://127.0.0.1:8000/api/me',
        { headers: { "Authorization": `Bearer ${token}` } })
        .then((result) => {
          this.profiles = result.data.data
          console.log(this.profiles)
        }).catch((err) => {
          this.$router.push({
            name: '/'
          })
          console.log(err.response, 'jhgggg')
        })
    },
    getInfo() {
      axios.get('http://127.0.0.1:8000/api/info')
        .then((result) => {
          this.Infos = result.data
          console.log(this.Infos)
        }).catch((err) => {
          console.log(err.response)
        })
    },

    getTotal() {
      let token = localStorage.getItem("token")
      axios.get('http://127.0.0.1:8000/api/coba',
        { headers: { "Authorization": `Bearer ${token}` } })
        .then((result) => {
          this.Total = result.data.data
          console.log(this.Total)
        }).catch((err) => {
          console.log(err.response)
        })
    }
  },
  mounted() {
    this.getNama()
    this.getInfo()
    this.getTotal()
  },

  components: {
    // MiniStatisticsCard,
    // TimelineList,
    // TimelineItem,
  },
};
</script>
