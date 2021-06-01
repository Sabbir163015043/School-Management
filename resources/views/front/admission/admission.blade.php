@extends('front.master')
@section('body')

<div class="fh5co-loader"></div>
	
	<div id="page">
	<div id="fh5co-blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2 style="background-color: indigo ; color: white;">Admission Form </h2>
					<p> Please Provide Your Original/Real Data</p>
				</div>
			</div>
			<div class="row">
				</div>
				<div class="col-lg-12 col-md-6">
					<div class="fh5co-blog animate-box">
						<div class="blog-text">
                            <form style="text-align:center;">
                              <label for="fname">Student Name:</label>
                              <input type="text" id="fname" name="fname"><br><br>
                              <label for="lname">Father Name:</label>
                              <input type="text" id="lname" name="lname"><br><br>
                              <label for="lname">Mother Name:</label>
                              <input type="text" id="lname" name="lname"><br><br>
                              <label for="lname">Age:</label>
                              <input type="number" id="lage" name="lname"><br><br>
                              <label for="lname">Gender :</label>
                              <select class="form-select" aria-label="Default select example">\
                                
                                <option selected> select Gender</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                                <option value="3">Other</option>
                              </select>  <br> <br>
                              
                              <div class="form-group">
                                 
                                <label for="fname"> Select Image : <input type="file" class="form-control-file" id="fname"> </label>
                              </div>

                              <input type="submit" value="Submit">
                            </form>
						</div> 
					</div>
				</div>
			</div>
		</div>
@endsection
	
