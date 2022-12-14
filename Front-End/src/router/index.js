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
import EditRevisi from "../views/components/Sempro/Nilai/Edit.vue";
import Create from "../views/components/Sempro/Jadwal/Create.vue";
import EditJadSempro from "../views/components/Sempro/Jadwal/edit.vue";
import Matkul from "../views/components/Bimbingan/Matkul/Matkul.vue";
import Riset from "../views/components/Bimbingan/Riset/Riset.vue";
import Sidang from "../views/components/Semhas/Sidang.vue";
import TambahSidang from "../views/components/Semhas/Tambah.vue";
import Penilaian from "../views/components/Penilaian/Penilaian.vue";
import Nilai from "../views/components/Penilaian/Nilai.vue";
import LihatNilai from "../views/components/Penilaian/Lihat.vue";
import RevisiNilai from "../views/components/Penilaian/Revisi.vue";
import Relasi from "../views/components/Relasi/Relasi.vue";
import Lihat from "../views/components/Relasi/Lihat.vue";
import Manage from "../views/components/Manage_User/Manage.vue";
import ManageData from "../views/components/Manage_Data/Manage.vue";
import DetailData from "../views/components/Manage_Data/Tugas_Akhir/Detail.vue";
import EditSempro from "../views/components/Manage_Data/Sempro/Edit.vue";
import LihatSempro from "../views/components/Manage_Data/Sempro/Lihat.vue";
import JadSempro from "../views/components/Manage_Data/Sempro/Jadwal/Create.vue";
import SemproEditJad from "../views/components/Manage_Data/Sempro/Jadwal/edit.vue";
import SemproLihatJad from "../views/components/Manage_Data/Sempro/Jadwal/Lihat.vue";
import EditSidang from "../views/components/Manage_Data/Sidang/Edit.vue";
import LihatSidang from "../views/components/Manage_Data/Sidang/Lihat.vue";
import JadSidang from "../views/components/Manage_Data/Sidang/Jadwal/Create.vue";
import SidangEditJad from "../views/components/Manage_Data/Sidang/Jadwal/Edit.vue";
import SidangLihatJad from "../views/components/Manage_Data/Sidang/Jadwal/Lihat.vue";
import Notifications from "../views/Notifications.vue";
import Profile from "../views/Profile.vue"; 
import SignIn from "../views/SignIn.vue";
import IsAdmin from "../views/SignInAdmin.vue";

