<article class="content forms-page">
    <div class="title-search-block">
        <div class="title-block">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="title"> Employees
                        <a href="<?php echo base_url()?>Employee" class="btn btn-primary btn-sm rounded-s"> Back to list </a>
                        
                    </h3>
                    <p class="title-description"> Employee Details </p>
                </div>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="row sameheight-container">
            <div class="col-md-6">
                <div class="card card-block sameheight-item">
                    <form role="form">
                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <p class="form-control-static underlined"><?php echo $employee['Employee_Name_English']; ?></p>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Email Address</label>
                            <p class="form-control-static underlined"><?php echo $employee['E_Mail']; ?></p>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Mobile Number</label>
                            <p class="form-control-static underlined"><?php echo $employee['Mobile']; ?></p>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Postion</label>
                            <p class="form-control-static underlined"><?php echo $employee['Position']; ?></p>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Department</label>
                            <p class="form-control-static underlined"><?php echo $employee['Department']; ?></p>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Division</label>
                            <p class="form-control-static underlined"><?php echo $employee['Division']; ?></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</article>
