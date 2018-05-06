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

            }
            r.readAsText(f);
        }

        fileName = e.target.value.split( '\\' ).pop();
        if( fileName )
            label.find( 'span' ).html( fileName );
        else
            label.html( labelVal );
    });

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
                    console.log(response);
                    data = JSON.parse(response);

                    i=1;
                    data_result = '';
                    $(data).each(function ()
                    {
                        data_result+='<tr><td>Кластер '+i+':</td></tr><tr>';

                        data_result+='<td>'+JSON.stringify(this)+'</td>';

                        data_result+='</tr>';
                        i++;

                    })

                    $(result).html(data_result);

                    lab_preloader.fadeOut();
                    result_wrapper.slideDown();
                });
            },400)
        }
    });
})