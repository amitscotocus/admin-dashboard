@extends('layouts.sidebar')
<br><br><br><br><br><br>
<div style="margin-left: 330px">

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ action('AmitController@store')}}" method="POST">
                {{ csrf_field() }}
            <div class="modal-body">
                
                    <div class="form-group">
                      <label>First Name</label>
                      <input type="text" name="name" class="form-control" placeholder="Enter first name">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Enter email">
                      </div>

                      <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control" placeholder="Enter address">
                      </div>


                      <div class="form-group">
                        <label>Mobile</label>
                        <input type="text" name="phone" class="form-control" placeholder="Enter mobile">
                      </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                  
            </div>
        </form>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Send message</button>
      </div> -->
    </div>
  </div>
</div>
</div>