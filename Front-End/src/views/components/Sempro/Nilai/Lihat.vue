<template>
  <div class="container-fluid">
    <a>
      <router-link :to="{ name: 'Sempro' }" class="btn btn-dark mx-4 material-icons me-2" type="button">
        arrow_back</router-link>
    </a>

    <div class="row">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-header pb-0 px-3">
            <h6 class="mb-0">Nilai Dosen Pembimbing </h6>
          </div>
          <div class="card-body pt-4 p-3">
            <ul class="list-group">
              <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                <div class="d-flex flex-column">
                  <h6 class="mb-3 text-md">Dosen Pembimbing Utama</h6>
                  <span class="mb-2 text-md">
                    Nilai Presentasi :
                    <span class="badge badge-sm bg-gradient-light text-dark" v-if="Nilais.dospem1 === null"> -
                    </span>
                    <span class="text-secondary text-sm font-weight-bold" v-else>{{ Nilais.dospem1.nilai_presentasi
                    }}</span>
                  </span>
                  <span class="mb-2 text-md">
                    Nilai Proposal :
                    <span class="badge badge-sm bg-gradient-light text-dark" v-if="Nilais.dospem1 === null"> -
                    </span>
                    <span class="text-secondary text-sm font-weight-bold" v-else>{{ Nilais.dospem1.nilai_laporan
                    }}</span>
                  </span>
                  <span class="text-md">
                    Note :
                    <span class="badge badge-sm bg-gradient-light text-dark" v-if="Nilais.dospem1 === null"> -
                    </span>
                    <span class="text-secondary text-sm font-weight-bold" v-else>{{ Nilais.dospem1.note }}</span>
                  </span>
                </div>
              </li>
              <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                <div class="d-flex flex-column">
                  <h6 class="mb-3 text-md">Dosen Pembimbing Pendamping</h6>
                  <span class="mb-2 text-md">
                    Nilai Presentasi :
                    <span class="badge badge-sm bg-gradient-light text-dark" v-if="Nilais.dospem2 === null"> -
                    </span>
                    <span class="text-secondary text-sm font-weight-bold" v-else>{{ Nilais.dospem2.nilai_presentasi
                    }}</span>
                  </span>
                  <span class="mb-2 text-md">
                    Nilai Proposal :
                    <span class="badge badge-sm bg-gradient-light text-dark" v-if="Nilais.dospem2 === null"> -
                    </span>
                    <span class="text-secondary text-sm font-weight-bold" v-else>{{ Nilais.dospem2.nilai_laporan
                    }}</span>
                  </span>
                  <span class="text-md">
                    Note :
                    <span class="badge badge-sm bg-gradient-light text-dark" v-if="Nilais.dospem2 === null"> -
                    </span>
                    <span class="text-secondary text-sm font-weight-bold" v-else>{{ Nilais.dospem2.note }}</span>
                  </span>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card">
          <div class="card-header pb-0 px-3">
            <h6 class="mb-0">Nilai Dosen Penguji</h6>
          </div>
          <div class="card-body pt-4 p-3">
            <ul class="list-group">
              <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                <div class="d-flex flex-column">
                  <h6 class="mb-3 text-md">Dosen Penguji 1</h6>
                  <span class="mb-2 text-md">
                    Nilai Presentasi :
                    <span class="badge badge-sm bg-gradient-light text-dark" v-if="Nilais.dospeng1 === null"> -
                    </span>
                    <span class="text-secondary text-sm font-weight-bold" v-else>{{ Nilais.dospeng1.nilai_presentasi
                    }}</span>
                  </span>
                  <span class="mb-2 text-md">
                    Nilai Proposal :
                    <span class="badge badge-sm bg-gradient-light text-dark" v-if="Nilais.dospeng1 === null"> -
                    </span>
                    <span class="text-secondary text-sm font-weight-bold" v-else>{{ Nilais.dospeng1.nilai_laporan
                    }}</span>
                  </span>
                  <span class="text-md">
                    Note :
                    <span class="badge badge-sm bg-gradient-light text-dark" v-if="Nilais.dospeng1 === null"> -
                    </span>
                    <span class="text-secondary text-sm font-weight-bold" v-else>{{ Nilais.dospeng1.note }}</span>
                  </span>
                </div>
              </li>
              <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                <div class="d-flex flex-column">
                  <h6 class="mb-3 text-md">Dosen Penguji 2</h6>
                  <span class="mb-2 text-md">
                    Nilai Presentasi :
                    <span class="badge badge-sm bg-gradient-light text-dark" v-if="Nilais.dospeng2 === null"> -
                    </span>
                    <span class="text-secondary text-sm font-weight-bold" v-else>{{ Nilais.dospeng2.nilai_presentasi
                    }}</span>
                  </span>
                  <span class="mb-2 text-md">
                    Nilai Proposal :
                    <span class="badge badge-sm bg-gradient-light text-dark" v-if="Nilais.dospeng2 === null"> -
                    </span>
                    <span class="text-secondary text-sm font-weight-bold" v-else>{{ Nilais.dospeng2.nilai_laporan
                    }}</span>
                  </span>
                  <span class="text-md">
                    Note :
                    <span class="badge badge-sm bg-gradient-light text-dark" v-if="Nilais.dospeng2 === null"> -
                    </span>
                    <span class="text-secondary text-sm font-weight-bold" v-else>{{ Nilais.dospeng2.note }}</span>
                  </span>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card card-plain h-100 col-12 py-4">
        <!-- POV Informasi TA -->
        <div class="p-3 pb-0 card-header">
          <h6 class="mb-0">Informasi Tugas Akhir
            <router-link :to="{ name: 'RevisiSempro' }" class="btn btn-success m-2 p-2" type="button">
              <a class="fas fa-pencil text-normal text-white">Upload Revisi Proposal
              </a>
            </router-link>
          </h6>
        </div>
        <div class="card-body pt-4 p-3">
          <ul class="list-group">
            <li class="list-group-item border-0 d-flex p-4 mb-2  border-radius-lg">
              <div class="d-flex flex-column">
                <span class="">
                  <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;">
                    <!--  -->
                    <router-link :to="{ name: 'EditRevisi' }">
                      <i class="fas fa-pencil-alt text-dark me-0 fa-lg" aria-hidden="true"></i>
                    </router-link>
                  </a>
                  <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:"
                    >
                    <i class="far fa-trash-alt me-0 fa-lg" aria-hidden="true"></i>
                  </a>
                </span>
                <span class="mb-2 text-md">
                  Note Revisi:
                  <span class="text-dark font-weight-bold ms-sm-2">{{ Revisi.note }}</span>
                </span>
                <span class="mb-2 text-md">
                  File Revisi Proposal:
                  <a class="text-md my-2" :href="('http://127.0.0.1:8000/RevProposal/' + Revisi.file)" target="_blank">
                    <span><i class="fas fa-file-pdf text-md me-2" aria-hidden="true"><span class="m-2">{{ Revisi.note
                    }}</span></i></span>
                  </a>
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
import axios from 'axios';
// import $ from 'jquery';


