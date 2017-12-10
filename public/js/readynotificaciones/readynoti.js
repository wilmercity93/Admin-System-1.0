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
                            '<span class="image">' + '<img src="images/'+ res.data[resultado].avat +'" style="width: 10%;height: 10%; alt="Profile Image"/>'+'</span>'+
                            // '<img src="images/{{$user->avatar}}" style="width: 40%;height: 10%;">'+
                                        '<a>'+
                                            '<span>'+
                                                '<span>'+res.data[resultado].usern +' '+ res.data[resultado].usera+'</span>'+
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