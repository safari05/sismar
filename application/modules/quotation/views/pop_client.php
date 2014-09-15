<script>
    function takeOutClient(elem){
        var id_client = elem.getAttribute('id-client');
        var initial_client = elem.getAttribute('initial-client');
        var email_pic = elem.getAttribute('email-pic');
        var telp_pic = elem.getAttribute('telp-pic');
        var nama_pic = elem.getAttribute('nama-pic');
        var nama_pt = elem.getAttribute('nama-pt');
        var id_pic = elem.getAttribute('id-pic');
        $("#id_client").val(id_client);
        $("#initial_client").val(initial_client);
        $("#to").val(nama_pic);
        $("#id_pic").val(id_pic);
        $("#email").val(email_pic);
        $("#no_telp").val(telp_pic);
        $("#company").val(nama_pt);
        setTimeout(function(){
            
            $("#popClient").modal('hide');
            
        },300);
    }
</script>
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="chooseTypeLabel">Client</h4>
        </div>
        <div class="modal-body">
           
           <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama PIC</th>
                            <th>Company</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($data):?>
                            <?php $i=1; foreach($data as $dt):?>
                                <tr>
                                    <td><?php echo $i;?></td>
                                     <td>
                                        <a href="javascript:void(0)" onClick="return takeOutClient(this)" 
                                            initial-client="<?php echo $dt->initial;?>"
                                            telp-pic ="<?php echo $dt->telp_pic;?>"
                                            email-pic ="<?php echo $dt->email_pic;?>"
                                            nama-pic ="<?php echo $dt->nama_pic;?>"
                                            nama-pt ="<?php echo $dt->nama_pt;?>"
                                            id-pic ="<?php echo $dt->id_pic;?>"
                                            id-client="<?php echo $dt->id_client;?>" title="Click to select">
                                            <?php echo $dt->nama_pic;?>
                                         </a>
                                    </td>
                                    <td><?php echo $dt->nama_pt;?></td>
                                   
                                </tr>
                            <?php ++$i; endforeach;?>
                        <?php else: ?>
                            
                            User sales tidak ada
                        <?php endif;?>
                    </tbody>
                </table>
                
           </div>
           
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
