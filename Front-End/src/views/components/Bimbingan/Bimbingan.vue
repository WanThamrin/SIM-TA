<template>
  <!-- POV Mahasiswa -->
  <!-- v-if="profiles.role == 'user'" -->
  <div class="container-fluid">
    <div class="page-header min-height-200 border-radius-xl mt-4" 
      style="background-image: url('https://media.istockphoto.com/photos/businessman-working-modern-compter-document-management-system-virtual-picture-id1368237807?k=20&m=1368237807&s=612x612&w=0&h=9lEc3lJFgkrCTO1aHcSHYO2Z22PFKX53YYUDy9Rsaqc=')
     ">
      <span class="mask bg-gradient-info opacity-2"></span>
      <router-link :to="{ name: 'Tables' }" class="btn btn-light mx-4 mt-8" type="button">
        <i class="fas fa-plus m-0 p-0 me-2"></i>Daftar Tugas Akhir
      </router-link>
    </div>
    <div class="row my-4">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-info shadow-success border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Data Dosen Pembimbing</h6>
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
                      NIPH
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Beban Mata Kuliah
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Beban Bimbingan
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Topik Riset
                    </th>
                    <th class="text-dark opacity-2"></th>
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
                          <h6 class="mb-0 text-sm">{{ dosen.name }}</h6>
                          <p class="text-sm text-secondary mb-0">
                            {{ dosen.email }}
                          </p>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-normal">{{ dosen.number }}</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-medium">Alpro,IPPL,dll</span>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-success">2/10</span>
                      <span class="badge badge-sm bg-gradient-secondary">10/10</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-sm font-weight-medium">Software Engineering</span>
                    </td>
                    <td class="align-middle">
                      <a class="btn btn-link text-dark mb-0 px-0" href="javascript:;">
                        <router-link :to="{ name: 'Detail-Dosen' }"><i
                            class="fas fa-regular fa-eye text-gradient-dark fa-lg" aria-hidden="true"></i>
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

  <!-- POV Dosen -->
  <!-- v-if="profiles.role == 'dosen'" -->
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-16">
        <div class="row mt-4">
          <div class="card col-4 h-100">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-info shadow-success border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-center text-capitalize ps-3">Beban Mata Kuliah</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <div class="card ">
                  <div class="card-header pb-0 p-3">
                    <div class="row">
                      <div class="col-4 align-items-center ">
                        <h6 class="mb-0">Mata Kuliah</h6>
                      </div>
                      <div class="col-2">
                        <router-link :to="{ name: 'Matkul' }" class="btn btn-dark my-0 me-4 py-1 px-2" type="button">
                          <i class="fas fa-plus m-0 p-0"></i>
                        </router-link>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-3 mb-0 overflow-auto">
                    <ul class="list-group">
                      <li v-for="(bebanBimbingan, index) in bebanBimbingans.data" :key="index"
                        class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                        <div class="d-flex flex-column">
                          <h6 class="mb-1 text-dark font-weight-bold text-sm">
                            {{ bebanBimbingan.mata_kuliah }}
                          </h6>
                          <span class="text-xs">{{ bebanBimbingan.catatan }}</span>
                        </div>
                        <div ms-auto text-end>
                          <a class="btn btn-link text-dark px-1 mb-0" href="javascript:;">
                            <router-link :to="{ name: 'Edit-Matkul', params: { id: bebanBimbingan.id } }">
                              <i class="fas fa-pencil-alt text-dark me-0 fa-lg" aria-hidden="true"></i>
                            </router-link>
                          </a>
                          <a class="btn btn-link mb-0 px-0 ms-4" href="javascript:;"
                            @click.prevent="destroy(bebanBimbingan.id)">
                            <i class="far fa-trash-alt me-0 fa-lg" aria-hidden="true"></i>
                          </a>
                        </div>
                      </li>
                    </ul>
                    <div>
                      <ul class="pagination pagination-info">
                        <li class="page-item">
                          <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                          </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="col-lg-12 me-4">
              <div class="card">
                <div class="card-header mb-0 pb-0">
                  <h5 class="text-center">Topik Riset</h5>
                </div>
                <div class="text-end me-4 my-4">
                  <router-link :to="{ name: 'Riset' }" class="btn btn-dark " type="button">
                    <i class="fas fa-plus m-0 p-0 me-2"></i>Tambah
                  </router-link>
                </div>
                <div class="card-body pt-4">
                  <ul class="list-group">
                    <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg"
                      v-for="(Riset, index) in Risets.data" :key="index">
                      <div class="d-flex flex-column">
                        <h6 class="mb-3 text-md">{{ Riset.bidang_riset }}</h6>
                        <span class="mb-2 text-md">
                          Nama Topik Riset:
                          <span class="text-dark font-weight-bold ms-sm-2">{{ Riset.nama_riset }}</span>
                        </span>
                        <span class="mb-2 text-md">
                          Keyword:
                          <span class="text-dark ms-sm-2 font-weight-bold">{{ Riset.keyword }}</span>
                        </span>
                        <span class="text-md">
                          Note:
                          <span class="text-dark ms-sm-2 font-weight-bold">{{ Riset.note }}</span>
                        </span>
                      </div>
                      <div class="ms-auto text-end">
                        <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;">
                          <router-link :to="{ name: 'Edit-Riset', params: { id: Riset.id } }">
                            <i class="fas fa-pencil-alt text-dark me-0 fa-lg" aria-hidden="true"></i>
                          </router-link>
                        </a>
                        <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:"
                          @click.prevent="drop(Riset.id)">
                          <i class="far fa-trash-alt me-0 fa-lg" aria-hidden="true"></i>
                        </a>

                      </div>

                    </li>
                    <li
                      class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg justify-content-center text-center">
                      <div class="d-flex flex-column">
                        <h6 class="col-md-auto text-danger text-md"> Belum memiliki Topik Riset ?</h6>
                        <router-link :to="{ name: 'Riset' }" class="text-dark text-gradient font-weight-light text-sm">
                          Masukkan Topik Riset</router-link>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-12 py-2">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Daftar Pengajuan Bimbingan</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Nama Mahasiswa
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      NIM
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Judul TA
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Pengajuan
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Status
                    </th>

                    <!-- <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      
                    </th> -->
                    <th class="text-center text-dark opacity-2"></th>
                  </tr>
                </thead>
                <tbody>
                  <!-- v-for="(RegisTA, index) in RegisTAs.data" :key="index" -->
                  <tr v-for="(RegisTA, index) in RegisTAs.dospem1" :key="index" >
                    <td>  
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="@/assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg"
                            alt="user1" />
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{ RegisTA.name }}</h6>
                          <p class="text-sm text-secondary mb-0">
                            {{ RegisTA.email }}
                          </p>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-normal">{{ RegisTA.number }}</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-normal">{{ RegisTA.keyword }}</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-normal">Pembimbing Utama</span>
                    </td>
                    <td class="align-middle text-center ">
                      <a class="btn btn-sm bg-gradient-success  mb-0 me-2" href="javascript:;" @click="updateStatus(RegisTA.id,1)">Terima
                      </a>
                      <a class="btn btn-sm bg-gradient-danger  mb-0 me-2" href="javascript:;" @click="updateStatus(RegisTA.id,2)">Tolak
                      </a>
                    </td>

                    <td class="align-middle">
                      <a class="btn btn-link text-dark mb-0 px-0" href="javascript:;">
                        <router-link :to="{ name: 'Detail-Mahasiswa' }"><i
                            class="fas fa-regular fa-eye text-gradient-dark fa-lg" aria-hidden="true"></i>
                        </router-link>
                      </a>
                    </td>
                  </tr>
                  <tr v-for="(RegisTA, index) in RegisTAs.dospem2" :key="index">
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="@/assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg"
                            alt="user1" />
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{ RegisTA.name }}</h6>
                          <p class="text-sm text-secondary mb-0">
                            {{ RegisTA.email }}
                          </p>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-normal">{{ RegisTA.number }}</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-normal">{{ RegisTA.keyword }}</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-normal">Pembimbing Pendamping</span>
                    </td>
                    <td class="align-middle text-center ">
                      <a class="btn btn-sm bg-gradient-success  mb-0 me-2" href="javascript:;" @click="updateStatus2(RegisTA.id,1)">Terima
                      </a>
                      <a class="btn btn-sm bg-gradient-danger  mb-0 me-2" href="javascript:;" @click="updateStatus2(RegisTA.id,2)">Tolak
                      </a>
                    </td>
                    <!-- <td class="align-middle text-center">
                      <span class="text-info text-sm font-weight-medium">23/08/2022</span>
                    </td> -->
                    <td class="align-middle">
                      <a class="btn btn-link text-dark mb-0 px-0" href="javascript:;">
                        <router-link :to="{ name: 'Detail-Mahasiswa' }"><i
                            class="fas fa-regular fa-eye text-gradient-dark fa-lg" aria-hidden="true"></i>
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
    <div class="mx-auto mt-3 col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0">
      <div class="nav-wrapper position-relative end-0">
        <ul class="p-1 bg-transparent nav nav-pills nav-fill" role="tablist">
          <li class="nav-item">
            <a class="px-0 py-1 mb-0 nav-link active" data-bs-toggle="tab" href="#Utama" role="tab"
              aria-selected="true">
              <svg class="text-dark" width="16px" height="16px" viewBox="0 0 42 42" version="1.1"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>document</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(603.000000, 0.000000)">
                        <path class="color-background"
                          d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z" />
                        <path class="color-background"
                          d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z"
                          opacity="0.7" />
                        <path class="color-background"
                          d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z"
                          opacity="0.7" />
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
              <span class="ms-1">Utama</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="px-0 py-1 mb-0 nav-link" data-bs-toggle="tab" href="#Pendamping" role="tab" aria-selected="false">
              <svg class="text-dark" width="16px" height="16px" viewBox="0 0 40 44" version="1.1"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>document</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(154.000000, 300.000000)">
                        <path class="color-background"
                          d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"
                          opacity="0.603585379" />
                        <path class="color-background"
                          d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z" />
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
              <span class="ms-1">Pendamping</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="tab-content col-12 py-2">
        <div class="tab-pane card active card my-4" id="Utama" role="tabpanel">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-info shadow-success border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Daftar Bimbingan</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Nama Mahasiswa
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      NIM
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Judul TA
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Seminar Proposal
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Seminar Hasil
                    </th>
                    <th class="text-center text-dark opacity-2"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="@/assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg"
                            alt="user1" />
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">John Michael</h6>
                          <p class="text-sm text-secondary mb-0">
                            john@lecturer.co.id
                          </p>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-normal">11181074</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-normal">SIM-TA</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-info text-sm font-weight-medium">23/04/2022</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-info text-sm font-weight-medium">23/08/2022</span>
                    </td>
                    <td class="align-middle">
                      <a class="btn btn-link text-dark mb-0 px-0" href="javascript:;">
                        <router-link :to="{ name: 'Detail-Mahasiswa' }"><i class="fas fa-regular fa-eye text-gradient-dark fa-lg"
                            aria-hidden="true"></i>
                        </router-link>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="@/assets/img/team-3.jpg" class="avatar avatar-sm me-3 border-radius-lg"
                            alt="user2" />
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Sisca Khol</h6>
                          <p class="text-sm text-secondary mb-0">
                            sisca@lecturer.itk.ac.id
                          </p>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-normal">11181090</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-normal">Cyber Security</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="badge badge-sm bg-gradient-light text-dark">-</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="badge badge-sm bg-gradient-light text-dark">-</span>
                    </td>
                    <td class="align-middle">
                      <a class="btn btn-link mb-0 px-0" href="javascript:;">
                        <router-link :to="{ name: 'Profile' }"><i class="fas fa-regular fa-eye text-gradient-dark fa-lg"
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
        <div class="tab-pane card card my-4" id="Pendamping" role="tabpanel">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-info shadow-success border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Daftar Bimbingan</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Nama Mahasiswa
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      NIM
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Judul TA
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Seminar Proposal
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Seminar Hasil
                    </th>
                    <th class="text-center text-dark opacity-2"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="@/assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg"
                            alt="user1" />
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">AWWWW</h6>
                          <p class="text-sm text-secondary mb-0">
                            john@lecturer.co.id
                          </p>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-normal">11181074</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-normal">SIM-TA</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-info text-sm font-weight-medium">23/04/2022</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-info text-sm font-weight-medium">23/08/2022</span>
                    </td>
                    <td class="align-middle">
                      <a class="btn btn-link text-dark mb-0 px-0" href="javascript:;">
                        <router-link :to="{ name: 'Profile' }"><i class="fas fa-regular fa-eye text-gradient-dark fa-lg"
                            aria-hidden="true"></i>
                        </router-link>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="@/assets/img/team-3.jpg" class="avatar avatar-sm me-3 border-radius-lg"
                            alt="user2" />
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">UWWWW</h6>
                          <p class="text-sm text-secondary mb-0">
                            sisca@lecturer.itk.ac.id
                          </p>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-normal">11181090</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-normal">Cyber Security</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="badge badge-sm bg-gradient-light text-dark">-</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="badge badge-sm bg-gradient-light text-dark">-</span>
                    </td>
                    <td class="align-middle">
                      <a class="btn btn-link mb-0 px-0" href="javascript:;">
                        <router-link :to="{ name: 'Profile' }"><i class="fas fa-regular fa-eye text-gradient-dark fa-lg"
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
import { onMounted, ref } from "vue";

