<?php
final class FnKu{
    public static function Go(){
        self::_set_const();
    }
    private static function _set_const(){
        #FnKuPath
        $Path = str_replace('\\','/',__FILE__); 
        define('FnKu_PATH', dirname($Path));
          #CorePath
          define('CORE_PATH', FnKu_PATH . '/Core');
            define('Function_PATH', CORE_PATH . '/Function');
            define('CONFIG_PATH', CORE_PATH . '/Config');
          #DataPath
          define('DATA_PATH', FnKu_PATH . '/Data');
            define('STATIC_PATH', DATA_PATH . '/Static');
          #InstallPath
          define('INSTALL_PATH', FnKu_PATH . '/Install');

        #RootPATH
        define('ROOT_PATH', dirname(FnKu_PATH));
        define('APP_PATH', ROOT_PATH . '/');
          #UsrPATH
          define('Usr_PATH', APP_PATH . 'Usr');
            define('Usr_Themes_PATH', Usr_PATH . '/Themes');
            define('Usr_Apps_PATH', Usr_PATH . '/Apps');

    }
}
?>