<template>
  <div class="container-fluid py-2">
    <div class="row my-4">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-info shadow-success border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Data Dosen Pengampu TA</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Nama Dosen
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Sertifikasi
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
                    <!-- <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Jadwal
                    </th> -->
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-5">Action</th>
                    <!-- <th class="text-dark opacity-2"></th> -->
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="(dosen, index) in dosens" :key="index">
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="@/assets/img/user.jpg" class="avatar avatar-sm me-3 border-radius-lg"
                            alt="user1" />
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{dosen.name}}</h6>
                          <p class="text-sm text-secondary mb-0">
                            NIPH. <span>{{dosen.number}}</span>
                          </p>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-medium">A</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="badge badge-sm bg-gradient-success">{{dosen.dospem1}} /10</span>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-secondary">{{dosen.dospem2}} /10</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="badge badge-sm bg-gradient-secondary">{{dosen.dospeng1}} /10</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="badge badge-sm bg-gradient-success">{{dosen.dospeng2}} /10</span>
                    </td>
                    <!-- <td class="align-middle text-center">
                      <span class="text-secondary text-sm font-weight-medium">21/06/2020 (13.00-16.00)</span>
                    </td> -->
                    <td class="text-center">
                      <a class="btn btn-link text-dark mb-0 px-0" href="javascript:;">
                        <router-link :to="{ name: 'Lihat', params: { id: dosen.id }  }"><i class="fas fa-regular fa-eye text-gradient-dark fa-lg"
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
      </div>
    </div>
  </div>
</template>
  
<script>
import axios from 'axios';

export default {
  name: "Relasi",
  data() {
    return{
      dosens:{}
    };
  },
  methods: {
    getDosen() {
            let token = localStorage.getItem("token")
            axios.get('http://127.0.0.1:8000/api/get-dosen',
                { headers: { "Authorization": `Bearer ${token}` } })
                .then((result) => {
                    this.dosens = result.data.data
                    console.log(this.dosens)
                }).catch((err) => {
                    console.log(err.response)
                })
        },
  },
  mounted(){
    this.getDosen();
  }
};

</script>
  