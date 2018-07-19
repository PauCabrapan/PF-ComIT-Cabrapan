 jQuery(document).ready(function($) {
        $('#entrada').hide();

        $('#miGaleria').carousel({
                interval: 5000
        });
 
        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click(function () {
        var id_selector = $(this).attr("id");
        try {
            var id = /-(\d+)$/.exec(id_selector)[1];
            console.log(id_selector, id);
            jQuery('#miGaleria').carousel(parseInt(id));
        } catch (e) {
            console.log('Regex failed!', e);
            }
        });
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
        $('#datePicker').datepicker({
            lang:'es',
            daysMin:["Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo"],
            weekStart:1,
            format: 'dd/mm/yyyy',
            daysOfWeekDisabled:[1],
            disabledDates: [27/7/2018]
        });
});
function inicioR(){
    $('#tratamElegido').hide();
    $('#calendario').hide();
    $('.form-group').hide();
    $('#formu').hide();
    $('#horario').hide();

    //Comienzo ajax cuando hagan click mando el dniI y se deberia ejecutar lo de ajax.
    $('#EmpEleg').on('change',function(){
        var dniI = $(this).val();
        $.ajax({
            type:'POST',
            url:'ajaxData.php',
            data:{'dni':dniI},
            success:function(result){
                $('#tratamElegido').show();
                $('#tratamElegido').html(result);

            }
        }); 
    });
    //Idem con el otro select
    $('#tratamElegido').on('change',function(){
        var idI= $(this).val();
        $.ajax({
            type:'POST',
            url:'cale.php',
            data:{'id':idI},
            success:function(result){
                $('#calendario').show();
                $('.form-group').show();
                $('#calendario').html(result);
            }
        });        
    });
    $('#datePicker').change(function(){
        var emp=$('#EmpEleg').val();
        var idT=$('#tratamElegido').val();
        var f=$('#datePicker').data('datepicker').getFormattedDate('yyyy-mm-dd');
        $.ajax({
            type:'POST',
            url:'cale.php',
            data:{'fecha':f,'dni':emp,'idT':idT},
            success:function(result){
                $('#horario').show();
                $('#horario').html(result);
            }
       })
       
    });
    $('#horario').on('change',function(){
        $('#formu').show();
    })
}

function inicio(){
    
    document.getElementById('misTurnos').style.display="none";
}

function modal(){

	var modal = document.getElementById('misTurnos');

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

   	modal.style.display = "block";

	
    // When the user clicks on <span> (x), close the modal
	window.onload=function(){
    span.onclick = function() {
    	modal.style.display = "none";
	}
}
	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
    	if (event.target == modal) {
	        modal.style.display = "none";
	 	}
	}

}
function close(){
    var modal=$("#misTurnos");
    modal.style.display="none";
}

function cancelar(){
    alert($('#f').html());
    var r=confirm("Desea cancelar el turno?");
    if(r==true)
        alert("Turno cancelado.");
    else
        alert("Turno NO cancelado.");
}
function mostrar(){
    var dni=$('#dniIng').val();
    $.ajax({
            type:'POST',
            url:'turno.php',
            data:{'dniI':dni},
            success:function(html){                
                $('.list-group').html(html);
                modal();
            }
        });

}
function reserva(){
    var hora=$('#horario').val();
    var emp=$('#EmpEleg').val();
    var idT=$('#tratamElegido').val();
    var f=$('#datePicker').data('datepicker').getFormattedDate('yyyy-mm-dd');
    var n=$('#nombre').val();
    var a=$('#apellido').val();
    var e=$('#email').val();
    var t=$('#tel').val();
    var d=$('#dni').val();
    var fin=true;
    if(n=='')
        fin=false;
    if(a=='')
        fin=false;
    if(t=='')   
        fin=false;
    if(d=='')
        fin=false;
    if(fin==false)
        $('#error').html('Hay campos vacios.');
    else{
        $.ajax({
            type:'POST',
                url:'cale.php',
                data:{'hora':hora,'dniI':emp,'idT':idT,'fecha':f,'nombre':n,
                        'apel':a,'email':e,'tel':t,'dniC':d},
                success:function(result){                
                    $('#turnos').html(result);
                }
        })
    }
}