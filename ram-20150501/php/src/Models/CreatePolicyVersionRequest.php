<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class CreatePolicyVersionRequest extends Model
{
    /**
     * @description PolicyName
     *
     * @var string
     */
    public $policyName;

    /**
     * @description PolicyDocument
     *
     * @var string
     */
    public $policyDocument;

    /**
     * @description SetAsDefault
     *
     * @var bool
     */
    public $setAsDefault;

    /**
     * @description RotateStrategy
     *
     * @var string
     */
    public $rotateStrategy;
    protected $_name = [
        'policyName'     => 'PolicyName',
        'policyDocument' => 'PolicyDocument',
        'setAsDefault'   => 'SetAsDefault',
        'rotateStrategy' => 'RotateStrategy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->policyDocument) {
            $res['PolicyDocument'] = $this->policyDocument;
        }
        if (null !== $this->setAsDefault) {
            $res['SetAsDefault'] = $this->setAsDefault;
        }
        if (null !== $this->rotateStrategy) {
            $res['RotateStrategy'] = $this->rotateStrategy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePolicyVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['PolicyDocument'])) {
            $model->policyDocument = $map['PolicyDocument'];
        }
        if (isset($map['SetAsDefault'])) {
            $model->setAsDefault = $map['SetAsDefault'];
        }
        if (isset($map['RotateStrategy'])) {
            $model->rotateStrategy = $map['RotateStrategy'];
        }

        return $model;
    }
}
