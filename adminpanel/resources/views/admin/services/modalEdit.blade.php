<div id="testmodal" class="premodal" tabindex="-1" style="display: none;">
    
                <span class="preclose" closemodal='testmodal' >&times;</span>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="blue bigger">Please fill the following form fields</h4>
            </div>
           <div class="modal-body">
                <form class="form-horizontal" role="form">
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">عنوان خدمت </label>
                        <div >
                            <input id="title" placeholder="عنوان خدمت" class="form-control" type="text" value=''>
                        </div>
                       <div>
						    <label for="form-field-8">خلاصه متن</label>
					    	<textarea class="form-control" id="brif" placeholder="خلاصه متن"></textarea>
						</div>
                        <div>
                    </div>

                    <textarea name="content1" id="content1" rows="10" cols="80">
                     </textarea>
                     <script>
                     // Replace the <textarea id="editor1"> with a CKEditor
                     // instance, using default configuration.
                     CKEDITOR.replace( 'content1' );
                     </script>
 


                   </div> 
                </form>
             </div>
              
            <div class="modal-footer">
                <button class="btn btn-sm" data-dismiss="modal">
                    <i class="ace-icon fa fa-times"></i>
                    Cancel
                </button>
                         
                <button class="btn btn-sm btn-primary">
                    <i class="ace-icon fa fa-check"></i>
                    Save
                </button>
            </div>
            
        </div>
    </div>
</div>


