{include file="sections/header.tpl"} <form class="form-horizontal" method="post" role="form" action="{$_url}plugin/radius_client_tester">
  
  <div class="row">
    <div class="col-sm-12 col-md-12">
      <div class="panel panel-primary panel-hovered panel-stacked mb30">
        <div class="panel-heading">Test User Connectivity</div>
        <div class="panel-body">
          <div class="form-group">
            <label class="col-md-2 control-label">Username</label>
            <div class="col-md-6">
              <input type="text" id="username" name="username" value="{$username}" placeholder="Username" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">password</label>
            <div class="col-md-6">
              <input type="password" id="password" name="password" value="{$password}" placeholder="Password" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Nas IP Address</label>
            <div class="col-md-6">
              <input type="text" id="address" name="address" value="{$address}" placeholder="127.0.0.1" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Nas Port</label>
            <div class="col-md-6">
              <input type="text" id="port" name="port" value="{$port}" placeholder="1812" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Nas Secret</label>
            <div class="col-md-6">
              <input type="text" id="secret" name="secret" value="{$secret}" placeholder="testing123" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
              <button class="btn btn-success waves-effect waves-light" type="submit" name="submit" value="Submit">Test User Connection</button>
            </div>
          </div>
        </div>
      </div> {if $output != ''} <div class="panel panel-primary panel-hovered panel-stacked mb30">
        <div class="panel-heading">Results</div>
        <div class="panel-body">
          <pre>{$output}</pre>
        </div>
      </div>
    </div> {/if}
  </div>
</form> 

{include file="sections/footer.tpl"}