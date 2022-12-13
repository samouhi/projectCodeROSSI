<!-- Common Javascript -->
<script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/plugins/tags-input/bootstrap-tagsinput.js"></script>
<script src="assets/plugins/simplebar/simplebar.min.js"></script>
<script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
<script src="assets/plugins/slick/slick.min.js"></script>

<!-- Data Tables -->
<script src='assets/plugins/data-tables/jquery.datatables.min.js'></script>
<script src='assets/plugins/data-tables/datatables.bootstrap5.min.js'></script>
<script src='assets/plugins/data-tables/datatables.responsive.min.js'></script>

<!-- Option Switcher -->
<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

<!-- Ekka Custom -->
<script src="assets/js/ekka.js"></script>


<script>
// function for printing the graping the error and printing it
var keyarr=[]
function printErrorMsg (msg) {
 keyarr=[];
var i=0;
            $.each( msg, function( key, value ) {
            console.log(key);
            keyarr[i]=key;
            console.log(keyarr[i]);
            i++;

              $('.'+key+'_err').text(value);
            });
        }
// function of deleting data after adding it
        function deleteDataCategory(data) {
            $.each( data, function( key,value) {
            console.log(key);
            console.log("samouhi");

            $('#'+key).val("");
            if(key=="sex"){
              $('#'+value).prop("checked", false );
              $('.'+value).removeClass("active");
            }
            if(key=="nationality"){
              $('.select'+key+' select').each( function() {
        $(this).val( $(this).find("option[selected]").val() );
    });
            }
            });
        }





        // function for deleting the error msg
        function deleteErrorMsg () {
       for(var i=0 ; i<keyarr.length ;i++)
              $('.'+keyarr[i]+'_err').text("");

        }
//function for alert sucess
      function  alertSucces( icon1 ,title1){
        $(function () {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
           Toast.fire({
        icon: icon1,
        title: title1
      })
      });
    }
</script>
