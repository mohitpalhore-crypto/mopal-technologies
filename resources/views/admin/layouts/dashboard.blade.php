@extends('admin.layouts.app')

@section('content')

<h2 class="mb-5">

Admin Dashboard

</h2>

<div class="row g-4">

<div class="col-lg-3">

<div class="card shadow border-0">

<div class="card-body">

<h6>Total Enquiries</h6>

<h2>{{ $totalContacts }}</h2>

</div>

</div>

</div>

<div class="col-lg-3">

<div class="card shadow border-0">

<div class="card-body">

<h6>Today's Enquiries</h6>

<h2>{{ $todayContacts }}</h2>

</div>

</div>

</div>

<div class="col-lg-3">

<div class="card shadow border-0">

<div class="card-body">

<h6>Website Projects</h6>

<h2>{{ $websiteProjects }}</h2>

</div>

</div>

</div>

<div class="col-lg-3">

<div class="card shadow border-0">

<div class="card-body">

<h6>Mobile Apps</h6>

<h2>{{ $mobileProjects }}</h2>

</div>

</div>

</div>

</div>

@endsection