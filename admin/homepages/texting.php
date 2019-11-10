<?php 
                    require('newsdb.ini.php');
                ?>
                <?php
                if (isset($mssg)) {
                    # code...
                    echo $mssg;
                }
                ?>
                <form action="" enctype="multipart/form-data" method="POST">
                        <div class="carol-large">
                            <div ><textarea class="header-large" id='msg' placeholder="Your headline here" name='header' maxlength=''></textarea></div>
                            <div><textarea class="msg-large" placeholder='Write here' name='msg'></textarea></div>
                            <div id="changeimage" style='cursor:pointer'>
                                <div class="rowimage-small" id='showText' >
                                    <h4 style='text-align:center'>
                                        <i class="pe-7s-cloud-upload" style='color:gold;font-weight:bolder; font-size:30px'>
                                        </i>
                                        <br> UPLOAD IMAGE <br> <font size="2">max-resoution:1080 x 720</font>
                                    </h4>
                                </div>
                                <img class='rowimage-small' id="prev" style='display:none;'>
                            </div>
                            <input type="file" id="image" name="uplaoditem" onchange="loadFile(event)"  multiple>
                            <input type='submit' name='UploadNews' class='send-large' value='ADD'>
                        </div>
                </form>