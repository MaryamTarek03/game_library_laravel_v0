@if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/bootstrap/css/bootstrap.css', 'resources/bootstrap/js/bootstrap.js'])
@endif

<div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
    <x-layout image="/images/background.png" text="{{ $user->name }}">
        <div class="container d-flex justify-content-center align-items-center">
                <form>
                    <!-- Profile Photo -->
                    <div class="text-center">
                        <img src="{{ $user->image }}" class="img_profile rounded-circle img-fluid circle-image " alt="Profile Image">
                    </div>
                    <br>
                    <!-- Name -->
                    <div class="input-group mb-3">
                    <span class="input-group-text bg-white border-0">
                        <i class="bi bi-person-fill text-secondary"></i>
                    </span>
                        <label for="text" class="form-label"> {{ $user->username }}</label>
                    </div>
                    <!-- Email -->
                    <div class="input-group mb-3">
                    <span class="input-group-text bg-white border-0">
                        <i class="bi bi-envelope-fill text-secondary"></i>
                    </span>
                        <label for="email" class="form-label">{{ $user->email }}</label>
                    </div>
                    <!-- buttons -->
                    <div class=" d-flex m-3">
                        <button class="btn btn-primary rounded-4 fw-bold" style="margin-right: 150px;"><a href="index.html" class="a_button">Update</a></button>
                        <button class="btn btn-primary rounded-4 fw-bold" style="margin-right: 150px;"><a href="index.html" class="a_button">Categories</a></button>
                    </div>
                </form>
        </div>

    </x-layout>
</div>
