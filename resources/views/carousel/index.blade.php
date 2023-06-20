@extends('layout.app')

@section('title', 'Carousel')


@section('content')
    <a href="#popup" class="btn btn-primary mb-3" data-toggle="modal" data-target="#modalAddCarousel">Add New <i
            class="fa fa-plus"></i></a>
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
            @if (!empty($carousel))
                @foreach ($carousel as $key => $item)
                    <tr>

                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->description }}</td>
                        <td>
                            <img style="height: 50px; width:50px;" src="{{ asset('image/carousel/' . $item->image) }}">
                        </td>
                        <td>
                            <button type="button" class="btn btn-warning mb-1" data-toggle="modal"
                                data-target="#editModalCarousel">Edit</button>

                            <form action="{{ route('carousel.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button onclick="alert('Item Deleted')" class="btn btn-danger">Delete</button>
                            </form>

                            {{-- Start Edit --}}
                            <div class="modal fade" id="editModalCarousel" tabindex="-1" role="dialog"
                                aria-labelledby="editModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModalLabel">Edit Carousel</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('carousel.update', $item->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="title">Title:</label>
                                                    <input type="text" class="form-control" id="title" name="title"
                                                        value="{{ $item->title }}" required>
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

    <!-- Modal -->
    <div class="modal" id="modalAddCarousel" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Carousel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('carousel.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" class="form-control" id="title" name="title" required>
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
