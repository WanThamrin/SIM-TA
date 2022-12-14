<template>
  <div class="container-fluid">
    <div class="page-header min-height-200 border-radius-xl mt-4" style="
      background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');
      ">
      <span class="mask bg-gradient-success opacity-6"></span>
      <router-link :to="{name:'Bimbingan'}" class="btn btn-light mx-4 material-icons me-2" type="button">
        arrow_back</router-link>
    </div>
    <div class="row">
      <div class="col-xxl-12">
        <div class="card card-body mx-3 mx-md-4 mt-n6">
          <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Daftar Topik Penelitian / Riset</h4>
          </div>
          <!-- end card header -->
          <div class="card-body">
            <p class="text-muted">Form Daftar Topik Penelitian / Riset</p>
            <div class="live-preview">
              <form @submit.prevent="store()">
                <div class="row mb-3 ">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label"> Nama Topik Riset</label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <input id="nama_riset" type="text" placeholder="Masukkan Nama Riset" class="input-group border border-info rounded py-2 px-2 text-sm" name="nama_riset" :isRequired="true"
                      v-model="Riset.nama_riset" />
                      
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Bidang Penelitian / Riset
                      <h2 class="text-danger text-sm">ex. Software Developing</h2>
                    </label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <input id="bidang_riset" type="text" placeholder="Masukkan bidang riset" class="input-group border border-info rounded py-2 px-2 text-sm" name="bidang_riset"  :isRequired="true"
                      v-model="Riset.bidang_riset" />
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Kata Kunci Topik Penelitian / Riset
                      <h2 class="text-danger text-sm">ex. SIM-TA</h2>
                    </label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <input id="keyword" type="text" placeholder="Masukkan keyword" class="input-group border border-info rounded py-2 px-2 text-sm" name="keyword"  :isRequired="true"
                      v-model="Riset.keyword" />
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Keterangan singkat mengenai Topik Penelitian / Riset
                      <h2 class="text-danger text-sm">ex. Pengembangan SIM Tugas Akhir ....</h2>
                    </label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <textarea id="note" type="textarea" placeholder="Masukkan note" class="input-group border border-info rounded py-2 px-2 text-sm" name="note"  :isRequired="true"
                      v-model="Riset.note" />
                  </div>
                </div>
                <div class="text-end">
                  <MaterialButton class="mx-3" variant="outline" size="md" type="cancel">Cancel</MaterialButton>
                  <MaterialButton size="md" type="submit">Submit</MaterialButton>
                </div>
              </form>
            </div>
            <!-- <div class="d-none code-view"></div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
  
<script>
import Swal from 'sweetalert2';
import axios from "axios";

// import MaterialInput from "@/components/MaterialInput.vue";
import MaterialButton from "@/components/MaterialButton.vue";
// import MaterialTextarea from "@/components/MaterialTextarea.vue";
// import { mapMutations } from "vuex";

export default {
  name: "Riset",
  components: {
    // MaterialInput,
    MaterialButton,
    // MaterialTextarea
  },
  data() {
    return {
      Riset: {},
    }
  },
  methods: {
    store() {
      let token = localStorage.getItem("token")
      axios.post(
        'http://127.0.0.1:8000/api/riset',
        this.Riset,
        { headers: { Authorization: `Bearer ${token}` } })
        .then(() => {
          this.$router.push({
            name: 'Bimbingan'
          })
          Swal.fire(
            'Topik Penelitian Berhasil ditambah',
            'You clicked the button!',
            'success')

        }).catch((err) => {
          console.log(err.response.data)
        });
    }
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