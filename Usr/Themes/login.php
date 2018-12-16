<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width">
        <title>枫贝FnB-强大而简约的智能个人助理！</title>
        <link rel="stylesheet" href="Usr/Themes/Static/css/mdui.min.css">
        <link rel="stylesheet" href="Usr/Themes/Static/css/colorfului.min.css" />
        <script src="Usr/Themes/Static/js/mdui.min.js"></script>
        <script src="https://unpkg.com/ionicons@4.4.7/dist/ionicons.js"></script>
    </head>
    <body class="mdui-drawer-body-left mdui-appbar-with-toolbar  mdui-theme-primary-indigo mdui-theme-accent-pink">
   <!--工具栏-->
    <header class="mdui-appbar mdui-appbar-fixed">
      <div class="mdui-toolbar mdui-color-theme">
        <span class="mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white" mdui-drawer="{target: '#main-drawer', swipe: true}"><i class="mdui-icon material-icons">&#xe3e7;</i></span>
            <a href="javascript:;" class="mdui-typo-headline">FnB</a>
        <a href="javascript:;" class="mdui-typo-title">Login</a>
        <div class="mdui-toolbar-spacer"></div>
        <a href="javascript:;" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">more_vert</i></a>
      </div>
    </header>
<style>
    .mdui-list {
    padding: 0px 0!important;
    margin: 0;
    list-style: none;
    background-color: transparent;
    }
</style>
    <div class="mdui-drawer mdui-color-grey-50" id="main-drawer">
      <div class="mdui-list" mdui-collapse="{accordion: true}" style="margin-bottom: 76px;">
            <a href="index.php">
              <li class="mdui-list-item mdui-ripple">
                <i class="mdui-list-item-icon mdui-icon material-icons mdui-text-color-light-blue">&#xe88a;</i>
                <div class="mdui-list-item-content">首  页</div>
              </li>
            </a>
            <div class="mdui-collapse-item mdui-collapse-item-open">
              <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
                <i class="mdui-list-item-icon mdui-icon material-icons mdui-text-color-deep-purple">account_box</i>
                <div class="mdui-list-item-content">用  户</div>
                <i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>
              </div>
              
              <div class="mdui-collapse-item-body mdui-list">
                <a href="login.php">
                    <li class="mdui-list-item mdui-ripple">
                        <i class="mdui-list-item-icon mdui-icon material-icons">https</i>
                        <div class="mdui-list-item-content">登陆</div>
                  </li>
                </a>
                
                <a href="ClassSchedule.php">
                    <li class="mdui-list-item mdui-ripple">
                        <i class="mdui-list-item-icon mdui-icon material-icons">group_add</i>
                        <div class="mdui-list-item-content">注册</div>
                    </li>
                </a>
              </div>
            </div>
            
          <div class="mdui-divider"></div>
            
            <a>
    		  <li class="mdui-list-item mdui-ripple" mdui-dialog="{target:'#about_FnMB'}">
				<i class="mdui-list-item-icon mdui-icon material-icons mdui-text-color-brown">info_outline</i>
				<div class="mdui-list-item-content">ABOUT FnTie</div>
			  </li>
			</a>
    
        </div>
      </div>

<style>
.comment-section {
top: 20%;
transform: translateY(-40%);
}
</style>
<!--position: absolute;-->

<div class="mdui-color-indigo-a400">
    <div class="mdui-container">
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
    </div>
</div>
    <div class="mdui-container comment-section">
        <div class="mdui-card border-comm-2">
          <div class="mdui-row">
          <form action="save.php" method="post" accept-charset="utf-8">
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
                      <i class="mdui-icon material-icons">https</i>
                      <input class="mdui-textfield-input" name="password" type="password" placeholder="Password"/>
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
                  
                  </form>
                  
                  <div class="mdui-float-left">
                      <div class="mdui-row mdui-row-gapless">
                          <button class="mdui-btn mdui-btn-raised mdui-color-deep-purple-accent border-comm-3" mdui-dialog="{target: '#Advanced-1'}"> ! 级 高 </button>
                      </div>
                  </div>
                <!--</div>-->
          </div>
        </div>
            </div>

          <div class="mdui-dialog" id="about_FnMB">
            <div class="mdui-dialog-title">关于 FnB </div>
            <div class="mdui-dialog-content">
            <blockquote>
				<p>FnB 1.0.5
				<br/>
				<a href="https://github.com/FnTieStudio/FnB" class="mdui-fab mdui-fab-mini"><i class="mdui-icon material-icons">&#xe8ab;</i></a>
				<a href="javascript:alert('已清理');;" class="mdui-fab mdui-fab-mini mdui-ripple"><i class="mdui-icon material-icons">&#xe028;</i></a>
				</p> 
				        
				<p>开发者: HanFen </p>
				<p>感谢:学神之女 MDUI</p>
				<footer>© Copyright 2018 by FnTie All rights are reserved.</footer>
			</blockquote>
            </div>
            <div class="mdui-dialog-actions">
              <button class="mdui-btn mdui-ripple" mdui-dialog-close>知 道 啦 !</button>
            </div>
          </div>

          
          
        <script src="Usr/Themes/Static/js/mdui.min.js"></script>
    </body>
</html>
