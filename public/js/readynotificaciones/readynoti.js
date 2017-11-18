$(window).load(function() {

         var form = $( "#form-noti" );
          var url= form.attr('action');
          $.ajax({
            url: url,
              headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            method: "post",
            dataType: 'json',
            success: function(res)
            {
            //   if (res.data.length ==0){                 
            //       $("#notificaciones").html("");
            //   }
            //   else{
               var Html='';
               for (resultado in res.data) {
                        Html = Html+'<li>'+
                                        // '<span class="image">'+'<img src="{{URL::asset(\'"/images/img.jpg"\')}}" alt="Profile Image"/>'+'</span>'+
                                        '<a>'+
                                            '<span>'+
                                                '<span>'+res.data[resultado].pern + res.data[resultado].pera+'</span>'+
                                                '<span class="time">'+ res.data[resultado].created_at+'</span>'+
                                            '</span>'+
                                                '<span class="message">'+res.data[resultado].descripcion+'</span>'+
                                        '</a >'+
                                    '</li>';

                                        $("#notificaciones").html("");
                                        $("#notificaciones").append(Html);
            }
        // }

          },
          error: function(jqXHR, textStatus, errorThrown)
          {
          }
        });
});