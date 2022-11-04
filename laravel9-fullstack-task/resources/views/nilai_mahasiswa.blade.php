<h1 align="center" style="padding-top: 2rem;">Nilai Mahasiswa </h1>
{{-- looping table title --}}
{{--No, Nama, Nilai, Keterangan--}}

<table align="center" cellpadding="10" style="width: 50%;">
<thead>
    <tr bgcolor="#829460" style="color: white">
    @foreach ($data_table as $dt)
        <th>{{$dt}}</th>
    @endforeach
    </tr>
</thead>
<tbody>
    @php 
    $no = 1;
    @endphp
    @foreach ($siswa as $sd)
        @php
        $ket = $sd['nilai'] > 60 ? 'Lulus' :'Gagal';
        $color = $no % 2 == 0 ?  'yellow' : 'aqua';
        @endphp

    <tr bgcolor="{{$color}}">
        <td align="center">{{$no ++}}</td>
        <td>{{$sd['nama']}}</td>
        <td align="center">{{$sd['nilai']}}</td>
        <td>{{$ket}}</td>
    </tr>
    @endforeach
</tbody>
</table>