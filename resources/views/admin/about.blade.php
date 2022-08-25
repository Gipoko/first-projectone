<x-app-layout>
   <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Employee</h4>

                                    <div class="page-title-right">
                                    <a class="btn btn-success  "  href="javascript:void(0)" id="createNewAbout">Create About</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->


                        <div class="row">
                            <div class="col-12">
                                <div class="card">  
                                    <div class="card-body">
                                  
                                        <h4 class="card-title">Buttons example</h4>
                                        
                                        <table id="AboutTable" class="table table-bordered dt-responsive nowrap w-100 data-table">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th></th>
                                                    <th>Head Title</th>
                                                    <th>Title</th>
                                                    <th>Description</th>
                                                    <th width="300px">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>

                                        <div class="modal fade" id="ajaxModel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="modelHeading"></h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form id="aboutForm" name="aboutForm" class="form-horizontal" enctype="multipart/form-data">
                                                        <input type="hidden" name="about_id" id="about_id">


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
                                            
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label">Image</label>
                                                                <div class="col-sm-12">
                                                                    <input type="file" id="about_image" name="about_image"  class="form-control">
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

                                        <div class="modal fade" id="ajaxModel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="modelHeading"></h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" id="bookForm" name="bookForm" class="form-horizontal" enctype="multipart/form-data">
                                                        <input type="hidden" name="book_id" id="book_id">
                                                            <div class="form-group">
                                                                <label for="name" class="col-sm-2 control-label">Title</label>
                                                                <div class="col-sm-12">
                                                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" value="" maxlength="50" required="">
                                                                </div>
                                                            </div>
                                            
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label">Details</label>
                                                                <div class="col-sm-12">
                                                                    <textarea id="author" name="author" required="" placeholder="Enter Author" class="form-control"></textarea>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label">Image</label>
                                                                <div class="col-sm-12">
                                                                    <input type="file" id="image" name="image"  class="form-control">
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
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Skote.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Develop by Themesbrand
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

            </x-app-layout>
