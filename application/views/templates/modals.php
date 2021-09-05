            <!-- Modals add client -->
            <div class="modal fade" id="addClient" tabindex="-2" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="mediumModalLabel">Add new client</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <form method="POST">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="firstname" class="control-label mb-1">First name</label>
                                            <input id="firstname" name="firstname" type="text" class="form-control" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="lastname" class="control-label mb-1">Last name</label>
                                            <input id="lastname" name="lastname" type="text" class="form-control" autocomplete="off">
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="username" class="control-label mb-1">Username</label>
                                            <input id="username" name="username" type="text" class="form-control" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="cc-expphone_no" class="control-label mb-1">Phone number</label>
                                            <input id="phone_no" name="phone_no" type="text" class="form-control" autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="email" class="control-label mb-1">Email</label>
                                            <input id="email" name="email" type="email" class="form-control" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="password" class="control-label mb-1">Password</label>
                                            <input id="password" name="password" type="password" class="form-control" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="address" class="control-label mb-1">Address</label>
                                    <input id="address" name="address" type="text" class="form-control" autocomplete="off">
                                    <small class="help-block form-text">Add address like: Huye, Tumba</small>
                                </div>
                                
                                <div class="form-actions form-group">
                                    <input type="submit" class="btn btn-primary btn-md" name="saveclient" value="Save">
                                    <button type="reset" class="btn btn-danger btn-md">
                                        <i class="fa fa-ban"></i> Cancel
                                    </button>
                                </div>

                            </form>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Exit</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal client -->



            <!-- Modals add slot -->
            <div class="modal fade" id="newslot" tabindex="-2" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="mediumModalLabel" title="New slot">Add new parking slot</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <form method="POST">

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="space_code" class="control-label mb-1">Slot code</label>
                                            <input id="space_code" name="space_code" type="text" class="form-control" disabled/>
                                            <small class="help-block form-text">Code's generated by system</small>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="space_price" class="control-label mb-1">Price</label>
                                            <input id="space_price" name="space_price" type="text" class="form-control" disabled/>
                                            <small class="help-block form-text">Price depends on the size & level</small>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="form-group">
                                    <label for="space_size" class="control-label mb-1">Space size</label>
                                    <select id="space_size" name="space_size" class="form-control form-control">
                                        <option value="">Please select</option>
                                        <option value="Large">Large</option>
                                        <option value="Medium">Medium</option>
                                        <option value="Small">Small</option>
                                    </select>
                                </div> -->

                                <div class="form-group">
                                    <label for="space_level" class="control-label mb-1">Space level</label>
                                    <select id="space_level" name="space_level" class="form-control form-control" required>
                                        <option value="">Please select</option>
                                        <option value="Normal">Normal</option>
                                        <option value="VIP">VIP</option>
                                    </select>                                    
                                </div>
                                
                                <div class="form-actions form-group">
                                    <input type="submit" class="btn btn-primary btn-md" name="saveslot" value="Save">
                                
                                    <button type="reset" class="btn btn-danger btn-md">
                                        <i class="fa fa-ban"></i> Cancel
                                    </button>
                                </div>

                            </form>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Exit</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal medium -->


        </div>
    </div>