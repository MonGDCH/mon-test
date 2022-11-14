<?php

declare(strict_types=1);

namespace mon\test;


/**
 * Gaia框架安装驱动
 * 
 * @author Mon <985558837@qq.com>
 * @version 1.0.0
 */
class Install
{
    /**
     * 标志为Gaia的驱动
     */
    const GAIA_PLUGIN = true;

    /**
     * 安装
     *
     * @return void
     */
    public static function install()
    {
        // 配置信息
        $config = \mon\env\Config::instance()->get();
        var_dump($config);
        echo "-------------\r\n";
        // 控制台
        $console = \gaia\App::console();
        var_dump($console);
        echo "-------------\r\n";
    }

    /**
     * 卸载
     *
     * @return void
     */
    public static function uninstall()
    {
    }
}
