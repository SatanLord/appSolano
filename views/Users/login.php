<!-- Vista para inicio de sesion-->
<br>
<br>
<br>
<br>
<div class="container">    
    <div id="loginbox" class="mainbox col-md-3 col-md-offset-3 col-sm-3 col-sm-offset-3"> 
        
        <div class="row">                
            <div class="iconmelon">
              <svg viewBox="0 0 32 32">
                <g filter="">
                  <use xlink:href="#git"></use>
                </g>
              </svg>
            </div>
        </div>
<form class="col s12 m12 l12" action="<?php echo APP_URL; ?>users/login" method="POST">
        <div class="panel panel-default" >
            <div class="panel-heading">
                <div class="panel-title text-center">Acceso al sistema</div>
            </div>     

            <div class="panel-body" >

<div class="row">
                   
                    <div class="input-group">
                        <span class="input-group-addon">Usuario</span>
                        <input id="username" type="text" class="validate" name="username">                                         
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">Contraseña</span>
                        <input id="pass" type="password" class="validate" name="password">
                    </div>                                                                  

                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-sm-12 controls">
                            <button    type="submit" href="#" class="btn btn-primary pull-right">Ingresar</button>                          
                        </div>
                    </div>

                </form>     

            </div>                     
        </div>  
    </div>
</div>

<div id="particles"></div>

       
                       
                        </div>
                    </div>

                </form>     

            </div>                     
        </div>  
    </div>
</div>

 