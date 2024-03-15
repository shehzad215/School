@extends('layouts.app')

@section('content')
<div class="intro-y d-flex flex-column flex-sm-row align-items-center mt-8">
<h2 class="fs-lg fw-medium me-auto">
    School List
</h2>
<div class="w-full w-sm-auto d-flex mt-4 mt-sm-0">
    <a class="d-flex align-items-center me-3" href="{{ route('institutes.create') }}"> 
        <button class="btn btn-primary shadow-md me-2"><i data-feather="plus"></i> Add New
        School</button>
    </a>
</div>
</div>
<!-- BEGIN: HTML Table Data -->
<div class="intro-y box p-5 mt-5">
     <div class="intro-y g-col-12 ooverflow-x-auto overflow-lg-visible mt-5">
        <table class="table table-report mt-n2">
            <thead>
                <tr>
                    <th class="text-nowrap">Logo</th>
                    <th class="text-nowrap">Code</th>
                    <th class="text-nowrap">Name</th>
                    <th class="text-nowrap">Contact</th>
                    <th class="text-nowrap">Branch</th>
                    <th class="text-nowrap">City</th>
                    <th class="text-nowrap">State</th>
                    <th class="text-nowrap">Action</th>
                </tr>
            </thead>
             <tbody>
                 
             </tbody>
        </table>
     </div>
</div>
@endsection

