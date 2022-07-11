<html>
<head>
    <title>Agreement</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <table>
        <tr>
            <td><b>Nama</b></td>
            <td><b> : </b></td>
            <td colspan="5">{{$d->nama_depan. " " .$d->nama_belakang}}</td>
        </tr>
        <tr>
            <td><b>Email</b></td>
            <td><b> : </b></td>
            <td>{{$d->email}}</td>
            <td width="100px">&nbsp;</td>
            <td><b>No. HP</b></td>
            <td><b> : </b></td>
            <td>{{$d->no_hp}}</td>
        </tr>
    </table>
    <hr>
    <center><b><u>Peraturan Hostel Peta Lodge</u></b></center>
    <div style="text-align: justify; font-size: 13px;"><?php echo $p->peraturan; ?></div>
    <p>
        Dengan menandatangani form ini, maka Anda setuju untuk mengikuti peraturan-peraturan di atas.
    </p>
    <table>
        <tr>
            <td><img src="upload/{{$d->signature}}" alt="" width="100px" ></td>
        </tr>
        <tr>
            <td>({{$d->nama_depan. " " .$d->nama_belakang}})</td>
        </tr>
    </table>
</body>

</html>