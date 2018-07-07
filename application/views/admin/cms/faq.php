<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
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
                            FAQ
                        </h2>
                        
                    </div>
                    <div class="body">
                        <form name="aboutus" action="<?php echo BASE_URL."cms/faq" ?>" method ="post" class="form-horizontal">
                        	
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">Question :</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                		<textarea name="question" rows="4" class="form-control no-resize"></textarea>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">Answer :</label>
                                </div>
                                
                            	<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            		<textarea name="answer" rows="4" class="form-control no-resize"></textarea>
                                </div>
                        	</div>
                                
                            <div class="row clearfix">
                                <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                    <input type="submit" class="btn btn-primary m-t-15 waves-effect" value="Save">
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Question</th>
                                                    <th>Answer</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                if(!empty($result)){
                                                    foreach($result as $key=>$res){ ?>
                                                        <tr>
                                                            <td><?php echo $key+1; ?></td>
                                                            <td><?php echo $res['question']; ?></td>
                                                            <td><?php echo $res['answer']; ?></td>
                                                            <td>
                                                                <a href="<?php echo BASE_URL."cms/faqDelete/" . $res['id']; ?>" onclick="return confirm('Are You Sure, You want to Delete this?');">
                                                                    <i class="material-icons">delete</i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    <?php 
                                                    }
                                                }
                                                else{
                                                ?>
                                                <tr>
                                                    <td colspan="4">No data found</td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
            <!-- #END# Basic Examples -->




                </div>
            </div>
        </div>

    </div>
</section>