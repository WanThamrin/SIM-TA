<template>
  <div class="col-lg-8 m-4">
  <div class="card  mt-4">
    <div class="card-header pb-0 p-3">
      <div class="row my-4">
        <div class="col-6 d-flex align-items-center">
          <h5 class="mb-0">Batas Maksimal Mahasiswa Bimbingan</h5>
        </div>
      </div>
    </div>
    <div class="card-body p-3">
      <div class="row">
        <div class="col-md-6 mb-md-0 mb-2">
          <div
            class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row"
          >
            <h6 class="mb-0">
              Pembimbing Utama : 
              <span class="text-success">10 Mahasiswa</span>
            </h6>
            <i
              class="fas fa-pencil-alt ms-auto text-dark cursor-pointer"
              data-bs-toggle="tooltip"
              data-bs-placement="top"
              title
              aria-hidden="true"
              aria-label="Edit Batas"
            ></i>
            <span class="sr-only">Edit</span>
          </div>
        </div>
        <div class="col-md-6 mb-2">
          <div
            class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row"
          >
            <h6 class="mb-0">
              Pembimbing Pendamping : 
              <span class="text-success">10 Mahasiswa</span>
            </h6>
            <i
              class="fas fa-pencil-alt ms-auto text-dark cursor-pointer"
              data-bs-toggle="tooltip"
              data-bs-placement="top"
              title
              aria-hidden="true"
              data-bs-original-title="Edit Batas"
              aria-label="Edit Batas"
            ></i>
            <span class="sr-only">Edit</span>
          </div>
        </div>
        <div class="col-md-6 mb-2">
          <div
            class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row"
          >
            <h6 class="mb-0">
              Penguji Utama : 
              <span class="text-success">10 Mahasiswa</span>
            </h6>
            <i
              class="fas fa-pencil-alt ms-auto text-dark cursor-pointer"
              data-bs-toggle="tooltip"
              data-bs-placement="top"
              title
              aria-hidden="true"
              data-bs-original-title="Edit Batas"
              aria-label="Edit Batas"
            ></i>
            <span class="sr-only">Edit</span>
          </div>
        </div>
        <div class="col-md-6 mb-2">
          <div
            class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row"
          >
            <h6 class="mb-0">
              Penguji Utama : 
              <span class="text-success">10 Mahasiswa</span>
            </h6>
            <i
              class="fas fa-pencil-alt ms-auto text-dark cursor-pointer"
              data-bs-toggle="tooltip"
              data-bs-placement="top"
              title
              aria-hidden="true"
              data-bs-original-title="Edit Batas"
              aria-label="Edit Batas"
            ></i>
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
              <h6 class="text-white text-capitalize ps-3">Data Mahasiswa Seminar Proposal</h6>
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
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="@/assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg"
                            alt="user1" />
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">John Michael S.Kom,M.Kom</h6>
                          <p class="text-sm text-secondary mb-0">
                            NIPH. <span>2154214214213</span>
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
                        <router-link :to="{name:'Lihat'}"><i class="fas fa-regular fa-eye text-gradient-dark fa-lg"
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
                            NIPH. <span>2154132156515</span>
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
                        <router-link :to="{name:'Lihat'}"><i class="fas fa-regular fa-eye text-gradient-dark fa-lg"
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
export default {
  name: "Relasi",
};
</script>
  