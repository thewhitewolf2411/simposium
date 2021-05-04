if(document.getElementById('agenda-table-container')){
    $('#agenda-table-1').show();
    $('#agenda-table-2').hide();
    $('#agenda-table-3').hide();
}

window.changeAgendaView = async function(table_number){

    $('.et_pb_tab_0').removeClass('et_pb_tab_active');
    $('.et_pb_tab_1').removeClass('et_pb_tab_active');
    $('.et_pb_tab_2').removeClass('et_pb_tab_active');

    switch(table_number){
        case 1:
            $('#agenda-table-1').show();
            $('#agenda-table-2').hide();
            $('#agenda-table-3').hide();
            $('.et_pb_tab_0').addClass('et_pb_tab_active');
            break;
        case 2:
            $('#agenda-table-1').hide();
            $('#agenda-table-2').show();
            $('#agenda-table-3').hide();
            $('.et_pb_tab_1').addClass('et_pb_tab_active');
            break;
        case 3:
            $('#agenda-table-1').hide();
            $('#agenda-table-2').hide();
            $('#agenda-table-3').show();
            $('.et_pb_tab_2').addClass('et_pb_tab_active');
            break;
    }
}