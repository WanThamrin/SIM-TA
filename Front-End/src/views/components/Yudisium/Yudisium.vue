<template>
  <div class="container-fluid py-2">
    <div class="row">
      <div class="col-12">
        <div class="row mt-4">
          <div class="card my-4 col-lg-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-info shadow-success border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Dokumen - Dokumen Pelengkap</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <div class="card ">
                  <div class="card-header pb-0 ">
                    <div class="row">
                      <div class="col-6 d-flex align-items-center">
                        <h6 class="text-secondary mb-0">Dokumen</h6>
                      </div>
                      <div class="col-6 text-end">
                        <material-button color="primary" size="sm" variant="outline">View All</material-button>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-3 mb-0">
                    <ul class="list-group">
                      <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                        <div class="d-flex flex-column">
                          <h6 class="mb-1 text-dark font-weight-bold text-sm">
                            Form A1
                          </h6>
                          <span class="text-xs">#MS-415646</span>
                        </div>
                        <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4">
                          <i class="fas fa-file-pdf text-lg me-1" aria-hidden="true"></i>
                          PDF
                        </button>
                      </li>
                      <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                        <div class="d-flex flex-column">
                          <h6 class="mb-1 text-dark font-weight-bold text-sm">
                            Form A1
                          </h6>
                          <span class="text-xs">#MS-415646</span>
                        </div>
                        <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4">
                          <i class="fas fa-file-pdf text-lg me-1" aria-hidden="true"></i>
                          PDF
                        </button>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <router-link :to="{name:'Tambah'}" class="btn btn-dark mx-3" type="button">
              <i class="fas fa-plus m-0 p-0 me-2"></i>Daftar Yudisium
            </router-link>
            <router-link :to="{name:'Tambah'}" class="btn btn-dark mx-3 disabled ">
              <i class="fas fa-plus m-0 p-0 me-2"></i>Daftar Yudisium
            </router-link>
            <div class="col-lg-12 me-4">
              <div class="card">
                <div class="card-header pb-0 px-3">
                  <h6 class="mb-0">Riwayat Pengajuan</h6>
                </div>
                <div class="card-body pt-4 p-3">
                  <ul class="list-group">
                    <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                      <div class="d-flex flex-column">
                        <h6 class="mb-3 text-md">Senin, 11/01/19</h6>
                        <span class="mb-2 text-md">
                          Judul Tugas Akhir:
                          <span class="text-dark font-weight-bold ms-sm-2">Sistem Informasi Manajemen Tugas Akhir [Studi
                            Kasus:ITK]</span>
                        </span>
                        <span class="mb-2 text-md">
                          Keyword:
                          <span class="text-dark ms-sm-2 font-weight-bold">SIM-TA</span>
                        </span>
                        <span class="text-md">
                          Tanggal Yudisium:
                          <span class="badge badge-sm bg-gradient-secondary">Menunggu Persetujuan</span>
                        </span>
                      </div>
                    </li>
                    <li
                      class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg justify-content-center text-center">
                      <div class="d-flex flex-column">
                        <h6 class="col-md-auto text-danger text-md"> Belum ada pengajuan</h6>
                        <router-link :to="{ name: 'Riset' }" class="text-dark text-gradient font-weight-light text-sm">
                          Daftar Yudisium</router-link>
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
    <div class="row my-4">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-info shadow-success border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Data Mahasiswa Yudisium </h6>
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
                      Judul TA
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
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Jadwal
                    </th>
                    <th class="text-dark opacity-2"></th>
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
                            11181050
                          </p>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-medium">SIM-TA</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-bold">John Michael S.Kom M.Kom</span>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="text-sm font-weight-bold">Sisca Sabyan S.Kom M.Kom</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-sm font-weight-bold">John Michael S.Kom M.Kom</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-sm font-weight-bold">Sisca Sabyan S.Kom M.Kom</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-sm font-weight-medium">21/06/2020 (13.00-16.00)</span>
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
                            11191050
                          </p>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-normal">Cyber Security</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-sm font-weight-bold">John Michael S.Kom M.Kom</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-sm font-weight-bold">Sisca Sabyan S.Kom M.Kom</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="badge badge-sm bg-gradient-light text-dark">-</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="badge badge-sm bg-gradient-light text-dark">-</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="badge badge-sm bg-gradient-light text-dark">-</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row my-4">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-info shadow-success border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Data Mahasiswa Yudisium</h6>
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
                      Judul TA
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
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Jadwal
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-5"> Action </th>
                    <th class="text-dark opacity-2"></th>
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
                            11181050
                          </p>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-medium">SIM-TA</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-bold">John Michael S.Kom M.Kom</span>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="text-sm font-weight-bold">Sisca Sabyan S.Kom M.Kom</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-sm font-weight-bold">John Michael S.Kom M.Kom</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-sm font-weight-bold">Sisca Sabyan S.Kom M.Kom</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-sm font-weight-medium">21/06/2020 (13.00-16.00)</span>
                    </td>
                    <td class="align-item-center">
                      <a class="btn btn-link text-dark mb-0 px-0 ms-4" href="javascript:;">
                        <router-link :to="{name:'Edit'}"><i class="fas fa-pencil-alt text-dark me-0 fa-lg"
                            aria-hidden="true"></i>
                        </router-link>
                      </a>
                      <a class="btn btn-link mb-0 px-0 ms-4" href="javascript:;">
                        <i class="far fa-trash-alt me-0 fa-lg" aria-hidden="true"></i>
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
                            11191050
                          </p>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-normal">Cyber Security</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-sm font-weight-bold">John Michael S.Kom M.Kom</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-sm font-weight-bold">Sisca Sabyan S.Kom M.Kom</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="badge badge-sm bg-gradient-light text-dark">-</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="badge badge-sm bg-gradient-light text-dark">-</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="badge badge-sm bg-gradient-light text-dark">-</span>
                    </td>
                    <td class="align-item-center">
                      <a class="btn btn-link text-dark mb-0 px-0 ms-4" href="javascript:;">
                        <router-link :to="{name:'Edit'}"><i class="fas fa-pencil-alt text-dark me-0 fa-lg"
                            aria-hidden="true"></i>
                        </router-link>
                      </a>
                      <a class="btn btn-link mb-0 px-0 ms-4" href="javascript:;">
                        <i class="far fa-trash-alt me-0 fa-lg" aria-hidden="true"></i>
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
    name: "Yudisium",
  };
  </script>
  