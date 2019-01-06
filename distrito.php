<html>
  <head>
    <title>Distritos</title>
    <script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
          $.ajax({
            url='listar-distritos.php?Accion=GetDepartamentos',
            success:function(Datos){
              for (x = 0; x<Datos.length; x++){
                //$("#CboDepartamentos").append("<option value='"+ Datos[x].IdDepartamento+"'>"+ Datos[x].Departamento+"</option>");
                $("#CboDepartamentos").append(new Option(Datos[x].Departamento, Datos[x].IdDepartamento));
              }
            }
          });
          $('#CboDepartamentos').change(function(){
            $('CboProvincias,#CboDistritos').empty();
            $.getJSON('listar-distritos.php',{Accion:'GetProvincias',IdDepartamento:$('CboDepartamentos option:selected').val()}, function(Datos){
              for(x=0;x<Datos.length;x++){
                $("#CboProvincias").append(new Option(Datos[x].Provincia, Datos[x].IdProvincia));
              }
            })
          });
          $('#CboProvincias').change(function(){
            $('#CboDistritos').empty();
            $.getJSON('listar-distritos.php',{Accion:'GetDistritos',IdDepartamento:$('CboProvincias option:selected').val()}, function(Datos){
              for(x=0;x<Datos.length;x++){
                $("#CboDistritos").append(new Option(Datos[x].Distrito, Datos[x].IdDistrito));
              }
            })
          });
      })

    </script>
  </head>
  <body>
    <select id="CboDepartamentos"></select>
    <select id="CboProvincias"></select>
    <select id="CboDistritos"></select>
  </body>
</html>
