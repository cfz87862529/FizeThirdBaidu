<?php
/*
 * 百度地图LBS云存储(V4)API接口
 */


namespace fize\third\baidu\map\v4\geodata;


use fize\third\baidu\map\Api;


/**
 * 批量操作任务查询接口
 *
 * @author Fize
 */
class Job extends Api
{

    /**
     * 批量上传进度查询,支持查询成功，失败poi
     * @param int $geotable_id 指定表ID
     * @param string $id 导入接口返回的job_id
     * @param int $page_size 分页数目，默认为10，上限为100
     * @param int $page_index 分页索引，默认为0
     * @return array 错误时返回false
     */
    public function lists($geotable_id, $id = null, $page_size = 10, $page_index = 0)
    {
        $data = [
            'geotable_id' => $geotable_id,
            'page_size' => $page_size,
            'page_index' => $page_index,
        ];
        if(!empty($id)){
            $data['id'] = $id;
        }
        $return_column = ['jobs'];
        return $this->httpGet("/geodata/v4/job/list", $data, $return_column);
    }
}