/**
 * Created by Administrator on 2015/12/21.
 */
function callAjax(){
    $.ajax({
        url:'ajaxtest.php',
        cache:false,
        type:'post',
        timeout:1000,
        data:{first:$('#first').val(),second:$('#second').val(),sub:$('#sub').val()},
        success: function (o) {
            if(o.errcode == 'success'){
                alert('success');
                $('#res').val(o.res);
            }else{
                alert(o.errmsg);
            }
        },
        error: function () {
            alert('call failed');
        },
        dataType:'json'
    });
}