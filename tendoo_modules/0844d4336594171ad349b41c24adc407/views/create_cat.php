<?php echo $lmenu;?>
<section id="content">
    <section class="vbox"><?php echo $inner_head;?>
        
        <section class="scrollable" id="pjax-container">
            <header>
                <div class="row b-b m-l-none m-r-none">
                    <div class="col-sm-4">
                        <h4 class="m-t m-b-none"><?php echo $this->core->tendoo->getTitle();?></h4>
                        <p class="block text-muted"><?php echo $pageDescription;?></p>
                    </div>
                </div>
            </header>
            <section class="vbox">
                <section class="wrapper"> 
					<?php echo $this->core->notice->parse_notice();?> 
					<?php echo $success;?> 
					<?php echo notice_from_url();?>
					<?php echo validation_errors(); ?> 
                    <section class="panel">
                        <div class="panel-heading"> Cr&eacute;er une cat&eacute;gogrie </div>
                        <div class="span8"> 
                            <form action="" class="panel-body" method="post">
                                <div class="form-group">
                                    <input class="form-control" name="cat_name" type="text" placeholder="Nom de la cat&eacute;gorie" />
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="cat_description" type="text" placeholder="Description de la cat&eacute;gorie"></textarea>
                                </div>
                                <input class="btn btn-sm btn-info" type="submit" value="Créer une cat&eacute;gorie">
                            </form>
                        </div>
                    </section>
                </section>
            </section>
        </section>
        </section>
        <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
        </section>