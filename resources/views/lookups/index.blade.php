@extends('layouts.app-main')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Manage lookup</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Type</th>
                                <th>Title</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($lookups) > 0)
                                @foreach ($lookups as $lookup)
                                    <tr>
                                        <td>{{ $lookup->id }}</td>
                                        <td>{{ $lookup->type }}</td>
                                        <td>{{ $lookup->title }}</td>
                                        <td>{{ $lookup->created_at }}</td>
                                        <td>
                                            <a href="{{ route('lookups.edit', $lookup->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <form action="{{ route('lookups.destroy', $lookup->id) }}" method="POST" style="display:inline;">
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
