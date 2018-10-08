<article class="content dashboard-page">
    <section class="section">
        <div class="row sameheight-container">
            <div class="col col-12 col-sm-12 col-md-6 col-xl-5 stats-col">
                <div class="card sameheight-item stats" data-exclude="xs">
                    <div class="card-block">
                        <div class="title-block">
                            <h4 class="title"> Statistics </h4>
                            <p class="title-description"> Employee metrics for
                                <a href="https://www.kaec.net/"> KAEC </a>
                            </p>
                        </div>
                        <div class="row row-sm stats-container">
                            <div class="col-12 col-sm-6  stat-col">
                                <div class="stat-icon">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="stat">
                                    <div class="value"> <?php echo $employee; ?> </div>
                                    <div class="name"> Total Employee </div>
                                </div>
                                <div class="progress stat-progress">
                                    <div class="progress-bar" style="width: 5%;"></div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 stat-col">
                                <div class="stat-icon">
                                    <i class="fa money-check-alt"></i>
                                </div>
                                <div class="stat">
                                    <div class="value"> $50,005,255 </div>
                                    <div class="name"> Budget </div>
                                </div>
                                <div class="progress stat-progress">
                                    <div class="progress-bar" style="width: 90%;"></div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6  stat-col">
                                <div class="stat-icon">
                                    <i class="fa money-check-alt"></i>
                                </div>
                                <div class="stat">
                                    <div class="value"> $80,560 </div>
                                    <div class="name"> Spending </div>
                                </div>
                                <div class="progress stat-progress">
                                    <div class="progress-bar" style="width: 15%;"></div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6  stat-col">
                                <div class="stat-icon">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="stat">
                                    <div class="value"> $300,560 </div>
                                    <div class="name"> Service Cost </div>
                                </div>
                                <div class="progress stat-progress">
                                    <div class="progress-bar" style="width: 34%;"></div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 stat-col">
                                <div class="stat-icon">
                                    <i class="fa vials"></i>
                                </div>
                                <div class="stat">
                                    <div class="value">  </div>
                                    <div class="name"> Testing Stats </div>
                                </div>
                                <div class="progress stat-progress">
                                    <div class="progress-bar" style="width: 100%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-sm-12 col-md-6 col-xl-7 history-col">
                <div class="card sameheight-item" data-exclude="xs" id="dashboard-history">
                    <div class="card-header card-header-sm bordered">
                        <div class="header-block">
                            <h3 class="title">History</h3>
                        </div>
                        <ul class="nav nav-tabs pull-right" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#visits" role="tab" data-toggle="tab">Visits</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#downloads" role="tab" data-toggle="tab">Downloads</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-block">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active fade show" id="visits">
                                <p class="title-description"> Number of unique visits last 30 days </p>
                                <div id="dashboard-visits-chart"></div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="downloads">
                                <p class="title-description"> Number of downloads last 30 days </p>
                                <div id="dashboard-downloads-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section map-tasks">
        <div class="row sameheight-container">
            <div class="col-md-8">
                <div class="card sameheight-item" data-exclude="xs,sm">
                    <div class="card-header">
                        <div class="header-block">
                            <h3 class="title"> Sales by countries </h3>
                        </div>
                    </div>
                    <div class="card-block">
                        <div id="dashboard-sales-map" style="width: 100%; height: 400px;"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card tasks sameheight-item" data-exclude="xs,sm">
                    <div class="card-header bordered">
                        <div class="header-block">
                            <h3 class="title"> Tasks </h3>
                        </div>
                        <div class="header-block pull-right">
                            <a href="" class="btn btn-primary btn-sm rounded pull-right"> Add new </a>
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="tasks-block">
                            <ul class="item-list">
                                <li class="item">
                                    <div class="item-row">
                                        <div class="item-col item-col-title">
                                            <label>
                                                <input class="checkbox" type="checkbox" checked="checked">
                                                <span>Meeting with embassador</span>
                                            </label>
                                        </div>
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
                                                            <a class="remove" href="#" data-toggle="modal" data-target="#confirm-modal">
                                                                <i class="fa fa-trash-o "></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="check" href="#">
                                                                <i class="fa fa-check"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="edit" href="item-editor.html">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="item-row">
                                        <div class="item-col item-col-title">
                                            <label>
                                                <input class="checkbox" type="checkbox" checked="checked">
                                                <span>Confession</span>
                                            </label>
                                        </div>
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
                                                            <a class="remove" href="#" data-toggle="modal" data-target="#confirm-modal">
                                                                <i class="fa fa-trash-o "></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="check" href="#">
                                                                <i class="fa fa-check"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="edit" href="item-editor.html">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</article>