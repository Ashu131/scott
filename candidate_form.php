<!-- Upload CV -->
<div class="candidate_cv">
		<div class="tittle_head_w3ls">
			<h3 class="tittle two">Candidate Cv</h3>
		</div>
		<div class="inner_sec_grids_info login-form">
			<form action="job_mail.php" method="post" enctype="multipart/form-data">
				<div class="col-md-6 form-left">
					<div class="form-inputs email">
						<p>Full name</p>
						<i class="fa fa-user" aria-hidden="true"></i>
						<input type="text" name="candidate_name" placeholder="" required="" />
					</div>
					<div class="form-inputs name">
						<p>Email</p>
						<i class="fa fa-envelope" aria-hidden="true"></i>
						<input type="email" name="candidate_email" placeholder="" required="" />
					</div>
					<div class="form-inputs name">
						<p>Phone</p>
						<i class="fa fa-phone" aria-hidden="true"></i>
						<input type="number" name="candidate_phone" placeholder="" required="" min="10" max="10" />
					</div>

				</div>
				<div class="col-md-6 form-right">
					<div class="form-inputs name">
						<p>Comment</p>
						<i class="fa fa-comment" aria-hidden="true"></i>
						<textarea name="candidate_comment" placeholder="" required=""></textarea>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="form-inputs">
					<p>Specify your current employment status</p>
					<ul>
						<li>
							<input type="radio" id="a-option" name="candidate_status">
							<label for="a-option">Employed </label>
							<div class="check"></div>
						</li>
						<li>
							<input type="radio" id="b-option" name="candidate_status">
							<label for="b-option">Unemployed</label>
							<div class="check"></div>
						</li>
						<li>
							<input type="radio" id="c-option" name="candidate_status">
							<label for="c-option">Self-Employed</label>
							<div class="check"></div>
						</li>
						<li>
							<input type="radio" id="d-option" name="candidate_status">
							<label for="d-option">Student</label>
							<div class="check"></div>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="form-inputs upload">
					<p>Upload your resume</p>
					<input type="file" id="fileselect" name="candidate_cv"  />
					<div id="filedrag">Upload</div>
				</div>
				<input type="submit" name="job_enquiry" value="Submit Cv">
			</form>

		</div>
	</div>