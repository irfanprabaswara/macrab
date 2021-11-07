<!-- <style>
table, th {
  border: 1px solid black;
  border-collapse: collapse;
}
tr:nth-child(even) {background-color: #f2f2f2;}
</style> -->
<table>
    <thead>
    <tr>
        <th colspan="4" style="text-align:center;">GPON</th>
        <th colspan="4" style="text-align:center;">FTM EA</th>
        <th colspan="4" style="text-align:center;">FTM OA</th>
        <th colspan="4" style="text-align:center;">FEEDER</th>
        <th colspan="5" style="text-align:center;">ODC</th>
        <th style="text-align:center;">DISTRIBUSI</th>
        <th colspan="6" style="text-align:center;">ODP</th>
    </tr>
    <tr>
        <th style="text-align:center;">IP GPON</th>
        <th style="text-align:center;">Panel</th>
        <th style="text-align:center;">Slot</th>
        <th style="text-align:center;">Port</th>
        <th style="text-align:center;">Rak</th>
        <th style="text-align:center;">Panel</th>
        <th style="text-align:center;">Slot</th>
        <th style="text-align:center;">Port</th>
        <th style="text-align:center;">Rak</th>
        <th style="text-align:center;">Panel</th>
        <th style="text-align:center;">Slot</th>
        <th style="text-align:center;">Core</th>
        <th style="text-align:center;">FE</th>
        <th style="text-align:center;">Closure 1</th>
        <th style="text-align:center;">Closure 2</th>
        <th style="text-align:center;">Closure 3</th>
        <th style="text-align:center;">In Panel</th>
        <th style="text-align:center;">Port</th>
        <th style="text-align:center;">Out PS Ke-</th>
        <th style="text-align:center;">Out Panel</th>
        <th style="text-align:center;">Core</th>
        <th style="text-align:center;">Distribusi</th>
        <th style="text-align:center;">Core</th>
        <th style="text-align:center;">ODP</th>
        <th style="text-align:center;">Jenis ODP</th>
        <th style="text-align:center;">Alamat ODP</th>
        <th style="text-align:center;">LAT</th>
        <th style="text-align:center;">LONG</th>
    </tr>
    </thead>
    <tbody>
        @foreach($mancore as $m)
            <tr>
                <td style="text-align:center;">{{ $m->ipGpon }}</td>
                <td style="text-align:center;">{{ $m->panel }}</td>
                <td style="text-align:center;">{{ $m->slot }}</td>
                <td style="text-align:center;">{{ $m->port }}</td>
                <td style="text-align:center;">{{ $m->earak }}</td>
                <td style="text-align:center;">{{ $m->eapanel }}</td>
                <td style="text-align:center;">{{ $m->easlot }}</td>
                <td style="text-align:center;">{{ $m->eaport }}</td>
                <td style="text-align:center;">{{ $m-> oarak }}</td>
                <td style="text-align:center;">{{ $m-> oapanel }}</td>
                <td style="text-align:center;">{{ $m-> oaslot }}</td>
                <td style="text-align:center;">{{ $m-> oacore }}</td>
                <td style="text-align:center;">{{ $m->fe }}</td>
                <td style="text-align:center;">{{ $m->lat1 }}, {{ $m->long1 }}</td>
                <td style="text-align:center;">{{ $m->lat2 }}, {{ $m->long2 }}</td>
                <td style="text-align:center;">{{ $m->lat3 }}, {{ $m->long3 }}</td>
                <td style="text-align:center;">{{ $m->inPanel }}</td>
                <td style="text-align:center;">{{ $m->portIn }}</td>
                <td style="text-align:center;">{{ $m->outPsKe }}</td>
                <td style="text-align:center;">{{ $m->outPanel }}</td>
                <td style="text-align:center;">{{ $m->portOut }}</td>
                <td style="text-align:center;">{{ $m->dis }}</td>
                <td style="text-align:center;">{{ $m->core }}</td>
                <td style="text-align:center;">{{ $m->codeOdp }}</td>
                <td style="text-align:center;">{{ $m->codeJenisOdp }}</td>
                <td style="text-align:center;">{{ $m->alamatOdp }}</td>
                <td style="text-align:center;">{{ $m->latitude }}</td>
                <td style="text-align:center;">{{ $m->longitude }}</td>
            </tr>
        @endforeach
    </tbody>
</table>