// import MaterialInput from "@/components/MaterialInput.vue";
// import MaterialButton from "@/components/MaterialButton.vue";
// import { mapMutations } from "vuex";

export default {
  name: "Nilai-Sempro",
  data() {
    return {
      Nilais: {
        dospem1: {},
        dospem2: {},
        dospeng1: {},
        dospeng2: {}
      },
      Revisi: {}
    };
  },

  components: {
    // MaterialInput,
    // MaterialButton,
  },

  // var demo = new Vue({
  // el: '#demo',
  // //data: data,
  methods: {
    getNilai() {
      let token = localStorage.getItem("token")
      axios.get('http://127.0.0.1:8000/api/val-sempro',
        { headers: { "Authorization": `Bearer ${token}` } })
        .then((result) => {
          this.Nilais = result.data.data
          console.log(this.Nilais)
        }).catch((err) => {
          console.log(err.response)
        })
    },

    getRevisi() {
      let token = localStorage.getItem("token")
      axios.get('http://127.0.0.1:8000/api/rev-proposal',
        { headers: { "Authorization": `Bearer ${token}` } })
        .then((result) => {
          this.Revisi = result.data.data
          console.log(this.Revisi)
        }).catch((err) => {
          console.log(err.response)
        })
    },
  },

  mounted() {
    this.getNilai()
    this.getRevisi()
  },

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
}
</script>