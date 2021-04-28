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
        else{
          alert("something went wrong");
        }
      }
    })
    .catch((error) => {
      console.error('Error:', error);
    });
}

$('#eventModal').on('hidden.bs.modal', function (e) {
    $('#eventModal .modal-body').empty();
  })