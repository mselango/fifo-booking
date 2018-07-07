
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">

            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active" id="m_dashboard">
                        <a href="index.html">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>


                     <li id="cms" <?php if($this->uri->segment(1)=="cms"){echo 'class="active"';}?>>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">swap_calls</i>
                            <span>CMS</span>
                        </a>
                        <ul class="ml-menu">
                            <li id="aboutus" <?php if($this->uri->segment(2)=="aboutUs"){echo 'class="active"';}?>>
                                <a href="<?php echo base_url(); ?>cms/aboutUs">About us</a>
                            </li>
                            <li id="rebrandmyhotel" <?php if($this->uri->segment(2)=="rebrandmyhotel"){echo 'class="active"';}?>>
                                <a href="<?php echo base_url(); ?>cms/rebrandmyhotel">Rebrand My Hotel</a>
                            </li>
                            <li id="franchise" <?php if($this->uri->segment(2)=="franchise"){echo 'class="active"';}?>>
                                <a href="<?php echo base_url(); ?>cms/franchise">Franchise</a>
                            </li>
                            <li id="travelagent" <?php if($this->uri->segment(2)=="travelagent"){echo 'class="active"';}?>>
                                <a href="<?php echo base_url(); ?>cms/travelagent">Travel Agent</a>
                            </li>
                             <li id="corporateenquiry" <?php if($this->uri->segment(2)=="corporateenquiry"){echo 'class="active"';}?>>
                                <a href="<?php echo base_url(); ?>cms/corporateenquiry">Corporate Enquiry</a>
                            </li>
                            <li id="howtomakemyreservation" <?php if($this->uri->segment(2)=="howtomakemyreservation"){echo 'class="active"';}?>>
                                <a href="<?php echo base_url(); ?>cms/howtomakemyreservation">How to make my reservation?</a>
                            </li>
                            <li id="paymentoptions" <?php if($this->uri->segment(2)=="paymentoptions"){echo 'class="active"';}?>>
                                <a href="<?php echo base_url(); ?>cms/paymentoptions">Payment Options</a>
                            </li>
                            <li id="bookingtips" <?php if($this->uri->segment(2)=="bookingtips"){echo 'class="active"';}?>>
                                <a href="<?php echo base_url(); ?>cms/bookingtips">Booking Tips</a>
                            </li>
                            <li id="testimony" <?php if($this->uri->segment(2)=="testimony"){echo 'class="active"';}?>>
                                <a href="<?php echo base_url(); ?>cms/testimony">Testimony</a>
                            </li>
                            <li id="faq" <?php if($this->uri->segment(2)=="faq"){echo 'class="active"';}?>>
                                <a href="<?php echo base_url(); ?>cms/faq">FAQ</a>
                            </li>
                            <li id="paymentsecurity" <?php if($this->uri->segment(2)=="paymentSecurity"){echo 'class="active"';}?>>
                                <a href="<?php echo base_url(); ?>cms/paymentSecurity">Payment Security</a>
                            </li>
                            <li id="privacypolicy" <?php if($this->uri->segment(2)=="privacyPolicy"){echo 'class="active"';}?>>
                                <a href="<?php echo base_url(); ?>cms/privacyPolicy">Privay Policy</a>
                            </li>
                            <li id="termsconditions" <?php if($this->uri->segment(2)=="termsConditions"){echo 'class="active"';}?>>
                                <a href="<?php echo base_url(); ?>cms/termsConditions">Terms Conditions</a>
                            </li>
                            <li id="visainformation" <?php if($this->uri->segment(2)=="visaInformation"){echo 'class="active"';}?>>
                                <a href="<?php echo base_url(); ?>cms/visaInformation">Visa Information</a>
                            </li>
                            <li id="travelinsurance" <?php if($this->uri->segment(2)=="travelInsurance"){echo 'class="active"';}?>>
                                <a href="<?php echo base_url(); ?>cms/travelInsurance">Travel Insurance</a>
                            </li>
                            <li id="support" <?php if($this->uri->segment(2)=="support"){echo 'class="active"';}?>>
                                <a href="<?php echo base_url(); ?>cms/support">Support</a>
                            </li>
                            <li id="contact" <?php if($this->uri->segment(2)=="contact"){echo 'class="active"';}?>>
                                <a href="<?php echo base_url(); ?>cms/contact">Contact</a>
                            </li>
                            <li id="vision" <?php if($this->uri->segment(2)=="vision"){echo 'class="active"';}?>>
                                <a href="<?php echo base_url(); ?>cms/vision">Vision</a>
                            </li>
                            <li id="sociallinks" <?php if($this->uri->segment(2)=="socialLinks"){echo 'class="active"';}?>>
                                <a href="<?php echo base_url(); ?>cms/socialLinks">Social Links</a>
                            </li>
                            <li id="careers" <?php if($this->uri->segment(2)=="careers"){echo 'class="active"';}?>>
                                <a href="<?php echo base_url(); ?>cms/careers">Careers</a>
                            </li>

                        </ul>
                    </li>



                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">content_copy</i>
                            <span>Hotels</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url('hotel/manage');?>">Add</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('admin/hotels/list');?>">List</a>
                            </li>

                        </ul>
                    </li>


                </ul>
            </div>
            <!-- #Menu -->
			
			<?php $this->load->view('admin/includes/footer.php')?> 

        </aside>
        <!-- #END# Left Sidebar -->