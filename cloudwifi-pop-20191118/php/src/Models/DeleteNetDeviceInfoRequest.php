<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudwifipop\V20191118\Models;

use AlibabaCloud\Tea\Model;

class DeleteNetDeviceInfoRequest extends Model
{
    /**
     * @description appKey
     *
     * @var string
     */
    public $appName;

    /**
     * @description appSecret
     *
     * @var string
     */
    public $appCode;

    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description ids
     *
     * @var string
     */
    public $ids;
    protected $_name = [
        'appName'   => 'AppName',
        'appCode'   => 'AppCode',
        'requestId' => 'RequestId',
        'ids'       => 'Ids',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('ids', $this->ids, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ids) {
            $res['Ids'] = $this->ids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteNetDeviceInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Ids'])) {
            $model->ids = $map['Ids'];
        }

        return $model;
    }
}
