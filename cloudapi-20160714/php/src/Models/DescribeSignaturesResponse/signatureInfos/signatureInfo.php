<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSignaturesResponse\signatureInfos;

use AlibabaCloud\Tea\Model;

class signatureInfo extends Model
{
    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description secretKeyId
     *
     * @var string
     */
    public $signatureId;

    /**
     * @description secretKeyName
     *
     * @var string
     */
    public $signatureName;

    /**
     * @description secretKey
     *
     * @var string
     */
    public $signatureKey;

    /**
     * @description secretKeyValue
     *
     * @var string
     */
    public $signatureSecret;

    /**
     * @description gmtCreate
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description gmtModified
     *
     * @var string
     */
    public $modifiedTime;
    protected $_name = [
        'regionId'        => 'RegionId',
        'signatureId'     => 'SignatureId',
        'signatureName'   => 'SignatureName',
        'signatureKey'    => 'SignatureKey',
        'signatureSecret' => 'SignatureSecret',
        'createdTime'     => 'CreatedTime',
        'modifiedTime'    => 'ModifiedTime',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('signatureId', $this->signatureId, true);
        Model::validateRequired('signatureName', $this->signatureName, true);
        Model::validateRequired('signatureKey', $this->signatureKey, true);
        Model::validateRequired('signatureSecret', $this->signatureSecret, true);
        Model::validateRequired('createdTime', $this->createdTime, true);
        Model::validateRequired('modifiedTime', $this->modifiedTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->signatureId) {
            $res['SignatureId'] = $this->signatureId;
        }
        if (null !== $this->signatureName) {
            $res['SignatureName'] = $this->signatureName;
        }
        if (null !== $this->signatureKey) {
            $res['SignatureKey'] = $this->signatureKey;
        }
        if (null !== $this->signatureSecret) {
            $res['SignatureSecret'] = $this->signatureSecret;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return signatureInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SignatureId'])) {
            $model->signatureId = $map['SignatureId'];
        }
        if (isset($map['SignatureName'])) {
            $model->signatureName = $map['SignatureName'];
        }
        if (isset($map['SignatureKey'])) {
            $model->signatureKey = $map['SignatureKey'];
        }
        if (isset($map['SignatureSecret'])) {
            $model->signatureSecret = $map['SignatureSecret'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        return $model;
    }
}
