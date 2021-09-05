
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">

                    <!-- ALERT-->
                    <?php if($this->session->flashdata('message')) { ?>
                    <div class="alert au-alert-success alert-dismissible fade show au-alert col-lg-9" role="alert">
                        <i class="zmdi zmdi-check-circle"></i>
                        <span class="content">
                            <?php echo @$this->session->flashdata('message'); ?>
                        </span>
                        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">
                                <i class="zmdi zmdi-close-circle"></i>
                            </span>
                        </button>
                    </div><br>
                    <?php } ?>

                    <?php if($this->session->flashdata('warning')) { ?>
                    <div class="alert au-alert-warning alert-dismissible fade show au-alert col-lg-9">
                        <i class="fas fa-times"></i>
                        <span class="content">
                            <?php echo @$this->session->flashdata('warning'); ?>
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
                            <div class="col-md-12 m-b-15">
                                <div class="overview-wrap">
                                	<?php foreach($clientFullData as $data){ ?>
                                    <h2 class="title-1">Assign vehicle to <?php echo "<b>".$data->firstname."</b>"; ?></h2>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <div class="row m-t-0">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Add Vehicle</strong>
                                    </div>

                                    <?php foreach($clientFullData as $sdata) { ?>
                                    <form action="<?php echo base_url('client/assign/'.$sdata->client_id); ?>" method="POST" class="form-horizontal">
                                        
                                        <div class="card-body card-block">
                                        <div class="row form-group">
                                            <div class="col col-md-6">
                                                <label for="veh_name" class="form-control-label">Vehicle name</label>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <input type="veh_name" id="veh_name" name="veh_name" class="form-control" placeholder="Vehicle name" required/>   
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-6">
                                                <label for="veh_model" class="form-control-label">Vehicle model</label>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <input type="veh_model" id="veh_model" name="veh_model" placeholder="Model e.g: Toyota" class="form-control" required/>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-6">
                                                <label for="plate_no" class="form-control-label">Vehicle Plate Number</label>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <input type="plate_no" id="plate_no" name="plate_no" placeholder="Plate no e.g: RAD300" class="form-control" required/>
                                            </div>
                                        </div>
                                        </div>

                                        <div class="card-footer">
                                            <input type="submit" name="saveVehicle" class="btn btn-success btn-md" value="Save">
                                            <button type="reset" class="btn btn-danger btn-md">
                                                <i class="fa fa-ban"></i> Cancel
                                            </button>
                                        </div>
                                    </form>
                                    <?php } ?>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <?php foreach($clientFullData as $data){ ?>
                                            <strong>Vehicles assigned to <?php echo $data->firstname; ?></strong>
                                        <?php } ?>
                                    </div>
                                    <div class="card-body card-block">
                                        <!---Start table -->
                                        <div class="row m-t-30">
                                            <div class="col-md-12">
                                                <div class="table-responsive m-b-40">
                                                    <table class="table table-borderless table-data3">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Vehicle Name</th>
                                                                <th>Plate.No</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            <?php 
                                                            $num= 1;
                                                            foreach($vehicleData as $vdata) { 
                                                            ?>
                                                            <tr>
                                                                <td><?php echo $num; ?></td>
                                                                <td><?php echo $vdata->veh_name; ?></td>
                                                                <td><?php echo $vdata->veh_plateno; ?></td>
                                                            </tr>
                                                            <?php $num++; } ?>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End table -->
                                    </div>
                                </div>
                            </div>
                        </div>