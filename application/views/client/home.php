
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
                                    <h3 class="title-1">
                                        <?php
                                        if($userc = $this->session->userdata('clogged_in')) { 
                                            extract($userc);
                                            echo "Welcome <b>".$username."</b>, Book parking now!";
                                        }
                                        ?>    
                                    </h3>
                                    <a href="<?php echo base_url();?>client/parking" class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>book now!
                                    </a>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-12 m-t-25">
                            <!-- AVAILABLE SPACES -->
                            <div class="top-campaign">
                                <h5 class="title-5 m-b-25">available parking spaces</h5>
                                <div class="table-responsive">
                                    <table class="table table-top-campaign">
                                        <thead>
                                            <th>No.</th>
                                            <th>Space code</th>
                                            <th class="text-right">Space price</th>
                                        </thead>
                                            
                                        <tbody>
                                            <?php 
                                            $num=1;
                                            foreach($avSlotData as $sdata) { 
                                            ?>
                                            <tr>
                                                <td><?php echo $num;?></td>
                                                <td><?php echo $sdata->space_code; ?></td>
                                                <td class="text-right"><p><?php echo "Price depends on parking time"; ?></p></td>
                                            </tr>
                                            <?php $num++;} ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>




