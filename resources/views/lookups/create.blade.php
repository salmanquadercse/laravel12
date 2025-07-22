@extends('layouts.app-main')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Lookup Manage</h4>
                <p class="card-description">Create Lookup</p>
                <form class="forms-sample" method="POST" action="{{ route('lookups.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="type_exist" class="form-check-input" id="type_exist">
                        <label class="form-check-label" for="type_exist">Type Exist?</label>
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <div id="input_select_wrap">
                            <input type="text" name="type" class="form-control" id="type" placeholder="Type">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        const genders = @json($genders);
        document.addEventListener('DOMContentLoaded', function () {
            const typeExistCheckbox = document.getElementById('type_exist');
            const typeSelect = document.getElementById('input_select_wrap');
            let options = genders.map((gender)=> `<option value="${gender}">${gender}</option>`).join('');

            typeExistCheckbox.addEventListener('change', function () {
                if (this.checked) {
                    typeSelect.innerHTML = `<select class="form-select" id="type" name="type">${options}</select>`;
                } else {
                    typeSelect.innerHTML = `<input type="text" name="type" class="form-control" id="type" placeholder="Type">`;
                }
            });
        });
    </script>
@endsection
