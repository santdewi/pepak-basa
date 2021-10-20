@extends('layouts.main')

@section('container')

<div class="row g-3 my-2">
  <div class="col-md-6">
    <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
      <div>
        <h3 class="fs-2">10</h3>
        <p class="fs-5">Friends</p>
      </div>
      <i class="fas fa-user-friends fs-1 primary-text border rounded-full secondary-bg p-3"></i>
    </div>
  </div>
  <div class="col-md-6">
    <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
      <div>
        <h3 class="fs-2">5</h3>
        <p class="fs-5">Materi</p>
      </div>
      <i class="fas fa-book fs-1 primary-text border rounded-full secondary-bg p-3"></i>
    </div>
  </div>
</div>

<div class="row my-4">
  <div class="col">
    <div class="card card-outline card-info">
      <div class="card-body">
        <p style="text-align: center">Logo</p>
      </div>
    </div>

  </div>
</div>

{{-- <div class="row my-5">
  <h3 class="fs-4 mb-3">Recent Orders</h3>
  <div class="col">
    <table class="table bg-white rounded shadow-sm  table-hover">
        <thead>
            <tr>
                <th scope="col" width="50">#</th>
                <th scope="col">Product</th>
                <th scope="col">Customer</th>
                <th scope="col">Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Television</td>
                <td>Jonny</td>
                <td>$1200</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Laptop</td>
                <td>Kenny</td>
                <td>$750</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Cell Phone</td>
                <td>Jenny</td>
                <td>$600</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Fridge</td>
                <td>Killy</td>
                <td>$300</td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>Books</td>
                <td>Filly</td>
                <td>$120</td>
            </tr>
        </tbody>
    </table>
  </div>
</div> --}}

    {{-- <div class="dash-content">
        <div class="overview-boxes">
            <div class="box">
                <div class="left-side">
                    <div class="box-topic">Friends</div>
                    <div class="number">30</div>
                    <div class="indicator">
                        <i class='bx bx-up-arrow-alt'></i>
                        <span class="text">Up to yesterday</span>
                    </div>
                </div>
                <i class="bi bi-people-fill icon"></i>
            </div>
            <div class="box">
                <div class="right-side">
                    <div class="box-topic">Materi</div>
                    <div class="number">5</div>
                    <div class="indicator">
                        <i class='bx bx-up-arrow-alt'></i>
                        <span class="text">Up to yesterday</span>
                    </div>
                </div>
                <i class='bx bxs-book icon two'></i>
            </div>
        </div>

    </div> --}}
      

@endsection