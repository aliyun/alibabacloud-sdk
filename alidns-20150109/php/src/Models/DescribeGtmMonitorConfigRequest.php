<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeGtmMonitorConfigRequest extends Model {
    protected $_name = [
        'lang' => 'Lang',
        'monitorConfigId' => 'MonitorConfigId',
    ];
    public function validate() {
        Model::validateRequired('monitorConfigId', $this->monitorConfigId, true);
    }
    public function toMap() {
        $res = [];
        $res['Lang'] = $this->lang;
        $res['MonitorConfigId'] = $this->monitorConfigId;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeGtmMonitorConfigRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Lang'])){
            $model->lang = $map['Lang'];
        }
        if(isset($map['MonitorConfigId'])){
            $model->monitorConfigId = $map['MonitorConfigId'];
        }
        return $model;
    }
    /**
     * @description lang
     * @var string
     */
    public $lang;

    /**
     * @description monitorConfigId
     * @var string
     */
    public $monitorConfigId;

}
