@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            @include('includes.alert') 
              <!-- page start-->
              <div class="row">
                  
                  <aside class="profile-info col-lg-9">
                      <section class="panel">
                          <div class="panel-body bio-graph-info">
                              <h1>Employee Info ID: <span style="color:red">{{ $status->employeeID }}</span></h1>
                              <div class="row">
                                  <div class="bio-row">
                                      <p><span>First Name </span>: {{ $status->profile->first_name }}</p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Last Name </span>: {{ $status->profile->last_name }}</p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Country </span>: Australia</p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Birthday</span>: {{ $status->profile->birth_date }}</p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Occupation </span>: {{ $status->email }}</p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Email </span>: {{ $status->email }}</p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Mobile </span>: {{ $status->profile->phone }}</p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Phone </span>: {{ $status->profile->phone }}</p>
                                  </div>
                              </div>
                          </div>
                      </section>
                      <section>
                          <div class="row">
                              <div class="col-lg-6">
                                  <div class="panel">
                                      <div class="panel-body">
                                          <div class="bio-chart">
                                              <h3>Position</h3>
                                          </div>
                                          <div class="bio-desk">
                                              <h3 style="color:green">{{ $status->companyprofile->designation->name }}</h3>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-6">
                                  <div class="panel">
                                      <div class="panel-body">
                                          <div class="bio-chart">
                                              <h3>Rank</h3>
                                          </div>
                                          <div class="bio-desk">
                                              <h3 style="color:purple">{{ $status->companyprofile->rank->rank }}</h3>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-6">
                                  <div class="panel">
                                      <div class="panel-body">
                                          <div class="bio-chart">
                                              <h3>Current Salary</h3>
                                          </div>
                                          <div class="bio-desk">
                                              <h3 style="color:green">{{ $salary }}</h3>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-6">
                                  <div class="panel">
                                      <div class="panel-body">
                                          <div class="bio-chart">
                                              <h3>Join Date</h3>
                                          </div>
                                          <div class="bio-desk">
                                              <h3 style="color:green">{{ $status->companyprofile->join_date }}</h3>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </section>
                  </aside>
                  <aside class="profile-nav col-lg-3">
                      <section class="panel">
                          <div class="user-heading round">
                              <a href="#">
                                  {{ HTML::image($status->profile->photo, 'photo', ['class'=> 'img-responsive', 'width' => '230' , 'height' => '236']) }}
                              </a>
                              <h1>Jonathan Smith</h1>
                              <p>jsmith@flatlab.com</p>
                          </div>

                          <ul class="nav nav-pills nav-stacked">
                              <li class="active"><a href=""> <i class="fa fa-user"></i> Profile</a></li>
                              <li><a href="profile-activity.html"> <i class="fa fa-calendar"></i> Recent Activity <span class="label label-danger pull-right r-activity">9</span></a></li>
                              <li><a href="profile-edit.html"> <i class="fa fa-edit"></i> Edit profile</a></li>
                          </ul>

                      </section>
                  </aside>
              </div>

              <!-- page end-->



@stop


