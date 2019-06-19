<div class="bootstrap-iso">
    <?php
    if(isset($sub)) {
        ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            <strong>Success!</strong> Form is successfully submitted!
        </div>
        <?php
    }
    ?>
    <div class="stepwizard col-md-offset-3">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
                <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                <p>Step 1</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                <p>Step 2</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                <p>Step 3</p>
            </div>
        </div>
    </div>

    <form role="form" action="" method="post" >
        <div class="row setup-content" id="step-1">

            <div class="panel" >
                <div class="panel-heading" >
                    Step 1
                </div>
                <div class="panel-body">

                    <div class="row mb-20">
                        <div class="col-sm-6">
                            FAYETTE COUNTY PRISON<hr class="mt-10 mb-10">
                            <div class="form-group">
                                <label class="control-label">Shift Supervisor</label>
                                <input name="shift_supervisor" type="text" class="form-control" placeholder="Shift supervisor...">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            DAILY OPERATIONS SUMMARY REPORT<hr class="mt-10 mb-10">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Shift</label>
                                        <input name="dosr_shift" type="text" class="form-control" placeholder="Enter shift">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Date</label>
                                        <input name="dosr_date" type="text" class="form-control" placeholder="Enter Date">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">Total Population Prison</label>
                                <input name="total_tpp" type="number" class="form-control" placeholder="Total Population Prison">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">Males</label>
                                <input name="tpp_males" type="number" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">Females</label>
                                <input name="tpp_females" type="number" class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">Total Population Annex</label>
                                <input name="total_tpa" type="text" class="form-control" placeholder="Total Population Annex">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">Males</label>
                                <input name="tpa_males" type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">Females</label>
                                <input name="tpa_females" type="number" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">Total Population</label>
                                <input name="total_tp" type="number" class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-20">
                        <div class="col-sm-12">
                            <table class="table table-responsive" id="table1">
                                <tr>
                                    <td>Time Called</td>
                                    <td>Time Cleared</td>
                                    <td>Out to Court</td>
                                    <td>Across Bridge</td>
                                    <td>Out to Court</td>
                                    <td>Outside Detail</td>
                                    <td>Total POP. Count</td>
                                    <td>Action</td>
                                </tr>
                                <tr>
                                    <td><input name="table1_time_called[]" type="text" class="form-control"></td>
                                    <td><input name="table1_time_cleared[]" type="text" class="form-control"></td>
                                    <td><input name="table1_out_court1[]" type="text" class="form-control"></td>
                                    <td><input name="table1_across_bridge[]" type="text" class="form-control"></td>
                                    <td><input name="table1_out_court2[]" type="text" class="form-control"></td>
                                    <td><input name="table1_outside_detail[]" type="text" class="form-control"></td>
                                    <td><input name="table1_pop_count[]" type="text" class="form-control"></td>
                                    <td><button type="button" class="btn btn-danger btn-sm btn-remove-row-table1">Remove</button></td>
                                </tr>
                            </table>
                            <div class="row">
                                <div class="col-sm-2 text-right">
                                    <label class="control-label">Counts</label>
                                </div>
                                <div class="col-sm-3">
                                  <input name="table1_counts" type="number" class="form-control" placeholder="">
                                </div>
                                <div class="col-sm-7 text-right">
                                    <button id="btn-add-row-table1" type="button" class="btn btn-default btn-sm ">Add More</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-20">
                        <div class="col-sm-12 mb-20 mt-20">
                            Equipment Checklist for central control<br>
                            <label class="checkbox-inline"><input name="chk_ecfcc[]" type="checkbox" value="KEYS">KEYS</label>
                            <label class="checkbox-inline"><input name="chk_ecfcc[]" type="checkbox" value="RADIOS">RADIOS</label>
                            <label class="checkbox-inline"><input name="chk_ecfcc[]" type="checkbox" value="CUFFS">CUFFS</label>
                            <label class="checkbox-inline"><input name="chk_ecfcc[]" type="checkbox" value="SHACKLES">SHACKLES</label>
                            <label class="checkbox-inline"><input name="chk_ecfcc[]" type="checkbox" value="MAGAZINES">MAGAZINES</label>
                            <label class="checkbox-inline"><input name="chk_ecfcc[]" type="checkbox" value="SHOTGUN SHELLS (BEANBAG)">SHOTGUN SHELLS (BEANBAG)</label>
                        </div>
                        <div class="col-sm-12 mb-20">
                            Note any deficiencies converning equipment
                            <textarea name="txt_nadce" class="form-control">
                            </textarea>
                        </div>
                    </div>

                    <div class="row mb-20 mt-20">
                        <div class="col-md-12">
                            <button class="btn btn-success nextBtn btn-lg pull-right" type="button">Next Page</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row setup-content" id="step-2">

            <div class="panel" >
                <div class="panel-heading" >
                    Step 2
                </div>
                <div class="panel-body">

                    <div class="row">
                        <div class="col-sm-12 mb-20">
                            INTAKE<hr class="mt-10 mb-10">
                            <table class="table table-responsive" id="table2">
                                <tr>
                                    <td>Commit</td>
                                    <td>B.W</td>
                                    <td>Race/Sex</td>
                                    <td>Shift</td>
                                    <td>Call</td>
                                    <td>Action</td>
                                </tr>
                                <tr>
                                    <td><input name="table2_commit_commit[]" type="text" class="form-control"></td>
                                    <td><input name="table2_commit_bw[]" type="text" class="form-control"></td>
                                    <td><input name="table2_commit_racesex[]" type="text" class="form-control"></td>
                                    <td><input name="table2_commit_shift[]" type="text" class="form-control"></td>
                                    <td><input name="table2_commit_call[]" type="text" class="form-control"></td>
                                    <td><button type="button" class="btn btn-danger btn-sm btn-remove-row-table2">Remove</button></td>
                                </tr>
                            </table>
                            <div class="mt-10 text-right">
                                <button id="btn-add-row-table2" type="button" class="btn btn-default btn-sm ">Add More</button>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-20">
                            <table class="table table-responsive" id="table3">
                                <tr>
                                    <td>Released</td>
                                    <td>B.W</td>
                                    <td>Race/Sex</td>
                                    <td>Shift</td>
                                    <td>Call</td>
                                    <td>Action</td>
                                </tr>
                                <tr>
                                    <td><input name="table3_released_released[]" type="text" class="form-control"></td>
                                    <td><input name="table3_released_bw[]" type="text" class="form-control"></td>
                                    <td><input name="table3_released_racesex[]" type="text" class="form-control"></td>
                                    <td><input name="table3_released_shift[]" type="text" class="form-control"></td>
                                    <td><input name="table3_released_call[]" type="text" class="form-control"></td>
                                    <td><button type="button" class="btn btn-danger btn-sm btn-remove-row-table3">Remove</button></td>
                                </tr>
                            </table>
                            <div class="mt-10 text-right">
                                <button id="btn-add-row-table3" type="button" class="btn btn-default btn-sm ">Add More</button>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-20">
                            <table class="table table-responsive" id="table4">
                                <tr>
                                    <td>RENTALS</td>
                                    <td>B.W</td>
                                    <td>Race/Sex</td>
                                    <td>Shift</td>
                                    <td>Call</td>
                                    <td>Action</td>
                                </tr>
                                <tr>
                                    <td><input name="table4_rentals_rentals[]" type="text" class="form-control"></td>
                                    <td><input name="table4_rentals_bw[]" type="text" class="form-control"></td>
                                    <td><input name="table4_rentals_racesex[]" type="text" class="form-control"></td>
                                    <td><input name="table4_rentals_shift[]" type="text" class="form-control"></td>
                                    <td><input name="table4_rentals_call[]" type="text" class="form-control"></td>
                                    <td><button type="button" class="btn btn-danger btn-sm btn-remove-row-table4">Remove</button></td>
                                </tr>
                            </table>
                            <div class="mt-10 text-right">
                                <button id="btn-add-row-table4" type="button" class="btn btn-default btn-sm ">Add More</button>
                            </div>
                        </div>
                    </div>

                    <div class="panel">
                         <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    EXTERNAL PERIMETER CHECKS<hr class="mt-10 mb-10">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label">Shift</label>
                                                <input name="epc_shift" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label">Time</label>
                                                <input name="epc_time" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label">Staff</label>
                                                <input name="epc_staff" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="control-label">Issues that need addressed</label>
                                                <textarea name="epc_issues_tna"  class="form-control" placeholder=""></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="control-label">Explanation</label>
                                                <textarea name="epc_issues_exp"  class="form-control" placeholder=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         </div>
                    </div>
                    <div class="panel">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    INTERNAL CHECKS<hr class="mt-10 mb-10">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label">Shift</label>
                                                <input name="ic_shift" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label">Time</label>
                                                <input name="ic_time" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label">Staff</label>
                                                <input name="ic_staff" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="control-label">Issues that need addressed</label>
                                                <textarea name="ic_issues_tna"  class="form-control" placeholder=""></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="control-label">Explanation</label>
                                                <textarea name="ic_issues_exp"  class="form-control" placeholder=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    MAINTENANCE CONCERNS<hr class="mt-10 mb-10">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label">Shift</label>
                                                <input name="mc_shift" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label">Time</label>
                                                <input name="mc_time" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label">Staff</label>
                                                <input name="mc_staff" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="control-label">Issues that need addressed</label>
                                                <textarea name="mc_issues_tna"  class="form-control" placeholder=""></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="control-label">Explanation</label>
                                                <textarea name="mc_issues_exp"  class="form-control" placeholder=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 mb-20">
                            RECREATION<hr class="mt-10 mb-10">
                            <table class="table table-responsive" id="table5">
                                <tr>
                                    <td>Yard Out Time</td>
                                    <td>Total Out</td>
                                    <td>Yard In Time</td>
                                    <td>Temp</td>
                                    <td>Action</td>
                                </tr>
                                <tr>
                                    <td><input name="table5_recrea_yot[]" type="text" class="form-control"></td>
                                    <td><input name="table5_recrea_to[]" type="text" class="form-control"></td>
                                    <td><input name="table5_recrea_yit[]" type="text" class="form-control"></td>
                                    <td><input name="table5_recrea_temp[]" type="text" class="form-control"></td>
                                    <td><button type="button" class="btn btn-danger btn-sm btn-remove-row-table5">Remove</button></td>
                                </tr>
                            </table>
                            <div class="mt-10 text-right">
                                <button id="btn-add-row-table5" type="button" class="btn btn-default btn-sm ">Add More</button>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">Yard Cancelled</label>
                                <input name="recrea_yard_canc" type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label class="control-label">Reason</label>
                                <textarea name="recrea_yard_canc_reason"  class="form-control" placeholder=""></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            Cleaning Completed<br>
                            <label class="checkbox-inline"><input name="chk_clean_com[]" type="checkbox" value="A-RANGE">A-RANGE</label>
                            <label class="checkbox-inline"><input name="chk_clean_com[]" type="checkbox" value="B-RANGE">B-RANGE</label>
                            <label class="checkbox-inline"><input name="chk_clean_com[]" type="checkbox" value="C-RANGE">C-RANGE</label>
                            <label class="checkbox-inline"><input name="chk_clean_com[]" type="checkbox" value="D-RANGE">D-RANGE</label>
                            <label class="checkbox-inline"><input name="chk_clean_com[]" type="checkbox" value="E-RANGE">E-RANGE</label>
                            <label class="checkbox-inline"><input name="chk_clean_com[]" type="checkbox" value="F-RANGE">F-RANGE</label>

                            <label class="checkbox-inline"><input name="chk_clean_com[]" type="checkbox" value="CONTROL">CONTROL</label>
                            <label class="checkbox-inline"><input name="chk_clean_com[]" type="checkbox" value="IWU">IWU</label>
                            <label class="checkbox-inline"><input name="chk_clean_com[]" type="checkbox" value="C-RANGE">C-RANGE</label>
                            <label class="checkbox-inline"><input name="chk_clean_com[]" type="checkbox" value="CRP">CRP</label>
                            <label class="checkbox-inline"><input name="chk_clean_com[]" type="checkbox" value="INTAKE/SMU">INTAKE/SMU</label>
                            <label class="checkbox-inline"><input name="chk_clean_com[]" type="checkbox" value="ALL COMMON AREAS">ALL COMMON AREAS</label>
                        </div>
                    </div>

                    <div class="row mb-20 mt-20">
                        <div class="col-md-12 ">
                            <button class="btn btn-default prevBtn btn-lg pull-left" type="button">Previous</button>
                            <button class="btn btn-success nextBtn btn-lg pull-right" type="button">Next Page</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row setup-content" id="step-3">
            <div class="panel" >
                <div class="panel-heading" >
                    Step 3
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12 mb-20">
                            OUTSIDE HOSPITAL POSTS<hr class="mt-10 mb-10">
                            <table class="table table-responsive" id="table6">
                                <tr>
                                    <td>Location</td>
                                    <td>Room</td>
                                    <td>Inmate Name</td>
                                    <td>Staff Members</td>
                                    <td>Action</td>
                                </tr>
                                <tr>
                                    <td><input name="table6_ohp_loc[]" type="text" class="form-control"></td>
                                    <td><input name="table6_ohp_room[]" type="text" class="form-control"></td>
                                    <td><input name="table6_ohp_in[]" type="text" class="form-control"></td>
                                    <td><input name="table6_ohp_sm[]" type="text" class="form-control"></td>
                                    <td><button type="button" class="btn btn-danger btn-sm btn-remove-row-table6">Remove</button></td>
                                </tr>
                            </table>
                            <div class="mt-10 text-right">
                                <button id="btn-add-row-table6" type="button" class="btn btn-default btn-sm ">Add More</button>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 mb-20">
                            DOC WATCHES<hr class="mt-10 mb-10">
                            <table class="table table-responsive" id="table7">
                                <tr>
                                    <td>ADM-15/SPG-1/DOC 15</td>
                                    <td>Inmate Name</td>
                                    <td>Housing Loc</td>
                                    <td>Action</td>
                                </tr>
                                <tr>
                                    <td><input name="table7_dw_adm[]" type="text" class="form-control"></td>
                                    <td><input name="table7_dw_in[]" type="text" class="form-control"></td>
                                    <td><input name="table7_dw_hl[]" type="text" class="form-control"></td>
                                    <td><button type="button" class="btn btn-danger btn-sm btn-remove-row-table7">Remove</button></td>
                                </tr>
                            </table>
                            <div class="mt-10 text-right">
                                <button id="btn-add-row-table7" type="button" class="btn btn-default btn-sm ">Add More</button>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            SPG CELL SEARCHES<hr class="mt-10 mb-10">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Shift</label>
                                        <input name="scs_shift" type="text" class="form-control" placeholder="Enter shift">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Completed By</label>
                                        <input name="scs_com_by" type="text" class="form-control" placeholder="Enter Date">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-20">
                        <div class="col-sm-12">
                            CELL DOOR/BAR CHECKS<hr class="mt-10 mb-10">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Shift</label>
                                        <input name="cdbc_shift" type="text" class="form-control" placeholder="Enter shift">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Completed By</label>
                                        <input name="cdbc_com_by" type="text" class="form-control" placeholder="Enter Date">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 mb-20">
                            GENERAL CELL SEARCHES<hr class="mt-10 mb-10">
                            <table class="table table-responsive" id="table8">
                                <tr>
                                    <td>Shift</td>
                                    <td>Cell</td>
                                    <td>Completed By</td>
                                    <td>Action</td>
                                </tr>
                                <tr>
                                    <td><input name="table8_gcs_shift[]" type="text" class="form-control"></td>
                                    <td><input name="table8_gcs_cell[]" type="text" class="form-control"></td>
                                    <td><input name="table8_gcs_by[]" type="text" class="form-control"></td>
                                    <td><button type="button" class="btn btn-danger btn-sm btn-remove-row-table8">Remove</button></td>
                                </tr>
                            </table>
                            <div class="mt-10 text-right">
                                <button id="btn-add-row-table8" type="button" class="btn btn-default btn-sm ">Add More</button>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-12 mb-20">
                            COMMON AREA SEARCHES<hr class="mt-10 mb-10">
                            <table class="table table-responsive" id="table9">
                                <tr>
                                    <td>Shift</td>
                                    <td>Cell</td>
                                    <td>Completed By</td>
                                    <td>Action</td>
                                </tr>
                                <tr>
                                    <td><input name="table9_cas_shift[]" type="text" class="form-control"></td>
                                    <td><input name="table9_cas_cell[]" type="text" class="form-control"></td>
                                    <td><input name="table9_cas_by[]" type="text" class="form-control"></td>
                                    <td><button type="button" class="btn btn-danger btn-sm btn-remove-row-table9">Remove</button></td>
                                </tr>
                            </table>
                            <div class="mt-10 text-right">
                                <button id="btn-add-row-table9" type="button" class="btn btn-default btn-sm ">Add More</button>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-12 mb-20">
                            PLEASE ATTACH A COPY OF ALL REPORTS FOR YOUR SHIFT<hr class="mt-10 mb-10">
                            <table class="table table-responsive" id="table10">
                                <tr>
                                    <td>Report</td>
                                    <td>Summary of occurance</td>
                                    <td>Action</td>
                                </tr>
                                <tr>
                                    <td><input name="table10_ac_report[]" type="text" class="form-control"></td>
                                    <td><input name="table10_ac_summary[]" type="text" class="form-control"></td>
                                    <td><button type="button" class="btn btn-danger btn-sm btn-remove-row-table10">Remove</button></td>
                                </tr>
                            </table>
                            <div class="mt-10 text-right">
                                <button id="btn-add-row-table10" type="button" class="btn btn-default btn-sm ">Add More</button>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label">Notes/Additional Information</label>
                                <textarea name="notes_additional_info"  class="form-control" placeholder=""></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            SHIFT COMMANDER’S REVIEW AND APPROVAL<hr class="mt-10 mb-10">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">6-2</label>
                                        <input name="staff_review_62" type="text" class="form-control" placeholder="Enter shift">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">2-10</label>
                                        <input name="staff_review_210" type="text" class="form-control" placeholder="Enter Date">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">10-6</label>
                                        <input name="staff_review_106" type="text" class="form-control" placeholder="Enter Date">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-20 mt-20">
                        <div class="col-md-12">
                            <input type="hidden" name="dosr" value="submit">
                            <button class="btn btn-default prevBtn btn-lg pull-left" type="button">Previous</button>
                            <button class="btn btn-success btn-lg pull-right" type="submit">Submit</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>

</div>
