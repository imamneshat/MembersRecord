<?php

    include("Database.php");
    
    $db = new Database;
    $this->conn = $db->conn;
    
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
        <style type="text/css"> </style>
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/jquery/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Member's Record</h3><hr />
                    <div class="col-2"></div>
                    <?php
                        $get_main = $this->conn->query("SELECT * FROM members WHERE statusParent = '1'");

                        foreach($get_main AS $main){
                            $main_id  = preg_replace('/0+/','',$main['Id']);
                    ?>
                    <div class="col-8">                
                        <ul class="list-group">
                            <li class="list-group-item" id="<?= $main_id ?>"> - <?= $main['Mnama'] ?></li>
                            <ul>
                                <?php 
                                    $get_parent = $db->query("SELECT * FROM members WHERE ParentId = {$main['Id']}");

                                    foreach($get_parent AS $parent){
                                ?>
                                <li id="<?= $main_id ?>">-<?= $parent['id'] ?> <?= $parent['Mnama'] ?> </li>
                                <?php } ?>
                            </ul>
                        </ul>
                    </div>
                    <?php } ?>
                    <div class="col-2"></div>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#myModal"> Add Member</button>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                        
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Add Member</h4>
                                </div>
                                <div class="modal-body">
                                    <form action="#"  name="member_form" id="member_form">
                                        <div class="form-group">
                                            <label for="name">Parent:</label>
                                            <?php
                                                $get_mainMember = $this->conn->query("SELECT * FROM members ");

                                                foreach($get_mainMember AS $mainMember){
                                                    $mainMemberid  = preg_replace('/0+/','',$mainMember['Id']);
                                            ?>  
                                            <input type="hide" class="form-control" name="MperentStatus" id="MperentStatus" value="<?= $mainMember['statusParent'] ?>">
                                            <input type="hide" class="form-control" name="MperentId" id="MperentId" value="<?= $mainMember['Id'] ?>">
                                            <select class="form-control" name="memberP" id="memberP">
                                                
                                                <option class="<?= $mainMemberid ?>" id="<?= $mainMember['statusParent'] ?>"><?= $mainMember['Mnama'] ?></option>
                                               
                                            </select>
                                            <?php } ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Name:</label>
                                            <input type="name" class="form-control" name="Mname" id="Mname">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary save_member" name="save_member" id="save_member">Save Change</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        
        <ins class="adsbygoogle"
            style="display:inline-block;width:728px;height:15px"
            data-ad-client="ca-pub-8906663933481361"
            data-ad-slot="3318815534"></ins>
        <script> (adsbygoogle = window.adsbygoogle || []).push({}); </script>


        <script type="text/javascript">

            $(document).ready(function(){

                $(document).off('click','.save_member').on('click','.save_member', function(e) {

                    var formdata = $('#member_form').serialize();
                    
                    $.ajax({
                        type: "POST",
                        url: "code.php",
                        data: formdata,
                        dataType:'json',
                        beforeSend: function () {

                        },
                        success: function (response) {
                            if(response.Status == 0)
                            {
                                echo"sucessfully insert";
                            }
                            else
                            {
                                echo"data not insert";
                            
                            }

                        }
                    });

                });
            });
        </script>
    </body>
</html>