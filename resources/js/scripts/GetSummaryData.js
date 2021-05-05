window.getSummaryData = async function(exhibition_id){

    let url = '/simpozij/exibition/getsummarydata';
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
        $('#summaryModal .modal-body').empty();
      if(data.success === true){

        $('#summaryModal .modal-body').append(
            '<iframe src="/storage/summary_data/' + data.summary_data + '"&embedded=true" style="width:100%; height:800px;" frameborder="0"></iframe>'
        );

        $('#summaryModal').modal({
            show: true
        }); 
      }
    })
    .catch((error) => {
      console.error('Error:', error);
    });

}