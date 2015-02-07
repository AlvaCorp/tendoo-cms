<body cz-shortcut-listen="true" id="backgroundLogin">
	<section class="vbox">
    	<section class="hbox stretch">
        	<section class="vbox">
		<section class="scrollable">
            <img src="<?php echo img_url(get_instance()->tendoo->getBackgroundImage());?>" style="width:100%;float:left;position:absolute;">
			<section id="content" class="wrapper-md animated fadeInUp"> 
				<a class="nav-brand" href="<?php echo get_instance()->url->main_url();?>">
                <h3><img style="max-height:80px;margin-top:-3px;" src="<?php echo get_instance()->url->img_url("logo_4.png");?>"> </h3></a>
				<?php echo $body;?>
				 
			</section>
			<!-- footer -->
		</section>
        <footer id="footer"> 
            <div class="text-center padder clearfix"> 
                <p> 
                    <small><a href="https://github.com/Blair2004/tendoo-cms"><?php echo get('core_version');?></a>
                    © 2015</small> 
                </p>
            </div>
        </footer>
        	</section>
        </section>
	</section>
    <?php echo output('js');?>
</body>
</html>