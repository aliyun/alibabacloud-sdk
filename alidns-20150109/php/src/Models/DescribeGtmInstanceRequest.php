<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeGtmInstanceRequest extends Model
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
     * @description needDetailAttributes
     *
     * @var bool
     */
    public $needDetailAttributes;
    protected $_name = [
        'lang'                 => 'Lang',
        'instanceId'           => 'InstanceId',
        'needDetailAttributes' => 'NeedDetailAttributes',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
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
        if (null !== $this->needDetailAttributes) {
            $res['NeedDetailAttributes'] = $this->needDetailAttributes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGtmInstanceRequest
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
        if (isset($map['NeedDetailAttributes'])) {
            $model->needDetailAttributes = $map['NeedDetailAttributes'];
        }

        return $model;
    }
}
