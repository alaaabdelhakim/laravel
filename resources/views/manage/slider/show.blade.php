        <div id="custom-modal" class="modal-demo">
            <button type="button" class="close" onclick="Custombox.close();">
                <span>&times;</span><span class="sr-only">Close</span>
            </button>
            <h4 class="custom-modal-title" id="title">Add New Slider</h4>
            <div class="custom-modal-text">
                <form class="form-horizontal"  id="form_test">
                     @csrf
                     
                    <input type="hidden" name="id" id="id">

                    <div class="form-group m-b-25">
                      <div class="row">
                        <div class="col-6">
                            <label for="password3">name</label>
                            <input class="form-control" type="text"  id="name" placeholder="Enter name" name="name">
                        </div>

                        <div class="col-6">
                            <label for="password3">name arabic</label>
                            <input class="form-control" type="text"  id="name_ar" placeholder="Enter arabic name" name="name_ar">
                        </div>

                      </div>
                    </div>

                    <div class="form-group m-b-25">
                      <div class="row">
                        <div class="col-6">
                            <label for="password3">desc</label>
                            <input class="form-control" type="text"  id="decs" placeholder="Enter Description" name="decs">
                        </div>

                        <div class="col-6">
                            <label for="password3">desc arabic</label>
                            <input class="form-control" type="text"  id="decs_ar" placeholder="Enter Description arabic" name="decs_ar">
                        </div>

                      </div>
                    </div>


                    <div class="form-group m-b-25">
                      <div class="row">


                        <div class="col-4">
                            <label for="password3">image</label>
                            <input class="form-control" type="file"  id="image" name="image">
                        </div>

                        <div class="col-4">
                            <label for="password3">button text</label>
                            <input class="form-control" type="text"  id="button"  name="button">
                        </div>

                        <div class="col-4">
                            <label for="password3">button text arabic</label>
                            <input class="form-control" type="text"  id="button_ar"  name="button_ar">
                        </div>

                        <div class="col-4">
                            <label for="password3">button link</label>
                            <input class="form-control" type="text"  id="button_link"  name="button_link">
                        </div>

                      </div>
                    </div>

                  <div id="err"></div>
                    <div class="form-group account-btn text-center m-t-10">
                        <div class="col-12">
                            <button class="buttonload btn w-lg btn-rounded btn-custom waves-effect waves-light" type="submit" id="save" >
                                Add
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
