<div class="modal fade in" id="restore-enterprise">
     <div class="modal-dialog">
          <div class="modal-content">
               <form class="form-horizontal" role="form" method="POST" action="{{ url('/enterprises/restore') }}">
                    {{ csrf_field() }}

                    <input type="hidden" name="_method" value="PUT"/>
                    <input type="hidden" name="id" id="enterprise-restore-id" />

                    <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                         <h4 class="modal-title">Restore Enterprise</h4>
                    </div>
                    <div class="modal-body">
                         <center>
                              Are you sure you want to restore <strong id="enterprise-restore-name"></strong>?
                         </center>
                    </div>
                    <div class="modal-footer">
                         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                         <button type="submit" class="btn btn-success">Yes</button>
                    </div>
               </form>
          </div>
     </div>
</div>
