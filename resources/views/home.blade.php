@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="my-5 text-center">
            <h1 class="display-5 fw-bold">مرحبا {{ Auth::user()->name }} !</h1>
        </div>
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4">
            <div class="col">
              <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('https://images.unsplash.com/photo-1577563908411-5077b6dc7624?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                  <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">تواصل بشكل افضل!</h3>
                  <ul class="d-flex list-unstyled mt-auto">
                    <li class="me-auto">
                      <img src="{{ asset('images/kkutr.svg') }}" alt="KKUtr" width="32" height="32" class="rounded-circle">
                    </li>
                    <li class="d-flex align-items-center me-3">
                      <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                      <small>KKUtr</small>
                    </li>
                    <li class="d-flex align-items-center">
                      <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                      <small>01</small>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
      
            <div class="col">
              <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('https://images.unsplash.com/photo-1585398973304-58e04841a7a4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=778&q=80');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                  <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">مساحة لمشاركة افكارك</h3>
                  <ul class="d-flex list-unstyled mt-auto">
                    <li class="me-auto">
                      <img src="{{ asset('images/kkutr.svg') }}" alt="KKUtr" width="32" height="32" class="rounded-circle">
                    </li>
                    <li class="d-flex align-items-center me-3">
                      <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                      <small>KKUtr</small>
                    </li>
                    <li class="d-flex align-items-center">
                      <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                      <small>02</small>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
      
            <div class="col">
              <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                  <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">محيطك الجامعي بين يديك</h3>
                  <ul class="d-flex list-unstyled mt-auto">
                    <li class="me-auto">
                      <img src="{{ asset('images/kkutr.svg') }}" alt="KKUtr" width="32" height="32" class="rounded-circle">
                    </li>
                    <li class="d-flex align-items-center me-3">
                      <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                      <small>KKUtr</small>
                    </li>
                    <li class="d-flex align-items-center">
                      <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                      <small>03</small>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection
