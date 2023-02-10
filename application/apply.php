<div id='apply' class="col-12 col-md-11 profile-screen mt-0 mt-md-3 mx-auto">
    <div class="mt-3 mt-md-0">
                    <h5 class="col-12 fw-bold my-4 mb-1">Home Address</h5>
                    <form class="needs-validation" action="" method="post" name="personal-info" id="personal-info">
                        <div class="col-12 col-md-6">
                            <label for="region" class="form-label">Region<span class="text-muted"></span></label>
                            <select type="text" class="form-control" id="region" placeholder="" name="region" required="">
                                <option value="none">--Select--</option>
                                <?php
                                    require_once '../class/reference.class.php';
                                    $ref_obj = new Reference();
                                    $ref = $ref_obj->get_region();
                                    foreach($ref as $row){
                                ?>
                                        <option value="<?=$row['regCode']?>"><?=$row['regDesc']?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="province" class="form-label">Province<span class="text-muted"></span></label>
                            <select type="text" class="form-control" id="province" placeholder="" name="province" required="">
                                <option value="none">--Select--</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="city" class="form-label">City/Municipality<span class="text-muted"></span></label>
                            <select type="text" class="form-control" id="city" placeholder="" name="city" required="">
                                <option value="none">--Select--</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="barangay" class="form-label">Barangay<span class="text-muted"></span></label>
                            <select type="text" class="form-control" id="barangay" placeholder="" name="barangay" required="">
                                <option value="none">--Select--</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="drive" class="form-label">Street Name<span class="text-muted"></span></label>
                            <input type="text" class="form-control" id="drive" placeholder="Optional" name="drive" required="">
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="house_no" class="form-label">Building/House No.<span class="text-muted"></span></label>
                            <input type="text" class="form-control" id="house_no" placeholder="Optional" name="house_no">
                        </div>
                        <div class="col-12 m-0">
                            <hr class="my-4 mx-auto w-">
                        </div>
                        <div class="col-6 text-start m-0">
                            <a class="btn btn-lg btn-success btn-font w-100 back-button m-0 d-none" name="apply" id="apply">
                                <i class="fa-solid fa-arrow-left-long pe-1"></i>
                                Back
                            </a>
                        </div>
                        <div class="col-6 text-end m-0">
                            <button class="btn btn-lg btn-success background-color-green w-100 next-button btn-font m-0" type="submit" value="Next" name="apply" id="apply">
                                Next
                                <i class="ps-1 fa-solid fa-arrow-right-long"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>