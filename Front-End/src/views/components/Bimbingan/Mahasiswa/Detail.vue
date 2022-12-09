<template>
  <!-- POV-Mahasiswa -->
  <!-- v-if="profiles.role == 'user'" -->
  <div class="container-fluid">
    <div class="page-header min-height-250 border-radius-xl mt-4"
      style="
        background-image: url('https://t3.ftcdn.net/jpg/02/90/89/76/360_F_290897614_7RdAsk2GmumcGWZ2qklmV74hKlNmznSx.jpg')">
      <span class="mask bg-gradient-info opacity-2"></span>
      <router-link :to="{name:'Bimbingan'}" class="btn btn-light mx-4 material-icons me-2" type="button">
        arrow_back</router-link>
    </div>
    <div class="card card-body mx-3 mx-md-4 mt-n6">
      <div class="row gx-4">
        <div class="col-auto">
          <div class="position-relative" style="width: 200px">
            <img src="@/assets/img/bruce-mars.jpg" alt="profile_image" class="shadow-sm w-100 border-radius-lg" />
          </div>
        </div>
        <div class="col-auto my-auto">
          <div class="h-100">
            <h5 class="mb-1">{{ profiles.name }}</h5>
            <p class="mb-0 font-weight-normal text-sm"> Mahasiswa Informatika</p>
          </div>
        </div>
        <div class="mx-auto mt-8 col-lg-6 col-md-6">
          <div class="nav-wrapper position-relative nav-justified mb-3 end-0">
            <ul class=" bg-light nav nav-pills nav-fill p-1" role="tab">
              <li class="nav-item">
                <a  @click="getRiwayat()" class="px-0 py-1 mb-0 nav-link active" data-bs-toggle="tab" href="#riwayat" role="tab"
                  aria-selected="false">
                  <span class="ms-1">Riwayat</span>
                </a>
              </li>
              <li class="nav-item">
                <a @click="getInfo()" class="px-0 py-1 mb-0 nav-link" data-bs-toggle="tab" href="#informasi" role="tab"
                  aria-selected="false">
                  <span class="ms-1">Informasi Tugas Akhir</span>
                </a>
              </li>
            </ul>
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
                <strong class="text-dark">NIM :</strong> {{ profiles.number }}
              </li>
              <li class="text-sm border-0 list-group-item ps-0">
                <strong class="text-dark">Mobile :</strong> {{ profiles.phone }}
              </li>
              <li class="text-sm border-0 list-group-item ps-0">
                <strong class="text-dark">Email :</strong> {{ profiles.email }}
              </li>
              <li class="text-sm border-0 list-group-item ps-0">
                <strong class="text-dark">Status : </strong>
                <span class="badge badge-sm bg-gradient-secondary">Seminar Proposal</span>
              </li>
              <!-- <li class="text-sm border-0 list-group-item ps-0">
                <strong class="text-dark">Note:</strong> <a href="/">https://chat.whatsapp.com/E9QnNuDlttBBSqAXFgAA37</a>
              </li> -->
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


        <div class="tab-content ml-4 mt-4 col-8 col-xl-8 mt-xl-0">
          <div class="tab-pane fade show active card card-plain h-100 " id="riwayat" role="tabpanel"
          aria-labelledby="riwayat">
            <!-- POV Riwayat -->

            <div class="p-3 pb-0 card-header">
              <h6 class="mb-0">Daftar Riwayat Tugas Akhir</h6>
            </div>
            <div class="p-3 card-body">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                        Tahapan
                      </th>
                      <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                        Waktu
                      </th>
                      <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                        Keterangan
                      </th>
                      <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-5">Action</th>

                      <th class="text-center text-dark opacity-2"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="align-middle text-center">
                        <span class="text-sm font-weight-normal">Seminar Proposal</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-sm font-weight-medium">21/06/2020 (13.00-16.00)</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-success text-gradient text-uppercase text-sm font-weight-bold">Selesai</span>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-link text-dark mb-0 px-0" href="javascript:;">
                          <router-link :to="{ name: '/' }"><i class="fas fa-regular fa-eye text-gradient-dark fa-lg"
                              aria-hidden="true"></i>
                          </router-link>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="align-middle text-center">
                        <span class="text-sm font-weight-normal">Seminar Hasil</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="badge badge-sm bg-gradient-light text-dark">-</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-danger text-gradient text-uppercase text-sm font-weight-bold">Belum
                          Selesai</span>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-link text-dark mb-0 px-0" href="javascript:;">
                          <router-link :to="{ name: '/' }"><i class="fas fa-regular fa-eye text-gradient-dark fa-lg"
                              aria-hidden="true"></i>
                          </router-link>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="tab-pane fade show  card card-plain h-100 " id="informasi" role="tabpanel"
            aria-labelledby="informasi">
            <!-- POV Informasi TA -->
            <div class="p-3 pb-0 card-header">
              <h6 class="mb-0">Informasi Tugas Akhir</h6>
            </div>
            <div class="card-body pt-4 p-3">
              <ul class="list-group">
                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                  <div class="d-flex flex-column">
                    <span class="mb-2 text-md">
                      Judul Tugas Akhir:
                      <span class="text-dark font-weight-bold ms-sm-2">{{ profiles.judul }}</span>
                    </span>
                    <span class="mb-2 text-md">
                      Keyword:
                      <span class="text-dark ms-sm-2 font-weight-bold">{{ profiles.keyword }}</span>
                    </span>
                    <span class="text-md">
                      Abstrak:
                      <span class="text-dark font-weight-bold ms-sm-2">{{ profiles.abstrak }}</span>
                    </span>
                    <span class="mb-2 text-md">
                      Dosen Pembimbing Utama :
                      <span class="text-dark font-weight-bold ms-sm-2">{{ profiles.dospem1 }}</span>
                    </span>
                    <span class="mb-2 text-md">
                      Dosen Pembimbing Pendamping :
                      <span class="text-dark font-weight-bold ms-sm-2">{{ profiles.dospem2 }}</span>
                    </span>
                    <span class="mb-2 text-md">
                      Dosen Penguji I :
                      <span class="badge badge-sm bg-gradient-light text-dark">Menunggu Konfirmasi</span>
                    </span>
                    <span class="mb-2 text-md">
                      Dosen Penguji II :
                      <span class="badge badge-sm bg-gradient-light text-dark">Menunggu Konfirmasi</span>
                    </span>
                  </div>
                </li>
              </ul>
            </div>

          </div>


        </div>
      </div>

    </div>
  </div>

</template>
  
<script>
//   import DefaultProjectCard from "./components/DefaultProjectCard.vue";
import axios from 'axios';
// import { onMounted, ref } from "vue";


import setNavPills from "@/assets/js/nav-pills.js";
import setTooltip from "@/assets/js/tooltip.js";
// import ProfileInfoCard1 from "../../ProfileInfoCard.vue";

export default {
  name: "detail-mahasiswa",
  data() {
    return {
      profiles: {},
    };
  },

  methods: {

    getTA() {
      let token = localStorage.getItem("token")
      axios.get('http://127.0.0.1:8000/api/regis-ta/' + this.$route.params.id,
        { headers: { "Authorization": `Bearer ${token}` } })
        .then((result) => {
          this.profiles = result.data.data
          console.log(this.profiles)
        }).catch((err) => {
          console.log(err.response)

        })
    },
  },

  components: {
  },

  mounted() {
    this.getTA()
    // this.$store.state.isAbsolute = true;
    setNavPills();
    setTooltip();
  },
  beforeUnmount() {
    // this.$store.state.isAbsolute = false;
  },
};
</script>
  