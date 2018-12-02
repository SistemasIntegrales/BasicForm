<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>IESPE - Contacto</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <!-- <link rel="stylesheet" href="./style.css"> -->
  <style media="screen">
  /*h1, h2, h3, h4, h5, h6, p, */.form-control, option, button {
    font-family: 'Open Sans';
  }
  h1, h2, h3, h4, h5, h6, strong, a {
    color: #0A548B;
  }
  /**********
  *** FORM ***
   **********/
  /* Apartado en general */
  .apartadoForm {
    padding-top: 1rem;
    background-color: #FAFAFA;
  }
  .apartadoForm h4 {
    margin-bottom: 0.7rem;
  }

  /* Inputs forms */
  .form-control {
    backgroud-color: #FAFAFA !important;
    color: #0A548B;/*4D4D4D;*/
    border: 1px solid black;
  }
  .form-control:focus {
    color: #0A5488;
  }

  .form-control, button {
    font-size: 15px;
  }
  .form-control::placeholder {
    color: #4D4D4D;
    opacity: 1;
  }
  .form-control:-ms-input-placeholder {
    color: #4D4D4D;
  }
  .form-control::-ms-input-placeholder {
    color: #4D4D4D;
  }
  .form-control::-webkit-input-placeholder {
    color: #4D4D4D;
  }
  .form-control::-moz-placeholder {
    color: #4D4D4D;
  }
  .form-control:-moz-placeholder {
    color: #4D4D4D;
  }
  /* Boton enviar */
  #enviar_correo_contacto {
   background-color: #0A548B;
   color: #FFFFFF;
  }
  </style>
