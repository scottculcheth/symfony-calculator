$(document).ready(function() {
    $('#calculate').on('click', function(e) {
        e.preventDefault();

        var $operation = $('#operation').val();
        var $x = $('#x').val();
        var $y = $('#y').val();

        $.ajax({
            method: 'GET',
            url: '/api/'+$operation+'/'+$x+'/'+$y
        }).done(function(data){
            $('#result').val(data.result);
        });
    });
});