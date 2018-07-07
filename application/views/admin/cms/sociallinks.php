<?php defined('BASEPATH') OR exit('No direct script access allowed');?>


<?php 
if(isset($result) && !empty($result)){ 
	$facebook_link = $result[0]['facebook_link'];
	$twitter_link = $result[0]['twitter_link'];
	$instagram_link = $result[0]['instagram_link'];
    $linkedin_link = $result[0]['linkedin_link'];
    $youtube_link = $result[0]['youtube_link'];
    $pinterest_link = $result[0]['pinterest_link'];
    $googleplus_link = $result[0]['googleplus_link'];
    $whatsapp = $result[0]['whatsapp'];
    $email = $result[0]['email'];
    $id = $result[0]['id'];
}
else{
    $facebook_link = "";
    $twitter_link = "";
    $instagram_link = "";
    $linkedin_link = "";
    $youtube_link = "";
    $pinterest_link = "";
    $googleplus_link = "";
    $whatsapp = "";
    $email = "";
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
                            SOCIAL LINKS
                        </h2>
                        
                    </div>
                    <div class="body">
                        <form name="aboutus" action="<?php echo BASE_URL."cms/socialLinks" ?>" method ="post" class="form-horizontal">
                        	<input type="hidden" name="id" value="<?php echo $id; ?>">
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">Facebook Link :</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="facebook_link" name="facebook_link" class="form-control" placeholder="" value="<?php echo $facebook_link; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">Twitter Link :</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="twitter_link" name="twitter_link" class="form-control" placeholder="" value="<?php echo $twitter_link; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">Instagram Link :</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="instagram_link" name="instagram_link" class="form-control" placeholder="" value="<?php echo $instagram_link; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">Linkedin Link :</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="linkedin_link" name="linkedin_link" class="form-control" placeholder="" value="<?php echo $linkedin_link; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">Youtube Link :</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="youtube_link" name="youtube_link" class="form-control" placeholder="" value="<?php echo $youtube_link; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">Pinterest Link :</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="pinterest_link" name="pinterest_link" class="form-control" placeholder="" value="<?php echo $pinterest_link; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">googleplus Link :</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="googleplus_link" name="googleplus_link" class="form-control" placeholder="" value="<?php echo $googleplus_link; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">Whatsapp :</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="whatsapp" name="whatsapp" class="form-control" placeholder="" value="<?php echo $whatsapp; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">Email :</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="email" name="email" class="form-control" placeholder="" value="<?php echo $email; ?>">
                                        </div>
                                    </div>
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