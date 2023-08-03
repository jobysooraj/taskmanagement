@extends('layouts.app')
@section('content')
<main class="content">
    <div class="container-fluid">

        <div class="header">
            <h1 class="header-title">
                Users
            </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Users</a></li>

                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <div class="card-actions float-end">
                            <button class="btn btn-primary btnFilter me-1">Filter</button>
                            <a href="#" class="btn btn-danger text-white">Reset</a>

                        </div>
                        <h5 class="card-title mb-0">Users</h5>
                    </div>
                    <div class="card-body">
                        {{-- <div class="container filterSection">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="">Professional Id</label>
                                    <select name="professioanalId" id="professioanalId" class="form-control filter" style="width:300px;height:500px">
                                        <option value="0">All</option>
                                        @foreach ($professionals as $professional)
                                        <option value="{{$professional->professional_unique_id}}">
                                            {{$professional->professional_unique_id}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="">Professional Name</label>
                                    <select name="professional_name" id="professional_name" class="form-control filter" style="width:300px;height:500px">
                                        <option value="0">All</option>
                                        @foreach ($professionals as $professional)
                                        <option value="{{$professional->id ?? ''}}">{{$professional->user->name ?? ''}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="">Profession</label>
                                    <select name="profession" id="profession" class="form-control filter" style="width:300px;height:500px">
                                        <option value="0">All</option>
                                        @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="">Status</label>
                                    <select name="status" id='status' class="form-control filter" style="width:300px;height:500px">
                                        <option value="3">All</option>
                                        <option value="1">Active</option>
                                        <option value="0">Pending</option>
                                        <option value="2">Inactive</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="">Verified Status</label>
                                    <select name="verified_status" id='verified_status' class="form-control filter" style="width:300px;height:500px">
                                        <option value="3">All</option>
                                        <option value="1">Verified</option>
                                        <option value="0">Not Verified</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="">Country</label>
                                    <select name="country" id="country" class="form-control filter" style="width:300px;height:500px">
                                        <option value="0">All</option>
                                        @foreach ($countries as $country)
                                        <option value="{{$country->id}}">{{$country->country_name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>

                        </div> --}}
                        <table id="datatables-users" class="table " style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>User</th>
                                    <th>Profession</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Task</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                          
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-xxl-3">
                <div class="card">
                    <div class="card-header">
                        <div class="card-actions float-end">
                            {{-- <a href="#" class="me-1">
                                <i class="align-middle" data-feather="refresh-cw"></i>
                            </a> --}}

                        </div>
                        <h5 class="card-title mb-0 userName">#</h5>
                    </div>
                    <div class="card-body">
                       

                <table class="table table-sm my-2">
                    <tbody>
                        <tr>
                            <th>Professional</th>
                            <td class="userName">#</td>
                        </tr>

                        <tr>
                            <th>Occupation</th>
                            <td class="userOccupation">#</td>
                        </tr>
                        
                        <tr>
                            <th>Email</th>
                            <td class="userEmail text-break">#</td>
                        </tr>
                        <tr>
                            <th>Commission</th>
                            <td class="commission">#</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td class="userPhone">#</td>
                        </tr>

                       

                    </tbody>
                </table>
                <div class="mt-5" id="viewButton">
                    
                    {{-- @isset($professional->id) --}}
                    <a href="#" id="" class="btn btn-primary btn-sm float-end"> View More</a>
                    {{-- @endisset --}}
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</main>
{{-- View Modal --}}
<div class="modal fade" id="proffessionalModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title ">Professional View</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body m-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0 userName">Garrett Winters</h5>
                    </div>
                    <div class="card-body">
                        <div class="row g-0">
                            <div class="col-sm-3 col-xl-12 col-xxl-4 text-center userImage">
                                <img src="{{ asset('theme/assets/img/avatars/avatar-4.jpg') }}" width="64" height="64" class="rounded-circle mt-2" alt="Angelica Ramos">
                            </div>
                            <div class="col-sm-9 col-xl-12 col-xxl-8">
                                <strong>About me</strong>
                                <p class="aboutMe">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                                    commodo ligula eget dolor. Aenean massa. Cumsociis natoque penatibus et magnis dis
                                    parturient montes, nascetur ridiculus mus.</p>
                            </div>
                        </div>

                        <table class="table table-sm my-2">
                            <tbody>
                                <tr>
                                    <th>Professional</th>
                                    <td class="userName">Garrett Winters</td>
                                </tr>

                                <tr>
                                    <th>Occupation</th>
                                    <td class="userOccupation">Doctor</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td class="userEmail">garrett@winters.com</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td class="userPhone">+1234123123123</td>
                                </tr>
                                <tr>
                                    <th>Country</th>
                                    <td>India</td>
                                </tr>
                                <tr>
                                    <th>Work Experience</th>
                                    <td>5 Years</td>
                                </tr>
                                <tr>
                                    <th>Education</th>
                                    <td>MBBS MD</td>
                                </tr>
                                <tr>
                                    <th>Certifications</th>
                                    <td>Diploma in Pshycology</td>
                                </tr>
                                <tr>
                                    <th>Languages Known</th>
                                    <td>English,Hindi</td>
                                </tr>
                                <tr>
                                    <th>Referal Code</th>
                                    <td>Ref-1050</td>
                                </tr>
                                <tr>
                                    <th>Commission</th>
                                    <td>2500.00</td>
                                </tr>
                                <tr>
                                    <th>Timezone</th>
                                    <td>America/Denver GMT-7:00</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td class="userStatus"> <span class="badge bg-success">Active</span></td>
                                </tr>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>

{{-- Change status Modal --}}

{{-- 
@component('components.modal')
@slot('modalid')
approveCategoryModal
@endslot
@slot('modaldialog')
modal-dialog60
@endslot
@slot('modaltitle')
Approve Category
@endslot
@slot('modalbody')
<div class="mb-3"> 
    <p class="mb-0 "> <span class="message"></span> <span class="category_name fs-4"></span></p>
    <input type="hidden" name="professionalId" class="professionalId">
</div>

@endslot
@slot('modalfooter')
<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success approve_category_status">Approve</button>
@endslot
@endcomponent --}}







@endsection
@section('script')
<script src="{{ asset('js/professionals.js') }}"></script>
@endsection
