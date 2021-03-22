
<?php

if($user['dob'] != ""){
    $date = $user['dob'];

    $date= explode('-', $date);

    $year = $date[0];

    $month = $date[1];

    $day = $date[2];

}

?>                      
                      
                      <!-- Basic Information
                        ================================================= -->
                        <div class="edit-profile-container">
                            <div class="block-title">
                            <h4 class="grey"><i class="icon ion-android-checkmark-circle"></i>Edit basic information</h4>
                            <div class="line"></div>
                            </div>
                            <div class="edit-block">
                            <form name="basic-info" id="basic-info" class="form-inline" method = "POST">
                                <div class="row">
                                <div class="form-group col-xs-12">
                                    <label for="collegeRollno">College Roll No.(Will be provided by admin)</label>
                                    <input id="collegeRollno" class="form-control input-group-lg" type="text" name="collegeRollno" title="Enter College Roll No." placeholder="College Roll No." value="<?php echo $user['roll_no'];?>" disabled />
                                </div>
                                </div>
                                <div class="row">
                                <div class="form-group col-xs-6">
                                    <label for="firstname">First name</label>
                                    <input id="firstname" class="form-control input-group-lg" type="text" name="firstname" title="Enter first name" placeholder="First name" value="<?php echo $user['first_name']?>" disabled />
                                </div>
                                <div class="form-group col-xs-6">
                                    <label for="lastname" class="">Last name</label>
                                    <input id="lastname" class="form-control input-group-lg" type="text" name="lastname" title="Enter last name" placeholder="Last name" value="<?php echo $user['last_name'] ?>" disabled />
                                </div>
                                </div>
                                <div class="row">
                                <div class="form-group col-xs-12">
                                    <label for="email">My email</label>
                                    <input id="email" class="form-control input-group-lg" type="email" name="my_email" placeholder="My Email" value="<?php echo $user['email'] ?>" disabled />
                                </div>
                                </div>
                                <div class="row">
                                <div class="form-group col-xs-12">
                                    <label for="altEmail">Alternate Email</label>
                                    <input id="alt_email" class="form-control input-group-lg" type="email" name="alt_email" placeholder="Alternate Email" value="<?php echo $user['alter_email'] ?>" disabled />
                                </div>
                                </div>
                                <div class="row">
                                <div class="form-group col-xs-12">
                                    <label for="phone">Phone number</label>
                                    <input id="phone" class="form-control input-group-lg" type="number" name="phone"  placeholder="Phone" value="<?php echo $user['phone'] ?>" />
                                </div>
                                </div>
                                
                                <div class="row">
                                <p class="custom-label"><strong>Date of Birth</strong></p>
                                <div class="form-group col-sm-3 col-xs-6">
                                    <label for="month" class="sr-only"></label>
                                    <select class="form-control" id="day" name="day">
                                    <option selected><?php if($user['dob'] ==""){echo "Day";}else{ echo "$day";};?></option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                    <option>21</option>
                                    <option>22</option>
                                    <option>23</option>
                                    <option>24</option>
                                    <option>25</option>
                                    <option>26</option>
                                    <option>27</option>
                                    <option>28</option>
                                    <option>29</option>
                                    <option>30</option>
                                    <option>31</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3 col-xs-6">
                                    <label for="month" class="sr-only"></label>
                                    <select class="form-control" id="month" name="month">
                                    <option selected><?php if($user['dob'] ==""){echo "Month";}else{ echo "$month";};?></option>
                                    <option>Jan</option>
                                    <option>Feb</option>
                                    <option>Mar</option>
                                    <option>Apr</option>
                                    <option>May</option>
                                    <option>Jun</option>
                                    <option>Jul</option>
                                    <option>Aug</option>
                                    <option>Sep</option>
                                    <option>Oct</option>
                                    <option>Nov</option>
                                    <option>Dec</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-6 col-xs-12">
                                    <label for="year" class="sr-only"></label>
                                    <select class="form-control" id="year" name="year">
                                    <option selected><?php if($user['dob'] ==""){echo "Year";}else{ echo "$year";};?></option>
                                    <option>2000</option>
                                    <option>2001</option>
                                    <option>2002</option>
                                    <option>2004</option>
                                    <option>2005</option>
                                    <option>2006</option>
                                    <option>2007</option>
                                    <option>2008</option>
                                    <option>2009</option>
                                    <option>2010</option>
                                    <option>2011</option>
                                    <option>2012</option>
                                    </select>
                                </div>
                                </div>
                                <div class="form-group gender">
                                <span class="custom-label"><strong>I am a: </strong></span>
                                <label class="radio-inline">
                                    <input type="radio" name="optradio" checked disabled>Male
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optradio" disabled>Female
                                </label>
                                </div>
                                
                                <div class="row">
                                <div class="form-group col-xs-12">
                                    <label for="my-info">About me</label>
                                    <textarea id="my-info" name="about" class="form-control" placeholder="Some texts about me" rows="4" cols="400"><?php echo $user['about']; ?></textarea>
                                </div>
                                </div>
                                <button class="btn btn-primary" type="submit" name="save">Save Changes</button>
                            </form>
                            </div>
                        </div>
                        </div>

<?php

    if(isset($_POST['save'])){

    $dob = date($_POST['year']."-".$_POST['month']."-".$_POST['day']);


    $update = "UPDATE `users` SET `phone` = '".mysqli_real_escape_string($link, $_POST['phone'])."' WHERE id=".$session_id." LIMIT 1";

        $upabout = "UPDATE `users` SET `about` = '".mysqli_real_escape_string($link, $_POST['about'])."' WHERE id=".$session_id." LIMIT 1";

        $updob = "UPDATE `users` SET `dob` = '".mysqli_real_escape_string($link,  $dob)."' WHERE id=".$session_id." LIMIT 1";
        
            if(mysqli_query($link, $update) && mysqli_query($link, $upabout) && mysqli_query($link, $updob)){
                
                echo "<script> alert('Details updated successfully'); </script>";

                echo "<script> window.location.assign('http://localhost/college_connect/?p=profedt'); </script>";
            }

}

?>