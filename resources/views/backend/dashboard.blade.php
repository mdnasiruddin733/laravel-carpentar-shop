@extends('layouts.backend_layout')
@section('main-content')
<div class="row">
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Total Orders</div>
                        <div class="widget-subheading">Last month expenses</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-success">1896</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Total Product</div>
                        <div class="widget-subheading">Revenue streams</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-warning">3545</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Pre-orders</div>
                        <div class="widget-subheading">People Interested</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-danger">45</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Total Service</div>
                        <div class="widget-subheading">People Interested</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-alternate">45</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Service Request</div>
                        <div class="widget-subheading">Service Booking </div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-success">34</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="main-card mb-3 card">
      <div class="card-header">Recent orders
      </div>
      <div class="table-responsive">
        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
          <thead>
            <tr>
              <th class="text-center">#</th>
              <th>Name</th>
              <th class="text-center">City</th>
              <th class="text-center">Status</th>
              <th class="text-center">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-center text-muted">#345</td>
              <td>
                <div class="widget-content p-0">
                  <div class="widget-content-wrapper">
                    <div class="widget-content-left mr-3">
                      <div class="widget-content-left">
                        <img width="40" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                      </div>
                    </div>
                    <div class="widget-content-left flex2">
                      <div class="widget-heading">John Doe</div>
                      <div class="widget-subheading opacity-7">Web Developer
                      </div>
                    </div>
                  </div>
                </div>
              </td>
              <td class="text-center">Madrid</td>
              <td class="text-center">
                <div class="badge badge-warning">Pending</div>
              </td>
              <td class="text-center">
                <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Details</button>
              </td>
            </tr>
            <tr>
              <td class="text-center text-muted">#347</td>
              <td>
                <div class="widget-content p-0">
                  <div class="widget-content-wrapper">
                    <div class="widget-content-left mr-3">
                      <div class="widget-content-left">
                        <img width="40" class="rounded-circle" src="assets/images/avatars/3.jpg" alt="">
                      </div>
                    </div>
                    <div class="widget-content-left flex2">
                      <div class="widget-heading">Ruben Tillman</div>
                      <div class="widget-subheading opacity-7">Etiam sit amet
                        orci eget</div>
                    </div>
                  </div>
                </div>
              </td>
              <td class="text-center">Berlin</td>
              <td class="text-center">
                <div class="badge badge-success">Completed</div>
              </td>
              <td class="text-center">
                <button type="button" id="PopoverCustomT-2" class="btn btn-primary btn-sm">Details</button>
              </td>
            </tr>
            <tr>
              <td class="text-center text-muted">#321</td>
              <td>
                <div class="widget-content p-0">
                  <div class="widget-content-wrapper">
                    <div class="widget-content-left mr-3">
                      <div class="widget-content-left">
                        <img width="40" class="rounded-circle" src="assets/images/avatars/2.jpg" alt="">
                      </div>
                    </div>
                    <div class="widget-content-left flex2">
                      <div class="widget-heading">Elliot Huber</div>
                      <div class="widget-subheading opacity-7">Lorem ipsum
                        dolor sic</div>
                    </div>
                  </div>
                </div>
              </td>
              <td class="text-center">London</td>
              <td class="text-center">
                <div class="badge badge-danger">In Progress</div>
              </td>
              <td class="text-center">
                <button type="button" id="PopoverCustomT-3" class="btn btn-primary btn-sm">Details</button>
              </td>
            </tr>
            <tr>
              <td class="text-center text-muted">#55</td>
              <td>
                <div class="widget-content p-0">
                  <div class="widget-content-wrapper">
                    <div class="widget-content-left mr-3">
                      <div class="widget-content-left">
                        <img width="40" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                      </div>
                    </div>
                    <div class="widget-content-left flex2">
                      <div class="widget-heading">Vinnie Wagstaff</div>
                      <div class="widget-subheading opacity-7">UI Designer
                      </div>
                    </div>
                  </div>
                </div>
              </td>
              <td class="text-center">Amsterdam</td>
              <td class="text-center">
                <div class="badge badge-info">On Hold</div>
              </td>
              <td class="text-center">
                <button type="button" id="PopoverCustomT-4" class="btn btn-primary btn-sm">Details</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@stop
