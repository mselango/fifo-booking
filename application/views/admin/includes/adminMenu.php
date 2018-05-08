
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



                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">content_copy</i>
                            <span>Hotels</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url('admin/hotels/add');?>">Add</a>
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