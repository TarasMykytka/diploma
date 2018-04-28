/**
 * Created by TarasM on 25.04.2018.
 */
$(document).ready(function()
{



    //File
    var csv_content = '',
        lab_file = $('.lab__file'),
        lab_file_err = $('.lab__file_err');

    lab_file.change(function(e)
    {
        lab_file_err.slideUp();
        var f = this.files[0],
            label = $(this).next('label'),
            labelVal = label.html();
        if (f) {
            var r = new FileReader();
            r.onload = function(e)
            {
                csv_content = e.target.result;
            }
            r.readAsText(f);
        }

        fileName = e.target.value.split( '\\' ).pop();
        if( fileName )
            label.find( 'span' ).html( fileName );
        else
            label.html( labelVal );
    });

    //Range
    var lab_range = $('.lab__range'),
        lab_range_output = $('.lab__range_output');

    lab_range.rangeslider({
        polyfill: false,
        onSlide: function(position, value) {
            lab_range_output.val(value);
        }
    });


    lab_range_output.on('input', function() {
        lab_range.attr({value: $(this).val()});
        lab_range.rangeslider('update', true);
    });


    //Submit
    $('.lab__submit').click(function(event)
    {
        event.preventDefault();

        form_valid = true;

        if(lab_file.val() == '')
        {
            form_valid = false;
            lab_file_err.slideDown();
        }

        if(form_valid)
        {

            data = 'data='+csv_content+'&'+$('.form1').serialize();

            $.ajax({
                type: "POST",
                url: "control\\lab_executer.php",
                data: data
            }).done(function(response) {
                console.log(response);
            });
        }
    });
})