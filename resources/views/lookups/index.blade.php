@extends('layouts.app-main')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic Table</h4>
                <p class="card-description"> Add class <code>.table</code>
                </p>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Profile</th>
                                <th>VatNo.</th>
                                <th>Created</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Jacob</td>
                                <td>53275531</td>
                                <td>12 May 2017</td>
                                <td><label class="badge badge-danger">Pending</label></td>
                            </tr>
                            <tr>
                                <td>Messsy</td>
                                <td>53275532</td>
                                <td>15 May 2017</td>
                                <td><label class="badge badge-warning">In progress</label></td>
                            </tr>
                            <tr>
                                <td>John</td>
                                <td>53275533</td>
                                <td>14 May 2017</td>
                                <td><label class="badge badge-info">Fixed</label></td>
                            </tr>
                            <tr>
                                <td>Peter</td>
                                <td>53275534</td>
                                <td>16 May 2017</td>
                                <td><label class="badge badge-success">Completed</label></td>
                            </tr>
                            <tr>
                                <td>Dave</td>
                                <td>53275535</td>
                                <td>20 May 2017</td>
                                <td><label class="badge badge-warning">In progress</label></td>
                            </tr>
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
