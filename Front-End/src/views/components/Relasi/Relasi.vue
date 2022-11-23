<template>
  <div class="col-lg-8 m-4">
    <div class="card  mt-4">
      <div class="card-header pb-0 p-3">
        <div class="row my-4">
          <div class="col-6 d-flex align-items-center">
            <h5 class="mb-0">Batas Maksimal Mahasiswa Bimbingan</h5>
            <i class="bg-light fas fa-pencil-alt ms-auto text-danger text-lg rounded cursor-pointer"
              data-bs-toggle="modal" data-bs-target="#staticBackdrop" title aria-hidden="true"
              aria-label="Edit Batas"></i>
            <span class="sr-only m-2">Edit</span>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
              aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Ubah Batas Maksimal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                  <div class="me-2" >
                    <label for="nameInput" class="form-label">Batas Maksimal</label>
                    <input id="mata_kuliah" type="number" placeholder="00" min="1" max="100" class="border border-info rounded mx-2 py-2 px-2 text-sm" name="mata_kuliah"  :isRequired="true"
                    />   
                
                  </div>
                 
                  </div> 
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body p-3">
        <div class="row">
          <div class="col-md-6 mb-md-0 mb-2">
            <div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
              <h6 class="mb-0">
                Pembimbing Utama :
                <span class="text-success">10 Mahasiswa</span>
              </h6>

            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
              <h6 class="mb-0">
                Pembimbing Pendamping :
                <span class="text-success">10 Mahasiswa</span>
              </h6>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
              <h6 class="mb-0">
                Penguji Utama :
                <span class="text-success">10 Mahasiswa</span>
              </h6>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
              <h6 class="mb-0">
                Penguji Utama :
                <span class="text-success">10 Mahasiswa</span>
              </h6>
              <span class="sr-only">Edit</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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
                          <img src="@/assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg"
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
                      <span class="badge badge-sm bg-gradient-success">2/10</span>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-secondary">10/10</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="badge badge-sm bg-gradient-secondary">10/10</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="badge badge-sm bg-gradient-success">2/10</span>
                    </td>
                    <!-- <td class="align-middle text-center">
                      <span class="text-secondary text-sm font-weight-medium">21/06/2020 (13.00-16.00)</span>
                    </td> -->
                    <td class="text-center">
                      <a class="btn btn-link text-dark mb-0 px-0" href="javascript:;">
                        <router-link :to="{ name: 'Lihat' }"><i class="fas fa-regular fa-eye text-gradient-dark fa-lg"
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
  