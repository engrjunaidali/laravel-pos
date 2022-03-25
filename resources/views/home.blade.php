@extends('layouts.admin')

@section('content-header', 'Dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                  <h3>{{$orders_count}}</h3>
                <p>Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{route('orders.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>

            <div class="small-box bg-info">
              <div class="inner d-flex align-items-center justify-content-between">
                <h3>{{$orders_count}}</h3>
                <p>Today's Orders</p>
              </div>
              {{-- <div class="icon">
                <i class="ion ion-bag"></i>
              </div> --}}
              <a href="{{route('orders.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

{{-- Sell --}}

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                  <h3>{{config('settings.currency_symbol')}} {{number_format($income, 2)}}</h3>
                <p>Sell</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{route('orders.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>

            <div class="small-box bg-success">
              <div class="inner d-flex align-items-center justify-content-between">
                <h3>{{$orders_count}}</h3>
                <p>Today's Income</p>
              </div>
              {{-- <div class="icon">
                <i class="ion ion-bag"></i>
              </div> --}}
              <a href="{{route('orders.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

{{-- Purchase --}}

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{config('settings.currency_symbol')}} {{number_format($income_today, 2)}}</h3>

                <p>Purchase</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="{{route('orders.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>

            <div class="small-box bg-danger">
              <div class="inner d-flex align-items-center justify-content-between">
                <h3>{{$orders_count}}</h3>
                <p>Today's Purchase</p>
              </div>
              {{-- <div class="icon">
                <i class="ion ion-bag"></i>
              </div> --}}
              <a href="{{route('orders.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>

          </div>
          <!-- ./col -->

{{-- Customers --}}

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$customers_count}}</h3>

                <p>Customers</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{ route('customers.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>

            <div class="small-box bg-warning">
              <div class="inner d-flex align-items-center justify-content-between">
                <h3>{{$orders_count}}</h3>
                <p>Today's Purchase</p>
              </div>
              {{-- <div class="icon">
                <i class="ion ion-bag"></i>
              </div> --}}
              <a href="{{route('orders.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            
          </div>
          <!-- ./col -->
    </div>
</div>
@endsection
