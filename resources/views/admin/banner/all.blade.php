@extends('layouts.admin')
@section('content')

                <div class="col-md-10 content">
                    <div class="row">
                        <div class="col-md-12 breadcumb_part">
                            <div class="bread">
                                <ul>
                                    <li><a href=""><i class="fas fa-home"></i>Home</a></li>
                                    <li><a href=""><i class="fas fa-angle-double-right"></i>Dashboard</a></li>                             
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-3">
                              <div class="card-header">
                                <div class="row">
                                    <div class="col-md-8 card_title_part">
                                        <i class="fab fa-gg-circle"></i>All User Information
                                    </div>  
                                    <div class="col-md-4 card_button_part">
                                        <a href="{{route('add.banner')}}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i>Add User</a>
                                    </div>  
                                </div>
                              </div>
                              <div class="card-body">
                                <table class="table table-bordered table-striped table-hover custom_table">
                                  <thead class="table-dark">
                                    <tr>
                                      <th>Banner Title</th>
                                      <th>Subtitle</th>
                                      <th>Button</th>
                                      <th>Photo</th>
                                      <th>Role</th>
                                      <th>Manage</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                   
                                    <tr>
                                      <td></td>
                                      <td>01757220125</td>
                                      <td></td>
                                      <td>raseldevs</td>
                                      <td>---</td>
                                      <td>
                                          <div class="btn-group btn_group_manage" role="group">
                                            <button type="button" class="btn btn-sm btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Manage</button>
                                            <ul class="dropdown-menu">
                                              <li><a class="dropdown-item" href="{{route('view.banner')}}">View</a></li>
                                              <li><a class="dropdown-item" href="{{route('edit.banner')}}">Edit</a></li>
                                              <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul>
                                          </div>
                                      </td>
                                    </tr>
                                  
                           
                  
                                  </tbody>
                                </table>
                              </div>
                              <div class="card-footer">
                                <div class="btn-group" role="group" aria-label="Button group">
                                  <button type="button" class="btn btn-sm btn-dark">Print</button>
                                  <button type="button" class="btn btn-sm btn-secondary">PDF</button>
                                  <button type="button" class="btn btn-sm btn-dark">Excel</button>
                                </div>
                              </div>  
                            </div>
                        </div>
                    </div>
                </div>
@endsection