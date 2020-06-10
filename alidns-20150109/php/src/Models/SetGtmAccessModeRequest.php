<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class SetGtmAccessModeRequest extends Model
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
     * @description accessMode
     *
     * @var string
     */
    public $accessMode;
    protected $_name = [
        'lang'       => 'Lang',
        'strategyId' => 'StrategyId',
        'accessMode' => 'AccessMode',
    ];

    public function validate()
    {
        Model::validateRequired('strategyId', $this->strategyId, true);
        Model::validateRequired('accessMode', $this->accessMode, true);
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
        if (null !== $this->accessMode) {
            $res['AccessMode'] = $this->accessMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetGtmAccessModeRequest
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
        if (isset($map['AccessMode'])) {
            $model->accessMode = $map['AccessMode'];
        }

        return $model;
    }
}
