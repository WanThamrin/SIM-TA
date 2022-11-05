<template>
  <div class="container-fluid">
    <div class="page-header min-height-200 border-radius-xl mt-4" style="
      background-image: url('https://w0.peakpx.com/wallpaper/116/459/HD-wallpaper-microchip-neon-lines-black-background-chips-technology-backgrounds.jpg');
      ">
      <span class="mask bg-gradient-info opacity-2"></span>
      <router-link :to="{name:'Notifications'}" class="btn btn-light mx-4 material-icons me-2" type="button">
        arrow_back</router-link>
    </div>
    <div class="row">
      <div class="col-xxl-12">
        <div class="card card-body mx-3 mx-md-4 mt-n6">
          <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Data Dokumen</h4>
          </div>
          <!-- end card header -->
          <div class="card-body">
            <!-- <p class="text-muted">Form Daftar Pengumuman</p> -->
            <div class="live-preview">
              <div class="row mb-3 ">
                <div class="col-lg-3 my-2">
                  <label for="nameInput" class="form-label">Judul Dokumen</label>
                </div>
                <div class="col-lg-9 my-1">
                  <!-- <input id="judul" type="text" placeholder="Masukkan Judul Pengumuman" class="input-group border border-info rounded py-2 px-2 text-sm" name="nama_riset" :isRequired="true"
                      v-model="Info.judul" /> -->
                  <h6 class="mb-0 text-md  my-1 ">Persetujuan Dosen Pembimbing Utama</h6>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-lg-3 my-2">
                  <label for="nameInput" class="form-label">Keyword
                  </label>
                </div>
                <div class="col-lg-9 my-2">
                  <!-- <input id="keyword" type="text" placeholder="Masukkan Keyword" class="input-group border border-info rounded py-2 px-2 text-sm" name="keyword"  :isRequired="true"
                      v-model="Info.keyword" /> -->
                  <h6 class="mb-0 text-md  my-1 ">Form A1</h6>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-lg-3 my-2">
                  <label for="nameInput" class="form-label">File Tambahan</label>
                </div>
                <div class="col-lg-9 my-1">
                  <!-- <input id="file" type="file" class="input-group border border-info rounded py-2 px-2 text-sm"  name="file" :isRequired="true"
                    v-on="Info.file"/> -->
                  <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4">
                    <i class="fas fa-file-pdf text-lg me-1" aria-hidden="true"></i>
                    PDF
                  </button>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-lg-3 my-2">
                  <label for="nameInput" class="form-label">Status Dokumen</label>
                </div>
                <div class="col-lg-8 my-2">
                  <p class="badge badge-sm bg-gradient-success">Sudah Disiarkan</p>
                </div>
                
              </div>
              <!-- <div class="text-end">
                  <MaterialButton class="mx-3" variant="outline" size="md" type="cancel">Cancel</MaterialButton>
                  <MaterialButton size="md" type="submit">Submit</MaterialButton>
                </div> -->

            </div>
            <!-- <div class="d-none code-view"></div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
  
<script>
// import axios from "axios";

// import MaterialInput from "@/components/MaterialInput.vue";
// import MaterialButton from "@/components/MaterialButton.vue";
// import MaterialTextarea from "@/components/MaterialTextarea.vue";
// import { mapMutations } from "vuex";

export default {
  name: "EyeDoc",
  components: {
    // MaterialInput,
    // MaterialButton,
    // MaterialTextarea
  },
  // data() {
  //   return {
  //     Info: {},
  //   }
  // },
  // methods: {
  //   store() {
  //     axios.post(
  //       'http://127.0.0.1:8000/api/Info',
  //       this.Info
  //     )
  //       .then(() => {
  //         this.$router.push({
  //           name: 'Info'
  //         })

  //       }).catch((err) => {
  //         console.log(err.response.data)
  //       });
  //   }
  // }
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