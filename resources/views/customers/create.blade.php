@extends('layouts.main')

@section('content')
    <div class="container mt-4">
        <h2>Create Customer</h2>

        <form action="{{ route('customers.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <textarea class="form-control" id="address" name="address" required></textarea>
            </div>

            <div class="mb-3">
                <label for="phone_number" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phone_number" name="phone_number" required>
            </div>

            <div class="mb-3">
                <label for="id_card" class="form-label">ID Card</label>
                <input type="text" class="form-control" id="id_card" name="id_card" required>
            </div>

            <button type="submit" class="btn btn-primary">Create Customer</button>
        </form>
    </div>
@endsection
