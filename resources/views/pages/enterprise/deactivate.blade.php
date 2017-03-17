<div class="modal fade in" id="deactivate-enterprise">
     <div class="modal-dialog">
          <div class="modal-content">
               <form class="form-horizontal" role="form" method="POST" action="{{ url('/enterprises/deactivate') }}">
                    {{ csrf_field() }}

                    <input type="hidden" name="_method" value="DELETE"/>
                    <input type="hidden" name="id" id="enterprise-deactivate-id" />

                    <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                         <h4 class="modal-title">Deactivate Enterprise</h4>
                    </div>
                    <div class="modal-body">
                         <center>
                              Are you sure you want to deactivate <strong id="enterprise-deactivate-name"></strong>?
                         </center>
                    </div>
                    <div class="modal-footer">
                         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                         <button type="submit" class="btn btn-danger">Yes</button>
                    </div>
               </form>
          </div>
     </div>
</div>