const routes = [
  {
    path: "/",
    name: "/",
    redirect: "/sign-in",
  },
  {
    path: "/is-superadmin",
    name: "IsSuperAdmin",
    component: IsAdmin,
  },
  {
    path: "/dashboard",
    name: "Dashboard",
    component: Dashboard,
  },
  {
    path: "/bimbingan/regis-ta",
    name: "Tables",
    component: Tables,
  },
  {
    path: "/bimbingan",
    name: "Bimbingan",
    component: Bimbingan,
  },
  {
    path: "/bimbingan/riset",
    name: "Riset",
    component: Riset,
  },
  {
    path: "/bimbingan/edit-matkul/:id",
    name: "Edit-Matkul",
    component: EditMatkul,
  },
  {
    path: "/bimbingan/edit-riset/:id",
    name: "Edit-Riset",
    component: EditRiset,
  },
  {
    path: "/bimbingan/matkul",
    name: "Matkul",
    component: Matkul,
  },
  {
    path: "/bimbingan/detail-mahasiswa/:id",
    name: "Detail-Mahasiswa",
    component: DetailMhs,
  },
  {
    path: "/bimbingan/detail-dosen/:id",
    name: "Detail-Dosen",
    component: DetailDosen,
  },
  {
    path: "/profile/tambah-dosen",
    name: "Tambah-Dosen",
    component: TambahDosen,
  },
  {
    path: "/profile/edit-mahasiswa",
    name: "Edit-Mhs",
    component: EditMhs,
  },
  {
    path: "/tambah-mahasiswa",
    name: "Tambah-Mahasiswa",
    component: TambahMhs,
  },
  {
    path: "/notifications/Info",
    name: "Info",
    component: Info,
  },
  {
    path: "/notifications/edit-Info/:id",
    name: "Edit-Info",
    component: EditInfo,
  },
  {
    path: "/notifications/edit-docsempro/:id",
    name: "Edit-DocSempro",
    component: EditDocSempro,
  },
  {
    path: "/notifications/edit-docsemhas/:id",
    name: "Edit-DocSemhas",
    component: EditDocSemhas,
  },
  {
    path: "/notifications/eye-info/:id",
    name: "EyeInfo",
    component: EyeInfo,
  },
  {
    path: "/notifications/docsempro",
    name: "Doc-Sempro",
    component: DocSempro,
  },
  {
    path: "/notifications/eye-docsempro/:id",
    name: "EyeDoc-Sempro",
    component: EyeDocSempro,
  },
  {
    path: "/notifications/docsemhas",
    name: "Doc-Semhas",
    component: DocSemhas,
  },
  {
    path: "/notifications/eye-docsemhas/:id",
    name: "EyeDoc-Semhas",
    component: EyeDocSemhas,
  },
  {
    path: "/sempro",
    name: "Sempro",
    component: Sempro,
  },
  {
    path: "/sempro/tambah-sempro",
    name: "Tambah-Sempro",
    component: TambahSempro,
  },
  {
    path: "/sempro/nilai-sempro",
    name: "Nilai-Sempro",
    component: NilaiSempro,
  },
  {
    path: "/sempro/create/:id",
    name: "Create",
    component: Create,
  },
  {
    path: "/manage-data/sempro-editjad/:id",
    name: "SemproEditJad",
    component: SemproEditJad,
  },
  {
    path: "/manage-data/sempro-lihatjad/:id",
    name: "SemproLihatJad",
    component: SemproLihatJad,
  },
  {
    path: "/sempro/edit-jadsempro/:id",
    name: "EditJadSempro",
    component: EditJadSempro,
  },
  {
    path: "/sidang/createsidang/:id",
    name: "CreateSidang",
    component: CreateSidang,
  },
  {
    path: "/sidang/edit-jadsidang/:id",
    name: "EditJadSemhas",
    component: EditJadSemhas,
  },
  {
    path: "/sidang",
    name: "Sidang",
    component: Sidang,
  },
  {
    path: "/sidang/tambah-sidang",
    name: "Tambah-Sidang",
    component: TambahSidang,
  },
  {
    path: "/penilaian",
    name: "Penilaian",
    component: Penilaian,
  },
  {
    path: "/penilaian/nilai/:id",
    name: "Nilai",
    component: Nilai,
  },
  {
    path: "/penilaian/revisi-nilai/:id",
    name: "RevisiNilai",
    component: RevisiNilai,
  },
  {
    path: "/penilaian/lihat-nilai/:id",
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
    path: "/manage-data/jad-sempro/:id",
    name: "JadSempro",
    component: JadSempro,
  },
  {
    path: "/manage-data/edit-sempro/:id",
    name: "EditSempro",
    component: EditSempro,
  },
  {
    path: "/manage-data/lihat-sempro/:id",
    name: "LihatSempro",
    component: LihatSempro,
  },
  {
    path: "/sempro/nilai-sempro/revisi-sempro",
    name: "RevisiSempro",
    component: RevisiSempro,
  },
  {
    path: "/sempro/nilai-sempro/edit-revisi",
    name: "EditRevisi",
    component: EditRevisi,
  },
  {
    path: "/manage-data/jad-sidang/:id",
    name: "JadSidang",
    component: JadSidang,
  },
  {
    path: "/manage-data/sidang-editjad/:id",
    name: "SidangEditJad",
    component: SidangEditJad,
  },
  {
    path: "/manage-data/sidang-lihatjad/:id",
    name: "SidangLihatJad",
    component: SidangLihatJad,
  },
  {
    path: "/manage-data/edit-sidang/:id",
    name: "EditSidang",
    component: EditSidang,
  },
  {
    path: "/manage-data/lihat-sidang/:id",
    name: "LihatSidang",
    component: LihatSidang,
  },
  {
    path: "/manage-data/detail-data/:id",
    name: "Detail-Data",
    component: DetailData,
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
