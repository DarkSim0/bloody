@extends('layouts.app')
 
@section('content')
        <form method="POST" >
            {{ csrf_field() }}
            <!--div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
                <i class="fas fa-check mx-2"></i>
                <strong>Success!</strong> Your profile has been updated! 
            </div-->
              <div class="main-content-container container-fluid px-4">
                <!-- Page Header -->
                <div class="page-header row no-gutters py-4">
                  <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                    <span class="text-uppercase page-subtitle">Overview</span>
                    <h3 class="page-title">User Profile</h3>
                  </div>
                </div>
                <!-- End Page Header -->
                <!-- Default Light Table -->
                <div class="row">
                  <div class="col-lg-4">
                    <div class="card card-small mb-4 pt-3">
                      <div class="card-header border-bottom text-center">
                        <div class="mb-3 mx-auto">
                          <img class="rounded-circle" src="images/avatars/0.jpg" alt="User Avatar" width="110"> </div>
                        <h4 class="mb-0">Auth::user()->name</h4>
                        {{-- <span class="text-muted d-block mb-2">Blood Donor</span> --}}
                        <button style="margin-top:8px;" type="button" class="mb-2 btn btn-sm btn-pill btn-danger mr-2 animated pulse infinite">
                          <i class="material-icons mr-1">person_add</i>Blood Donor</button>
                      </div>
                      <ul class="list-group list-group-flush">
                  
                        <li class="list-group-item p-4">
                          <strong class="text-muted d-block mb-2">NKTI Blood Bank</strong>
                          <span>Donating blood can help in treating patients suffering from cancer. 
                            It is important to know that human blood cannot be manufactured, people are the only source for it and that is why it is important to donate blood and help those in need. It is also possible to store your own blood for your future needs.
                             Make sure the blood is stored in a good blood bank.</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-8">
                    <div class="card card-small mb-4">
                      <div class="card-header border-bottom">
                        <h6 class="m-0">Account Details</h6>
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item p-3">
                          <div class="row">
                            <div class="col">
                              <form>
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="feFirstName">Partner Agency</label>
                                    <input type="text" class="form-control" id="feFirstName" placeholder="Partner Agency" value="" required> 
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="feLastName">Valid ID</label>
                                    <select name="" class="form-control">
                                      <option selected>Choose...</option>
                                      <option value="">Philline Passport</option>
                                      <option value="">Driver's License</option>
                                      <option value="">SSS UMID Card</option>
                                      <option value="">PhilHealth ID</option>
                                      <option value="">Postal ID</option>
                                      <option value="">TIN Card</option>
                                      <option value="">Voter's ID</option>
                                      <option value="">PRC ID</option>
                                      <option value="">Senior Citizen ID</option>
                                      <option value="">OFW ID</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="feEmailAddress">ID Number</label>
                                    <input type="text" class="form-control" id="feEmailAddress" placeholder="123456" value="">
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="fePassword">Marital Status</label>
                                    <select name="" class="form-control">
                                      <option selected>Choose...</option>
                                      <option value="">Single</option>
                                      <option value="">Married</option>
                                      <option value="">Widowed</option>
                                      <option value="">Divorced</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="feInputAddress">Address</label>
                                  <input type="text" class="form-control" id="feInputAddress" placeholder="1234 Main St"> </div>
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="feInputCity">City</label>
                                    <input type="text" class="form-control" id="feInputCity"> </div>
                                  <div class="form-group col-md-6">
                                    <label for="feInputState">Mobile Number</label>
                                      <input type="text" class="form-control" name="" id="">
                                  </div>
                                  
                                </div>
                                <div class="form-row">
                                  <div class="form-group col-md-12">
                                    <label for="feDescription">Occupation</label>
                                    <input type="text" class="form-control" name="" id="">
                                  </div>
                                </div>
                                <button type="submit" class="btn btn-accent">Update Account</button>
                              </form>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
        </form>
    
@endsection