jQuery( document ).ready(function() {

    // jQuery("#pa_cavity-engraving option").each(function(i, e) {

    //   (jQuery("<input type='radio' name='r' />")

    //     .attr("value", jQuery(this).val())

    //     .attr("checked", i == 0)

    //     .click(function() {

    //       jQuery("#pa_cavity-engraving").val(jQuery(this).val());

    //     }).add(jQuery("<label>"+ this.textContent +"</label>")))

    //     .appendTo("#r");

    // });

    if(jQuery('#accordion1').length > 0) {
        jQuery('.panel-body').children('ul').children('.wrapper-swatches').each(function(index, el) {
            jQuery(el).find('li').find('input[type="radio"]').change(function(event) {
                //jQuery(this).parentsUntil('ul').find('li').not(jQuery(this).parent('li')).removeClass('selected');
                if (jQuery(this).is(':checked')) {
                    jQuery(this).parent('li').addClass('selected');
                } else {
                    jQuery(this).parent('li').removeClass('selected');
                }
            });
        });
    }

});