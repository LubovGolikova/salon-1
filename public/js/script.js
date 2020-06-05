$( document ).ready(function() {
    $('.prone').bind('click', function(){
        let value = this.innerText;
        $("#getTime").text(value);
        $('input[name=Times]').val(value);
    });

});
