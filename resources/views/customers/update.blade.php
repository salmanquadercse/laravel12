@extends('layouts.app-main')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Update Customer</h4>
                <form class="forms-sample" method="POST" action="{{ route('customers.update', $customer->id) }}">
                    @csrf
                    @method('PUT')
                    <!-- Basic Information -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Full Name" value="{{ old('name', $customer->name) }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email"
                                    value="{{ old('email', $customer->email) }}">
                            </div>
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="tel" name="phone" class="form-control" id="phone" placeholder="Phone"
                                    value="{{ old('phone', $customer->phone) }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gender_id">Gender</label>
                                <select name="gender_id" class="form-select" id="gender_id">
                                    <option value="">Select Gender</option>
                                    @foreach ($genders as $key=>$gender)
                                        <option value="{{ $key }}"
                                            {{ old('gender_id', $customer->gender_id) == $key ? 'selected' : '' }}>
                                            {{ $gender }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Address Information -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" name="address" class="form-control" id="address"
                                    placeholder="Address" value="{{ old('address', $customer->address) }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" name="city" class="form-control" id="city" placeholder="City"
                                    value="{{ old('city', $customer->city) }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="state">State/Province</label>
                                <input type="text" name="state" class="form-control" id="state" placeholder="State"
                                    value="{{ old('state', $customer->state) }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="zip">ZIP/Postal Code</label>
                                <input type="text" name="zip" class="form-control" id="zip" placeholder="ZIP"
                                    value="{{ old('zip', $customer->zip) }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="country">Country</label>
                                <input type="text" name="country" class="form-control" id="country"
                                    placeholder="Country" value="{{ old('country', $customer->country) }}">
                            </div>
                        </div>
                    </div>

                    <!-- Additional Fields -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="birthdate">Birthdate</label>
                                <input type="date" name="birthdate" class="form-control" id="birthdate"
                                    value="{{ old('birthdate', $customer->birthdate) }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="is_active" class="form-check-input" id="is_active"
                                            value="1" {{ old('is_active', $customer->is_active) ? 'checked' : '' }}>
                                        Active Status
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <a class="btn btn-light" href="{{ route('customers.index') }}">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            const typeExistCheckbox = document.getElementById('type_exist');
            const typeSelect = document.getElementById('input_select_wrap');
            const genders = @json($genders ?? []);

            // Initialize options for select if needed
            let options = genders.map(gender =>
                `<option value="${gender.id}" ${'{{ old('type') }}' == gender.id ? 'selected' : ''}>
            ${gender.name}
        </option>`
            ).join('');

            function toggleInputType() {
                if (typeExistCheckbox.checked) {
                    typeSelect.innerHTML = `<select class="form-control" id="type" name="type">
                <option value="">Select Type</option>
                ${options}
            </select>`;
                } else {
                    typeSelect.innerHTML = `<input type="text" name="type" class="form-control" id="type" 
                placeholder="Type" value="${document.getElementById('type')?.value || '{{ old('type') }}'}">`;
                }
            }

            // Set initial state if coming from validation
            if ('{{ old('type_exist') }}' === 'on') {
                typeExistCheckbox.checked = true;
                toggleInputType();
            }

            typeExistCheckbox.addEventListener('change', toggleInputType);
        });
    </script> --}}
@endsection
