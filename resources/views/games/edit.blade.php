@if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/bootstrap/css/bootstrap.css', 'resources/bootstrap/js/bootstrap.js'])
@endif
<x-layout>
<div class="container d-flex justify-content-center align-items-center vh-100 wh-100">
        <div class="card p-4 shadow-lg">
            <h2 class="text-center mb-3 fw-bold w-100">Games</h2>
            <div class="container mt-5">
                <div class="card p-4">
                    <form>
                        <!-- Title and Description -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" placeholder="Title">
                            </div>
                            <div class="col-md-6">
                                <label for="description" class="form-label">Description</label>
                                <input type="text" class="form-control" id="description" placeholder="Description">
                            </div>
                        </div>
            
                        <!-- Price and Release Date -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="price" class="form-label">Price</label>
                                <input type="text" class="form-control" id="price" placeholder="Price">
                            </div>
                            <div class="col-md-6">
                                <label for="release-date" class="form-label">Release Date</label>
                                <input type="date" class="form-control" id="release-date">
                            </div>
                        </div>
            
                        <!-- Poster Image and Cover Image -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="poster-image" class="form-label">Poster Image</label>
                                <input type="file" class="form-control" id="poster-image">
                            </div>
                            <div class="col-md-6">
                                <label for="cover-image" class="form-label">Cover Image</label>
                                <input type="file" class="form-control" id="cover-image">
                            </div>
                        </div>
            
                        <!-- Color -->
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="color" class="form-label">Color</label>
                                <input type="color" class="form-control" id="color" placeholder="Color">
                            </div>
                        </div>
            
                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary px-5">Update</button>
                        </div>
                    </form>
                </div>
            </div>
            
    </div>
    </div>
    

</x-layout>