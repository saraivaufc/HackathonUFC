<div id="modal-contact" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
	  <div class="modal-body">

	  	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="">Gostaríamos muito de ouvir você...</h3>
		<form class="form-horizontal" name="formContato" method="POST" action="send_email.php">
          <fieldset>

            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Nome</label>
              <div class="col-md-9">
                <input id="name" name="name" placeholder="nome" class="form-control" required="" type="text">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label" for="email">E-mail</label>
              <div class="col-md-9">
                <input id="email" name="email" placeholder="e-mail" class="form-control" required="" type="text">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label" style="resize:none;" for="message">Mensagem</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="mensagem" rows="5" required=""></textarea>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary">Enviar</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
     </div>
   </div>
</div>