</head>
<body>
  <div class="container apartadoForm">
    <div class="row">
      <!-- <div class="col-sm-12 col-md-6">
        <h4 class="text-center">¿Tienes algo que decirnos?</h4>
        <p class="text-center">Por favor llena el formulario. Nos pondremos en contacto contigo a la brevedad a través de los siguientes medios:</p>
        <p class="text-center"><strong>Lada sin costo:</strong> 01800-31-222-00</p>
        <p class="text-center"><strong>Correo:</strong> contacto@iespe.edu.mx</p>
      </div> -->
      <div class="col-sm-12 col-md-6">
        <!-- PARTE FORM -->
        <form method="post" role="form" id="frm_contacto">
          <div class="form-group row">
            <div class="col">
              <input type="text" name="NOMBRES" class="form-control" id="NOMBRES" placeholder="Nombres *" required/>
              <div class="validation"></div>
            </div>
            <div class="col">
              <input type="text" name="APELLIDOS" class="form-control" id="APELLIDOS" placeholder="Apellidos *" required/>
              <div class="validation"></div>
            </div>
          </div>
          <div class="form-group row">
            <div class="col">
              <input type="text" name="RFC" class="form-control" id="RFC" placeholder="RFC *" required onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase();"/>
              <div class="validation"></div>
            </div>
            <div class="col">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email *" required/>
              <div class="validation"></div>
            </div>
          </div>

          <div class="form-group row">
            <div class="col">
              <input type="text" class="form-control" name="TELMOVIL" id="TELMOVIL" placeholder="Teléfono móvil *" required/>
              <div class="validation"></div>
            </div>
            <div class="col">
              <input type="text" class="form-control" name="TELCASA" id="TELCASA" placeholder="Teléfono casa"/>
              <div class="validation"></div>
            </div>
          </div>

          <div class="form-group">
            <input type="text" name="DIRECCION" class="form-control" id="DIRECCION" placeholder="Domicilio *" required/>
            <div class="validation"></div>
          </div>

          <div class="form-group">
            <select name="ESTADO" id="ESTADO" class="form-control" required>
              <option value="">Estado *</option>
              <option value="AGS">AGUASCALIENTES</option>
              <option value="BCN">BAJA CALIFORNIA</option>
              <option value="BCS">BAJA CALIFORNIA SUR</option>
              <option value="CAM">CAMPECHE</option>
              <option value="CHI">CHIHUAHUA</option>
              <option value="CHS">CHIAPAS</option>
              <option value="COH">COAHUILA</option>
              <option value="COL">COLIMA</option>
              <option value="DF">CIUDAD DE M?XICO</option>
              <option value="DUR">DURANGO</option>
              <option value="GRO">GUERRERO</option>
              <option value="GTO">GUANAJUATO</option>
              <option value="HGO">HIDALGO</option>
              <option value="JAL">JALISCO</option>
              <option value="MEX">EDO. DE MEXICO</option>
              <option value="MIC">MICHOACAN</option>
              <option value="MOR">MORELOS</option>
              <option value="NAY">NAYARIT</option>
              <option value="NL">NUEVO LEON</option>
              <option value="OAX">OAXACA</option>
              <option value="PUE">PUEBLA</option>
              <option value="QR">QUINTANA ROO</option>
              <option value="QRO">QUERETARO</option>
              <option value="SIN">SINALOA</option>
              <option value="SLP">SAN LUIS POTOSI</option>
              <option value="SON">SONORA</option>
              <option value="TAB">TABASCO</option>
              <option value="TAM">TAMAULIPAS</option>
              <option value="TLX">TLAXCALA</option>
              <option value="VER">VERACRUZ</option>
              <option value="YUC">YUCATAN</option>
              <option value="ZAC">ZACATECAS</option>
            </select>
            <div class="validation"></div>
          </div>

          <div class="form-group">
            <textarea class="form-control" name="message" id="message" rows="5" placeholder="Mensaje *"></textarea>
            <div class="validation"></div>
          </div>
          <button type="submit" class="btn btn-theme btn-lg btn-block" id="enviar_correo_contacto" onclick="enviar_email();"><b>Enviar</b></button>
        </form>
      </div>
    </div>
  </div>
  <script>
  function enviar_email()
  {
    var formulario=document.querySelector('#frm_contacto');
    var min_param=9;
    var NOMBRES=document.querySelector("#NOMBRES").value;
    if(NOMBRES=='')
    {
      min_param--;
    }
    var APELLIDOS=document.querySelector("#APELLIDOS").value;
    if(APELLIDOS=='')
    {
      min_param--;
    }
    var RFC=document.querySelector("#RFC").value;
    if(RFC!='')
    {
      if(RFC.length>9)
      {
        //                return true;
      }
      else
      {
        alert('El RFC debe ser de m�nimo 10 caracteres');
        min_param--;
        //                        return false;
      }
    }
    else
    {
      min_param--;
    }
    var email=document.querySelector("#email").value;
    if(email=='')
    {
      min_param--;
    }
    var TELMOVIL=document.querySelector("#TELMOVIL").value;
    if(TELMOVIL=='')
    {
      min_param--;
    }
    var TELCASA=document.querySelector("#TELCASA").value;
    if(TELCASA=='')
    {
      min_param--;
    }
    var DIRECCION=document.querySelector("#DIRECCION").value;
    if(DIRECCION=='')
    {
      min_param--;
    }
    var ESTADO=document.querySelector("#ESTADO").value;
    if(ESTADO=='')
    {
      min_param--;
    }
    var message=document.querySelector("#message").value;
    if(message!='')
    {
      if(message.length>10)
      {
        //                return true;
      }
      else
      {
        alert('El mensaje debe ser de m?nimo 10 caracteres');
        min_param--;
        //                        return false;
      }
    }
    else
    {
      min_param--;
    }
    if(min_param==9)
    {
      $.post("https://dev.edilar.com:8443/atn/tickets_web/api/ticket/guarda/",
      {
        nombre:NOMBRES + ' ' + APELLIDOS,
        rfc:RFC,
        email:email,
        movil:TELMOVIL,
        telefono:TELCASA,
        domicilio:DIRECCION,
        estado:ESTADO,
        comentarios:message,
        procedencia:'IESPE'
      },
      function(data)
      {
        console.log(data);
        formulario.reset();
        alert("Correo enviado exitosamente, ticket num:" + data['ticket']);
      });
    }
    else
    {
      alert("Todos los campos marcados con * son requeridos!.");
    }
  }
  </script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
