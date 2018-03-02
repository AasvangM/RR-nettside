<?php
  include('mail.php');
?>

<div class="modal fade" id="contact" role="dialog">
  <div class="modal-dialog">
    <div class ="modal-content">
      <div class="container">

    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
      <fieldset>

        <div class="modal-header">
          <h4>Kontakt oss</h4>
        </div> <!--modal-header-->





        <div class="form-group">
          <label class="col-md-4 control-label">Fornavn</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
            </div>
          </div>
        </div>

        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-4 control-label" >Etternavn</label>
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
            </div>
          </div>
        </div>

        <!-- Text input-->
               <div class="form-group">
          <label class="col-md-4 control-label">E-post</label>
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
          <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
            </div>
          </div>
        </div>
        <!-- Text area -->

        <div class="form-group">
          <label class="col-md-4 control-label">Din tekst</label>
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                	<textarea class="form-control" name="comment" placeholder="Project Description"></textarea>
          </div>
          </div>
        </div>

        <!-- Success message -->
        <div class="alert alert-success" role="alert" id="success_message">Mail sendt <i class="glyphicon glyphicon-thumbs-up"></i> Mailen din er nå sendt, vi vil svare deg så raskt som mulig!.</div>

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label"></label>
          <div class="col-md-4">
            <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
          </div>
        </div>

        </fieldset>
        </form>
        </div>
            </div><!-- /.container -->

















<!--
        <div class="modal-body">

          <div class="form-group">
            <label for="contact-nanme" class="col-lg-2 control-label">Navn:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="contact-name" placeholder="Navn" name="name" value="?= $name ?>" tabindex="1" required autofocus>
              <span class="error">?= $name_error ?></span>
            </div> -col-sm-10-
          </div>

          <div class="form-group">
            <label for="contact-email" class="col-sm-2 control-label">Email:</label>
            <div class="col-lg-10">
              <input type="email" class="form-control" id="contact-email" placeholder="navn@eksempel.com" name="email" value="" tabindex="2" required>
              <span class="error"></span>
            </div> -col-sm-10
          </div> -form-group-

          <div class="form-group">
            <label for="contact-msg" class="col-sm-2 control-label">Tekst:</label>
            <div class="col-lg-10">
              <textarea class="form-control" rows="8" value="" name="message" tabindex="5" required>
              </textarea>
            </div> col-sm-10-
          </div> form-group-

        </div> -modal-body
        <div class="modal-footer">
          <a class="btn btn-default" data-dismiss="modal">Avbryt</a>
          <button class="btn btn-primary" type="submit" name="submit" id="contact-submit" data-submit="...Sender" value="Send">Send</button>
        </div> modal-footer
        <div class="success"></div>
      </form>
    </div> modal-content
  </div> modal-dialog
</did> modal fade
-->
