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

                  <h6 class="mb-0 text-md  my-1 ">{{ DocSemhas.judul }}</h6>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-lg-3 my-2">
                  <label for="nameInput" class="form-label">Kata Kunci
                  </label>
                </div>
                <div class="col-lg-9 my-2">
                  <!-- <input id="keyword" type="text" placeholder="Masukkan Keyword" class="input-group border border-info rounded py-2 px-2 text-sm" name="keyword"  :isRequired="true"
                      v-model="DocSemhas.keyword" /> -->
                  <h6 class="mb-0 text-md  my-1 ">{{ DocSemhas.keyword }}</h6>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-lg-3 my-2">
                  <label for="nameInput" class="form-label">File Tambahan</label>
                </div>
                <div class="col-lg-9 my-1">
                  <!-- <input id="file" type="file" class="input-group border border-info rounded py-2 px-2 text-sm"  name="file" :isRequired="true"
                    v-on="Info.file"/> -->
                  <a class="text-md my-2" :href="'http://127.0.0.1:8000/DocSidang/' + DocSemhas.file" target="_blank">
                    <span><i class="fas fa-file-pdf text-md me-2" aria-hidden="true">PDF</i></span>
                  </a>
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
import axios from "axios";

// import MaterialInput from "@/components/MaterialInput.vue";
// import MaterialButton from "@/components/MaterialButton.vue";
// import MaterialTextarea from "@/components/MaterialTextarea.vue";
// import { mapMutations } from "vuex";

export default {
  name: "EyeDoc-Sempro",
  components: {
    // MaterialInput,
    // MaterialButton,
    // MaterialTextarea
  },
  data() {
    return {
      DocSemhas: {},
    }
  },
  methods: {
    getDoc() {
      axios.get(
        'http://127.0.0.1:8000/api/doc-semhas/' + this.$route.params.id,
      )
        .then((result) => {
          this.DocSemhas = result.data.data
          // console.log(result.data.data)

        }).catch((err) => {
          console.log(err)
        });
    },
  },
  mounted() {
    this.getDoc()
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