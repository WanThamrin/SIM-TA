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
            <h4 class="card-title mb-0 flex-grow-1">Daftar Beban Mata Kuliah</h4>
          </div>
          <!-- end card header -->
          <div class="card-body">
            <p class="text-muted">Form Daftar Beban Mata Kuliah</p>
            <div class="live-preview">
              <form @submit.prevent="store()">
                <div class="row mb-3 ">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Nama Mata Kuliah</label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <input id="mata_kuliah" type="text" placeholder="Masukkan Nama Mata Kuliah" class="input-group border border-info rounded py-2 px-2 text-sm" name="mata_kuliah"  
                      v-model="bebanBimbingan.mata_kuliah" :isRequired="true" />
                      
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Catatan (Sesi/Praktikum/dll)
                      <h2 class="text-danger text-sm">ex. Setiap hari senin sesi 1</h2>
                    </label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <textarea id="catatan" type="textarea" placeholder="Masukkan Catatan" class="input-group border border-info rounded py-2 px-2 text-sm" name="catatan" size="md" 
                      v-model="bebanBimbingan.catatan" :isRequired="true"/>
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
import axios from "axios";
import Swal from 'sweetalert2';

// import MaterialInput from "@/components/MaterialInput.vue";
import MaterialButton from "@/components/MaterialButton.vue";
// import MaterialTextarea from "@/components/MaterialTextarea.vue";
// import { mapMutations } from "vuex";

export default {
  name: "Matkul",
  components: {
    // MaterialInput,
    MaterialButton,
    // MaterialTextarea
  },
  data() {
    return {
      bebanBimbingan: {
        nip:21213122131
      },
    }
  },
  methods: {
    store() {
      let token = localStorage.getItem("token")
      // console.log(this.bebanBimbingan)
      axios.post(
        'http://127.0.0.1:8000/api/beban-bimbingan',
        this.bebanBimbingan,
        { headers: { Authorization: `Bearer ${token}` } })
        .then(() => {
          this.$router.push({
            name: 'Bimbingan'
          })
          Swal.fire(
            'Mata Kuliah Berhasil ditambah',
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