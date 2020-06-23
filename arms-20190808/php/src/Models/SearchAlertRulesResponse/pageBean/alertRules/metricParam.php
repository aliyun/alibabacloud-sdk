<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertRulesResponse\pageBean\alertRules;

use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertRulesResponse\pageBean\alertRules\metricParam\dimensions;
use AlibabaCloud\Tea\Model;

class metricParam extends Model
{
    /**
     * @description appGroupId
     *
     * @var string
     */
    public $appGroupId;

    /**
     * @description appId
     *
     * @var string
     */
    public $appId;

    /**
     * @description pid
     *
     * @var string
     */
    public $pid;

    /**
     * @description type
     *
     * @var string
     */
    public $type;

    /**
     * @description dimensions
     *
     * @var array
     */
    public $dimensions;
    protected $_name = [
        'appGroupId' => 'AppGroupId',
        'appId'      => 'AppId',
        'pid'        => 'Pid',
        'type'       => 'Type',
        'dimensions' => 'Dimensions',
    ];

    public function validate()
    {
        Model::validateRequired('appGroupId', $this->appGroupId, true);
        Model::validateRequired('appId', $this->appId, true);
        Model::validateRequired('pid', $this->pid, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('dimensions', $this->dimensions, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appGroupId) {
            $res['AppGroupId'] = $this->appGroupId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->dimensions) {
            $res['Dimensions'] = [];
            if (null !== $this->dimensions && \is_array($this->dimensions)) {
                $n = 0;
                foreach ($this->dimensions as $item) {
                    $res['Dimensions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metricParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppGroupId'])) {
            $model->appGroupId = $map['AppGroupId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Dimensions'])) {
            if (!empty($map['Dimensions'])) {
                $model->dimensions = [];
                $n                 = 0;
                foreach ($map['Dimensions'] as $item) {
                    $model->dimensions[$n++] = null !== $item ? dimensions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
