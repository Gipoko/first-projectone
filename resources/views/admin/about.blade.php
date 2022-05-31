

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard for Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
             
<div class="container">
    <h1></h1>
    <a class="btn btn-success" href="javascript:void(0)" id="createNewAbout"> Create New About</a>
    <table id="AboutTable" class="table table-bordered data-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Head Title</th>
                <th>Title</th>
                <th>Description</th>
                <th width="300px">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
   <p id="test"></p>
<div class="modal fade" id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="aboutForm" name="aboutForm" class="form-horizontal">
                   <input type="text" name="about_id" id="about_id">


                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Head Title</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="about_head" name="about_head" placeholder="Enter Title" value="" maxlength="50" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Title</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="about_title" name="about_title" placeholder="Enter Title" value="" maxlength="50" required="">
                        </div>
                    </div>
     
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-12">
                            <textarea id="about_description" name="about_description" required="" placeholder="Enter Description" class="form-control"></textarea>
                        </div>
                    </div>
      
                    <div class="col-sm-offset-2 col-sm-10">
                     <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes
                     </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$(function () {
    
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
    var table = $('#AboutTable').DataTable({
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
</script>
</div>
            </div>
        </div>
    </div>
</x-app-layout>

