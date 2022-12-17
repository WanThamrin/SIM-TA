<template>
    <div class="container-fluid py-4" v-if=" role == 'dosen'">
        <h4>Data Mahasiswa</h4>
        <span class="text-md text-primary">(Mahasiswa Seminar Proposal)</span>
        <div class="row align-items-center mt-4">
            <div class="col-lg-4 col-sm-8">
                <div class="nav-wrapper position-relative end-0">
                    <ul class="nav nav-pills nav-fill p-1" role="tablist">
                        <li class="nav-item">
                            <a @click.prevent="getDosen1()" class="nav-link mb-0 px-0 py-1 active " data-bs-toggle="tab"
                                href="#get-dosen1" role="tab" aria-selected="false">Pembimbing 1</a>
                        </li>
                        <li @click.prevent="getDosen2()" class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#get-dosen2" role="tab"
                                aria-selected="false">Pembimbing 2</a>
                        </li>
                        <li @click.prevent="getDosen3()" class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#get-dosen3" role="tab"
                                aria-selected="false">Penguji 1</a>
                        </li>
                        <li @click.prevent="getDosen4()" class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#get-dosen4" role="tab"
                                aria-selected="false">Penguji 2</a>
                        </li>
                    </ul>

                </div>

            </div>
        </div>
        <div class="tab-content row my-4">
            <div class="tab-pane fade show active col-12 py-2" id="get-dosen1" role="tabpanel"
                aria-labelledby="get-dosen1">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Daftar Mahasiswa Bimbingan</h6>
                        </div>

                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                                            Nama Mahasiswa
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                                            NIM
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                                            Judul TA
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-5">
                                            Action
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(valSempro, index) in valSempros.dospem1" :key="index">
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="@/assets/img/user.jpg"
                                                        class="avatar avatar-sm me-3 border-radius-lg" alt="user1" />
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ valSempro.name }}</h6>
                                                    <p class="text-sm text-secondary mb-0">
                                                        {{ valSempro.email }}
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-sm font-weight-normal">{{ valSempro.number }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-sm font-weight-normal">{{ valSempro.keyword }}</span>
                                        </td>

                                        <td class="text-center">
                                            <a class="btn btn-link mb-0 px-0" href="javascript:;">
                                                <router-link
                                                    :to="{ name: 'Nilai', params: { id: valSempro.sempros_id } }"><i
                                                        class="fas fa-hashtag text-gradient-dark fa-lg"
                                                        aria-hidden="true">Nilai</i>
                                                </router-link>
                                            </a>
                                            <a class="btn btn-link mb-0 px-0" href="javascript:;">
                                                <router-link
                                                    :to="{ name: 'RevisiNilai', params: { id: valSempro.users_id } }"><i
                                                        class="fas fa-file m-2 text-gradient-dark fa-lg"
                                                        aria-hidden="true">Revisi</i>
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
            <div class="tab-pane fade show col-12 py-2" id="get-dosen2" role="tabpanel" aria-labelledby="get-dosen2">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Daftar Mahasiswa Bimbingan</h6>
                        </div>

                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                                            Nama Mahasiswa
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                                            NIM
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                                            Judul TA
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-5">
                                            Action
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(valSempro, key) in valSempros.dospem2" :key="key">
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="@/assets/img/user.jpg"
                                                        class="avatar avatar-sm me-3 border-radius-lg" alt="user1" />
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ valSempro.name }}</h6>
                                                    <p class="text-sm text-secondary mb-0">
                                                        {{ valSempro.email }}
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-sm font-weight-normal">{{ valSempro.number }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-sm font-weight-normal">{{ valSempro.keyword }}</span>
                                        </td>

                                        <td class="text-center">
                                            <a class="btn btn-link mb-0 px-0" href="javascript:;">
                                                <router-link
                                                    :to="{ name: 'Nilai', params: { id: valSempro.sempros_id } }"><i
                                                        class="fas fa-hashtag text-gradient-dark fa-lg"
                                                        aria-hidden="true">Nilai</i>
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
            <div class="tab-pane fade show col-12 py-2" id="get-dosen3" role="tabpanel" aria-labelledby="get-dosen3">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Daftar Mahasiswa Bimbingan</h6>
                        </div>

                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                                            Nama Mahasiswa
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                                            NIM
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                                            Judul TA
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-5">
                                            Action
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(valSempro, idk) in valSempros.dospeng1" :key="idk">
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="@/assets/img/user.jpg"
                                                        class="avatar avatar-sm me-3 border-radius-lg" alt="user1" />
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ valSempro.name }}</h6>
                                                    <p class="text-sm text-secondary mb-0">
                                                        {{ valSempro.email }}
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-sm font-weight-normal">{{ valSempro.number }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-sm font-weight-normal">{{ valSempro.keyword }}</span>
                                        </td>

                                        <td class="text-center">
                                            <a class="btn btn-link mb-0 px-0" href="javascript:;">
                                                <router-link
                                                    :to="{ name: 'Nilai', params: { id: valSempro.sempros_id } }"><i
                                                        class="fas fa-hashtag text-gradient-dark fa-lg"
                                                        aria-hidden="true">Nilai</i>
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
            <div class="tab-pane fade show col-12 py-2" id="get-dosen4" role="tabpanel" aria-labelledby="get-dosen4">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Daftar Mahasiswa Bimbingan</h6>
                        </div>

                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                                            Nama Mahasiswa
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                                            NIM
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                                            Judul TA
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-5">
                                            Action
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(valSempro, idx) in valSempros.dospeng2" :key="idx">
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="@/assets/img/user.jpg"
                                                        class="avatar avatar-sm me-3 border-radius-lg" alt="user1" />
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ valSempro.name }}</h6>
                                                    <p class="text-sm text-secondary mb-0">
                                                        {{ valSempro.email }}
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-sm font-weight-normal">{{ valSempro.number }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-sm font-weight-normal">{{ valSempro.keyword }}</span>
                                        </td>

                                        <td class="text-center">
                                            <a class="btn btn-link mb-0 px-0" href="javascript:;">
                                                <router-link
                                                    :to="{ name: 'Nilai', params: { id: valSempro.sempros_id } }"><i
                                                        class="fas fa-hashtag text-gradient-dark fa-lg"
                                                        aria-hidden="true">Nilai</i>
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

    <div class="containter-fuild py-4" v-if=" is_admin && role == 'dosen' || is_superadmin">
        <div class="row my-4">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-info shadow-success border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Data Mahasiswa Seminar Proposal</h6>
                            <div class="text-end">
                                <a class="btn btn-sm bg-gradient-info  mb-0 me-2" href="http://127.0.0.1:8000/api/export-sempro">
                                    <i class="fas fa-file-export m-0 p-0 me-2"></i> Export Data
                                </a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                                            Nama Mahasiswa
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                                            NIM
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                                            Judul TA
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-5">
                                            Action
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(allnilai, index) in allnilais.data" :key="index">
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="@/assets/img/user.jpg"
                                                        class="avatar avatar-sm me-3 border-radius-lg" alt="user1" />
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ allnilai.user.name }}</h6>
                                                    <p class="text-sm text-secondary mb-0">
                                                        {{ allnilai.user.email }}
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-sm font-weight-normal">{{ allnilai.user.number }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-sm font-weight-normal">{{ allnilai.t_a.keyword }}</span>
                                        </td>

                                        <td class="text-center">
                                            <a class="btn btn-link mb-0 px-0" href="javascript:;">
                                                <router-link :to="{ name: 'LihatNilai', params: { id: allnilai.users_id }  }"><i
                                                        class="fas fa-hashtag text-gradient-dark fa-lg"
                                                        aria-hidden="true">Nilai</i>
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

import setNavPills from "@/assets/js/nav-pills.js";

export default {
    name: "Penilaian",
  inject: ['is_admin', 'is_superadmin', 'role'],

    data() {
        return {

            valSempros: {
                dospem1: {},
                dospem2: {},
                dospeng1: {},
                dospeng2: {}
            },

            allnilais: {
                user: {},
                t_a: {}

            }


        }
    },

    methods: {
        getvalSempro() {
            let token = localStorage.getItem("token")
            axios.get('http://127.0.0.1:8000/api/nilai-sempro',
                { headers: { "Authorization": `Bearer ${token}` } })
                .then((result) => {
                    console.log(this.valSempros)
                    this.valSempros = result.data.data
                    console.log(this.valSempros)
                }).catch((err) => {
                    console.log(err.response)
                })
        },

        getData() {
            let token = localStorage.getItem("token")
            axios.get('http://127.0.0.1:8000/api/all-nilai',
                { headers: { "Authorization": `Bearer ${token}` } })
                .then((result) => {
                    this.allnilais = result.data
                    console.log(this.allnilais)

                }).catch((err) => {
                    console.log(err.response)
                })
        }
    },

    mounted() {
        this.getvalSempro();
        this.getData()
        setNavPills();
    }
};
</script>
