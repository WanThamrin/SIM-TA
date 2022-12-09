import { createRouter, createWebHistory } from "vue-router";
import Dashboard from "../views/Dashboard.vue";
import Tables from "../views/components/Bimbingan/Tables.vue";
import Bimbingan from "../views/components/Bimbingan/Bimbingan.vue";
import EditMatkul from "../views/components/Bimbingan/Matkul/edit.vue";
import EditRiset from "../views/components/Bimbingan/Riset/edit.vue";
import DetailDosen from "../views/components/Bimbingan/Dosen/Detail.vue";
import TambahDosen from "../views/components/Bimbingan/Dosen/Tambah.vue";
import DetailMhs from "../views/components/Bimbingan/Mahasiswa/Detail.vue";
import TambahMhs from "../views/components/Bimbingan/Mahasiswa/Tambah.vue";
import EditMhs from "../views/components/Bimbingan/Mahasiswa/Edit.vue";
import Info from "../views/components/Pengumuman/Info/Info.vue";
import EditInfo from "../views/components/Pengumuman/Info/edit.vue";
import EyeInfo from "../views/components/Pengumuman/Info/EyeInfo.vue";
import DocSempro from "../views/components/Pengumuman/Dokumen/Sempro/Doc.vue";
import EditDocSempro from "../views/components/Pengumuman/Dokumen/Sempro/edit.vue";
import EyeDocSempro from "../views/components/Pengumuman/Dokumen/Sempro/EyeDoc.vue";
import DocSemhas from "../views/components/Pengumuman/Dokumen/Semhas/Doc.vue";
import EditDocSemhas from "../views/components/Pengumuman/Dokumen/Semhas/edit.vue";
import CreateSidang from "../views/components/Semhas/Jadwal/Create.vue";
import EditJadSemhas from "../views/components/Semhas/Jadwal/Edit.vue";
import EyeDocSemhas from "../views/components/Pengumuman/Dokumen/Semhas/EyeDoc.vue";
import Sempro from "../views/components/Sempro/Sempro.vue";
import TambahSempro from "../views/components/Sempro/Tambah.vue";
import NilaiSempro from "../views/components/Sempro/Nilai/Lihat.vue";
import RevisiSempro from "../views/components/Sempro/Nilai/Revisi.vue";
import Create from "../views/components/Sempro/Jadwal/Create.vue";
import EditJadSempro from "../views/components/Sempro/Jadwal/edit.vue";
import Matkul from "../views/components/Bimbingan/Matkul/Matkul.vue";
import Riset from "../views/components/Bimbingan/Riset/Riset.vue";
import Sidang from "../views/components/Semhas/Sidang.vue";
import TambahSidang from "../views/components/Semhas/Tambah.vue";
import Penilaian from "../views/components/Penilaian/Penilaian.vue";
import Nilai from "../views/components/Penilaian/Nilai.vue";
import LihatNilai from "../views/components/Penilaian/Lihat.vue";
import Relasi from "../views/components/Relasi/Relasi.vue";
import Lihat from "../views/components/Relasi/Lihat.vue";
import Manage from "../views/components/Manage_User/Manage.vue";
import ManageData from "../views/components/Manage_Data/Manage.vue";
import DetailData from "../views/components/Manage_Data/Tugas_Akhir/Detail.vue";
import EditSempro from "../views/components/Manage_Data/Sempro/Edit.vue";
import LihatSempro from "../views/components/Manage_Data/Sempro/Lihat.vue";
import JadSempro from "../views/components/Manage_Data/Sempro/Jadwal/Create.vue";
import EditSidang from "../views/components/Manage_Data/Sidang/Edit.vue";
import LihatSidang from "../views/components/Manage_Data/Sidang/Lihat.vue";
import JadSidang from "../views/components/Manage_Data/Sidang/Jadwal/Create.vue";
import Billing from "../views/Billing.vue";
import Notifications from "../views/Notifications.vue";
import Profile from "../views/Profile.vue"; 
import SignIn from "../views/SignIn.vue";

