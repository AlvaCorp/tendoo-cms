<?php echo $smallHeader;?>
<?php
$participant['AUTEUR']	=	$this->instance->users_global->getUser($getMsgContent['title'][0]['AUTHOR']);
$participant['RECEVEUR']	=	$this->instance->users_global->getUser($getMsgContent['title'][0]['RECEIVER']);
?>
<section class="scrollable bg-light lt">
    <div class="panel-content">
        <div class="wrapper scrollable">
			<?php echo output('notice');?>
            <?php echo validation_errors();?>
        	<div class="panel">
                <div class="panel-heading">
                    <?php echo $participant['AUTEUR']['PSEUDO'];?> <?php _e( 'to' );?> <?php echo $participant['RECEVEUR']['PSEUDO'];?>
                </div>
            	<div class="span12">
                    	<div class="wrapper btn-group">
							<form method="post" action="<?php echo $this->instance->url->site_url(array('account','messaging','home'));?>" class="read_form_id">
								<?php include_once(VIEWS_DIR.'account/messaging/menu.php');?>
								<input type="button" class="btn btn-sm btn-white answer_btn" value="<?php _e( 'Send a new message' );?>" />
								<input type="hidden" name="conv_id" class="conv_id" value="<?php echo $getMsgContent['title'][0]['ID'];?>" />
							</form>
                        </div>
                        <table class="table table-striped b-t text-sm answer_table">
                            <thead>
                                <tr>
                                    <th width="60"><?php _e( 'Author' );?></th>
                                    <th><?php _e( 'Message' );?></th>
                                    <th width="200"><?php _e( 'Posted on' );?></th>
                                </tr>
                            </thead>
                            <tbody>
                            <form method="post">
                            <?php
                            if(count($getMsgContent['content']) > 0)
                            {
                                foreach($getMsgContent['content'] as $g)
                                {
                                    $users		=	$this->instance->users_global->getUser($g['AUTHOR']);
                                    $post_time	=	strtotime($g['DATE']);
                            ?>
                                <tr>
                                    <th><?php echo $users['PSEUDO'];?></th>
                                    <th><?php echo htmlentities($g['CONTENT']);?></th>
                                    <th><?php echo $this->instance->date->timespan($post_time);?></th>
                                </tr>
                            <?php
                                }
                            }
                            else
                            {
                                ?>
                                <tr>
                                    <th colspan="6"><?php _e( 'Empty Inbox' );?></th>
                                </tr>
                                <?php
                            }
                            ?>
                            </form>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer bg-white b-t">
    <div class="row m-t-sm text-center-xs">
        <div class="col-sm-4">
            <select class="input-sm form-control input-s-sm inline">
                <option value="0">Bulk action</option>
                <option value="1">Delete selected</option>
                <option value="2">Bulk edit</option>
                <option value="3">Export</option>
            </select>
            <button class="btn btn-sm btn-white">Apply</button>
        </div>
        <div class="col-sm-4 text-center"> <small class="text-muted inline m-t-sm m-b-sm"><?php echo sprintf( __( 'Displays %d to %d over %d items' ) , $paginate[1] , $paginate[2] , $ttMsgContent );?></small> </div>
        <div class="col-sm-4 text-right text-center-xs">
            <ul class="pagination pagination-sm m-t-none m-b-none">
            <?php
            if(is_array($paginate[4]))
            {
                foreach($paginate[4] as $p)
                {
                    ?>
                    <li class="<?php echo $p['state'];?>"><a href="<?php echo $p['link'];?>"><?php echo $p['text'];?></a></li>
            <?php
                }
            }
            ?>
            </ul>
        </div>
    </div>
</footer>
