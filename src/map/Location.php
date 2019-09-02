<?php
/**
 * 普通IP定位
 */

namespace fize\third\baidu\map;

use Exception;


class Location extends Api
{
    /**
     * 普通IP定位
     * @param string $ip 用户上网的IP地址，请求中如果不出现、或为空，会针对发来请求的IP进行定位。
     * @param string $coor 设置返回位置信息中，经纬度的坐标类型
     * @return array 错误则返回false
     * @throws Exception
     */
    public function ip($ip = null, $coor = 'bd09ll')
    {
        $data = [
            'coor' => $coor,
        ];
        if (!is_null($ip)) {
            $data['ip'] = $ip;
        }
        return $this->httpGet("/location/ip", $data, ['address', 'content']);
    }
}