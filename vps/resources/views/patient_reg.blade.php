@extends('layout')
@section('content')
        <!-- page content -->
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Elements</h3>
              </div>

              <div class="title_right">

                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Important Information</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Middle Name / Initial</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="gender" class="control-label col-md-3 col-sm-3 col-xs-12">Gender *:</label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                      <p style="padding-top:5%">
                        M:
                        <input type="radio" class="flat" name="gender" id="genderM" value="M" checked="" required /> F:
                        <input type="radio" class="flat" name="gender" id="genderF" value="F" />
                      </p>
                      </div>
                        <label class="control-label col-md-1 col-sm-1 col-xs-12">DOB<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input id="birthday" type="date" class="date-picker form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      </div>
                      </div>
                      </div>
                      <div class="row">
			              <div class="col-md-6 col-xs-12">
			                <div class="x_panel">
			                  <div class="x_title">
			                    <h2>Details</h2>
			                    <div class="clearfix"></div>
			                  </div>
			                  <div class="x_content">
			                    <br />
			                     <div class="form-group">
			                        <label for="P_AADHAR" class="control-label col-md-3 col-sm-3 col-xs-12">Aadhaar Number</label>
			                        <div class="col-md-6 col-sm-6 col-xs-12">
			                          <input id="P_AADHAR" class="form-control col-md-7 col-xs-12" type="text" name="P_AADHAR">
			                        </div>
			                      </div>

			                      <div class="form-group">
			                        <label for="P_MOBILE" class="control-label col-md-3 col-sm-3 col-xs-12">Mobile Number</label>
			                        <div class="col-md-6 col-sm-6 col-xs-12">
			                          <input id="P_MOBILE" class="form-control col-md-7 col-xs-12" type="text" name="P_MOBILE" minlength="10">
			                        </div>
			                      </div>

			                      <div class="form-group">
			                        <label for="P_STATE" class="control-label col-md-3 col-sm-3 col-xs-12">State</label>
			                        <div class="col-md-6 col-sm-6 col-xs-12">
			                          <input id="P_STATE" class="form-control col-md-7 col-xs-12" type="search" name="P_STATE">
			                        </div>
			                      </div>

			                      <div class="form-group">
			                        <label for="P_DISTRICT" class="control-label col-md-3 col-sm-3 col-xs-12">District</label>
			                        <div class="col-md-6 col-sm-6 col-xs-12">
			                          <input id="P_DISTRICT" class="form-control col-md-7 col-xs-12" type="search" name="P_DISTRICT">
			                        </div>
			                      </div>

			                      <div class="form-group">
			                        <label for="P_ADDRESS" class="control-label col-md-3 col-sm-3 col-xs-12">Address</label>
			                        <div class="col-md-6 col-sm-6 col-xs-12">
			                          <input id="P_ADDRESS" class="form-control col-md-7 col-xs-12" type="text" name="P_ADDRESS">
			                        </div>
			                      </div>

			                      <div class="form-group">
			                        <label for="P_PIN" class="control-label col-md-3 col-sm-3 col-xs-12">Pincode</label>
			                        <div class="col-md-6 col-sm-6 col-xs-12">
			                          <input id="P_PIN" class="form-control col-md-7 col-xs-12" type="text" name="P_PIN" length="6">
			                        </div>
			                      </div>
			                  </div>
			                </div>
			            </div>
              <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Additional Information</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <div class="form-group">
                        <label for="P_EMG1" class="control-label col-md-3 col-sm-3 col-xs-12">Emergency Number 1</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="P_EMG1" class="form-control col-md-7 col-xs-12" type="text" name="P_EMG1">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="P_EMG2" class="control-label col-md-3 col-sm-3 col-xs-12">Emergency Number 2</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="P_EMG2" class="form-control col-md-7 col-xs-12" type="text" name="P_EMG2">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="INSU_NAME" class="control-label col-md-3 col-sm-3 col-xs-12">Insurer Name</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="INSU_NAME" class="form-control col-md-7 col-xs-12" type="text" name="INSU_NAME">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="POLICY_NO" class="control-label col-md-3 col-sm-3 col-xs-12">Policy Number</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="POLICY_NO" class="form-control col-md-7 col-xs-12" type="text" name="POLICY_NO">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Policy Expiry Date <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="POLICY_END" type="date" class="date-picker form-control col-md-7 col-xs-12" required="required" name="POLICY_END">
                        </div>
                      </div>

                  </div>
                </div>
              </div>
              </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
						  <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>



                    </form>
                  </div>
                </div>


    
      </div>
    </div>

    

   {{-- @include('scripts  ') --}}
	@endsection