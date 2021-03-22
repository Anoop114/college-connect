            <!-- Edit Work and Education
              ================================================= -->
              <div class="edit-profile-container">
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-ios-book-outline"></i>My education</h4>
                  <div class="line"></div>
                </div>
                <div class="edit-block">
                  <form name="education" id="education" class="form-inline" method = "POST">
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="school">My university/institution</label>
                        <input id="school" class="form-control input-group-lg" type="text" name="school" title="Enter School" placeholder="My School" value="Harvard Unversity" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="date-from">From</label>
                        <input id="date-from" class="form-control input-group-lg" type="text" name="date_from" title="Enter a Date" placeholder="from" value="2012" />
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="date-to" class="">To</label>
                        <input id="date-to" class="form-control input-group-lg" type="text" name="date_to" title="Enter a Date" placeholder="to" value="2016" />
                      </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                                <label for="course" class="">Course</label>
                                <input id="course" class="form-control input-group-lg" type="text" name="course" title="Enter a Course" placeholder="Course"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <label for="education" class="">Education</label>
                            <select class="form-control" id="education">
                            <option value="education">Education</option>
                            <!--Bhai options tu khud daal liyo 
                                or frr uske baad is coment ko delete kar diyo-->
                            <option>2000</option>
                            <option>2001</option>
                            <option>2002</option>
                            <option>2004</option>
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-primary">Save & Add</button>
                  </form>
                </div>
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