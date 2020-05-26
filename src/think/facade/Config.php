<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2019 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
declare (strict_types = 1);

namespace think\facade;

use think\Facade;

/**
 * @see \think\Config
 * @package think\facade
 * @mixin \think\Config
 * @method array load(string $file, string $name = ''): array 加载配置文件（多种格式）
 * @method bool has(string $name): bool 检测配置是否存在
 * @method mixed get(string $name = null, mixed $default = null) 获取配置参数 为空则获取所有配置
 * @method array set(array $config, string $name = null): array 设置配置参数 name为数组则为批量设置
 */
class Config extends Facade
{
    /**
     * 获取当前Facade对应类名（或者已经绑定的容器对象标识）
     * @access protected
     * @return string
     */
    protected static function getFacadeClass()
    {
        return 'config';
    }
}
