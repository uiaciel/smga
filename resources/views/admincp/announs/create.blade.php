@extends('layouts.admin')
@section('content')
    <div class="container-fluid p-0">
        @auth
            <form action="{{ route('announs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row mb-2 mb-xl-3">
                    <div class="col-auto d-none d-sm-block">
                        <h3><strong>{{ __('admincp.announ') }}</strong> </h3>
                    </div>
                    <div class="col-auto ms-auto text-end mt-n1">
                        <button type="submit" class="btn btn-md btn-primary">{{ __('admincp.publish') }}</button>
                        <button type="reset" class="btn btn-md btn-warning">RESET</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <div class="card">

                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="" class="form-label fw-bold">{{ __('admincp.title') }}</label>
                                    <input type="text" name="title"
                                        class="form-control @error('title') is-invalid @enderror">
                                    @error('title')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label fw-bold">{{ __('admincp.content') }}</label>
                                    <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="10" id="tinymce"></textarea>
                                </div>
                                @error('content')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror



                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header bg-dark text-white"> File PDF

                            </div>
                            <div class="card-body">

                                <div class="mb-3">
                                    <label class="form-label fw-2 fw-bold">PDF</label>
                                    <input type="file" class="form-control @error('files') is-invalid @enderror"
                                        name="pdf" id="files" multiple>
                                    <!-- error message untuk title -->
                                    @error('files')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label class="form-label fw-2 fw-bold">Cover {{ __('admincp.image') }}</label>
                                    <input type="file" class="form-control @error('images') is-invalid @enderror"
                                        name="images" id="images" multiple>
                                    @error('images')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <img id="imgPreview" src="https://via.placeholder.com/600x800.png" alt="preview image"
                                        class="img-fluid">
                                </div>

                                <div class="mb-3" hidden>
                                    <label for="" class="form-label">{{ __('admincp.status') }}</label>
                                    <select class="form-control @error('status') is-invalid @enderror" name="status">
                                        <option value="publish">Publish</option>

                                        <option value="draf">Draf</option>
                                    </select>
                                </div>
                                @error('status')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>


        </div>

        </form>
    @endauth
    </div>
    </div>

    <script>
        document.getElementById('date').valueAsDate = new Date();
    </script>
@endsection
