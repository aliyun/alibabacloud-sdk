<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class SetGtmMonitorStatusRequest extends Model {
    protected $_name = [
        'lang' => 'Lang',
        'monitorConfigId' => 'MonitorConfigId',
        'status' => 'Status',
    ];
    public function validate() {
        Model::validateRequired('monitorConfigId', $this->monitorConfigId, true);
        Model::validateRequired('status', $this->status, true);
    }
    public function toMap() {
        $res = [];
        $res['Lang'] = $this->lang;
        $res['MonitorConfigId'] = $this->monitorConfigId;
        $res['Status'] = $this->status;
        return $res;
    }
    /**
     * @param array $map
     * @return SetGtmMonitorStatusRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Lang'])){
            $model->lang = $map['Lang'];
        }
        if(isset($map['MonitorConfigId'])){
            $model->monitorConfigId = $map['MonitorConfigId'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
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

    /**
     * @description monitorStatus
     * @var string
     */
    public $status;

}
