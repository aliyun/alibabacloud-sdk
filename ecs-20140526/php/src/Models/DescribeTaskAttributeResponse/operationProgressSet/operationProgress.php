<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTaskAttributeResponse\operationProgressSet;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTaskAttributeResponse\operationProgressSet\operationProgress\relatedItemSet;
use AlibabaCloud\Tea\Model;

class operationProgress extends Model
{
    /**
     * @var string
     */
    public $operationStatus;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var relatedItemSet
     */
    public $relatedItemSet;
    protected $_name = [
        'operationStatus' => 'OperationStatus',
        'errorCode'       => 'ErrorCode',
        'errorMsg'        => 'ErrorMsg',
        'relatedItemSet'  => 'RelatedItemSet',
    ];

    public function validate()
    {
        Model::validateRequired('operationStatus', $this->operationStatus, true);
        Model::validateRequired('errorCode', $this->errorCode, true);
        Model::validateRequired('errorMsg', $this->errorMsg, true);
        Model::validateRequired('relatedItemSet', $this->relatedItemSet, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operationStatus) {
            $res['OperationStatus'] = $this->operationStatus;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->relatedItemSet) {
            $res['RelatedItemSet'] = null !== $this->relatedItemSet ? $this->relatedItemSet->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operationProgress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperationStatus'])) {
            $model->operationStatus = $map['OperationStatus'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['RelatedItemSet'])) {
            $model->relatedItemSet = relatedItemSet::fromMap($map['RelatedItemSet']);
        }

        return $model;
    }
}
