
$(document).ready(function(){
        $("#myToast").toast({ delay: 9000});
        $("#myToast").toast({ autohide: true});
        $("#myToast").toast('show');
});



//tool tip
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

//Confirm Delete //
$(document).ready(function(){
    $(".delete").click(function(e){
        if(!confirm('This will Delete Permanently!')){
            e.preventDefault();
            return false;
        }
        return true;
    });
});

$().ready(function () {
    /* You would normally put this in a seperate file */
    $('.sortable-table').tableSorter();
});
