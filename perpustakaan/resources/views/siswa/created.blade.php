<head>
    
    <title>Form Siswa</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
    <a class="nav-link active" href="home">Library <span class="sr-only">(current)</span></a>
</nav><br>
    <form action="{{route('storedataSiswa')}}" method="POST">
    @csrf

    <section class="information" id="information">
    <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center">STUDENT REGISTRATION</h2><br>

                    <select name="id_kelas" id="">
        @foreach($kelas as $kls) 
            <option value="{{$kls->id_kelas}}">{{$kls->nama_kelas}}</option>
        @endforeach
        </select>

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group p-3 mb-2 bg-dark text-white">

                       <label for="exampleInputPassword1">NIS :</label>
                       <input type="text" class="form-control" name="nis"><br>

                       <label for="exampleInputPassword1">NAME :</label>
                       <input type="text" class="form-control" name="nama"><br>

                       <label for="exampleInputPassword1">ADDRESS :</label>
                       <input type="text" class="form-control" name="alamat"><br>

                       <label for="exampleInputPassword1">NO.HANDPHONE :</label>
                       <input type="text" class="form-control" name="no_hp"><br>

                    </div>
                       <input type="submit" class="btn btn-secondary">
                       <input type="reset" class="btn btn-secondary">
                </div>
            </div>
        </div>
    
    </div>
</div>
</div>
</div>
</div>
</div>

</form>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>