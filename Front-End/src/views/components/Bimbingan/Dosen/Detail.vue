<template>
  <div class="container-fluid">
    <div class="page-header min-height-250 border-radius-xl mt-4" style="
          background-image: url('https://t3.ftcdn.net/jpg/02/90/89/76/360_F_290897614_7RdAsk2GmumcGWZ2qklmV74hKlNmznSx.jpg');
        ">
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
            <h5 class="mb-1">Richard Davis S.Kom,M.Kom</h5>
            <p class="mb-0 font-weight-normal text-sm"> Dosen Informatika</p>
          </div>
        </div>
        <div class="mx-auto mt-8 col-lg-6 col-md-6">
          <div class="nav-wrapper position-relative end-0">
            <ul class="p-1 bg-transparent nav nav-pills nav-fill" role="tablist">
              <li class="nav-item">
                <a class="px-0 py-1 mb-0 nav-link active" data-bs-toggle="tab" href="javascript:;" role="tab"
                  aria-selected="true">

                  <span class="ms-1">Topik Penelitian</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="px-0 py-1 mb-0 nav-link" data-bs-toggle="tab" href="javascript:;" role="tab"
                  aria-selected="false">
                  <span class="ms-1">Beban Mata Kuliah</span>
                </a>
              </li>
              <!-- <li class="nav-item">
                  <a
                    class="px-0 py-1 mb-0 nav-link"
                    data-bs-toggle="tab"
                    href="javascript:;"
                    role="tab"
                    aria-selected="false"
                  >
                    <span class="ms-1">Settings</span>
                  </a>
                </li> -->
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
            <p class="text-md font-weight-normal font-italic">Academic Carrer</p>
            <p class="text-sm font-italic">
              Bachelor Degree (Computer Science)
              Universitas Brawijaya, Indonesia 2014
              Master Degree (Computer Science) Universitas Brawijaya, Indonesia 2017
            </p>
            <hr class="my-4 horizontal gray-light" />
            <ul class="list-group">
              <li class="pt-0 text-sm border-0 list-group-item ps-0">
                <strong class="text-dark">NIP/NIPH :</strong> 2516166265215215123
              </li>
              <li class="text-sm border-0 list-group-item ps-0">
                <strong class="text-dark">Mobile:</strong> 084128141410
              </li>
              <li class="text-sm border-0 list-group-item ps-0">
                <strong class="text-dark">Email:</strong> Richard_Davis@lecturer.itk.ac.id
              </li>
              <li class="text-sm border-0 list-group-item ps-0">
                <strong class="text-dark">Kapasitas Pembimbing Utama: </strong>
                <span class="badge badge-sm bg-gradient-secondary">10/10</span>
              </li>
              <li class="text-sm border-0 list-group-item ps-0">
                <strong class="text-dark">Kapasitas Pembimbing Pendamping: </strong>
                <span class="badge badge-sm bg-gradient-success">2/10</span>
              </li>
              <li class="text-sm border-0 list-group-item ps-0">
                <strong class="text-dark">Note:</strong> <a href="/">https://chat.whatsapp.com/E9QnNuDlttBBSqAXFgAA37</a>
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
        <div class="ml-4 mt-4 col-8 col-xl-8 mt-xl-0">
          <div class="card card-plain h-100 ">
            <div class="p-3 pb-0 card-header">
              <h6 class="mb-0">Daftar Topik Penelitian</h6>
            </div>
            <div class="p-3 card-body">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                        Nama Penelitian
                      </th>
                      <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                        Bidang Penelitian
                      </th>
                      <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                        Keterangan
                      </th>
                      <!-- <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Status
                    </th> -->
                      <!-- <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      
                    </th> -->
                      <th class="text-center text-dark opacity-2"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="align-middle text-center">
                        <span class="text-sm font-weight-normal">SIM-TA</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-sm font-weight-normal">software Developing</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-sm font-weight-normal">Pembangunan Sistem Manajemen Tugas Akhir</span>
                      </td>
                      <!-- <td class="align-middle text-center">
                      <span class="text-info text-sm font-weight-medium">23/08/2022</span>
                    </td> -->
                      <!-- <td class="align-middle opacity-8">
                      <a href="javascript:;" class="text-dark font-weight-bold text-sm" data-toggle="tooltip"
                        data-original-title="Detail user">
                        Details
                      </a>
                    </td> -->
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

</template>
  
<script>
//   import DefaultProjectCard from "./components/DefaultProjectCard.vue";



import setNavPills from "@/assets/js/nav-pills.js";
import setTooltip from "@/assets/js/tooltip.js";
// import ProfileInfoCard1 from "../../ProfileInfoCard.vue";

export default {
  name: "detail",

  components: {
  },

  mounted() {
    this.$store.state.isAbsolute = true;
    setNavPills();
    setTooltip();
  },
  beforeUnmount() {
    this.$store.state.isAbsolute = false;
  },
};
</script>
  