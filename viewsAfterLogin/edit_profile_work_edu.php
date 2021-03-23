            <!-- Edit Work and Education
              ================================================= -->
                <!-- Education Mode!
                  ================================================= -->
              <div class="edit-profile-container">
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-ios-book-outline"></i>My education</h4>
                  <div class="line"></div>
                </div>
                <div class="edit-block">
                  <form name="education" id="educ" class="form-inline" method = "POST">
                  <div class="row">
                        <div class="form-group col-xs-12">
                            <label for="education" class="">Education</label>
                            <select class="form-control" id="education" name="education">
                            <option value="education">Education</option>
                            <option>Secondary/Maticulation/10th</option>
                            <option>Senior Secondary/Inter/12th</option>
                            <option>Under Graduate</option>
                            <option>Post Graduate</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                                <label for="course" class="">Course</label>
                                <select class="form-control" id="course" name="course">
                                  <option value="course">Course</option>
                                  <option>Course</option>
                                  <option>Course</option>
                                  <option>Course</option>
                                </select>
                        </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="school">School/College/University Name</label>
                        <input id="school" class="form-control input-group-lg" type="text" name="school" title="Enter School" placeholder="School/College/University"/>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="time-period">Time Period</label>
                      </div>
                        <div class="form-group col-xs-4">
                          <select class="form-control" id="from-time-period" name="from-time-period">
                            <option value="from-year">Year</option>
                            <option>2016</option>
                            <option>2017</option>
                            <option>2018</option>
                            <option>2019</option>
                            <option>2020</option>
                          </select>
                        </div>
                        <div class="form-group col-xs-1"><label style="padding-left: 8px; padding-top: 3px; font-size: 15px;">TO</label></div>
                        
                        <div class="form-group col-xs-4">
                          <select class="form-control" id="to-time-period" name="to-time-period">
                            <option value="to-year">Year</option>
                            <option>2017</option>
                            <option>2018</option>
                            <option>2019</option>
                            <option>2020</option>
                            <option>2021</option>
                          </select>
                        </div>
                    </div>
                    
                    <button class="btn btn-primary" type="submit" name="save_edu">Save & Add</button>
                  </form>
                  </div>

                  <?php


    if(isset($_POST['save_edu'])){

      $id = $user['clg_id'];
      
    $query = "INSERT INTO edu (`clg_id`, `edu_level`, `course`, `inst_name`, `add_year`, `pass_year`)
              VALUES ('".mysqli_real_escape_string($link, $id)."',
                      '".mysqli_real_escape_string($link, $_POST['education'])."',
                      '".mysqli_real_escape_string($link, $_POST['course'])."',
                      '".mysqli_real_escape_string($link, $_POST['school'])."',
                      '".mysqli_real_escape_string($link, $_POST['from-time-period'])."',
                      '".mysqli_real_escape_string($link, $_POST['to-time-period'])."')";

    mysqli_query($link, $query);

}

?>


                  <!-- Work Mode!
                    ================================================= -->  
                
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-ios-briefcase-outline"></i>Work Experiences</h4>
                  <div class="line"></div>
                </div>
                <div class="edit-block">
                  <form name="work" id="work" class="form-inline" method="POST">
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="company">Company/Organization/Project</label>
                        <input id="company" class="form-control input-group-lg" type="text" name="company" title="Enter Company" placeholder="Company name" value="Envato Inc" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="designation">Designation</label>
                        <input id="designation" class="form-control input-group-lg" type="text" name="designation" title="Enter designation" placeholder="designation name" value="Exclusive Author" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="from-date">From</label>
                        <input id="from-date" class="form-control input-group-lg" type="text" name="date_from" title="Enter a Date" placeholder="from" value="2016" />
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="to-date" class="">To</label>
                        <input id="to-date" class="form-control input-group-lg" type="text" name="date_to" title="Enter a Date" placeholder="to" value="Present" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="work-city">City/Town</label>
                        <input id="work-city" class="form-control input-group-lg" type="text" name="city" title="Enter city" placeholder="Your city" value="Melbourne"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="work-description">Description</label>
                        <textarea id="work-description" name="description" class="form-control" placeholder="Some texts about my work" rows="4" cols="400">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</textarea>
                      </div>
                    </div>
                    <button class="btn btn-primary" >Save & Add</button>
                  </form>
                </div>
              </div>
            </div>