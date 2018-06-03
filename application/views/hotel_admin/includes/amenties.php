
<form id="hotel_amenties_form">
    <input type="hidden" class="form-control" value="<?php echo ($hotel)? $hotel['id'] : '';?>" name="hotel_id" id="hotel_id">
    <div class="col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
        <label for="">Amenties</label>
        <?php if(!empty($amenties)) {
            $amenty = implode(',', $amenties);
        }else{
            $amenty = '';
        }
        ?>
        <input type="text" class="form-control" value="[<?php echo $amenty;?>]" name="amenties" id="amenties" placeholder="Amenties">

    </div>
    <div class="clearfix"></div>
    <div class="col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
        <button type="button" class="btn btn-default" id="amenty_submit">Save</button>
    </div>
    <div class="clearfix"></div>
</form>

