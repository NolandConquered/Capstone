@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">PDI create</div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf

                        <div class="row mb-3">
                            <label for="lotnumber" class="col-md-4 col-form-label text-md-end">Purchaser's Name</label>

                            <div class="col-md-6">
                                <input id="lotnumber" type="text" class="form-control" required autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="lotnumber" class="col-md-4 col-form-label text-md-end">Purchaser's Name</label>

                            <div class="col-md-6">
                                <input id="lotnumber" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Designated Person's Name</label>

                            <div class="col-md-6">
                                <input id="lotnumber" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Builder's Name</label>

                            <div class="col-md-6">
                                <input id="lotnumber" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Representative's Name</label>

                            <div class="col-md-6">
                                <input id="lotnumber" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Builder's Licence Number</label>

                            <div class="col-md-6">
                                <input id="lotnumber" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Possession Date</label>

                            <div class="col-md-6">
                                <input id="lotnumber" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Civic Address</label>

                            <div class="col-md-6">
                                <input id="lotnumber" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Civic City</label>

                            <div class="col-md-6">
                                <input id="lotnumber" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Civic Province</label>

                            <div class="col-md-6">
                                <input id="lotnumber" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Civic Postal Code</label>

                            <div class="col-md-6">
                                <input id="lotnumber" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Project Name</label>

                            <div class="col-md-6">
                                <input id="lotnumber" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Lot/Unit Number</label>

                            <div class="col-md-6">
                                <input id="lotnumber" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Floor Plan</label>

                            <div class="col-md-6">
                                <input id="lotnumber" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="margin-right:10%;">
                                    Create PDI Form
                                </button>
                                <button type="submit" class="btn btn-primary" style="margin-right:10%;">
                                    Add Task
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection