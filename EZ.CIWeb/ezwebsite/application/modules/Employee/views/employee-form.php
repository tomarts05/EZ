<article class="content item-editor-page">
    <div class="title-block">
        <h3 class="title"> Add new Contractor
            <span class="sparkline bar" data-type="bar"></span>
        </h3>
    </div>
                        
        <div class="col-md-12 auth-content">
            <div class="card card-block sameheight-item">
                <div class="title-block">
                    <h3 class="title"> Information </h3>
                </div>
                <form id="signup-form" action="<?php echo base_url()?>Employee/save" method="POST" novalidate="">
                    <div class="form-group">
                        <label for="firstname">Name</label>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control underlined" name="firstname" id="firstname" placeholder="Enter firstname" required="" 
                                value="<?php echo !empty($employee['Employee_Name_English'])?$employee['Employee_Name_English']:''; ?>"> 
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control underlined" name="lastname" id="lastname" placeholder="Enter lastname" required=""
                                value="<?php echo !empty($employee['Employee_Name_English'])?$employee['Employee_Name_English']:''; ?>"> 
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="email">Email</label>
                            </div>
                            <div class="col-sm-6">
                                <label for="mobile ">Mobile</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                               <input type="email" class="form-control underlined" name="email" id="email" placeholder="Enter email address" required=""> 
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control underlined" name="mobile" id="mobile" placeholder="Enter mobile number" required=""> 
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="position">Position</label>
                            </div>
                            <div class="col-sm-6">
                                <label for="department ">Department</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control underlined" name="position" id="position" placeholder="Enter position" required=""> 
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control underlined" name="department" id="department" placeholder="Enter department" required=""> 
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="division">Division</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control underlined" name="division" id="division" placeholder="Enter division" required=""> 
                            </div>
                        </div>
                    </div>   
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
</article>