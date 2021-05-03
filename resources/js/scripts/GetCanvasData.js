window.getCanvasData = async function(canvasId, eventId){
    
    let url = '/simpozij/webinar/getBoothData';
    let data = {'canvas_id':canvasId, 'event_id':eventId};

    await fetch(url, {
        method:'POST',
        mode:'cors',
        headers:{
            "Content-Type": "application/json",
            "Accept": "application/json",
            "X-Requested-With": "XMLHttpRequest",
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        body: JSON.stringify(data)
    })
    .then(response => response.json())
    .then(data => {
        $('#eventModal .modal-body').empty();
        $('#choicemodal .modal-body').empty();
      if(data.success === true){

        if(data.morethanone === true){

            for(var i=0; i<data.events.length; i++){
                $('#choicemodal .modal-body').append(
                    '<a class="my-3" onclick="showSingleEvent(' + data.events[i].id +')"><div class="btn btn-outline-success my-3">Link ' + i + '</div></a><br>'
                );
            }

            $('#choicemodal').modal({
                show: true
            }); 
        }
        else{
            if(data.video){
                $('#eventModal .modal-body').append(
                    '<video width="100%" height="100%" controls><source src="/storage/canvas_data/' + data.path + '" type="video/mp4"></video>'
                );
            }
            else if(data.pdf){
                $('#eventModal .modal-body').append(
                    '<iframe src="/storage/canvas_data/' + data.path + '"&embedded=true" style="width:100%; height:800px;" frameborder="0"></iframe>'
                );
            }
            else if(data.image){
                $('#eventModal .modal-body').append(
                    '<img src="/storage/canvas_data/' + data.path + '" style="width:100%; height:100%;">'
                );
            }
            else if(data.ppt){
                $('#eventModal .modal-body').append(
                    '<iframe src="//docs.google.com/gview?url=/storage/canvas_data/' + data.path + '"&embedded=true" style="width:100%; height:800px;" frameborder="0"></iframe>'
                );
            }
            else if(data.url){
                $('#eventModal .modal-body').append(
                    '<a href="' + data.path + '" target="_blank">Posjeti stranicu</a>'
                );
            }
            else{
              alert("something went wrong");
            }

            $('#eventModal').modal({
                show: true
            }); 
        }
      }
    })
    .catch((error) => {
      console.error('Error:', error);
    });
}

window.showSingleEvent = async function(eventid){

    let url = '/simpozij/webinar/getSingleBoothData';
    let data = {'event_id':eventid};

    $('#choicemodal').modal('hide'); 

    await fetch(url, {
        method:'POST',
        mode:'cors',
        headers:{
            "Content-Type": "application/json",
            "Accept": "application/json",
            "X-Requested-With": "XMLHttpRequest",
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        body: JSON.stringify(data)
    })
    .then(response => response.json())
    .then(data => {
        $('#eventModal .modal-body').empty();
        $('#choicemodal .modal-body').empty();
      if(data.success === true){
        if(data.video){
            $('#eventModal .modal-body').append(
                '<video width="100%" height="100%" controls><source src="/storage/canvas_data/' + data.path + '" type="video/mp4"></video>'
            );
        }
        else if(data.pdf){
            $('#eventModal .modal-body').append(
                '<iframe src="/storage/canvas_data/' + data.path + '"&embedded=true" style="width:100%; height:800px;" frameborder="0"></iframe>'
            );
        }
        else if(data.image){
            $('#eventModal .modal-body').append(
                '<img src="/storage/canvas_data/' + data.path + '" style="width:100%; height:100%;">'
            );
        }
        else if(data.ppt){
            $('#eventModal .modal-body').append(
                '<iframe src="//docs.google.com/gview?url=/storage/canvas_data/' + data.path + '"&embedded=true" style="width:100%; height:800px;" frameborder="0"></iframe>'
            );
        }
        else if(data.url){
            $('#eventModal .modal-body').append(
                '<a href="' + data.path + '" target="_blank">Posjeti stranicu</a>'
            );
        }
        else{
            alert("something went wrong");
        }

        $('#eventModal').modal({
            show: true
        }); 
        
      }
    })
    .catch((error) => {
      console.error('Error:', error);
    });
}

$('#eventModal').on('hidden.bs.modal', function (e) {
    $('#eventModal .modal-body').empty();
  });

$('#choicemodal').on('hidden.bs.modal', function (e) {
    $('#choicemodal .modal-body').empty();
  });


