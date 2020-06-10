<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSignaturesByApiResponse\signatures;

use AlibabaCloud\Tea\Model;

class signatureItem extends Model
{
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
        'signatureId'   => 'SignatureId',
        'signatureName' => 'SignatureName',
        'boundTime'     => 'BoundTime',
    ];

    public function validate()
    {
        Model::validateRequired('signatureId', $this->signatureId, true);
        Model::validateRequired('signatureName', $this->signatureName, true);
        Model::validateRequired('boundTime', $this->boundTime, true);
    }

    public function toMap()
    {
        $res = [];
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
     * @return signatureItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
