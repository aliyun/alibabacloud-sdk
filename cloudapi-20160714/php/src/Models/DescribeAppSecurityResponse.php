<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DescribeAppSecurityResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.appKey
     *
     * @var string
     */
    public $appKey;

    /**
     * @description data.appSecret
     *
     * @var string
     */
    public $appSecret;

    /**
     * @description data.gmtCreate
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description data.gmtModified
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description data.appCode
     *
     * @var string
     */
    public $appCode;
    protected $_name = [
        'requestId'    => 'RequestId',
        'appKey'       => 'AppKey',
        'appSecret'    => 'AppSecret',
        'createdTime'  => 'CreatedTime',
        'modifiedTime' => 'ModifiedTime',
        'appCode'      => 'AppCode',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('appKey', $this->appKey, true);
        Model::validateRequired('appSecret', $this->appSecret, true);
        Model::validateRequired('createdTime', $this->createdTime, true);
        Model::validateRequired('modifiedTime', $this->modifiedTime, true);
        Model::validateRequired('appCode', $this->appCode, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->appSecret) {
            $res['AppSecret'] = $this->appSecret;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAppSecurityResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['AppSecret'])) {
            $model->appSecret = $map['AppSecret'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }

        return $model;
    }
}
