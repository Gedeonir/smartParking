
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">

                    <!-- ALERT-->
                    <?php if(@$message) { ?>
                    <div class="alert au-alert-success alert-dismissible fade show au-alert au-alert--70per" role="alert">
                        <i class="zmdi zmdi-check-circle"></i>
                        <span class="content">
                            <?php echo @$message; ?>
                        </span>
                        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">
                                <i class="zmdi zmdi-close-circle"></i>
                            </span>
                        </button>
                    </div><br>
                    <?php } ?>
                    <!-- END ALERT-->

                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>
                                    <button type="button" class="au-btn au-btn-icon au-btn--blue" data-toggle="modal" data-target="#addClient">
                                        <i class="zmdi zmdi-plus"></i>add customer
                                    </button>

                                    <button type="button" class="au-btn au-btn-icon au-btn--blue" data-toggle="modal" data-target="#newslot">
                                        <i class="zmdi zmdi-plus"></i>add new slot
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">

                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $avSlotCount; ?></h2>
                                                <span>Available spaces</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $bkSlotCount; ?></h2>
                                                <span>Booked slots (now)</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $reqCount; ?></h2>
                                                <span>Parking requests</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $clientCount; ?></h2>
                                                <span>Received clients</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>




