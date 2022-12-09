<template>
  <!-- POV-Mahasiswa -->
  <!--  -->
  <div class="container-fluid">
    <div class="page-header min-height-200 border-radius-xl mt-4"
       style="background-image: url('https://t3.ftcdn.net/jpg/02/90/89/76/360_F_290897614_7RdAsk2GmumcGWZ2qklmV74hKlNmznSx.jpg')">
      <span class="mask bg-gradient-info opacity-2"></span>
      <!-- <router-link :to="{name:'Bimbingan'}" class="btn btn-light mx-4 material-icons me-2" type="button">
        arrow_back</router-link> -->
    </div>
    <div class="card card-body mx-3 mx-md-4 mt-n6">
      <div class="row gx-4">
        <div class="col-auto">
          <div class="position-relative" style="width: 200px">
            <img src="@/assets/img/user.jpg" alt="profile_image" class="shadow-sm w-100 border-radius-lg" />
          </div>
        </div>
        <div class="col-auto my-auto">
          <div class="h-100">
            <h5 class="mb-1">{{ profiles.name }}</h5>
            <p class="mb-0 font-weight-normal text-sm"> Informatika</p>
            <div class="align-middle text-center ">
              <!-- <router-link :to="{ }" class="btn btn-light disabled m-2 p-2 me-0" type="button">
                <a class="text-normal text-black">Edit
                </a>
              </router-link> -->


            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-xl-4 mt-md-0 mt-4 position-relative">

          <div class="p-3 pb-0 card-header">
            <div class="row">
              <div class="col-md-8 d-flex align-items-center">
                <h6 class="mb-0">Informasi Profil</h6>
              </div>
              <div class="col-md-4 text-end">

                <!-- <a :href="action.route">
                  <i class="text-sm fas fa-user-edit text-secondary" data-bs-toggle="tooltip" data-bs-placement="top"
                    :title="action.tooltip"></i>
                </a> -->
              </div>
            </div>
          </div>
          <div class="p-3 card-body">
            <ul class="list-group">
              <li class="pt-0 text-sm border-0 list-group-item ps-0">
                <strong class="text-dark">NIM/NIPH :</strong> {{ profiles.number }}
              </li>
              <li class="text-sm border-0 list-group-item ps-0">
                <strong class="text-dark">Mobile :</strong> {{ profiles.phone }}
              </li>
              <li class="text-sm border-0 list-group-item ps-0">
                <strong class="text-dark">Email :</strong> {{ profiles.email }}
              </li>
              <li class="pb-0 border-0 list-group-item ps-0">
                <!-- <strong class="text-sm text-dark">Social:</strong> &nbsp;
          <a
            v-for="({ icon, link }, index) of social"
            :key="index"
            class="py-0 mb-0 btn-simple ps-1 pe-2"
            :href="link"
          >
            <i :class="`fa fa-brands ${icon}`"></i>
          </a> -->
              </li>
            </ul>
          </div>

          <hr class="vertical dark" />

        </div>
      </div>
      <div v-if="profiles.role == 'dosen'" class="card card-plain h-100 col-12">
        <!-- POV Informasi TA -->
        <div class="p-3 pb-0 card-header">
          <h6 class="mb-0">Informasi Tugas Akhir
            <router-link :to="{ name: 'Tambah-Dosen' }" class="btn btn-success m-2 p-2" type="button">
              <a class="fas fa-pencil text-normal text-white">Edit Data
              </a>
            </router-link>
          </h6>
        </div>
        <div class="card-body pt-4 p-3">
          <ul class="list-group">
            <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
              <div class="d-flex flex-column">
                <span class="mb-2 text-md">
                  Catatan :
                  <span class="badge badge-sm bg-gradient-light text-dark text-xxs" v-if="dosen.note==null">Belum ada note
                  </span>
                  <span class="badge badge-sm bg-gradient-success text-xxs" v-else>{{dosen.note}}</span>
                </span>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div v-if="profiles.role == 'user'" class="card card-plain h-100 col-12">
        <!-- POV Informasi TA -->
        <div class="p-3 pb-0 card-header">
          <h6 class="mb-0">Informasi Tugas Akhir
            <router-link :to="{ name: 'Edit-Mhs' }" class="btn btn-success m-2 p-2" type="button">
              <a class="fas fa-pencil text-normal text-white">Edit Data
              </a>
            </router-link>
          </h6>
        </div>
        <div class="card-body pt-4 p-3">
          <ul class="list-group">
            <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
              <div class="d-flex flex-column">
                <span class="mb-2 text-md">
                  Judul Tugas Akhir:
                  <span class="text-dark font-weight-bold ms-sm-2">{{ tasks.judul }}</span>
                </span>
                <span class="mb-2 text-md">
                  Keyword:
                  <span class="text-dark ms-sm-2 font-weight-bold">{{ tasks.keyword }}</span>
                </span>
                <span class="text-md">
                  Abstrak:
                  <span class="text-dark font-weight-bold ms-sm-2">{{ tasks.abstrak }}</span>
                </span>
                <span class="mb-2 text-md">
                  Dosen Pembimbing Utama :
                  <span class="badge badge-sm bg-gradient-success text-xxs" v-if="tasks.status1 == 1"> Telah 
                    Diterima
                  </span>
                  <span class="badge badge-sm bg-gradient-danger text-white text-xxs" v-else-if="tasks.status1 == 2"> Ditolak
                  </span>
                  <span class="badge badge-sm bg-gradient-light text-dark text-xxs" v-else>Menunggu Konfirmasi</span>
                </span>
                <span class="mb-2 text-md">
                  Dosen Pembimbing Pendamping :
                  <span class="badge badge-sm bg-gradient-success text-xxs" v-if="tasks.status2 == 1"> Telah 
                    Diterima
                  </span>
                  <span class="badge badge-sm bg-gradient-danger text-white text-xxs" v-else-if="tasks.status2 == 2"> Ditolak
                  </span>
                  <span class="badge badge-sm bg-gradient-light text-dark text-xxs" v-else>Menunggu Konfirmasi</span>
                </span>
                <span class="mb-2 text-md">
                  Dosen Penguji I :
                  <span class="badge badge-sm bg-gradient-light text-dark text-xxs" v-if="tasks.dospeng1 === null">
                    Menunggu Konfirmasi
                  </span>
                  <span class="badge badge-sm bg-gradient-success text-xxs" v-else>Telah Diterima</span>
                </span>
                <span class="mb-2 text-md">
                  Dosen Penguji II :
                  <span class="badge badge-sm bg-gradient-light text-dark text-xxs" v-if="tasks.dospeng2 === null">
                    Menunggu Konfirmasi
                  </span>
                  <span class="badge badge-sm bg-gradient-success text-xxs" v-else>Telah Diterima</span>
                </span>
              </div>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </div>

