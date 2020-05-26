<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class DetectStackGroupDriftRequest extends Model
{
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
     * @description StackGroupName
     *
     * @var string
     */
    public $stackGroupName;

    /**
     * @description OperationPreferences
     *
     * @var array
     */
    public $operationPreferences;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'regionId'             => 'RegionId',
        'stackGroupName'       => 'StackGroupName',
        'operationPreferences' => 'OperationPreferences',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('stackGroupName', $this->stackGroupName, true);
    }

    public function toMap()
    {
        $res                         = [];
        $res['ClientToken']          = $this->clientToken;
        $res['RegionId']             = $this->regionId;
        $res['StackGroupName']       = $this->stackGroupName;
        $res['OperationPreferences'] = $this->operationPreferences;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectStackGroupDriftRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StackGroupName'])) {
            $model->stackGroupName = $map['StackGroupName'];
        }
        if (isset($map['OperationPreferences'])) {
            $model->operationPreferences = $map['OperationPreferences'];
        }

        return $model;
    }
}
