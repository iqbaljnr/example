<!DOCTYPE html>
<head>
   <title>Document</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
    <a class="nav-link active" href="home">Library <span class="sr-only">(current)</span></a>
</nav><br>
    <section class="information" id="information">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center">STUDENT LIST</h2><br>

    <div class="container">
        <div class="row">
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">NO</th>
            <th scope="col">NIS</th>
            <th scope="col">NAME</th>
            <th scope="col">KELAS</th>
            <th scope="col">ADDRESS</th>
            <th scope="col">NO.HANDPHONE</th>
        </tr>

        @foreach($dataSiswa as $data)
        <tr>
            <td class="table-secondary">{{$loop->iteration}}</td>
            <td class="table-secondary">{{$data->nis}}</td>
            <td class="table-secondary">{{$data->nama}}</td>
            <td class="table-secondary">{{$data->kelas->nama_kelas}}</td>
            <td class="table-secondary">{{$data->alamat}}</td>
            <td class="table-secondary">{{$data->no_hp}}</td>
        </tr>
        @endforeach

</thead>
    </table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>