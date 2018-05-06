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

            //    Header checker
                header = false;
                line_end = csv_content.indexOf('\n');
                line = csv_content.substr(0,line_end).split(',');
                for (i=0;i<line.length-1;i++)
                {
                    if (!$.isNumeric(line[i]))
                        header = true;
                }

                if (header)
                {
                    csv_content = csv_content.substr(line_end+2,csv_content.length);
                }

                samples_count = line.length-1;

                test_samples_count.text('Кількість данних в семплі: '+samples_count).slideDown();

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

    // Samples
    var test_samples = $('.lab__test-samples'),
        test_samples_count = $('.lab__test-samples_count'),
        test_samples_err = $('.lab__test-samples_err'),
        samples_count;

        test_samples_checker = function ()
        {
            if(test_samples.val() != '')
            {
                test_samples_arr = test_samples.val().split(',');
                if (test_samples_arr.length != samples_count)
                {
                    test_samples_err.slideDown();
                    return false;
                }
                test_samples_err.slideUp();
                return true;
            }
            else
            {
                test_samples_err.slideDown();
                return false;

            }

        }


    //    Result

    var result = $('.lab__result'),
        result_wrapper = $('.lab__result_wrapper'),
        lab_preloader = $('.lab__preloader_wrapper');


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
        else
        {
            if(!test_samples_checker())
            {
                form_valid = false;
            }
        }



        if(form_valid)
        {
            lab_preloader.fadeIn();

            data = 'data='+csv_content+'&'+$('.form').serialize();
            setTimeout(function ()
            {
                $.ajax({
                    type: "POST",
                    url: "control\\lab_executer.php",
                    data: data
                }).done(function(response)
                {

                    data = JSON.parse(response);

                    keys = Object.keys(data[0]);
                    vals = Object.values(data[0]);

                    keys_tr = '<tr>';
                    vals_tr = '<tr>';

                    $(keys).each(function ()
                    {
                        keys_tr += '<td>'+this+'</td>';
                    });

                    $(vals).each(function ()
                    {
                        vals_tr += '<td>'+this.toFixed(2)+'</td>';
                    });

                    keys_tr += '</tr>';
                    vals_tr += '</tr>';

                    $(result[0]).html(keys_tr+vals_tr);
                    $(result[1]).text(data[1]);

                    lab_preloader.fadeOut();
                    result_wrapper.slideDown();
                });
            },400)
        }
    });
})