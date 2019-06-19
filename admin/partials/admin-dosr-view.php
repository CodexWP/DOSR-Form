<h3>View ID : <?=$results[0]->id?></h3>
<hr></br>

<div style="max-width:100%;border:1px solid gainsboro;padding:15px;border-radius:5px;">
    <table width="100%" style="border-collapse: collapse;border: 1px solid gainsboro;">
        <tr>
            <td style="border: 1px solid gainsboro;" width="50%"><strong>Shift Supervisor</strong></td>
            <td style="border: 1px solid gainsboro;" width="25%"><strong>Shift<strong></td>
            <td style="border: 1px solid gainsboro;" width="25%"><strong>Date<strong></td>
        </tr>
        <tr>
            <td style="border: 1px solid gainsboro;"><?=isset($post['shift_supervisor'])?$post['shift_supervisor']:''?></td>
            <td style="border: 1px solid gainsboro;"><?=isset($post['dosr_shift'])?$post['dosr_shift']:''?></td>
            <td style="border: 1px solid gainsboro;"><?=isset($post['dosr_date'])?$post['dosr_date']:''?></td>
        </tr>
    </table>
    <br><br>

    <table width="100%" style="border-collapse: collapse;border: 1px solid gainsboro;">
        <tr>
            <td style="border: 1px solid gainsboro;" width="50%"><strong>Total Population Prison:</strong> <?=isset($post['total_tpp'])?$post['total_tpp']:''?></td>
            <td style="border: 1px solid gainsboro;" width="25%"><strong>Males:</strong> <?=isset($post['tpp_males'])?$post['tpp_males']:''?></td>
            <td style="border: 1px solid gainsboro;" width="25%"><strong>Females:</strong> <?=isset($post['tpp_females'])?$post['tpp_females']:''?></td>
        </tr>
        <tr>
            <td style="border: 1px solid gainsboro;" width="50%"><strong>Total Population Annex:</strong> <?=isset($post['total_tpa'])?$post['total_tpa']:''?></td>
            <td style="border: 1px solid gainsboro;" width="25%"><strong>Males:</strong> <?=isset($post['tpa_males'])?$post['tpa_males']:''?></td>
            <td style="border: 1px solid gainsboro;" width="25%"><strong>Females:</strong> <?=isset($post['tpa_females'])?$post['tpa_females']:''?></td>
        </tr>
        <tr>
            <td style="border: 1px solid gainsboro;" width="50%"><strong>Total Population :</strong> <?=isset($post['total_tp'])?$post['total_tp']:''?></td>
        </tr>
    </table><br><br>
    <table width="100%" style="border-collapse: collapse;border: 1px solid gainsboro;">
        <tr>
            <td style="border: 1px solid gainsboro;"><strong>Time Called</strong></td>
            <td style="border: 1px solid gainsboro;" ><strong>Time Cleared</strong></td>
            <td style="border: 1px solid gainsboro;" ><strong>Out to Court</strong></td>
            <td style="border: 1px solid gainsboro;" ><strong>Across Bridge</strong></td>
            <td style="border: 1px solid gainsboro;" ><strong>Out to Court</strong></td>
            <td style="border: 1px solid gainsboro;" ><strong>Outside Detail</strong></td>
            <td style="border: 1px solid gainsboro;" ><strong>Total POP. Count</strong></td>

        </tr>
        <?php
        for($i=0;$i<count($post['table1_time_called']);$i++)
        {
            ?>
            <tr>
                <td style="border: 1px solid gainsboro;" ><?=isset($post['table1_time_called'][$i])?$post['table1_time_called'][$i]:''?></td>
                <td style="border: 1px solid gainsboro;" ><?=isset($post['table1_time_cleared'][$i])?$post['table1_time_cleared'][$i]:''?></td>
                <td style="border: 1px solid gainsboro;" ><?=isset($post['table1_out_court1'][$i])?$post['table1_out_court1'][$i]:''?></td>
                <td style="border: 1px solid gainsboro;" ><?=isset($post['table1_across_bridge'][$i])?$post['table1_across_bridge'][$i]:''?></td>
                <td style="border: 1px solid gainsboro;" ><?=isset($post['table1_out_court2'][$i])?$post['table1_out_court2'][$i]:''?></td>
                <td style="border: 1px solid gainsboro;" ><?=isset($post['table1_outside_detail'][$i])?$post['table1_outside_detail'][$i]:''?></td>
                <td style="border: 1px solid gainsboro;" ><?=isset($post['table1_pop_count'][$i])?$post['table1_pop_count'][$i]:''?></td>
            </tr>
            <?php
        }
        ?>
    </table>
    Counts : <?=isset($post['table1_counts'])?$post['table1_counts']:''?>
    <br><br>
    <?php
    if(isset($post['chk_ecfcc']))
    {
        echo '<strong>Equipment Checklist for central control</strong><br>';
        for($i=0;$i<count($post['chk_ecfcc']);$i++){
            echo $post['chk_ecfcc'][$i].', ';
        }
    }
    ?>
    <br><br>
    <strong>Equipment Checklist for central control:</strong><br>
    <?=isset($post['txt_nadce'])?$post['txt_nadce']:''?>
    <br><br>



    <strong style="font-size:16px;">INTAKE</strong><hr>
    <table width="100%" style="border-collapse: collapse;border: 1px solid gainsboro;">
        <tr>
            <td style="border: 1px solid gainsboro;"><strong>Commit</strong></td>
            <td style="border: 1px solid gainsboro;" ><strong>B.W</strong></td>
            <td style="border: 1px solid gainsboro;" ><strong>Race/Sex</strong></td>
            <td style="border: 1px solid gainsboro;" ><strong>Shift</strong></td>
            <td style="border: 1px solid gainsboro;" ><strong>Call</strong></td>
        </tr>
        <?php
        for($i=0;$i<count($post['table2_commit_commit']);$i++)
        {
            ?>
            <tr>
                <td style="border: 1px solid gainsboro;" ><?=isset($post['table2_commit_commit'][$i])?$post['table2_commit_commit'][$i]:''?></td>
                <td style="border: 1px solid gainsboro;" ><?=isset($post['table2_commit_bw'][$i])?$post['table2_commit_bw'][$i]:''?></td>
                <td style="border: 1px solid gainsboro;" ><?=isset($post['table2_commit_racesex'][$i])?$post['table2_commit_racesex'][$i]:''?></td>
                <td style="border: 1px solid gainsboro;" ><?=isset($post['table2_commit_shift'][$i])?$post['table2_commit_shift'][$i]:''?></td>
                <td style="border: 1px solid gainsboro;" ><?=isset($post['table2_commit_call'][$i])?$post['table2_commit_call'][$i]:''?></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <br>
    <table width="100%" style="border-collapse: collapse;border: 1px solid gainsboro;">
        <tr>
            <td style="border: 1px solid gainsboro;"><strong>Released</strong></td>
            <td style="border: 1px solid gainsboro;" ><strong>B.W</strong></td>
            <td style="border: 1px solid gainsboro;" ><strong>Race/Sex</strong></td>
            <td style="border: 1px solid gainsboro;" ><strong>Shift</strong></td>
            <td style="border: 1px solid gainsboro;" ><strong>Call</strong></td>
        </tr>

        <?php
        for($i=0;$i<count($post['table3_released_released']);$i++)
        {
            ?>
            <tr>
                <td style="border: 1px solid gainsboro;" ><?=isset($post['table3_released_released'][$i])?$post['table3_released_released'][$i]:''?></td>
                <td style="border: 1px solid gainsboro;" ><?=isset($post['table3_released_bw'][$i])?$post['table3_released_bw'][$i]:''?></td>
                <td style="border: 1px solid gainsboro;" ><?=isset($post['table3_released_racesex'][$i])?$post['table3_released_racesex'][$i]:''?></td>
                <td style="border: 1px solid gainsboro;" ><?=isset($post['table3_released_shift'][$i])?$post['table3_released_shift'][$i]:''?></td>
                <td style="border: 1px solid gainsboro;" ><?=isset($post['table3_released_call'][$i])?$post['table3_released_call'][$i]:''?></td>
            </tr>
            <?php
        }
        ?>
    </table>

    <br>
    <table width="100%" style="border-collapse: collapse;border: 1px solid gainsboro;">
        <tr>
            <td style="border: 1px solid gainsboro;"><strong>Rentals</strong></td>
            <td style="border: 1px solid gainsboro;" ><strong>B.W</strong></td>
            <td style="border: 1px solid gainsboro;" ><strong>Race/Sex</strong></td>
            <td style="border: 1px solid gainsboro;" ><strong>Shift</strong></td>
            <td style="border: 1px solid gainsboro;" ><strong>Call</strong></td>
        </tr>
        <?php
        for($i=0;$i<count($post['table4_rentals_rentals']);$i++)
        {
            ?>
            <tr>
                <td style="border: 1px solid gainsboro;" ><?=isset($post['table4_rentals_rentals'][$i])?$post['table4_rentals_rentals'][$i]:''?></td>
                <td style="border: 1px solid gainsboro;" ><?=isset($post['table4_rentals_bw'][$i])?$post['table4_rentals_bw'][$i]:''?></td>
                <td style="border: 1px solid gainsboro;" ><?=isset($post['table4_rentals_racesex'][$i])?$post['table4_rentals_racesex'][$i]:''?></td>
                <td style="border: 1px solid gainsboro;" ><?=isset($post['table4_rentals_shift'][$i])?$post['table4_rentals_shift'][$i]:''?></td>
                <td style="border: 1px solid gainsboro;" ><?=isset($post['table4_rentals_call'][$i])?$post['table4_rentals_call'][$i]:''?></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <br><br>

    <strong style="font-size:16px;">EXTERNAL PERIMETER CHECKS</strong><hr>
    <table width="100%" style="border-collapse: collapse;border: 1px solid gainsboro;">
        <tr>
            <td style="border: 1px solid gainsboro;"><strong>Shift</strong></td>
            <td style="border: 1px solid gainsboro;" ><strong>Date</strong></td>
            <td style="border: 1px solid gainsboro;" ><strong>Staff</strong></td>
        </tr>
        <tr>
            <td style="border: 1px solid gainsboro;"><?=isset($post['epc_shift'])?$post['epc_shift']:''?></td>
            <td style="border: 1px solid gainsboro;" ><?=isset($post['epc_time'])?$post['epc_time']:''?></td>
            <td style="border: 1px solid gainsboro;" ><?=isset($post['epc_staff'])?$post['epc_staff']:''?></td>
        </tr>
    </table><br>
    <strong>Issues that need addressed :</strong>
    <?=isset($post['epc_issues_tna'])?$post['epc_issues_tna']:''?><br>
    <strong>Explanation: </strong>
    <?=isset($post['epc_issues_exp'])?$post['epc_issues_exp']:''?>

    <br><br>

    <strong style="font-size:16px;">INTERNAL CHECKS</strong><hr>
    <table width="100%" style="border-collapse: collapse;border: 1px solid gainsboro;">
        <tr>
            <td style="border: 1px solid gainsboro;"><strong>Shift</strong></td>
            <td style="border: 1px solid gainsboro;" ><strong>Date</strong></td>
            <td style="border: 1px solid gainsboro;" ><strong>Staff</strong></td>
        </tr>
        <tr>
            <td style="border: 1px solid gainsboro;"><?=isset($post['ic_shift'])?$post['ic_shift']:''?></td>
            <td style="border: 1px solid gainsboro;" ><?=isset($post['ic_time'])?$post['ic_time']:''?></td>
            <td style="border: 1px solid gainsboro;" ><?=isset($post['ic_staff'])?$post['ic_staff']:''?></td>
        </tr>
    </table><br>
    <strong>Issues that need addressed</strong>
    <?=isset($post['ic_issues_tna'])?$post['ic_issues_tna']:''?><br>
    <strong>Explanation</strong>
    <?=isset($post['ic_issues_exp'])?$post['ic_issues_exp']:''?>

    <br><br>

    <strong style="font-size:16px;">MAINTENANCE CONCERNS</strong><hr>
    <table width="100%" style="border-collapse: collapse;border: 1px solid gainsboro;">
        <tr>
            <td style="border: 1px solid gainsboro;"><strong>Shift</strong></td>
            <td style="border: 1px solid gainsboro;" ><strong>Date</strong></td>
            <td style="border: 1px solid gainsboro;" ><strong>Staff</strong></td>
        </tr>
        <tr>
            <td style="border: 1px solid gainsboro;"><?=isset($post['mc_shift'])?$post['mc_shift']:''?></td>
            <td style="border: 1px solid gainsboro;" ><?=isset($post['mc_time'])?$post['mc_time']:''?></td>
            <td style="border: 1px solid gainsboro;" ><?=isset($post['mc_staff'])?$post['mc_staff']:''?></td>
        </tr>
    </table><br>
    <strong>Issues that need addressed</strong>
    <?=isset($post['mc_issues_tna'])?$post['mc_issues_tna']:''?><br>
    <strong>Explanation</strong>
    <?=isset($post['mc_issues_exp'])?$post['mc_issues_exp']:''?>

    <br><br>
    <strong style="font-size:16px;">RECREATION</strong><hr>
    <table width="100%" style="border-collapse: collapse;border: 1px solid gainsboro;">
        <tr>
            <td style="border: 1px solid gainsboro;"><strong>Yard Out Time</strong></td>
            <td style="border: 1px solid gainsboro;" ><strong>Total Out</strong></td>
            <td style="border: 1px solid gainsboro;" ><strong>	Yard In Time</strong></td>
            <td style="border: 1px solid gainsboro;" ><strong>Temp</strong></td>
        </tr>
        <?php
        for($i=0;$i<count($post['table5_recrea_yot']);$i++)
        {
            ?>
            <tr>
                <td style="border: 1px solid gainsboro;" ><?=isset($post['table5_recrea_yot'][$i])?$post['table5_recrea_yot'][$i]:''?></td>
                <td style="border: 1px solid gainsboro;" ><?=isset($post['table5_recrea_to'][$i])?$post['table5_recrea_to'][$i]:''?></td>
                <td style="border: 1px solid gainsboro;" ><?=isset($post['table5_recrea_yit'][$i])?$post['table5_recrea_yit'][$i]:''?></td>
                <td style="border: 1px solid gainsboro;" ><?=isset($post['table5_recrea_temp'][$i])?$post['table5_recrea_temp'][$i]:''?></td>
            </tr>
            <?php
        }
        ?>
    </table><br>
    <table width="100%" style="border-collapse: collapse;border: 1px solid gainsboro;">
        <tr>
            <td style="border: 1px solid gainsboro;" width="50%"><strong>Yard Cancelled</strong></td>
            <td style="border: 1px solid gainsboro;" width="50%"><strong>Reason</strong></td>
        </tr>
        <tr>
            <td style="border: 1px solid gainsboro;" ><?=isset($post['recrea_yard_canc'])?$post['recrea_yard_canc']:''?></td>
            <td style="border: 1px solid gainsboro;" ><?=isset($post['recrea_yard_canc_reason'])?$post['recrea_yard_canc_reason']:''?></td>
        </tr>
    </table>

    <br><br>
    <?php
    if(isset($post['chk_clean_com']))
    {
        echo '<strong>Cleaning Completed</strong><br>';
        for($i=0;$i<count($post['chk_clean_com']);$i++){
            echo $post['chk_clean_com'][$i].', ';
        }
    }
    ?>
    <br><br>



    <strong style="font-size:16px;">OUTSIDE HOSPITAL POSTS</strong><hr>
    <table width="100%" style="border-collapse: collapse;border: 1px solid gainsboro;">
        <tr>
            <td style="border: 1px solid gainsboro;"><strong>Location</strong></td>
            <td style="border: 1px solid gainsboro;" ><strong>Room</strong></td>
            <td style="border: 1px solid gainsboro;" ><strong>Inmate Name</strong></td>
            <td style="border: 1px solid gainsboro;" ><strong>Staff Members</strong></td>
        </tr>
        <?php
        for($i=0;$i<count($post['table6_ohp_loc']);$i++)
        {
            ?>
            <tr>
                <td style="border: 1px solid gainsboro;" ><?=isset($post['table6_ohp_loc'][$i])?$post['table6_ohp_loc'][$i]:''?></td>
                <td style="border: 1px solid gainsboro;" ><?=isset($post['table6_ohp_room'][$i])?$post['table6_ohp_room'][$i]:''?></td>
                <td style="border: 1px solid gainsboro;" ><?=isset($post['table6_ohp_in'][$i])?$post['table6_ohp_in'][$i]:''?></td>
                <td style="border: 1px solid gainsboro;" ><?=isset($post['table6_ohp_sm'][$i])?$post['table6_ohp_sm'][$i]:''?></td>
            </tr>
            <?php
        }
        ?>
    </table>

    <br><br>

    <strong style="font-size:16px;">DOC WATCHES</strong><hr>
    <table width="100%" style="border-collapse: collapse;border: 1px solid gainsboro;">
        <tr>
            <td style="border: 1px solid gainsboro;"><strong>ADM-15/SPG-1/DOC 15</strong></td>
            <td style="border: 1px solid gainsboro;" ><strong>Inmate Name</strong></td>
            <td style="border: 1px solid gainsboro;" ><strong>Housing Loc</strong></td>
        </tr>
        <?php
        for($i=0;$i<count($post['table7_dw_adm']);$i++)
        {
            ?>
            <tr>
                <td style="border: 1px solid gainsboro;" ><?=isset($post['table7_dw_adm'][$i])?$post['table7_dw_adm'][$i]:''?></td>
                <td style="border: 1px solid gainsboro;" ><?=isset($post['table7_dw_in'][$i])?$post['table7_dw_in'][$i]:''?></td>
                <td style="border: 1px solid gainsboro;" ><?=isset($post['table7_dw_hl'][$i])?$post['table7_dw_hl'][$i]:''?></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <br><br>
    <strong style="font-size:16px;">SPG CELL SEARCHES</strong><hr>
    <strong>Shift:</strong><?=isset($post['scs_shift'])?$post['scs_shift']:''?><br>
    <strong>Completed By:</strong><?=isset($post['scs_com_by'])?$post['scs_com_by']:''?>
    <br><br>
    <strong style="font-size:16px;">CELL DOOR/BAR CHECKS</strong><hr>
    <strong>Shift:</strong><?=isset($post['cdbc_shift'])?$post['cdbc_shift']:''?><br>
    <strong>Completed By:</strong><?=isset($post['cdbc_com_by'])?$post['cdbc_com_by']:''?>
    <br><br>

    <strong style="font-size:16px;">GENERAL CELL SEARCHES</strong><hr>
    <table width="100%" style="border-collapse: collapse;border: 1px solid gainsboro;">
        <tr>
            <td style="border: 1px solid gainsboro;"><strong>Shift</strong></td>
            <td style="border: 1px solid gainsboro;" ><strong>Cell</strong></td>
            <td style="border: 1px solid gainsboro;" ><strong>Completed By</strong></td>
        </tr>
        <?php
        for($i=0;$i<count($post['table8_gcs_shift']);$i++)
        {
            ?>
            <tr>
                <td style="border: 1px solid gainsboro;" ><?=isset($post['table8_gcs_shift'][$i])?$post['table8_gcs_shift'][$i]:''?></td>
                <td style="border: 1px solid gainsboro;" ><?=isset($post['table8_gcs_cell'][$i])?$post['table8_gcs_cell'][$i]:''?></td>
                <td style="border: 1px solid gainsboro;" ><?=isset($post['table8_gcs_by'][$i])?$post['table8_gcs_by'][$i]:''?></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <br><br>

    <strong style="font-size:16px;">COMMON AREA SEARCHES</strong><hr>
    <table width="100%" style="border-collapse: collapse;border: 1px solid gainsboro;">
        <tr>
            <td style="border: 1px solid gainsboro;"><strong>Shift</strong></td>
            <td style="border: 1px solid gainsboro;" ><strong>Cell</strong></td>
            <td style="border: 1px solid gainsboro;" ><strong>Completed By</strong></td>
        </tr>
        <?php
        for($i=0;$i<count($post['table9_cas_shift']);$i++)
        {
            ?>
            <tr>
                <td style="border: 1px solid gainsboro;" ><?=isset($post['table9_cas_shift'][$i])?$post['table9_cas_shift'][$i]:''?></td>
                <td style="border: 1px solid gainsboro;" ><?=isset($post['table9_cas_cell'][$i])?$post['table9_cas_cell'][$i]:''?></td>
                <td style="border: 1px solid gainsboro;" ><?=isset($post['table9_cas_by'][$i])?$post['table9_cas_by'][$i]:''?></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <br><br>
    <strong style="font-size:16px;">PLEASE ATTACH A COPY OF ALL REPORTS FOR YOUR SHIFT</strong><hr>
    <table width="100%" style="border-collapse: collapse;border: 1px solid gainsboro;">
        <tr>
            <td style="border: 1px solid gainsboro;"><strong>Report</strong></td>
            <td style="border: 1px solid gainsboro;" ><strong>Summary of occurance</strong></td>
        </tr>
        <?php
        for($i=0;$i<count($post['table10_ac_report']);$i++)
        {
            ?>
            <tr>
                <td style="border: 1px solid gainsboro;" ><?=isset($post['table10_ac_report'][$i])?$post['table10_ac_report'][$i]:''?></td>
                <td style="border: 1px solid gainsboro;" ><?=isset($post['table10_ac_summary'][$i])?$post['table10_ac_summary'][$i]:''?></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <br><br>
    <strong>Notes/Additional Information</strong><br>
    <?=isset($post['notes_additional_info'])?$post['notes_additional_info']:''?>
    <br><br>
    <strong>SHIFT COMMANDER’S REVIEW AND APPROVAL</strong><hr>
    <strong>6-2:</strong><?=isset($post['staff_review_62'])?$post['staff_review_62']:''?><br>
    <strong>2-10:</strong><?=isset($post['staff_review_210'])?$post['staff_review_210']:''?><br>
    <strong>10-6:</strong><?=isset($post['staff_review_106'])?$post['staff_review_106']:''?>


</div>