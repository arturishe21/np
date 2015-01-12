
 <select name="city">
        <option value="">Выберите город</option>
 </select>

  <select name="otdeleniy">
         <option value="">Выберите отделение</option>
  </select>

 <script>
  $("[name=city]").html("<option value=''>Загрузка...</option>");
    $.post("/np/city_get", {},
       function(data){
           $("[name=city]").html(data)
    });

     $("[name=city]").change(function(){

           $("[name=otdeleniy]").html("<option value=''>Загрузка...</option>");

           $.post("/np/otdeleniy_get", {city:$(this).val()},
                              function(data){
                                  $("[name=otdeleniy]").html(data)
            });

     });
 </script>