</template>
  
<script>
//   import DefaultProjectCard from "./components/DefaultProjectCard.vue";
import axios from 'axios';
// import { onMounted, ref } from "vue";

// import ProfileInfoCard1 from "../../ProfileInfoCard.vue";

export default {
  name: "Profile",
  data() {
    return {
      profiles: {},
      tasks: {},
      dosen:{}
    };
  },

  methods: {

    getDosen() {
      let token = localStorage.getItem("token")
      axios.get('http://127.0.0.1:8000/api/dosen',
        { headers: { "Authorization": `Bearer ${token}` } })
        .then((result) => {
          this.dosen = result.data.data
          console.log(this.dosen)
        }).catch((err) => {
          console.log(err.response)
        })
    },

    getNama() {
      let token = localStorage.getItem("token")
      axios.get('http://127.0.0.1:8000/api/me',
        { headers: { "Authorization": `Bearer ${token}` } })
        .then((result) => {
          this.profiles = result.data.data
          console.log(this.profiles)
        }).catch((err) => {
          console.log(err.response)
        })
    },

    getData() {
      let token = localStorage.getItem("token")
      axios.get('http://127.0.0.1:8000/api/regis-ta',
        { headers: { "Authorization": `Bearer ${token}` } })
        .then((result) => {
          this.tasks = result.data.data
          console.log(this.tasks)
        }).catch((err) => {
          console.log(err.response)
        })
    },
  },

  components: {
  },

  mounted() {
    this.getNama()
    this.getDosen()
    this.getData()
    // this.$store.state.isAbsolute = true;

  },
  beforeUnmount() {
    // this.$store.state.isAbsolute = false;
  },
};
</script>
  