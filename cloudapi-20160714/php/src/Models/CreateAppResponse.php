<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class CreateAppResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data
     *
     * @var int
     */
    public $appId;

    /**
     * @description tagStatus
     *
     * @var bool
     */
    public $tagStatus;
    protected $_name = [
        'requestId' => 'RequestId',
        'appId'     => 'AppId',
        'tagStatus' => 'TagStatus',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('appId', $this->appId, true);
        Model::validateRequired('tagStatus', $this->tagStatus, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->tagStatus) {
            $res['TagStatus'] = $this->tagStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['TagStatus'])) {
            $model->tagStatus = $map['TagStatus'];
        }

        return $model;
    }
}
