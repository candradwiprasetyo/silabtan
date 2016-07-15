

<div class="pageheader">
      <h2><i class="fa fa-envelope"></i> Pesan</h2>
      <div class="breadcrumb-wrapper">
        <a href="<?php echo($base_url."pesan"); ?>" class="btn btn-primary">New Chat</a>
      </div>
    </div>
    

<div class="contentpanel panel-email">

        <div class="row">
            <div class="col-sm-4 col-lg-3">
                <ul class="nav nav-pills nav-stacked nav-email mb20">
               	<?php
               	$query_user = mysql_query("select * from tsilabtan_user where username <> '".$_SESSION['username']."'");
               	while($row_user = mysql_fetch_array($query_user)){
               	?>
                <li <?php if($row_user['USERNAME']==@$_GET['chat']){ ?>class="active"<?php } ?>><a href="<?php echo($base_url."pesan&chat=".$row_user['USERNAME']); ?>"><i class="fa fa-user"></i><?= $row_user['FULLNAME'] ?></a></li>
               	<?php
               	}
               	?>
              </ul>
                
            </div><!-- col-sm-3 -->
            
            <div class="col-sm-8 col-lg-9">
                
                <div class="panel panel-default">
                    <div class="panel-body">
                        
                        <div class="table-responsive">
                            <table class="table table-email">
                              <tbody>
                                

                                <?php
                                  $chat = (isset($_GET['chat'])) ? $_GET['chat'] : "";
                                  if($chat){
                                    ?>
                                    <?php

                          $query_chat = mysql_query("select a.*, b.* from tsilabtan_message a
                                        join tsilabtan_user b on b.USERNAME = a.USERNAME
                                        where (a.USERNAME = '".$_SESSION['username']."' and a.TSI_USERNAME = '".$_GET['chat']."') 
                                        or (a.TSI_USERNAME = '".$_SESSION['username']."' and a.USERNAME = '".$_GET['chat']."')
                                        order by IDMESSAGE asc
                                        ");
                          while($row_chat = mysql_fetch_array($query_chat)){
                          ?>
                                <tr class="unread">
                                  <td>
                                    <div class="media">
                                        <a href="#" class="pull-left">
                                          <img alt="" src="<?= $row_chat['PICTUREPROFILE'] ?>" class="media-object">
                                        </a>
                                        <div class="media-body">
                                            <span class="media-meta pull-right"><?= $row_chat['DATECREATED'] ?></span>
                                            <h4 class="text-primary"><?= $row_chat['FULLNAME'] ?></h4>
                                            <small class="text-muted"></small>
                                            <?php
                                            if($row_chat['ATTACHMENT']){
                                              ?>
                                              <img src="<?= $row_chat['ATTACHMENT'] ?>" width="200">
                                              <?php
                                            }
                                            ?>
                                            <p class="email-summary"><?= $row_chat['CONTENTOFMESSAGE'] ?></p>
                                        </div>
                                    </div>
                                  </td>
                                </tr>
                                <?php
                                }
                              
                                ?>
                                <tr>
                                  <td>
                                    <form method="post" action="proses_pesan.php?act=comment&tsi_username=<?= $_GET['chat']?>" class="form-horizontal form-bordered" enctype="multipart/form-data">
      
                                    <input type="text" class="form-control" name="i_comment"></input>
                                    </form>
                                  </td>
                                </tr>
                                <?php
                            }else{ 
                                ?>
                                  

                                <form method="post" action="proses_pesan.php?act=new_comment" class="form-horizontal form-bordered" enctype="multipart/form-data">
        <div class="panel panel-primary">
          <div class="panel-body">
            
            <div class="form-group">
              <label class="col-sm-3 control-label">User</label>
              <div class="col-sm-5">
                <select name="i_new_user" class="form-control chosen-select" data-placeholder="Pilih User...">
                  <option name=""></option>
                  <?php 
                  $q_user=mysql_query("SELECT * FROM tsilabtan_user where USERNAME <> '".$_SESSION['username']."'");
                  while($r_user=mysql_fetch_array($q_user)){
                  ?>
                  <option value="<?php echo $r_user['USERNAME'];?>"><?php echo $r_user['FULLNAME'];?></option>
                  <?php
                  }
                  ?>
                  </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Comment</label>
              <div class="col-sm-6">
                <textarea name="i_new_comment" placeholder="Start conversation" class="form-control" rows="5"></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Gambar</label>
              <div class="col-sm-6">
               <input type="file" name="i_img">
              </div>
            </div>
          
          </div><!-- panel-body -->
          <div class="panel-footer">
            <center>
              <input type="submit" class="btn btn-primary" value="Sent" />
              
            </center>
          </div><!-- panel-footer -->
        </div><!-- panel -->
      </form>

                                <?php
                }
                                ?>
                                  

                              </tbody>
                            </table>
                        </div><!-- table-responsive -->
                        
                    </div><!-- panel-body -->
                </div><!-- panel -->
                
            </div><!-- col-sm-9 -->
            
        </div><!-- row -->
    
    </div>