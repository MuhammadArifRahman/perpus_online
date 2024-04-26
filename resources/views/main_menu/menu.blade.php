@extends('main_menu.main');

@section('menu')
    
<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
  <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
    <i class="fe fe-x"><span class="sr-only"></span></i>
  </a>
  <nav class="vertnav navbar navbar-light">
    <!-- nav bar -->
    <div class="w-100 mb-4 d-flex">
      <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
        <img src="{{ asset('images/logo.png') }}" alt="logo smk ypm 8" id="logo" style="width: 3em">
      </a>
    </div>
    <ul class="navbar-nav flex-fill w-100 mt-5">
      <li class="nav-item dropdown">
        <a class="nav-link" href="/dashboard">
          <i class="fe fe-home fe-16"></i>
          <span class="ml-3 item-text">Dashboard</span><span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="/buku">
          <i class="fe fe-book fe-16"></i>
          <span class="ml-3 item-text">Buku</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="/berita">
          <i class="fe fe-box fe-16"></i>
          <span class="ml-3 item-text">Berita</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="/peminjaman">
          <i class="fe fe-credit-card fe-16"></i>
          <span class="ml-3 item-text">Peminjaman</span>
        </a>
      </li>
    </ul>
  </nav>
</aside>
@endsection


