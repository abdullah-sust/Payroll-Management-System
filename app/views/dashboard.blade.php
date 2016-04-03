@extends('layouts.default')
    @section('content')
        @include('includes.alert')
          <section class="wrapper">

                <!-- search area ---->
               <form class="form-horizontal search-result" action="{{ route('search.employee.show') }}" method="get">
                          <div class="form-group">
                              <label class="col-lg-1 col-sm-1 control-label"></label>
                              <div class="col-lg-8 col-sm-8">
                                  <input type="text" name="id" class="form-control input-xxlarge" placeholder="Type Employee ID e.g. 100101 or Name e.g. Masiur or Abdullah">
                              </div>
                              <div class="col-lg-2">
                                  <button class="btn btn-primary" type="submit">SEARCH</button>
                              </div>
                          </div>
                      </form>
                <!-- end search area >

              <!--state overview start-->
              <div class="row state-overview">
              
                  <div class="col-lg-3 col-sm-6 col-md-offset-4">
                      <section class="panel">
                          <div class="symbol terques">
                              <i class="fa fa-user"></i>
                          </div>
                          <div class="value">
                              <h1 class="count">
                                  {{ count(User::all()) }}
                              </h1>
                              <p>Employees</p>
                          </div>
                      </section>
                  </div>
                
                <!-- 
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol red">
                              <i class="fa fa-tags"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count2">
                                  0
                              </h1>
                              <p>Sales</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol yellow">
                              <i class="fa fa-shopping-cart"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count3">
                                  0
                              </h1>
                              <p>New Order</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol blue">
                              <i class="fa fa-bar-chart-o"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count4">
                                  0
                              </h1>
                              <p>Total Profit</p>
                          </div>
                      </section>
                  </div>
                  ############################# -->
              </div>
              <!--state overview end-->


          </section>
      <!--main content end-->
         
@stop