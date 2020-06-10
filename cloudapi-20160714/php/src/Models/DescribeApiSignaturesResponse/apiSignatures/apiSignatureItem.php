<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiSignaturesResponse\apiSignatures;

use AlibabaCloud\Tea\Model;

class apiSignatureItem extends Model
{
    /**
     * @description apiId
     *
     * @var string
     */
    public $apiId;

    /**
     * @description apiName
     *
     * @var string
     */
    public $apiName;

    /**
     * @description ruleId
     *
     * @var string
     */
    public $signatureId;

    /**
     * @description ruleName
     *
     * @var string
     */
    public $signatureName;

    /**
     * @description createdTime
     *
     * @var string
     */
    public $boundTime;
    protected $_name = [
        'apiId'         => 'ApiId',
        'apiName'       => 'ApiName',
        'signatureId'   => 'SignatureId',
        'signatureName' => 'SignatureName',
        'boundTime'     => 'BoundTime',
    ];

    public function validate()
    {
        Model::validateRequired('apiId', $this->apiId, true);
        Model::validateRequired('apiName', $this->apiName, true);
        Model::validateRequired('signatureId', $this->signatureId, true);
        Model::validateRequired('signatureName', $this->signatureName, true);
        Model::validateRequired('boundTime', $this->boundTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->signatureId) {
            $res['SignatureId'] = $this->signatureId;
        }
        if (null !== $this->signatureName) {
            $res['SignatureName'] = $this->signatureName;
        }
        if (null !== $this->boundTime) {
            $res['BoundTime'] = $this->boundTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiSignatureItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['SignatureId'])) {
            $model->signatureId = $map['SignatureId'];
        }
        if (isset($map['SignatureName'])) {
            $model->signatureName = $map['SignatureName'];
        }
        if (isset($map['BoundTime'])) {
            $model->boundTime = $map['BoundTime'];
        }

        return $model;
    }
}
