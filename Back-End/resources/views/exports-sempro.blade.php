@php
    function rupiah($angka){

        $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
        return $hasil_rupiah;

    }
@endphp
<table cellspacing="0" cellpadding="13" style=" text-align: center; border: 1px solid #000">
    <thead>
        <tr>
            <td style="font-size: 12px; font-weight: bold; text-align: center;" colspan="5">
                LAPORAN NILAI SEMPRO
            </td>
        </tr>
        <tr>
            <th style=" font-weight: bold; text-align: center; border: 1px solid #000"><b>No.</b></th>
            <th style=" font-weight: bold; text-align: center; border: 1px solid #000"><b>Nama Mahasiswa</b></th>
            <th style=" font-weight: bold; text-align: center; border: 1px solid #000"><b>Nama Dosen</b></th>
            <th style=" font-weight: bold; text-align: center; border: 1px solid #000"><b>Nilai Presentasi</b></th>
            <th style=" font-weight: bold; text-align: center; border: 1px solid #000"><b>Nilai Laporan</b></th>
        </tr>
    </thead>
    <tbody>
        @php
            $no = 1;
        @endphp
        @foreach($sempros as $sempro)
            @php
                $dospem1 = App\Models\NilaiSempro::where('sempros_id',$sempro->id)
                ->where('dosen_id',$sempro->TA->dospem1)->first();

                $dospem2 = App\Models\NilaiSempro::where('sempros_id',$sempro->id)
                ->where('dosen_id',$sempro->TA->dospem2)->first();

                $dospeng1 = App\Models\NilaiSempro::where('sempros_id',$sempro->id)
                ->where('dosen_id',$sempro->TA->dospeng1)->first();

                $dospeng2 = App\Models\NilaiSempro::where('sempros_id',$sempro->id)
                ->where('dosen_id',$sempro->TA->dospeng2)->first();

            @endphp
            <tr>
                <td rowspan="4" style=" text-align: center; border: 1px solid #000">{{$no}}</td>
                <td rowspan="4" style=" text-align: center; border: 1px solid #000">{{$sempro->user->name}}</td>
                <td style=" text-align: center; border: 1px solid #000">{{$sempro->TA->dosen1->name}}</td>
                <td style=" text-align: center; border: 1px solid #000">{{$dospem1 ? $dospem1->nilai_presentasi : ''}}</td>
                <td style=" text-align: center; border: 1px solid #000">{{$dospem1 ? $dospem1->nilai_laporan : ''}}</td>
            </tr>
            <tr>
                <td style=" text-align: center; border: 1px solid #000">{{$sempro->TA->dosen2->name}}</td>
                <td style=" text-align: center; border: 1px solid #000">{{$dospem2 ? $dospem2->nilai_presentasi : ''}}</td>
                <td style=" text-align: center; border: 1px solid #000">{{$dospem2 ? $dospem2->nilai_laporan : ''}}</td>
            </tr>
            <tr>
                <td style=" text-align: center; border: 1px solid #000">{{$sempro->TA->dosen3->name}}</td>
                <td style=" text-align: center; border: 1px solid #000">{{$dospeng1 ? $dospeng1->nilai_presentasi : ''}}</td>
                <td style=" text-align: center; border: 1px solid #000">{{$dospeng1 ? $dospeng1->nilai_laporan : ''}}</td>
            </tr>
            <tr>
                <td style=" text-align: center; border: 1px solid #000">{{$sempro->TA->dosen4->name}}</td>
                <td style=" text-align: center; border: 1px solid #000">{{$dospeng2 ? $dospeng2->nilai_presentasi : ''}}</td>
                <td style=" text-align: center; border: 1px solid #000">{{$dospeng2 ? $dospeng2->nilai_laporan : ''}}</td>
            </tr>
            @php
                $no = $no+1;
            @endphp
        @endforeach
    </tbody>
</table>
