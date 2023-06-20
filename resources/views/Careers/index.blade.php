@extends('layout.app')

@section('title','Careers')


@section('content')
<a href="#popup" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tutorialModal">Add New <i class="fa fa-plus"></i></a>
    <!-- <h1>Selamat Datang </h1> -->
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Example Title 1</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                <td><img src="example.jpg" alt="Example Image"></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Example Title 2</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                <td><img src="example.jpg" alt="Example Image"></td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>

    <!-- Modal and other content... -->
    <!-- Modal -->
    <div class="modal fade" id="tutorialModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Item</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/items" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="no">No</label>
                            <input type="text" class="form-control" id="no" name="no">
                        </div>

                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul">
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file" class="form-control-file" id="gambar" name="gambar">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
