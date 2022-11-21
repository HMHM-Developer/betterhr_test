@extends('admin.layouts.master')

@section('title','Employee Create Page')
@section('content')
 <!-- MAIN CONTENT-->
 <div class="main-content">
    <div class="section__content section__content--p30">
      <div class="container-fluid">
        <div class="row">
            <div class="col-3 offset-8">
                <a href="{{ route('employee#list') }}"><button class="btn bg-dark text-white my-3">List</button></a>
            </div>
        </div>
        <div class="col-lg-6 offset-3">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center title-2">Create Employee</h3>
                    </div>
                    <hr>
                    <form action="{{ route('employee#create') }}" method="post" novalidate="novalidate">
                      @csrf 
                        <div class="form-group">
                            <label class="control-label mb-1">Name</label>
                            <input id="cc-pament" name="employeeName" type="text" class="form-control @error('employeeName') is-invalid @enderror" value="{{ old('employeeName') }}" aria-required="true" aria-invalid="false" placeholder="Employee Name...">
                            @error('employeeName')
                             <div class="invalid-feedback">
                                 {{ $message }}
                             </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-1">Department</label>
                            <input id="cc-pament" name="department" type="text" class="form-control @error('department') is-invalid @enderror" value="{{ old('department') }}" aria-required="true" aria-invalid="false" placeholder="Enter your department...">
                            @error('department')
                             <div class="invalid-feedback">
                                 {{ $message }}
                             </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-1">Email</label>
                            <input id="cc-pament" name="email" type="text" class="form-control @error('email') is-invalid @enderror" value="{{ old('email')}}" aria-required="true" aria-invalid="false" placeholder="example@gmail.com">
                            @error('email')
                             <div class="invalid-feedback">
                                 {{ $message }}
                             </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-1">Phone</label>
                            <input id="cc-pament" name="phone" type="number" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" aria-required="true" aria-invalid="false" placeholder="09xxxxxxx...">
                            @error('phone')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                           @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-1">Address</label>
                            <input id="cc-pament" name="address" type="text" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}" aria-required="true" aria-invalid="false" placeholder="Enter your address...">
                            @error('address')
                             <div class="invalid-feedback">
                                 {{ $message }}
                             </div>
                            @enderror
                        </div>
                        <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <span id="payment-button-amount">Create</span>
                                {{-- <span id="payment-button-sending" style="display:none;">Sending…</span> --}}
                                <i class="fa-solid fa-circle-right"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </div>
    </div>
 </div>
 <!--End Main Content-->
@endsection