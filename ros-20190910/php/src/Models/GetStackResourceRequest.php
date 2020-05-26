<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetStackResourceRequest extends Model
{
    /**
     * @description StackId
     *
     * @var string
     */
    public $stackId;

    /**
     * @description ClientToken
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description RegionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description ShowResourceAttributes
     *
     * @var bool
     */
    public $showResourceAttributes;

    /**
     * @description LogicalResourceId
     *
     * @var string
     */
    public $logicalResourceId;
    protected $_name = [
        'stackId'                => 'StackId',
        'clientToken'            => 'ClientToken',
        'regionId'               => 'RegionId',
        'showResourceAttributes' => 'ShowResourceAttributes',
        'logicalResourceId'      => 'LogicalResourceId',
    ];

    public function validate()
    {
        Model::validateRequired('stackId', $this->stackId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('logicalResourceId', $this->logicalResourceId, true);
    }

    public function toMap()
    {
        $res                           = [];
        $res['StackId']                = $this->stackId;
        $res['ClientToken']            = $this->clientToken;
        $res['RegionId']               = $this->regionId;
        $res['ShowResourceAttributes'] = $this->showResourceAttributes;
        $res['LogicalResourceId']      = $this->logicalResourceId;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStackResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ShowResourceAttributes'])) {
            $model->showResourceAttributes = $map['ShowResourceAttributes'];
        }
        if (isset($map['LogicalResourceId'])) {
            $model->logicalResourceId = $map['LogicalResourceId'];
        }

        return $model;
    }
}
