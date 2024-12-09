//Log View Trigger
$(document).ready(function(){
    $(document).on('click','.view_log',function(){
        var view_log_id=$(this).attr('id');
        $.ajax({
            url:"./view/view-log.php",
            type:"post",
            data:{view_log_id:view_log_id},
            success:function(data){
                $("#log_info").html(data);
                $("#viewLogModal").modal('show');
            }
        });
    });
});


//Case View Trigger
$(document).ready(function(){
    $(document).on('click','.view_case',function(){
        var view_case_id=$(this).attr('id');
        $.ajax({
            url:"./view/view-case.php",
            type:"post",
            data:{view_case_id:view_case_id},
            success:function(data){
                $("#case_info").html(data);
                $("#viewCaseModal").modal('show');
            }
        });
    });
});