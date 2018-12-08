<?php
/**
 * (C)2015-2099 FnTie All rights reserved.
 * FnB version:1.0.5
 * Author: HanFen
 **/
 
?>
    <style>
    .border-comm{
        border-radius:12px;
    }
    </style>
    <style>
    .border-comm-1{
        border-radius:9px;
    }
    .border-comm-2{
        border-radius:19px;
    }
    .border-comm-3{
        border-radius:19px;
    }
    </style>
    <!--Post-->
    <br/>
    <div class="mdui-container">
        <div class="mdui-card border-comm-2">
          <div class="mdui-row">
          <form action="save.php" method="post" accept-charset="utf-8">
              <!--Card_1-->
                  <div class="mdui-col-lg-12">
                  <div class="mdui-col-sm-12">
                  <div class="mdui-textfield">
                      <i class="mdui-icon material-icons">mode_comment</i>
                      <input class="mdui-textfield-input" name="Message" type="Message" placeholder="Message"/>
                  </div>
                  </div>
                  </div>
              <!--Card_2-->
                <div class="mdui-col-lg-6">
                <div class="mdui-col-sm-12">
                    <div class="mdui-textfield">
                        <i class="mdui-icon material-icons">account_circle</i>
                        <input class="mdui-textfield-input" name="User" type="User" placeholder="User"/>
                    </div>
                </div>
                </div>
                <div class="mdui-col-lg-6">
                <div class="mdui-col-sm-12">
                  <div class="mdui-textfield">
                      <i class="mdui-icon material-icons">bubble_chart</i>
                      <input class="mdui-textfield-input" name="QQ" type="QQ" placeholder="QQ"/>
                  </div>
                </div>
                </div>
                <br/>
                <div class="mdui-clearfix">
                  <div class="mdui-float-right">
                      <div class="mdui-row mdui-row-gapless">
                             <input type="submit" class="mdui-btn mdui-btn-raised mdui-color-deep-purple-accent border-comm-3" id="Post" value=" 发 射 ! " />
                      </div>
                  </div>
                  </form>
                  <div class="mdui-float-left">
                      <div class="mdui-row mdui-row-gapless">
                          <button class="mdui-btn mdui-btn-raised mdui-color-deep-purple-accent border-comm-3" mdui-menu="{target: '#example-2'}"> ! 级 高 </button>
                      </div>
                  </div>
                </div>
          </div>
        </div>

                  <ul class="mdui-menu" id="example-2">
                                <li class="mdui-menu-item">
                                  <a href="javascript:;" class="mdui-ripple">
                                    <i class="mdui-menu-item-icon mdui-icon material-icons">remove_red_eye</i>Preview
                                  </a>
                                </li>
                                <li class="mdui-menu-item">
                                  <a href="javascript:;" class="mdui-ripple">
                                    <i class="mdui-menu-item-icon mdui-icon material-icons">file_download</i>Download
                                  </a>
                                </li>
                                <li class="mdui-divider"></li>
                                <li class="mdui-menu-item">
                                  <a href="javascript:;" class="mdui-ripple">
                                    <i class="mdui-menu-item-icon mdui-icon material-icons">delete</i>Remove
                                  </a>
                                </li>
                                <li class="mdui-menu-item">
                                  <a href="javascript:;" class="mdui-ripple">
                                    <i class="mdui-menu-item-icon"></i>Empty
                                  </a>
                                </li>
                              </ul>
                              
   
    <script>
        mdui.JQ('#Post').on('click', function () {
          mdui.snackbar({
            message: '赶往发射场中...'
          });
        });
    </script>
        <br/>
        <br/>
        
        <?php
        foreach ( $rows as $row ) {
            $identity = mt_rand()+mt_rand()+mt_rand()+mt_rand();
        ?>
        <div class="mdui-card mdui-hoverable border-comm-1">
              <div class="mdui-card-header mdui-color-grey-50">
                <img class="mdui-card-header-avatar" src="https://avatar.dawnlab.me/qq/<?php echo htmlspecialchars($row['QQ']);?>?s=100"/>
                <div class="mdui-card-header-title mdui-text-truncate "><?php echo htmlspecialchars($row['User']);?></div>
                <div class="mdui-card-header-subtitle"><?php echo date("Y/m/d H:i:s",$row['Intime']);?></div>
    <div class="mdui-card-menu">
    <button class="mdui-btn mdui-btn-icon mdui-float-right"><i class="mdui-icon material-icons">more_vert</i></button>
    </div>
              </div>
              <div class="mdui-divider"></div>
              <div class="mdui-card-content font-weight:900;" id="<?php echo $identity; ?>"><?php echo htmlspecialchars($row['Message']);?></div>

  <div class="mdui-card-actions">
    <button class="mdui-btn mdui-ripple border-comm-1"><i class="mdui-icon material-icons">arrow_drop_up</i>支持 0</button>
    <button class="mdui-btn mdui-ripple border-comm-1"><i class="mdui-icon material-icons">arrow_drop_down</i>反对 0</button>
    

    <button class="mdui-btn mdui-btn-icon mdui-float-right" onclick="playAudio(<?php echo $identity;?>)" ><i class="mdui-icon material-icons">settings_voice</i></button>
  </div>
        </div>
        <br/>
        <?php
        }
        ?>
        <br/>
        <br/>
    </div>
    <!--原来的代码会使此处循环n次，浪费资源-->
    <script type="text/javascript"> 
		function playAudio(commentID){
		    //commendID: The identity of every comment.
		    var audioID = "audioPlayer";
		    if(document.getElementById(audioID)) document.getElementById(audioID).remove();
		    var content = document.getElementById(commentID).innerHTML.replace(/\&/g,"和");
		    var audio = document.createElement("audio");
	        audio.setAttribute("autoplay","autoplay");
	        audio.setAttribute("id","audioPlayer");
	        var source = document.createElement("source");
	        source.src="https://tts.baidu.com/text2audio?lan=zh&ie=UTF-8&spd=6&text="+content;
	        source.setAttribute("type","audio/mpeg");
	        var embed = document.createElement("embed");
	        embed.style.display="none";
	        audio.appendChild(source);
	        audio.appendChild(embed);
        	document.body.appendChild(audio);
		}
		if(typeof(publiced)=="undefined") console.log("%c语音代码贡献者：学神之女。网站：https://www.dffzmxj.com","color:red;font-size:16px;");
		var publiced = true;
</script>
    </body>
</html>