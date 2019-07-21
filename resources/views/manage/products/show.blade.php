        <div id="custom-modal" class="modal-demo">
            <button type="button" class="close" onclick="Custombox.close();">
                <span>&times;</span><span class="sr-only">Close</span>
            </button>
            <h4 class="custom-modal-title" id="title"></h4>
            <div class="custom-modal-text">
                <form class="form-horizontal" action="#" id="form_test">
                     @csrf
                     
                    <input type="hidden" name="id" id="id">


                    <div class="form-group m-b-25">
                      <div class="row">
                        <div class="col-6">
                            <label for="password3">name english</label>
                            <input class="form-control" type="text" required="" id="name" placeholder="Enter product name" name="name">
                        </div>

                        <div class="col-6">
                            <label for="password3">name arabic</label>
                            <input class="form-control" type="text" required="" id="name_ar" placeholder="Enter name arabic" name="name_ar">
                        </div>

                      </div>
                    </div>
                    <div class="form-group m-b-25">
                      <div class="row">

                        <div class="col-12">
                            <label for="password3">image</label>
                            <input class="form-control" type="file"  id="image" name="image">
                        </div>
                      </div>
                        </div>




                    <div class="form-group m-b-25">
                      <div class="row">
                        <div class="col-12">
                            <label for="password3">content</label>
                            <textarea class="form-control"   id="decs" name="decs" placeholder="Enter content">
                            </textarea>
                        </div>
                        <div class="col-12">
                            <label for="password3">content arabic</label>
                            <textarea class="form-control"   id="decs_ar" name="decs_ar" placeholder="Enter content arabic">
                            </textarea>
                        </div>
                      </div>
                    </div>
                   

                  <div id="err"></div>
                    <div class="form-group account-btn text-center m-t-10">
                        <div class="col-12">
                            <button class="buttonload btn w-lg btn-rounded btn-custom waves-effect waves-light" type="submit" id="save">
                                Add New Product
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>