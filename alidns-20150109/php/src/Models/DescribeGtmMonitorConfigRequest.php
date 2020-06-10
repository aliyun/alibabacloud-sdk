<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeGtmMonitorConfigRequest extends Model
{
    /**
     * @description lang
     *
     * @var string
     */
    public $lang;

    /**
     * @description monitorConfigId
     *
     * @var string
     */
    public $monitorConfigId;
    protected $_name = [
        'lang'            => 'Lang',
        'monitorConfigId' => 'MonitorConfigId',
    ];

    public function validate()
    {
        Model::validateRequired('monitorConfigId', $this->monitorConfigId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->monitorConfigId) {
            $res['MonitorConfigId'] = $this->monitorConfigId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGtmMonitorConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['MonitorConfigId'])) {
            $model->monitorConfigId = $map['MonitorConfigId'];
        }

        return $model;
    }
}
