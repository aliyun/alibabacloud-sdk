<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class UnsubscribeBillToOSSRequest extends Model
{
    /**
     * @description subscribeType
     *
     * @var string
     */
    public $subscribeType;

    /**
     * @description multAccountRelSubscribe
     *
     * @var string
     */
    public $multAccountRelSubscribe;
    protected $_name = [
        'subscribeType'           => 'SubscribeType',
        'multAccountRelSubscribe' => 'MultAccountRelSubscribe',
    ];

    public function validate()
    {
        Model::validateRequired('subscribeType', $this->subscribeType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subscribeType) {
            $res['SubscribeType'] = $this->subscribeType;
        }
        if (null !== $this->multAccountRelSubscribe) {
            $res['MultAccountRelSubscribe'] = $this->multAccountRelSubscribe;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnsubscribeBillToOSSRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubscribeType'])) {
            $model->subscribeType = $map['SubscribeType'];
        }
        if (isset($map['MultAccountRelSubscribe'])) {
            $model->multAccountRelSubscribe = $map['MultAccountRelSubscribe'];
        }

        return $model;
    }
}
