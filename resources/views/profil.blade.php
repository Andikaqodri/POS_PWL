@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Profil Pengguna</h2>
    <div class="row">
        <div class="col-md-6">
            <!-- Form untuk Update Profil -->
            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT') <!-- Menggunakan PUT untuk update -->
                
                <!-- Nama -->
                <div class="form-group">
                    <label for="name">Nama:</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{ auth()->user()->name }}" required>
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control" id="email" value="{{ auth()->user()->email }}" required>
                </div>

                <!-- Avatar -->
                <div class="form-group">
                    <label for="avatar">Avatar:</label>
                    <input type="file" name="avatar" class="form-control" id="avatar">
                    <!-- Menampilkan Avatar Lama -->
                    @if (auth()->user()->avatar)
                        <div class="mt-2">
                            <img src="{{ asset('storage/avatars/' . auth()->user()->avatar) }}" alt="Avatar" width="100">
                        </div>
                    @endif
                </div>

                <!-- Tombol Submit -->
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
        </div>
    </div>
</div>
@endsection
