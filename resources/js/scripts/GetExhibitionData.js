window.getExhibitionData = async function(exhibition_id){

    let url = '/simpozij/exibition/getExhibitionData';
    let data = {'exhibition_id':exhibition_id};

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
        $('#exhibitionModal .modal-body').empty();
      if(data.success === true){

        $('#exhibitionModal .modal-body').append(
            '<iframe src="/storage/exhibition_data/' + data.exhibition_data + '"&embedded=true" style="width:100%; height:800px;" frameborder="0"></iframe>'
        );

        $('#exhibitionModal').modal({
            show: true
        }); 
      }
    })
    .catch((error) => {
      console.error('Error:', error);
    });

}