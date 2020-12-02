
$(document).ready(function (){

     $(".checkbox").on('click', function () {
         const checked = $(this).is(':checked');
         const id = $(this).attr('data-todo-id');
         $.post("controllers/checkController.php", {
             id: id,
             checked: checked
         });
         window.location.reload();
     });
 });