const routes = [
  {
    path: "/",
    name: "/",
    redirect: "/sign-in",
  },
  {
    path: "/dashboard",
    name: "Dashboard",
    component: Dashboard,
  },
  {
    path: "/tables",
    name: "Tables",
    component: Tables,
  },
  {
    path: "/bimbingan",
    name: "Bimbingan",
    component: Bimbingan,
  },
  {
    path: "/edit-matkul/:id",
    name: "Edit-Matkul",
    component: EditMatkul,
  },
  {
    path: "/edit-riset/:id",
    name: "Edit-Riset",
    component: EditRiset,
  },
  {
    path: "/matkul",
    name: "Matkul",
    component: Matkul,
  },
  {
    path: "/detail-dosen/:id",
    name: "Detail-Dosen",
    component: DetailDosen,
  },
  {
    path: "/tambah-dosen",
    name: "Tambah-Dosen",
    component: TambahDosen,
  },
  {
    path: "/detail-mahasiswa/:id",
    name: "Detail-Mahasiswa",
    component: DetailMhs,
  },
  {
    path: "/edit-mahasiswa",
    name: "Edit-Mhs",
    component: EditMhs,
  },
  {
    path: "/tambah-mahasiswa",
    name: "Tambah-Mahasiswa",
    component: TambahMhs,
  },
  {
    path: "/riset",
    name: "Riset",
    component: Riset,
  },
  {
    path: "/Info",
    name: "Info",
    component: Info,
  },
  {
    path: "/edit-Info/:id",
    name: "Edit-Info",
    component: EditInfo,
  },
  {
    path: "/edit-docsempro/:id",
    name: "Edit-DocSempro",
    component: EditDocSempro,
  },
  {
    path: "/edit-docsemhas/:id",
    name: "Edit-DocSemhas",
    component: EditDocSemhas,
  },
  {
    path: "/eye-info/:id",
    name: "EyeInfo",
    component: EyeInfo,
  },
  {
    path: "/docsempro",
    name: "Doc-Sempro",
    component: DocSempro,
  },
  {
    path: "/eye-docsempro/:id",
    name: "EyeDoc-Sempro",
    component: EyeDocSempro,
  },
  {
    path: "/docsemhas",
    name: "Doc-Semhas",
    component: DocSemhas,
  },
  {
    path: "/eye-docsemhas/:id",
    name: "EyeDoc-Semhas",
    component: EyeDocSemhas,
  },
  {
    path: "/sempro",
    name: "Sempro",
    component: Sempro,
  },
  {
    path: "/tambah-sempro",
    name: "Tambah-Sempro",
    component: TambahSempro,
  },
  {
    path: "/nilai-sempro",
    name: "Nilai-Sempro",
    component: NilaiSempro,
  },
  {
    path: "/create/:id",
    name: "Create",
    component: Create,
  },
  {
    path: "/edit-jadsempro/:id",
    name: "EditJadSempro",
    component: EditJadSempro,
  },
  {
    path: "/createsidang/:id",
    name: "CreateSidang",
    component: CreateSidang,
  },
  {
    path: "/edit-jadsemhas/:id",
    name: "EditJadSemhas",
    component: EditJadSemhas,
  },
  {
    path: "/sidang",
    name: "Sidang",
    component: Sidang,
  },
  {
    path: "/tambah-sidang",
    name: "Tambah-Sidang",
    component: TambahSidang,
  },
  {
    path: "/penilaian",
    name: "Penilaian",
    component: Penilaian,
  },
  {
    path: "/nilai/:id",
    name: "Nilai",
    component: Nilai,
  },
  {
    path: "/lihat-nilai/:id",
    name: "LihatNilai",
    component: LihatNilai,
  },
  {
    path: "/relasi",
    name: "Relasi",
    component: Relasi,
  },
  {
    path: "/lihat/:id",
    name: "Lihat",
    component: Lihat,
  },
  {
    path: "/manage",
    name: "Manage",
    component: Manage,
  },
  {
    path: "/manage-data",
    name: "ManageData",
    component: ManageData,
  },
  {
    path: "/jad-sempro/:id",
    name: "JadSempro",
    component: JadSempro,
  },
  {
    path: "/edit-sempro/:id",
    name: "EditSempro",
    component: EditSempro,
  },
  {
    path: "/lihat-sempro/:id",
    name: "LihatSempro",
    component: LihatSempro,
  },
  {
    path: "/revisi-sempro",
    name: "RevisiSempro",
    component: RevisiSempro,
  },
  {
    path: "/jad-sidang/:id",
    name: "JadSidang",
    component: JadSidang,
  },
  {
    path: "/edit-sidang/:id",
    name: "EditSidang",
    component: EditSidang,
  },
  {
    path: "/lihat-sidang/:id",
    name: "LihatSidang",
    component: LihatSidang,
  },
  {
    path: "/detail-data/:id",
    name: "Detail-Data",
    component: DetailData,
  },
  {
    path: "/billing",
    name: "Billing",
    component: Billing,
  },

  {
    path: "/notifications",
    name: "Notifications",
    component: Notifications,
  },
  {
    path: "/profile",
    name: "Profile",
    component: Profile,
  },
  {
    path: "/sign-in",
    name: "SignIn",
    component: SignIn,
  }

];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
  linkActiveClass: "active",
});

export default router;
