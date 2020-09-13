<?php
session_start();
include('dbconfig.php');
error_reporting(0);

echo
'<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="align-ite">
<div class="modal-dialog" role="document" style="position:fixed; top:30%; left:50%; margin-top:-50px; margin-left:-100px;">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Login</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form>
        Email Address:
        <br><input type="email" name="email">
        <br>
        Password:
        <br><input type="password" namae="password">
      </form>
    </div>
    <div class="modal-footer">
      <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
      <button type="button" class="btn btn-primary">Login</button>
    </div>
  </div>
</div>
</div>';
