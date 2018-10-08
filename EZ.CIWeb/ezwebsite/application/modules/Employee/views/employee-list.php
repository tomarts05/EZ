<article class="content items-list-page">
    <div class="title-search-block">
        <div class="title-block">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="title"> Employees
                        <a href="<?php echo base_url()?>Employee/form" class="btn btn-primary btn-sm rounded-s"> Add New </a>
                        
                        <div class="action dropdown">
                            <button class="btn  btn-sm rounded-s btn-secondary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> More actions... </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <a class="dropdown-item" href="#">
                                    <i class="fa fa-pencil-square-o icon"></i>Mark as a draft</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#confirm-modal">
                                    <i class="fa fa-close icon"></i>Delete</a>
                            </div>
                        </div>
                    </h3>
                    <p class="title-description"> List of Employees </p>
                </div>
            </div>
        </div>
        <div class="items-search">
            <form class="form-inline">
                <div class="input-group">
                    <input type="text" class="form-control boxed rounded-s" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-secondary rounded-s" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
    <div class="card items">
        <ul class="item-list striped">
            <li class="item item-list-header">
                <div class="item-row">
                    <div class="item-col fixed item-col-check">
                        <label class="item-check" id="select-all-items">
                            <input type="checkbox" class="checkbox">
                            <span></span>
                        </label>
                    </div>
                    <div class="item-col item-col-header fixed item-col-img md">
                        <div class="no-overflow">
                            <span>Media</span>
                        </div>
                    </div>
                    <div class="item-col item-col-header item-col-title">
                        <div class="no-overflow">
                            <span>Name</span>
                        </div>
                    </div>
                    <div class="item-col item-col-header item-col-author">
                        <div class="no-overflow">
                            <span>Email</span>
                        </div>
                    </div>
                    <div class="item-col item-col-header item-col-author">
                        <div class="no-overflow">
                            <span>Mobile</span>
                        </div>
                    </div>
                    <div class="item-col item-col-header item-col-author">
                        <div class="no-overflow">
                            <span>Position</span>
                        </div>
                    </div>
                    <div class="item-col item-col-header item-col-author">
                        <div class="no-overflow">
                            <span>Department</span>
                        </div>
                    </div>
                    <div class="item-col item-col-header item-col-author">
                        <div class="no-overflow">
                            <span>Devision</span>
                        </div>
                    </div>
                    <div class="item-col item-col-header fixed item-col-actions-dropdown"> </div>
                </div>
            </li>
            <?php foreach($employees as $employee) : ?>
            <li class="item">
                <div class="item-row">
                    <div class="item-col fixed item-col-check">
                        <label class="item-check" id="select-all-items">
                            <input type="checkbox" class="checkbox">
                            <span></span>
                        </label>
                    </div>
                    <div class="item-col fixed item-col-img md">
                        <a href="<?php echo base_url()?>Employee/view/<?php echo $employee['Id']; ?>">
                            <div class="item-img rounded" style="background-image: url(http://baypoint.academy/wp-content/uploads/2017/01/dummy-profile.png)"></div>
                        </a>
                    </div>
                    <div class="item-col fixed pull-left item-col-title">
                        <div>
                            <a href="<?php echo base_url()?>Employee/view/<?php echo $employee['Id']; ?>" class="">
                                <h4 class="item-title"> <?php echo $employee['Employee_Name_English']; ?> </h4>
                            </a>
                        </div>
                    </div>
                    <div class="item-col item-col-author no-overflow">
                        <div class="no-overflow">
                            <a href=""><?php echo $employee['E_Mail']; ?></a>
                        </div>
                    </div>
                    <div class="item-col item-col-author">
                        <div class="no-overflow">
                            <div><?php echo $employee['Mobile']; ?></div>
                        </div>
                    </div>
                    <div class="item-col item-col-author">
                        <div class="no-overflow">
                            <div> <?php echo $employee['Position']; ?> </div>
                        </div>
                    </div>
                    <div class="item-col item-col-author">
                        <div class="no-overflow">
                            <div><?php echo $employee['Department']; ?></div>
                        </div>
                    </div>
                    <div class="item-col item-col-author no-overflow">
                        <div class="no-overflow">
                            <a href=""><?php echo $employee['Division']; ?></a>
                        </div>
                    </div>
                     <input type="hidden" name="id" value="<?php echo $employee['Id']; ?>" />
                    <div class="item-col fixed item-col-actions-dropdown">
                        <div class="item-actions-dropdown">
                            <a class="item-actions-toggle-btn">
                                <span class="inactive">
                                    <i class="fa fa-cog"></i>
                                </span>
                                <span class="active">
                                    <i class="fa fa-chevron-circle-right"></i>
                                </span>
                            </a>
                            <div class="item-actions-block">
                                <ul class="item-actions-list">
                                    <li>
                                        <a class="remove" href="<?php echo base_url()?>Employee/delete/<?php echo $employee['Id']; ?>" > <!--data-toggle="modal" data-target="#confirm-modal"> -->
                                            <i class="fa fa-trash-o "></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="edit" href="<?php echo base_url()?>Employee/form/<?php echo $employee['Id']; ?>">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <?php endforeach;?>
        </ul>
    </div>
    <nav class="text-right">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href=""> Prev </a>
            </li>
            <li class="page-item active">
                <a class="page-link" href=""> 1 </a>
            </li>
            <li class="page-item">
                <a class="page-link" href=""> Next </a>
            </li>
        </ul>
    </nav>
</article>

<!-- /.modal -->
<div class="modal fade" id="confirm-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    <i class="fa fa-warning"></i> Alert</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure want to do this?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="confirmDelete()" >Yes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<script>
function confirmDelete(){
    window.location.href = "<?php echo base_url()?>Employee/delete/<?php echo $employee['Id']; ?>";
}
</script>