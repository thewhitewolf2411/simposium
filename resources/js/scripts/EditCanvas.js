if(document.getElementById('edit_events_container')){

    $(document).ready(function(){
        $('#first_event_input_container').hide();
        $('#second_event_input_container').hide();
        $('#third_event_input_container').hide();
        $('#fourth_event_input_container').hide();
        $('#fifth_event_input_container').hide();
        $('#sixth_event_input_container').hide();
    });

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
        }
    });

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
        }
    });

    $('#third_event').on('change', function(){
        $('#third_event_input_container').show();
        $('#third_event_input_container').addClass('show');

        switch($(this).val()){
            case "1":
                $('#third_event_input').attr('accept', '.mp4');
            break;
            case "2":
                $('#third_event_input').attr('accept', '.pdf');
            break;
            case "3":
                $('#third_event_input').attr('accept', 'image/*');
            break;
            case "4":
                $('#third_event_input').attr('accept', '.ppt, .pptx');
            break;
        }
    });

    $('#fourth_event').on('change', function(){
        $('#fourth_event_input_container').show();
        $('#fourth_event_input_container').addClass('show');

        switch($(this).val()){
            case "1":
                $('#fourth_event_input').attr('accept', '.mp4');
            break;
            case "2":
                $('#fourth_event_input').attr('accept', '.pdf');
            break;
            case "3":
                $('#fourth_event_input').attr('accept', 'image/*');
            break;
            case "4":
                $('#fourth_event_input').attr('accept', '.ppt, .pptx');
            break;
        }
    });

    $('#fifth_event').on('change', function(){
        $('#fifth_event_input_container').show();
        $('#fifth_event_input_container').addClass('show');

        switch($(this).val()){
            case "1":
                $('#fifth_event_input').attr('accept', '.mp4');
            break;
            case "2":
                $('#fifth_event_input').attr('accept', '.pdf');
            break;
            case "3":
                $('#fifth_event_input').attr('accept', 'image/*');
            break;
            case "4":
                $('#fifth_event_input').attr('accept', '.ppt, .pptx');
            break;
        }
    });

    $('#sixth_event').on('change', function(){
        $('#sixth_event_input_container').show();
        $('#sixth_event_input_container').addClass('show');

        switch($(this).val()){
            case "1":
                $('#sixth_event_input').attr('accept', '.mp4');
            break;
            case "2":
                $('#sixth_event_input').attr('accept', '.pdf');
            break;
            case "3":
                $('#sixth_event_input').attr('accept', 'image/*');
            break;
            case "4":
                $('#sixth_event_input').attr('accept', '.ppt, .pptx');
            break;
        }
    });
}