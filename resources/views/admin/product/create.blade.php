@extends('admin.layouts.default')
@section('style')
<style>
	.upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
}

.btn {
  border: 2px solid gray;
  color: gray;
  background-color: white;
  padding: 8px 20px;
  border-radius: 8px;
  font-size: 20px;
  font-weight: bold;
}

.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}
</style>
@stop
@section('admincontent')
<div class="row-fluid sortable ui-sortable">
				<div class="box blue span24">
					<div class="box-header" data-original-title="">
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add product</h2>						
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="{{ route('product.store') }}" enctype="multipart/form-data" id="form1">
							 {{csrf_field()}}
                            <fieldset>
                            <div class="control-group ">
								<label style="color: black" class="control-label" for="selectError4">Select Category</label>
								<div class="controls">
								  <select id="selectError3" name="category_id" >
									<option value="" selected hidden>select one</option>
                                    @foreach($allCategory as $Cat)
									<option value="{{$Cat->id}}">{{$Cat->category_name}}</option>
                                    @endforeach
								  </select>
								</div>
							  </div>
                              <div class="control-group ">
								<label style="color: black" class="control-label" for="selectError3">Select manufacturer</label>
								<div class="controls">
								  <select id="selectError3" name="manufacturer_id" >
									<option value="" selected hidden>select one</option>
                                    @foreach($allManufacturer as $manu)
									<option value="{{$manu->id}}">{{$manu->manufacturer_name}}</option>
                                    @endforeach
								  </select>
								</div>
							  </div>
                            </fieldset>
							<fieldset>

						
							  <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">product name</label>
								<div class="controls">
								  <input name="product_name" type="text" id="inputSuccess">
								  <!-- <span class="help-inline">Woohoo!</span> -->
								</div>
							  </div>
							  <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">product_short_description</label>
								<div class="controls">
								  <input name="product_short_description" type="text" id="inputSuccess">
								  <!-- <span class="help-inline">Woohoo!</span> -->
								</div>
							  </div>
                              <div class="control-group ">
								<label style="color: black" class="control-label" for="input">product_long_description</label>
								<div class="controls">                              
                              
                                    <div class="col-sm-10">
                                        <textarea name="product_long_description" id="textarea" class="form-control" rows="3" required="required"></textarea>
                                    </div>                            
                                
								  
								  <!-- <span class="help-inline">Woohoo!</span> -->
								</div>
                              </div>
                              <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">product_price</label>
								<div class="controls">
								  <input name="product_price" type="text" id="inputSuccess">
								  <!-- <span class="help-inline">Woohoo!</span> -->
								</div>
							  </div>


                              
                              <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">product_image</label>


								
								<div class="controls">
									<div class="upload-btn-wrapper">
										<button class="btn">Upload a file</button>										
										<input name="product_image" id="inputFile" type="file" >								  
									</div>
									
								  	<img id="image_upload_preview" src="http://placehold.it/100x100" alt="Product image" style="max-height:100px" />
								</div>
							  </div>
                              <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">product_size</label>
								<div class="controls">
								  <input name="product_size" type="text" id="inputSuccess">
								  <!-- <span class="help-inline">Woohoo!</span> -->
								</div>
							  </div>
                              <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">product_color</label>
								<div class="controls">
								  <input name="product_color" type="text" id="inputSuccess">
								  <!-- <span class="help-inline">Woohoo!</span> -->
								</div>
							  </div>
                              
                      
							  <div class="control-group ">
								<label style="color: black" class="control-label" for="selectError3">publication status</label>
								<div class="controls">
								  <select id="selectError3" name="publication_status" >
									<option value="" selected hidden>select one</option>
									<option value="1">published</option>
									<option value="0">draft</option>
									
								  </select>
								</div>
							  </div>

							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Save</button>
								<button class="btn">Cancel</button>
							  </div>
							</fieldset>
						  </form>
					
					</div>
				</div><!--/span-->
			
			</div>


@stop
@section('js')
<script	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script> 
  function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#image_upload_preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#inputFile").change(function () {
        readURL(this);
    });
</script>
@stop