@extends('layouts.app-main')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Manage Customers</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Email</th>
                                <th>Birth Date</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($customers) > 0)
                                @foreach ($customers as $customer)
                                    <tr>
                                        <td>{{ $customer->id }}</td>
                                        <td>{{ $customer->name }}</td>
                                        <td>{{ $customer->gender_id }}</td>
                                        <td>{{ $customer->email }}</td>
                                        <td>{{ $customer->birthdate }}</td>
                                        <td>{{ $customer->is_active }}</td>
                                        <td>
                                            <a href="{{ route('customer.edit', $customer->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <form action="{{ route('customer.destroy', $customer->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="5" class="text-center">No lookups data found</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    {{-- <script>
        const genders = @json($genders);
        document.addEventListener('DOMContentLoaded', function() {
            const typeExistCheckbox = document.getElementById('type_exist');
            const typeSelect = document.getElementById('input_select_wrap');
            let options = genders.map((gender) => `<option value="${gender}">${gender}</option>`).join('');

            typeExistCheckbox.addEventListener('change', function() {
                if (this.checked) {
                    typeSelect.innerHTML =
                        `<select class="form-select" id="type" name="type">${options}</select>`;
                } else {
                    typeSelect.innerHTML =
                        `<input type="text" name="type" class="form-control" id="type" placeholder="Type">`;
                }
            });
        });
    </script> --}}
@endsection
