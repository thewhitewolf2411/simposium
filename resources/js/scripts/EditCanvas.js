if(document.getElementById('edit_events_container')){

    $(document).ready(function(){
        $('#first_event_input_container').hide();
        $('#second_event_input_container').hide();
        $('#third_event_input_container').hide();
        $('#fourth_event_input_container').hide();
        $('#fifth_event_input_container').hide();
        $('#sixth_event_input_container').hide();
    });


    //first event

    $('#first_event').on('change', function(){
        $('#first_event_input_container').show();
        $('#first_event_input_container').addClass('show');

        switch($(this).val()){
            case "1":
                $('#first_event_input').attr('accept', '.mp4');
                break;
            case "2":
                $('#first_event_input').attr('accept', '.pdf');
                break;
            case "3":
                $('#first_event_input').attr('accept', 'image/*');
                break;
            case "4":
                $('#first_event_input').attr('accept', '.ppt, .pptx');
                break;
            case "5":
                $('#first_event_input').attr('type', 'text');
                break;
        }
    });

    $('#first_event_optional_1').on('change', function(){
        $('#first_event_optional_1_input_container').show();
        $('#first_event_optional_1_input_container').addClass('show');

        switch($(this).val()){
            case "1":
                $('#first_event_input_optional_1').attr('accept', '.mp4');
                break;
            case "2":
                $('#first_event_input_optional_1').attr('accept', '.pdf');
                break;
            case "3":
                $('#first_event_input_optional_1').attr('accept', 'image/*');
                break;
            case "4":
                $('#first_event_input_optional_1').attr('accept', '.ppt, .pptx');
                break;
            case "5":
                $('#first_event_input_optional_1').attr('type', 'text');
                break;
        }
    });

    $('#first_event_optional_2').on('change', function(){
        $('#first_event_optional_2_input_container').show();
        $('#first_event_optional_2_input_container').addClass('show');

        switch($(this).val()){
            case "1":
                $('#first_event_input_optional_2').attr('accept', '.mp4');
                break;
            case "2":
                $('#first_event_input_optional_2').attr('accept', '.pdf');
                break;
            case "3":
                $('#first_event_input_optional_2').attr('accept', 'image/*');
                break;
            case "4":
                $('#first_event_input_optional_2').attr('accept', '.ppt, .pptx');
                break;
            case "5":
                $('#first_event_input_optional_2').attr('type', 'text');
                break;
        }
    });

    $('#first_event_optional_3').on('change', function(){
        $('#first_event_optional_3_input_container').show();
        $('#first_event_optional_3_input_container').addClass('show');

        switch($(this).val()){
            case "1":
                $('#first_event_input_optional_3').attr('accept', '.mp4');
                break;
            case "2":
                $('#first_event_input_optional_3').attr('accept', '.pdf');
                break;
            case "3":
                $('#first_event_input_optional_3').attr('accept', 'image/*');
                break;
            case "4":
                $('#first_event_input_optional_3').attr('accept', '.ppt, .pptx');
                break;
            case "5":
                $('#first_event_input_optional_3').attr('type', 'text');
                break;
        }
    });

    $('#first_event_optional_4').on('change', function(){
        $('#first_event_optional_4_input_container').show();
        $('#first_event_optional_4_input_container').addClass('show');

        switch($(this).val()){
            case "1":
                $('#first_event_input_optional_4').attr('accept', '.mp4');
                break;
            case "2":
                $('#first_event_input_optional_4').attr('accept', '.pdf');
                break;
            case "3":
                $('#first_event_input_optional_4').attr('accept', 'image/*');
                break;
            case "4":
                $('#first_event_input_optional_4').attr('accept', '.ppt, .pptx');
                break;
            case "5":
                $('#first_event_input_optional_4').attr('type', 'text');
                break;
        }
    });

    //second event

    $('#second_event').on('change', function(){
        $('#second_event_input_container').show();
        $('#second_event_input_container').addClass('show');

        switch($(this).val()){
            case "1":
                $('#second_event_input').attr('accept', '.mp4');
                break;
            case "2":
                $('#second_event_input').attr('accept', '.pdf');
                break;
            case "3":
                $('#second_event_input').attr('accept', 'image/*');
                break;
            case "4":
                $('#second_event_input').attr('accept', '.ppt, .pptx');
                break;
            case "5":
                $('#second_event_input').attr('type', 'text');
                break;
        }
    });

    $('#second_event_optional_1').on('change', function(){
        $('#second_event_optional_1_input_container').show();
        $('#second_event_optional_1_input_container').addClass('show');

        switch($(this).val()){
            case "1":
                $('#second_event_input_optional_1').attr('accept', '.mp4');
                break;
            case "2":
                $('#second_event_input_optional_1').attr('accept', '.pdf');
                break;
            case "3":
                $('#second_event_input_optional_1').attr('accept', 'image/*');
                break;
            case "4":
                $('#second_event_input_optional_1').attr('accept', '.ppt, .pptx');
                break;
            case "5":
                $('#second_event_input_optional_1').attr('type', 'text');
                break;
        }
    });

    $('#second_event_optional_2').on('change', function(){
        $('#second_event_optional_2_input_container').show();
        $('#second_event_optional_2_input_container').addClass('show');

        switch($(this).val()){
            case "1":
                $('#second_event_input_optional_2').attr('accept', '.mp4');
                break;
            case "2":
                $('#second_event_input_optional_2').attr('accept', '.pdf');
                break;
            case "3":
                $('#second_event_input_optional_2').attr('accept', 'image/*');
                break;
            case "4":
                $('#second_event_input_optional_2').attr('accept', '.ppt, .pptx');
                break;
            case "5":
                $('#second_event_input_optional_2').attr('type', 'text');
                break;
        }
    });

    $('#second_event_optional_3').on('change', function(){
        $('#second_event_optional_3_input_container').show();
        $('#second_event_optional_3_input_container').addClass('show');

        switch($(this).val()){
            case "1":
                $('#second_event_input_optional_3').attr('accept', '.mp4');
                break;
            case "2":
                $('#second_event_input_optional_3').attr('accept', '.pdf');
                break;
            case "3":
                $('#second_event_input_optional_3').attr('accept', 'image/*');
                break;
            case "4":
                $('#second_event_input_optional_3').attr('accept', '.ppt, .pptx');
                break;
            case "5":
                $('#second_event_input_optional_3').attr('type', 'text');
                break;
        }
    });

    $('#second_event_optional_4').on('change', function(){
        $('#second_event_optional_4_input_container').show();
        $('#second_event_optional_4_input_container').addClass('show');

        switch($(this).val()){
            case "1":
                $('#second_event_input_optional_4').attr('accept', '.mp4');
                break;
            case "2":
                $('#second_event_input_optional_4').attr('accept', '.pdf');
                break;
            case "3":
                $('#second_event_input_optional_4').attr('accept', 'image/*');
                break;
            case "4":
                $('#second_event_input_optional_4').attr('accept', '.ppt, .pptx');
                break;
            case "5":
                $('#second_event_input_optional_4').attr('type', 'text');
                break;
        }
    });

    //third event

    $('#third_event').on('change', function(){
        $('#third_event_input_container').show();
        $('#third_event_input_container').addClass('show');

        switch($(this).val()){
            case "1":
                $('#first_event_input').attr('accept', '.mp4');
                break;
            case "2":
                $('#first_event_input').attr('accept', '.pdf');
                break;
            case "3":
                $('#first_event_input').attr('accept', 'image/*');
                break;
            case "4":
                $('#first_event_input').attr('accept', '.ppt, .pptx');
                break;
            case "5":
                $('#first_event_input').attr('type', 'text');
                break;
        }
    });

    $('#fourth_event').on('change', function(){
        $('#fourth_event_input_container').show();
        $('#fourth_event_input_container').addClass('show');

        switch($(this).val()){
            case "1":
                $('#first_event_input').attr('accept', '.mp4');
                break;
            case "2":
                $('#first_event_input').attr('accept', '.pdf');
                break;
            case "3":
                $('#first_event_input').attr('accept', 'image/*');
                break;
            case "4":
                $('#first_event_input').attr('accept', '.ppt, .pptx');
                break;
            case "5":
                $('#first_event_input').attr('type', 'text');
                break;
        }
    });

    $('#fifth_event').on('change', function(){
        $('#fifth_event_input_container').show();
        $('#fifth_event_input_container').addClass('show');

        switch($(this).val()){
            case "1":
                $('#first_event_input').attr('accept', '.mp4');
                break;
            case "2":
                $('#first_event_input').attr('accept', '.pdf');
                break;
            case "3":
                $('#first_event_input').attr('accept', 'image/*');
                break;
            case "4":
                $('#first_event_input').attr('accept', '.ppt, .pptx');
                break;
            case "5":
                $('#first_event_input').attr('type', 'text');
                break;
        }
    });

    $('#sixth_event').on('change', function(){
        $('#sixth_event_input_container').show();
        $('#sixth_event_input_container').addClass('show');

        switch($(this).val()){
            case "1":
                $('#first_event_input').attr('accept', '.mp4');
                break;
            case "2":
                $('#first_event_input').attr('accept', '.pdf');
                break;
            case "3":
                $('#first_event_input').attr('accept', 'image/*');
                break;
            case "4":
                $('#first_event_input').attr('accept', '.ppt, .pptx');
                break;
            case "5":
                $('#first_event_input').attr('type', 'text');
                break;
        }
    });
}