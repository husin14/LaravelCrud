<!DOCTYPE html>

<html>
    <head>
          <title> </title>
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/siswa">Siswa</a>
                        </li>

                      </ul>
                      <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                      </form>
                    </div>
                  </nav>

        <div class="container">

            <h1>Edit Data Siswa</h1>

            @if(session('sukses'))
                <div class="alert alert-success" role="alert">
                        {{session('sukses')}}
                </div>
                      @endif

            <div class="row">

                <div class="col-lg-12">
                <form action="/siswa/{{$siswa->id}}/update" method="POST">
                        {{csrf_field()}}


                        <div class="form-group">
                          <label for="exampleInputEmail1">Nama Depan</label>
                        <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{$siswa->nama_depan}}">
                          <small id="emailHelp" class="form-text text-muted">Masukkan Nama Depanmu.</small>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Belakang</label>
                        <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Belakang" value="{{$siswa->nama_depan}}">
                            <small id="emailHelp" class="form-text text-muted">Masukkan Nama Belakangmu.</small>
                          </div>

                          <div class="form-group">
                              <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                              <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                                  <option>-----</option>
                                <option value="L" @if($siswa->jenis_kelamin=='L')selected @endif>Laki-Laki</option>
                                <option value="P" @if($siswa->jenis_kelamin=='P')selected @endif>Perempuan</option>

                              </select>
                            </div>

                           <div class="form-group">
                                <label for="exampleInputEmail1">Agama</label>
                                <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama" value="{{$siswa->agama}}">
                                <small id="emailHelp" class="form-text text-muted">Agamamu.</small>
                             </div>

                             <div class="form-group">
                                <label for="exampleFormControlTextarea1">Alamat</label>
                             <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$siswa->Alamat}}</textarea>
                              </div>

                              <button type="submit" class="btn btn-warning">Update</button>
                            </form>
                        </div>


            </div>
        </div>


 <!-- Button trigger modal -->


      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">






                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
          </div>
        </div>
      </div>




        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

</html>

