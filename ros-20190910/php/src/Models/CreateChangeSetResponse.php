<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class CreateChangeSetResponse extends Model
{
    /**
     * @var string
     */
    public $changeSetId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $stackId;
    protected $_name = [
        'changeSetId' => 'ChangeSetId',
        'requestId'   => 'RequestId',
        'stackId'     => 'StackId',
    ];

    public function validate()
    {
        Model::validateRequired('changeSetId', $this->changeSetId, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('stackId', $this->stackId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeSetId) {
            $res['ChangeSetId'] = $this->changeSetId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateChangeSetResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChangeSetId'])) {
            $model->changeSetId = $map['ChangeSetId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }

        return $model;
    }
}
