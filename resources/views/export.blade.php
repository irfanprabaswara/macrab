<table>
    <thead>
    <tr>
        <th>IP GPON</th>
        <th>Panel</th>
        <th>Slot</th>
        <th>Port</th>
        <th>Rak</th>
        <th>Panel</th>
        <th>Slot</th>
        <th>Port</th>
        <th>Rak</th>
        <th>Panel</th>
        <th>Slot</th>
        <th>Core</th>
        <th>FE</th>
        <th>Closure 1</th>
        <th>Closure 2</th>
        <th>Closure 3</th>
        <th>In Panel</th>
        <th>Port</th>
        <th>Out PS Ke-</th>
        <th>Out Panel</th>
        <th>Core</th>
        <th>Distribusi</th>
        <th>Core</th>
        <th>ODP</th>
        <th>Jenis ODP</th>
        <th>Alamat ODP</th>
        <th>LAT</th>
        <th>LONG</th>
    </tr>
    </thead>
    <tbody>
        @foreach($mancore as $m)
            <tr>
                <td>{{ $m->ipGpon }}</td>
                <td>{{ $m->panel }}</td>
                <td>{{ $m->slot }}</td>
                <td>{{ $m->port }}</td>
                <td>{{ $m->earak }}</td>
                <td>{{ $m->eapanel }}</td>
                <td>{{ $m->easlot }}</td>
                <td>{{ $m->eaport }}</td>
                <td>{{ $m->rak }}</td>
                <td>{{ $m->panel }}</td>
                <td>{{ $m->slot }}</td>
                <td>{{ $m->idStatusCore }}</td>
                <td>{{ $m->fe }}</td>
                <td>{{ $m->lat1 }}, {{ $m->long1 }}</td>
                <td>{{ $m->lat2 }}, {{ $m->long2 }}</td>
                <td>{{ $m->lat3 }}, {{ $m->long3 }}</td>
                <td>{{ $m->inPanel }}</td>
                <td>{{ $m->portIn }}</td>
                <td>{{ $m->outPsKe }}</td>
                <td>{{ $m->outPanel }}</td>
                <td>{{ $m->portOut }}</td>
                <td>{{ $m->dis }}</td>
                <td>{{ $m->core }}</td>
                <td>{{ $m->idStatusData }}</td>
                <td>{{ $m->codeOdp }}</td>
                <td>{{ $m->alamatOdp }}</td>
                <td>{{ $m->latitude }}</td>
                <td>{{ $m->longitude }}</td>
            </tr>
        @endforeach
    </tbody>
</table>