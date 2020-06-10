<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class UpdateGtmAccessStrategyRequest extends Model
{
    /**
     * @description lang
     *
     * @var string
     */
    public $lang;

    /**
     * @description strategyId
     *
     * @var string
     */
    public $strategyId;

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
        'strategyId'         => 'StrategyId',
        'strategyName'       => 'StrategyName',
        'defaultAddrPoolId'  => 'DefaultAddrPoolId',
        'failoverAddrPoolId' => 'FailoverAddrPoolId',
        'accessLines'        => 'AccessLines',
    ];

    public function validate()
    {
        Model::validateRequired('strategyId', $this->strategyId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
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
     * @return UpdateGtmAccessStrategyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
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
