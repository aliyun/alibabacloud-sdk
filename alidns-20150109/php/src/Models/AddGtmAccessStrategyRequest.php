<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class AddGtmAccessStrategyRequest extends Model
{
    /**
     * @description lang
     *
     * @var string
     */
    public $lang;

    /**
     * @description instanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description strategyName
     *
     * @var string
     */
    public $strategyName;

    /**
     * @description defaultAddrPoolId
     *
     * @var string
     */
    public $defaultAddrPoolId;

    /**
     * @description failoverAddrPoolId
     *
     * @var string
     */
    public $failoverAddrPoolId;

    /**
     * @description accessLines
     *
     * @var string
     */
    public $accessLines;
    protected $_name = [
        'lang'               => 'Lang',
        'instanceId'         => 'InstanceId',
        'strategyName'       => 'StrategyName',
        'defaultAddrPoolId'  => 'DefaultAddrPoolId',
        'failoverAddrPoolId' => 'FailoverAddrPoolId',
        'accessLines'        => 'AccessLines',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('strategyName', $this->strategyName, true);
        Model::validateRequired('defaultAddrPoolId', $this->defaultAddrPoolId, true);
        Model::validateRequired('failoverAddrPoolId', $this->failoverAddrPoolId, true);
        Model::validateRequired('accessLines', $this->accessLines, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->strategyName) {
            $res['StrategyName'] = $this->strategyName;
        }
        if (null !== $this->defaultAddrPoolId) {
            $res['DefaultAddrPoolId'] = $this->defaultAddrPoolId;
        }
        if (null !== $this->failoverAddrPoolId) {
            $res['FailoverAddrPoolId'] = $this->failoverAddrPoolId;
        }
        if (null !== $this->accessLines) {
            $res['AccessLines'] = $this->accessLines;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddGtmAccessStrategyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['StrategyName'])) {
            $model->strategyName = $map['StrategyName'];
        }
        if (isset($map['DefaultAddrPoolId'])) {
            $model->defaultAddrPoolId = $map['DefaultAddrPoolId'];
        }
        if (isset($map['FailoverAddrPoolId'])) {
            $model->failoverAddrPoolId = $map['FailoverAddrPoolId'];
        }
        if (isset($map['AccessLines'])) {
            $model->accessLines = $map['AccessLines'];
        }

        return $model;
    }
}
