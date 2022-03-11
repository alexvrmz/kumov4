<?php
/// --- Todos los textos en variables 2021/05/21
include('idiomas/'.$iDi['u5h8ir5_iDi'].'/i_c0Nfi6.php');
include('parciales/c4bec3r4.php');
include('parciales/menu.php');
include('parciales/7i7ul0.php');
?>
<script>
var getInfo;
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      isLogin();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      document.getElementById('status').innerHTML = 'Vincula tu cuenta ' +
        'con Facebook.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      document.getElementById('status').innerHTML = 'Inicia sesión ' +
        'en Facebook. ';
    }
  }
  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }
  window.fbAsyncInit = function() {
  FB.init({
    appId      : '556896955739933',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.5' // use graph api version 2.5
  });
  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
  };
  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function isLogin() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me','GET', {fields: 'name,email,id,picture.width(150).height(150)'}, function(response) {
      var loginData = "id=<?= $usuario_id ?>"+"&name="+response.name+"&email="+response.email+"&fb_Id="+response.id+"&profilePictureUrl="+response.picture.data.url;
      console.log('Successful login for: ' + loginData);
      
      //ajax reqest to server..
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.open("POST", "logindata.php", true);
      xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlhttp.onreadystatechange = function(){
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
          document.getElementById('response').innerHTML = xmlhttp.responseText;
        };
      }
      xmlhttp.send(loginData);
      //document.getElementById('status').innerHTML = 'Thanks for logging in, ' + response.name +"<br> Email : "+ response.email +"<br> Profile Id :  "+ response.id +"<br> Profile Url : "+ response.picture.data.url +'';
      //window.location.href = 'logindata.php?nombre='+response.name+'&mail='+response.email+'&id='+ response.id+'&foto='+response.picture.data.url;
     });
  }
</script>
    <!-- Main content -->
       

      <!-- Default box -->
      <div class="card <?= $brr4 ?> card-outline col-lg-6">
        <div class="card-header">
          <h3 class="card-title"><?= lbl_1er7i7u ?></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fad fa-minus"></i>
            </button>       
          </div>
        </div>
        <form action="ApiPHP/c0Nfi6_4pi.php?accion=54v3c0nFi6" method="POST">
          <div class="card-body">
            <div class="row">

              <div class="col-lg-12">
                <div class="form-group row">
                  <label for="cc_x001" class="col-7"><?= lbl_Tbl0q ?></label>
                  <input type="number" class="form-control col-5" name="cc_x001" id="cc_x001" value="<?= $iDi['config_7im3Bl0'] ?>">
                  <input type="hidden" name="cc_x002" value="<?= $usuario_id ?>">
                </div>
              </div>

              <div class="col-lg-12">
                <div class="form-group row">
                  <label for="cc_x003" class="col-7"><?= lbl_dVen ?></label>
                  <input type="number" class="form-control col-5" name="cc_x003" id="cc_x003" value="<?= $iDi['config_rDven'] ?>">
                </div>
              </div>
              <div class="row" style="margin-bottom: 20px;">
                
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Cuanta de Facebook</label><br>
                  <div class="fb-login-button" data-width="" data-size="large" data-button-type="continue_with" data-layout="default" data-auto-logout-link="true" data-use-continue-as="true"></div>
                  <div id="status">
                  </div>
                  <div id="response"></div>
                  </div>
                </div>
              </div>
                
                

              </div>
              
              <div class="col-lg-12">
                <button class="btn btn-success" type="submit"><i class="fad fa-save"></i> <?= btn_sav3 ?></button>
              </div>
              
            </div>
          </div>
        </form>
        <!--/.card-body -->
        <div class="card-footer">
        <?= lbl_1er7i7u ?>
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
<?php
include('parciales/3p1416e.php');
 ?>