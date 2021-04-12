$(document).ready(function(){
    $('.remove').on("click", function(){
        $(this).parents('tr').remove();
    });

      $('#table').DataTable({
        columnDefs: [
            { targets: 'no-sort', orderable: false }
        ]
      });




});