import setNavPills from "@/assets/js/nav-pills.js";
import setTooltip from "@/assets/js/tooltip.js";

export default {
  name: "Bimbingan",
  data() {
    return {
      RegisTAs: {
        dospem1: {},
        dospem2: {}
      },
      dosens: {}
      
    };
  },

  methods: {

    getTugas() {
      let token = localStorage.getItem("token")
      axios.get('http://127.0.0.1:8000/api/get-dospem',
        { headers: { Authorization: `Bearer ${token}` } })
        .then((result) => {
          this.RegisTAs = result.data.data,
            console.log(this.RegisTAs)
        }).catch((err) => {
          console.log(err.response)

        })
    },

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

    updateStatus(id,status) {
      console.log(id,status)
      let token = localStorage.getItem("token")
      axios.post('http://127.0.0.1:8000/api/update-status1/' + id,
      { status: status},  
      { headers: { "Authorization": `Bearer ${token}` } })
        .then((result) => {
          // this.dosens = result.data.data
          console.log(result)
        }).catch((err) => {
          console.log(err.response)
        })
    },
    updateStatus2(id,status) {
      console.log(id,status)
      let token = localStorage.getItem("token")
      axios.post('http://127.0.0.1:8000/api/update-status2/' + id,
      { status: status},  
      { headers: { "Authorization": `Bearer ${token}` } })
        .then((result) => {
          // this.dosens = result.data.data
          console.log(result)
        }).catch((err) => {
          console.log(err.response)
        })
    },
  },

  setup() {
    let bebanBimbingans = ref([]);
    let Risets = ref([]);
    // let RegisTAs = ref([]);


    onMounted(() => {
      axios.get('http://127.0.0.1:8000/api/beban-bimbingan')
        .then((result) => {
          bebanBimbingans.value = result.data
          console.log(bebanBimbingans)
        }).catch((err) => {
          console.log(err.response)

        })

      // axios.get('http://127.0.0.1:8000/api/regis-ta')
      // .then((result) => {
      //   RegisTAs.value = result.data
      //   console.log(RegisTAs)
      // }).catch((err) => {
      //   console.log(err.response)

      // })


      axios.get('http://127.0.0.1:8000/api/riset')
        .then((result) => {
          Risets.value = result.data

        }).catch((err) => {
          console.log(err.response)

        })


      setNavPills();
      setTooltip();
    });

    function destroy(id) {
      if (confirm('Apakah anda yakin?'))
        axios.delete(
          'http://127.0.0.1:8000/api/beban-bimbingan/' + id
        )
          .then(() => {
            bebanBimbingans.value.splice(bebanBimbingans.value.indexOf(id), 1);
            this.$router.push({
              name: 'Bimbingan'
            })

          }).catch((err) => {
            console.log(err.response.data);
          });
    }

    function drop(id) {
      if (confirm('Apakah anda yakin?'))
        axios.delete(
          'http://127.0.0.1:8000/api/riset/' + id
        )
          .then(() => {
            Risets.value.splice(Risets.value.indexOf(id), 1);
            this.drop()

          }).catch((err) => {
            console.log(err.response.data);
          });
    }

    return {
      bebanBimbingans,
      Risets,
      destroy,
      drop
    };


    // beforeUnmount() {
    //   this.$store.state.isAbsolute = false;
    // };
  },
  mounted() {
    this.getTugas();
    this.getDosen();
  }
};
</script>
