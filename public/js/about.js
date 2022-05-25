$(function () {
    $("#test").html(11111111111);
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('abouts.index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'about_head', name: 'about_head'},
            {data: 'about_title', name: 'about_title'},
            {data: 'about_description', name: 'about_description'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    $('#createNewAbout').click(function () {
        $('#saveBtn').val("create-about");
        $('#about_id').val('');
        $('#aboutForm').trigger("reset");
        $('#modelHeading').html("Create New About");
        $('#ajaxModel').modal('show');
    });
    $('body').on('click', '.editAbout', function () {
      var about_id = $(this).data('about_id');
      $.get("{{ route('abouts.index') }}" +'/' + about_id +'/edit', function (data) {
          $('#modelHeading').html("Edit About");
          $('#saveBtn').val("edit-about");
          $('#ajaxModel').modal('show');
          $('#about_id').val(data.about_id);
          $('#about_head').val(data.about_head);
          $('#about_title').val(data.about_title);
          $('#about_description').val(data.about_description);
      })
   });
    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('Save');
    
        $.ajax({
          data: $('#aboutForm').serialize(),
          url: "{{ route('abouts.store') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {
     
              $('#aboutForm').trigger("reset");
              $('#ajaxModel').modal('hide');
              table.draw();
         
          },
          error: function (data) {
              console.log('Error:', data);
              $('#saveBtn').html('Save Changes');
          }
      });
    });
    
    $('body').on('click', '.deleteAbout', function () {
     
        var about_id = $(this).data("about_id");
        confirm("Are You sure want to delete !");
      
        $.ajax({
            type: "DELETE",
            url: "{{ route('abouts.store') }}"+'/'+about_id,
            success: function (data) {
                table.draw();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
     
  });