<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class AddGrafanaRequest extends Model
{
    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description clusterId
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description integration
     *
     * @var string
     */
    public $integration;
    protected $_name = [
        'regionId'    => 'RegionId',
        'clusterId'   => 'ClusterId',
        'integration' => 'Integration',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('clusterId', $this->clusterId, true);
        Model::validateRequired('integration', $this->integration, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->integration) {
            $res['Integration'] = $this->integration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddGrafanaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Integration'])) {
            $model->integration = $map['Integration'];
        }

        return $model;
    }
}
