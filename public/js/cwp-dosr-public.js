(function( $ ) {
	'use strict';
        $(document).ready(function () {
            var navListItems = $('div.setup-panel div a'),
                allWells = $('.setup-content'),
                allNextBtn = $('.nextBtn'),
                allPrevBtn = $('.prevBtn');

            allWells.hide();

            navListItems.click(function (e) {
                e.preventDefault();
                var $target = $($(this).attr('href')),
                    $item = $(this);

                if (!$item.hasClass('disabled')) {
                    navListItems.removeClass('btn-primary').addClass('btn-default');
                    $item.addClass('btn-primary');
                    allWells.hide();
                    $target.show();
                    $target.find('input:eq(0)').focus();
                }
            });

            allPrevBtn.click(function(){
                var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    prevStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

                prevStepWizard.removeAttr('disabled').trigger('click');
            });

            allNextBtn.click(function(){
                var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                    curInputs = curStep.find("input[type='text'],input[type='url']"),
                    isValid = true;

                $(".form-group").removeClass("has-error");
                for(var i=0; i<curInputs.length; i++){
                    if (!curInputs[i].validity.valid){
                        isValid = false;
                        $(curInputs[i]).closest(".form-group").addClass("has-error");
                    }
                }

                if (isValid)
                    nextStepWizard.removeAttr('disabled').trigger('click');
            });

            $('div.setup-panel div a.btn-primary').trigger('click');










            $("#btn-add-row-table1").click(function () {
                var html = '<tr><td><input name="table1_time_called[]" type="text" class="form-control"></td>\n' +
                        '<td><input name="table1_time_cleared[]" type="text" class="form-control"></td>\n' +
                        '<td><input name="table1_out_court1[]" type="text" class="form-control"></td>\n' +
                        '<td><input name="table1_across_bridge[]" type="text" class="form-control"></td>\n' +
                        '<td><input name="table1_out_court2[]" type="text" class="form-control"></td>\n' +
                        '<td><input name="table1_outside_detail[]" type="text" class="form-control"></td>\n' +
                        '<td><input name="table1_pop_count[]" type="text" class="form-control"></td>\n' +
                        '<td><button type="button" class="btn btn-danger btn-sm btn-remove-row-table1">Remove</button></td></tr>';
                $("#table1").append(html);
            })
            $("#table1").on('click',".btn-remove-row-table1", function(){
                $(this).parents('tr').remove();
            })




            $("#btn-add-row-table2").click(function () {
                var html ='<tr><td><input name="table2_commit_commit[]" type="text" class="form-control"></td>\n' +
                    '<td><input name="table2_commit_bw[]" type="text" class="form-control"></td>\n' +
                    '<td><input name="table2_commit_racesex[]" type="text" class="form-control"></td>\n' +
                    '<td><input name="table2_commit_shift[]" type="text" class="form-control"></td>\n' +
                    '<td><input name="table2_commit_call[]" type="text" class="form-control"></td>\n' +
                    '<td><button type="button" class="btn btn-danger btn-sm btn-remove-row-table2">Remove</button></td></tr>';
                $("#table2").append(html);
            })
            $("#table2").on('click',".btn-remove-row-table2", function(){
                $(this).parents('tr').remove();
            })



            $("#btn-add-row-table3").click(function () {
                var html ='<tr><td><input name="table3_released_released[]" type="text" class="form-control"></td>\n' +
                    '<td><input name="table3_released_bw[]" type="text" class="form-control"></td>\n' +
                    '<td><input name="table3_released_racesex[]" type="text" class="form-control"></td>\n' +
                    '<td><input name="table3_released_shift[]" type="text" class="form-control"></td>\n' +
                    '<td><input name="table3_released_call[]" type="text" class="form-control"></td>\n' +
                    '<td><button type="button" class="btn btn-danger btn-sm btn-remove-row-table3">Remove</button></td></tr>';
                $("#table3").append(html);
            })

            $("#table3").on('click',".btn-remove-row-table3", function(){
                $(this).parents('tr').remove();
            })

            $("#btn-add-row-table4").click(function () {
                var html ='<tr><td><input name="table4_rentals_rentals[]" type="text" class="form-control"></td>\n' +
                    '<td><input name="table4_rentals_bw[]" type="text" class="form-control"></td>\n' +
                    '<td><input name="table4_rentals_racesex[]" type="text" class="form-control"></td>\n' +
                    '<td><input name="table4_rentals_shift[]" type="text" class="form-control"></td>\n' +
                    '<td><input name="table4_rentals_call[]" type="text" class="form-control"></td>\n' +
                    '<td><button type="button" class="btn btn-danger btn-sm btn-remove-row-table4">Remove</button></td></tr>';
                $("#table4").append(html);
            })

            $("#table4").on('click',".btn-remove-row-table4", function(){
                $(this).parents('tr').remove();
            })

            $("#btn-add-row-table5").click(function () {
                var html ='<tr><td><input name="table5_recrea_yot[]" type="text" class="form-control"></td>\n' +
                    '<td><input name="table5_recrea_to[]" type="text" class="form-control"></td>\n' +
                    '<td><input name="table5_recrea_yit[]" type="text" class="form-control"></td>\n' +
                    '<td><input name="table5_recrea_temp[]" type="text" class="form-control"></td>\n' +
                    '<td><button type="button" class="btn btn-danger btn-sm btn-remove-row-table5">Remove</button></td></tr>';
                $("#table5").append(html);
            })

            $("#table5").on('click',".btn-remove-row-table5", function(){
                $(this).parents('tr').remove();
            })


            $("#btn-add-row-table6").click(function () {
                var html ='<tr><td><input name="table6_ohp_loc[]" type="text" class="form-control"></td>\n' +
                    '<td><input name="table6_ohp_room[]" type="text" class="form-control"></td>\n' +
                    '<td><input name="table6_ohp_in[]" type="text" class="form-control"></td>\n' +
                    '<td><input name="table6_ohp_sm[]" type="text" class="form-control"></td>\n' +
                    '<td><button type="button" class="btn btn-danger btn-sm btn-remove-row-table6">Remove</button></td></tr>';
                $("#table6").append(html);
            })

            $("#table6").on('click',".btn-remove-row-table6", function(){
                $(this).parents('tr').remove();
            })

            $("#btn-add-row-table7").click(function () {
                var html ='<tr><td><input name="table7_dw_adm[]" type="text" class="form-control"></td>\n' +
                    '<td><input name="table7_dw_in[]" type="text" class="form-control"></td>\n' +
                    '<td><input name="table7_dw_hl[]" type="text" class="form-control"></td>\n' +
                    '<td><button type="button" class="btn btn-danger btn-sm btn-remove-row-table7">Remove</button></td></tr>';
                $("#table7").append(html);
            })

            $("#table7").on('click',".btn-remove-row-table7", function(){
                $(this).parents('tr').remove();
            })

            $("#btn-add-row-table8").click(function () {
                var html ='<tr><td><input name="table8_gcs_shift[]" type="text" class="form-control"></td>\n' +
                    '<td><input name="table8_gcs_cell[]" type="text" class="form-control"></td>\n' +
                    '<td><input name="table8_gcs_by[]" type="text" class="form-control"></td>\n' +
                    '<td><button type="button" class="btn btn-danger btn-sm btn-remove-row-table8">Remove</button></td></tr>';
                $("#table8").append(html);
            })

            $("#table8").on('click',".btn-remove-row-table8", function(){
                $(this).parents('tr').remove();
            })

            $("#btn-add-row-table9").click(function () {
                var html ='<tr><td><input name="table9_cas_shift[]" type="text" class="form-control"></td>\n' +
                    '<td><input name="table9_cas_cell[]" type="text" class="form-control"></td>\n' +
                    '<td><input name="table9_cas_by[]" type="text" class="form-control"></td>\n' +
                    '<td><button type="button" class="btn btn-danger btn-sm btn-remove-row-table9">Remove</button></td></tr>';
                $("#table9").append(html);
            })

            $("#table9").on('click',".btn-remove-row-table9", function(){
                $(this).parents('tr').remove();
            })

            $("#btn-add-row-table10").click(function () {
                var html ='<tr><td><input name="table10_ac_report[]" type="text" class="form-control"></td>\n' +
                    '<td><input name="table10_ac_summary[]" type="text" class="form-control"></td>\n' +
                    '<td><button type="button" class="btn btn-danger btn-sm btn-remove-row-table10">Remove</button></td></tr>';
                $("#table10").append(html);
            })

            $("#table10").on('click',".btn-remove-row-table10", function(){
                $(this).parents('tr').remove();
            })

            $("input[name='tpp_males']").on('keyup', function() {
                if (this.value.length > 0) {
                    var x = parseInt(this.value);
                    var y = $("input[name='tpp_females']").val();
                    if(y==''){y=0;}else{y=parseInt($("input[name='tpp_females']").val());}
                    var t = parseInt(x+y);
                    $("input[name='total_tpp']").val(t);
                    var z = $("input[name='total_tpa']").val();
                    if(z==''){z=0;}else{z=parseInt($("input[name='total_tpa']").val());}
                    $("input[name='total_tp']").val(t+z);
                }
            });

            $("input[name='tpp_females']").on('keyup', function() {
                if (this.value.length > 0) {
                    var x = parseInt(this.value);
                    var y = $("input[name='tpp_males']").val();
                    if(y==''){y=0;}else{y=parseInt($("input[name='tpp_males']").val());}
                    var t = parseInt(x+y);
                    $("input[name='total_tpp']").val(t);
                    var z = $("input[name='total_tpa']").val();
                    if(z==''){z=0;}else{z=parseInt($("input[name='total_tpa']").val());}
                    $("input[name='total_tp']").val(t+z);
                }
            });

            $("input[name='tpa_males']").on('keyup', function() {
                if (this.value.length > 0) {
                    var x = parseInt(this.value);
                    var y = $("input[name='tpa_females']").val();
                    if(y==''){y=0;}else{y=parseInt($("input[name='tpa_females']").val());}
                    var t = parseInt(x+y);
                    $("input[name='total_tpa']").val(t);
                    var z = $("input[name='total_tpp']").val();
                    if(z==''){z=0;}else{z=parseInt($("input[name='total_tpp']").val());}
                    $("input[name='total_tp']").val(t+z);
                }
            });

            $("input[name='tpa_females']").on('keyup', function() {
                if (this.value.length > 0) {
                    var x = parseInt(this.value);
                    var y = $("input[name='tpa_males']").val();
                    if(y==''){y=0;}else{y=parseInt($("input[name='tpa_males']").val());}
                    var t = parseInt(x+y);
                    $("input[name='total_tpa']").val(t);
                    var z = $("input[name='total_tpp']").val();
                    if(z==''){z=0;}else{z=parseInt($("input[name='total_tpp']").val());}
                    $("input[name='total_tp']").val(t+z);
                }
            });

        });

})( jQuery );
