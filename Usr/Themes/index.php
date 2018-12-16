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
                      <input class="mdui-textfield-input" name="Message" type="text" placeholder="Message"/>
                  </div>
                  </div>
                  </div>
              <!--Card_2-->
                <div class="mdui-col-lg-6">
                <div class="mdui-col-sm-12">
                    <div class="mdui-textfield">
                        <i class="mdui-icon material-icons">account_circle</i>
                        <input class="mdui-textfield-input" name="User" type="text" placeholder="User"/>
                    </div>
                </div>
                </div>
                <div class="mdui-col-lg-6">
                <div class="mdui-col-sm-12">
                  <div class="mdui-textfield">
                      <i class="mdui-icon material-icons">bubble_chart</i>
                      <input class="mdui-textfield-input" name="QQ" type="number" min="5" placeholder="QQ"/>
                  </div>
                </div>
                </div>
                <br/>
                <!--<div class="mdui-clearfix">-->
                  <div class="mdui-float-right">
                      <div class="mdui-row mdui-row-gapless">
                             <input type="submit" class="mdui-btn mdui-btn-raised mdui-color-deep-purple-accent border-comm-3" id="Post" value=" 发 射 ! " />
                      </div>
                  </div>
                  
          <div class="mdui-dialog" id="Advanced-1">
            <div class="mdui-dialog-content">
            <ul class="mdui-list">
                
              <li class="mdui-list-item mdui-ripple">
                <i class="mdui-list-item-icon mdui-icon material-icons">camera_rear</i>
                <div class="mdui-list-item-content">匿名发布</div>
                <label class="mdui-switch">
                  <input type="checkbox" disabled/>
                  <i class="mdui-switch-icon"></i>
                </label>
              </li>

              <li class="mdui-list-item mdui-ripple">
                <i class="mdui-list-item-icon mdui-icon material-icons">camera_front</i>
                <div class="mdui-list-item-content">私信作者</div>
                <label class="mdui-switch">
                  <input type="checkbox" disabled/>
                  <i class="mdui-switch-icon"></i>
                </label>
              </li>


                <button class="mdui-list-item mdui-btn mdui-ripple" type="reset">
                <i class="mdui-list-item-icon mdui-icon material-icons">loop</i>
                <div class="mdui-list-item-content" >重置留言区</div>
                </button>

            
            </ul>
            </div>
            <div class="mdui-dialog-actions">
              <button class="mdui-btn mdui-ripple" mdui-dialog-confirm>知 道 啦 !</button>
            </div>
          </div>
            </form>
                  
                  <div class="mdui-float-left">
                      <div class="mdui-row mdui-row-gapless">
                          <button class="mdui-btn mdui-btn-raised mdui-color-deep-purple-accent border-comm-3" mdui-dialog="{target: '#Advanced-1'}"> ! 级 高 </button>
                      </div>
                  </div>

                <!--</div>-->
          </div>
        </div>
                              
   
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
		if(typeof(publiced)=="undefined") console.log("%c语音代码贡献者：学神之女。网站：https://www.dffzmxj.com<br/>使用此控制台可能会让攻击者利用 Self-XSS（自跨站脚本）攻击来冒充你，并窃取你的信息。请勿输入或粘贴你不明白的代码。","color:red;font-size:16px;");
		var publiced = true;
</script>
<script>(function(T,h,i,n,k,P,a,g,e){g=function(){P=h.createElement(i);a=h.getElementsByTagName(i)[0];P.src=k;P.charset="utf-8";P.async=1;a.parentNode.insertBefore(P,a)};T["ThinkPageWeatherWidgetObject"]=n;T[n]||(T[n]=function(){(T[n].q=T[n].q||[]).push(arguments)});T[n].l=+new Date();if(T.attachEvent){T.attachEvent("onload",g)}else{T.addEventListener("load",g,false)}}(window,document,"script","tpwidget","//widget.seniverse.com/widget/chameleon.js"))</script>
<script>tpwidget("init", {
    "flavor": "slim",
    "location": "WS10730EM8EV",
    "geolocation": "enabled",
    "language": "auto",
    "unit": "c",
    "theme": "white",
    "container": "tp-weather-widget",
    "bubble": "disabled",
    "alarmType": "badge",
    "color": "#FFFFFF",
    "uid": "U7CB28E99F",
    "hash": "d8fa9e77162f89206d887eaddaa3a3ca"
});
tpwidget("show");</script>



    </body>
</html>