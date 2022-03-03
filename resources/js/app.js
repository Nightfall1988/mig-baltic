require('./bootstrap');

function getAscOrdered() {
    $.ajax({
        type:'POST',
        url:'/getmsg',
        data:'_token = <?php echo csrf_token() ?>',
        success:function(data) {
            $("#msg").html(data.msg);
        }
    });
}
