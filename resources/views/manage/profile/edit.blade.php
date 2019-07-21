        <div id="custom-modal" class="modal-demo">
            <button type="button" class="close" onclick="Custombox.close();">
                <span>&times;</span><span class="sr-only">Close</span>
            </button>
            <h4 class="custom-modal-title" id="title">Edit</h4>
            <div class="custom-modal-text">
                <form class="form-horizontal" action="#" id="form_test">
                     @csrf
                     


                    <div class="form-group m-b-25">
                        <div class="row"> 
                        <div class="col-6">
                            <label for="password3">Name</label>
                            <input class="form-control" type="text" required="" id="name" name="name" value="{{ Auth::user()->name }}">
                        </div>

                        <div class="col-6">
                            <label for="password3">Jop title</label>
                            <input class="form-control" type="text"  id="jop"  name="jop" value="{{ Auth::user()->jop }}">
                        </div>
                    </div>
                    </div>

                    {{-- Row 2 --}}
                    <div class="form-group m-b-25">
                        <div class="row"> 
                        <div class="col-12">
                            <label for="password3">Phone</label>
                            <input class="form-control" type="number" id="phone"  name="phone" value="{{ Auth::user()->phone }}">
                        </div>

                    </div>
                    </div>


                    {{-- Row 4 --}}
                    <div class="form-group m-b-25">
                        <div class="row"> 
                        <div class="col-6">
                            <label for="password3">Email</label>
                            <input class="form-control" type="email" id="email"  name="email" value="{{ Auth::user()->email }}">
                        </div>

                        <div class="col-6">
                            <label for="password3">Password</label>
                            <input class="form-control" type="password" id="password"  name="password">
                        </div>
                    </div>
                    </div>
          <input type="hidden" name="id" value="{{ Auth::user()->id }}">

                  <div id="err"></div>
                    <div class="form-group account-btn text-center m-t-10">
                        <div class="col-12">
                            <button class="buttonload btn w-lg btn-rounded btn-custom waves-effect waves-light" type="submit" id="save">
                                Edit
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
