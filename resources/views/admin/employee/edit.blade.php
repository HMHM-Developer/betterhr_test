@extends('admin.layouts.master')

@section('title','Employee Edit Page')
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
                        <h3 class="text-center title-2">Edit Employee</h3>
                    </div>
                    <hr>
                    <form action="{{ route('employee#update',$employee->employee_id) }}" method="post" novalidate="novalidate">
                      @csrf 
                        <div class="form-group">
                            <label class="control-label mb-1">Name</label>
                            <input id="cc-pament" name="employeeName" type="text" value="{{ old('employeeName',$employee->employee_name) }}" class="form-control @error('employeeName') is-invalid @enderror" aria-required="true" aria-invalid="false" placeholder="Employee Name...">
                            @error('employeeName')
                             <div class="invalid-feedback">
                                 {{ $message }}
                             </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-1">Department</label>
                            <input id="cc-pament" name="department" type="text" value="{{ old('department',$employee->department) }}" class="form-control @error('department') is-invalid @enderror" aria-required="true" aria-invalid="false" placeholder="Enter your department...">
                            @error('department')
                             <div class="invalid-feedback">
                                 {{ $message }}
                             </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-1">Email</label>
                            <input id="cc-pament" name="email" type="text" value="{{ old('email',$employee->email)}}" class="form-control @error('email') is-invalid @enderror" aria-required="true" aria-invalid="false" placeholder="example@gmail.com">
                            @error('email')
                             <div class="invalid-feedback">
                                 {{ $message }}
                             </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-1">Phone</label>
                            <input id="cc-pament" name="phone" type="number" value="{{ old('phone',$employee->phone) }}" class="form-control @error('phone') is-invalid @enderror" aria-required="true" aria-invalid="false" placeholder="09xxxxxxx...">
                            @error('phone')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                           @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-1">Address</label>
                            <input id="cc-pament" name="address" type="text" value="{{ old('address',$employee->address) }}" class="form-control @error('address') is-invalid @enderror" aria-required="true" aria-invalid="false" placeholder="Enter your address...">
                            @error('address')
                             <div class="invalid-feedback">
                                 {{ $message }}
                             </div>
                            @enderror
                        </div>
                        <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <span id="payment-button-amount">Update</span>
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