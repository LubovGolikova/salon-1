$( document ).ready(function() {


    $('.prone').bind('click', function(){
        if(!$(this).hasClass('disabled')){
        let value = this.innerText;
        $("#getTime").text(value);
        $('input[name=Times]').val(value);
        }
    });
    $(document).ready( function () {
        $('#myTable').DataTable({
            "language": {
                "url": "/assets/russian.json"
            }
        });
    });

    $('#btnBack').click(function(e){
        history.back();
    });

});
