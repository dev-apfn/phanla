$(document).ready(function(){
    $('#enterprises').DataTable();
});

function deactivateEnterprise(id, name) {
     $('#enterprise-deactivate-name').html(name);
     $('#enterprise-deactivate-id').val(id);
     $('#deactivate-enterprise').modal('show');
}

function restoreEnterprise(id, name) {
     $('#enterprise-restore-name').html(name);
     $('#enterprise-restore-id').val(id);
     $('#restore-enterprise').modal('show');
}
