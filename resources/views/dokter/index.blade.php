@extends('layout.app')

@section('title', 'Dokter')


@section('content')
    <a href="#popup" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tutorialModal">Add New <i
            class="fa fa-plus"></i></a>
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
            @if (!empty($dokter))
                @foreach ($dokter as $key => $item)
                    <tr>

                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>
                            <img style="height: 50px; width:50px;" src="{{ asset('image/dokter/' . $item->image) }}">
                        </td>
                        <td>
                            <button type="button" class="btn btn-warning mb-1" data-toggle="modal"
                                data-target="#editModalDokter">Edit</button>

                            <form action="{{ route('dokter.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button onclick="alert('Item Deleted')" class="btn btn-danger">Delete</button>
                            </form>

                            {{-- Start Edit --}}
                            <div class="modal fade" id="editModalDokter" tabindex="-1" role="dialog"
                                aria-labelledby="editModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModalLabel">Edit Dokter</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('dokter.update', $item->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="name">Nama Dokter:</label>
                                                    <input type="text" class="form-control" id="name" name="name"
                                                        value="{{ $item->name }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="description">Description:</label>
                                                    <textarea class="form-control" id="description" name="description" rows="3"
                                                        value="{{ $item->description }}"required>{{ $item->description }}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="image">Image:</label>
                                                    <input type="file" class="form-control form-control-file"
                                                        id="image" name="image" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            {{-- End Edit --}}
                        </td>
                    </tr>
                @endforeach
            @endif
            <!-- Add more rows as needed -->
        </tbody>
    </table>

    <!-- Modal and other content... -->

    <!-- Modal -->
    <div class="modal" id="tutorialModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Dokter</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('dokter.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama Dokter:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Image:</label>
                            <input type="file" class="form-control form-control-file" id="image" name="image"
                                required>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>

                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
