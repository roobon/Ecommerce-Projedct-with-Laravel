@extends('admin.layouts.default')
@section('admincontent')
<div class="row-fluid sortable">
                <div class="box span12">
                    <div class="box-header" data-original-title>
                        <h2><i class="halflings-icon edit"></i><span class="break"></span>Customer Registration</h2>
                        <div class="box-icon">
                        
                            <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                            
                        </div>
                    </div>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                        @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                         @endforeach
                      </ul>
                    </div>
                    @endif

                    @if (\Session::get('success'))
                      <div class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                        </div>
                    @endif  
                    <div class="box-content">
                        <form class="form-horizontal" action="{{url('admin/customer')}}" method="post">

                            <fieldset>
                              <div class="control-group">
                                 {{csrf_field()}}
                                <label class="control-label" for="focusedInput">First Name</label>
                                <div class="controls">
                                  <input class="input-xlarge focused" id="f_name" name="first_name" type="text">
                                </div>
                              </div>
                              <div class="control-group">
                                <label class="control-label" for="focusedInput">Last Name</label>
                                <div class="controls">
                                  <input class="input-xlarge focused" id="l_name" name="last_name" type="text">
                                </div>
                              </div>
                              <div class="control-group">
                                <label class="control-label" for="focusedInput">Email</label>
                                <div class="controls">
                                  <input class="input-xlarge focused" id="e_mail" name="email_address" type="email">
                                </div>
                              </div>
                              <div class="control-group">
                                <label class="control-label" for="focusedInput">Password</label>
                                <div class="controls">
                                  <input class="input-xlarge focused" id="pass" name="password" type="password">
                                </div>
                              </div>
                              <div class="control-group">
                                <label class="control-label" for="focusedInput">Telephone</label>
                                <div class="controls">
                                  <input class="input-xlarge focused" id="mobile" name="telephone" type="text">
                                </div>
                              </div>


                              <div class="form-actions">
                                <button type="submit" class="btn btn-primary">Save</button>
                                
                              </div>
                            </fieldset>

                          </form>

                    </div>
                </div><!--/span-->

            </div><!--/row-->
@stop 