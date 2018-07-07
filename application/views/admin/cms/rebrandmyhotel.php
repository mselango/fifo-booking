<?php defined('BASEPATH') OR exit('No direct script access allowed');?>


<?php 
if(isset($result) && !empty($result)){ 
	$title = $result[0]['title'];
	$description = $result[0]['description'];
	$id = $result[0]['id'];
}
else{
	$title="";
	$description="";
	$id="";
}

?>
<section class="content">
    <div class="container-fluid">
        <?php if(isset($_SESSION['success'])){?>
            <div class="alert bg-green alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?php echo $_SESSION['success'];?>
            </div>      
        <?php 
        }
        else if(isset($_SESSION['error'])){
        ?>
            <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?php echo $_SESSION['error'];?>
            </div>
        <?php } ?>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Rebrand My Hotel
                        </h2>
                        
                    </div>
                    <div class="body">
                        <form name="aboutus" action="<?php echo BASE_URL."cms/rebrandmyhotel" ?>" method ="post" class="form-horizontal">
                        	<input type="hidden" name="id" value="<?php echo $id; ?>">
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">Title :</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="title" name="title" class="form-control" placeholder="" value="<?php echo $title; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">Description :</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <textarea id="ckeditor" name="description">
                                        <?php echo $description; ?>
                                    </textarea>
                                </div>
                            </div>
                            
                            <div class="row clearfix">
                                <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                    <input type="submit" class="btn btn-primary m-t-15 waves-effect" value="Save">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>