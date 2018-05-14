$(document).ready(function() {
    $('#calculate').on('click', function(e) {
        e.preventDefault();

        notifyCalculating();

        $.ajax({
            method: 'GET',
            url: createUrl()
        }).done(function(data){
            notifySuccess(data);
        }).fail(function(data){
            notifyFailure(data);
        });
    });

    function createUrl()
    {
        var operation = $('#operation').val();
        var x = $('#x').val();
        var y = $('#y').val();

        return '/api/'+operation+'/'+x+'/'+y;
    }

    function resetNotifications()
    {
        $('#result').removeClass('alert-danger');
        $('#result').removeClass('alert-success');
        $('#result').removeClass("alert-warning");
        $('#result').html('');
        $('#error_bar').addClass('d-none');
        $('#error_bar').html('');
    }

    function notifyCalculating()
    {
        resetNotifications();
        $('#result').addClass('alert-warning');
        $('#result').html('Calculating...');
    }

    function notifySuccess(data)
    {
        resetNotifications();
        $('#result').addClass('alert-success');
        $('#result').html("Result: " + data.result);
    }

    function notifyFailure(data)
    {
        resetNotifications();
        $('#result').addClass('alert-danger');
        $('#result').html("Error: " + data.status);
        $('#error_bar').removeClass('d-none');
        $('#error_bar').html(data.status + ' : Something Went Wrong : ' + data.statusText);
    }
});