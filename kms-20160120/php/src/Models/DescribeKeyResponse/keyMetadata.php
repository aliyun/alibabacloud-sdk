<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\DescribeKeyResponse;

use AlibabaCloud\Tea\Model;

class keyMetadata extends Model
{
    /**
     * @description creationDate
     *
     * @var string
     */
    public $creationDate;

    /**
     * @description desc
     *
     * @var string
     */
    public $description;

    /**
     * @description keyId
     *
     * @var string
     */
    public $keyId;

    /**
     * @description state
     *
     * @var string
     */
    public $keyState;

    /**
     * @description usage
     *
     * @var string
     */
    public $keyUsage;

    /**
     * @description deleteDate
     *
     * @var string
     */
    public $deleteDate;

    /**
     * @description creator
     *
     * @var string
     */
    public $creator;

    /**
     * @description Arn
     *
     * @var string
     */
    public $arn;

    /**
     * @description origin
     *
     * @var string
     */
    public $origin;

    /**
     * @description materialExpireTime
     *
     * @var string
     */
    public $materialExpireTime;

    /**
     * @description protectionLevel
     *
     * @var string
     */
    public $protectionLevel;

    /**
     * @description primaryKeyVersion
     *
     * @var string
     */
    public $primaryKeyVersion;

    /**
     * @description lastRotationDate
     *
     * @var string
     */
    public $lastRotationDate;

    /**
     * @description automaticRotation
     *
     * @var string
     */
    public $automaticRotation;

    /**
     * @description rotationInterval
     *
     * @var string
     */
    public $rotationInterval;

    /**
     * @description nextRotationDate
     *
     * @var string
     */
    public $nextRotationDate;

    /**
     * @description keySpec
     *
     * @var string
     */
    public $keySpec;
    protected $_name = [
        'creationDate'       => 'CreationDate',
        'description'        => 'Description',
        'keyId'              => 'KeyId',
        'keyState'           => 'KeyState',
        'keyUsage'           => 'KeyUsage',
        'deleteDate'         => 'DeleteDate',
        'creator'            => 'Creator',
        'arn'                => 'Arn',
        'origin'             => 'Origin',
        'materialExpireTime' => 'MaterialExpireTime',
        'protectionLevel'    => 'ProtectionLevel',
        'primaryKeyVersion'  => 'PrimaryKeyVersion',
        'lastRotationDate'   => 'LastRotationDate',
        'automaticRotation'  => 'AutomaticRotation',
        'rotationInterval'   => 'RotationInterval',
        'nextRotationDate'   => 'NextRotationDate',
        'keySpec'            => 'KeySpec',
    ];

    public function validate()
    {
        Model::validateRequired('creationDate', $this->creationDate, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('keyId', $this->keyId, true);
        Model::validateRequired('keyState', $this->keyState, true);
        Model::validateRequired('keyUsage', $this->keyUsage, true);
        Model::validateRequired('deleteDate', $this->deleteDate, true);
        Model::validateRequired('creator', $this->creator, true);
        Model::validateRequired('arn', $this->arn, true);
        Model::validateRequired('origin', $this->origin, true);
        Model::validateRequired('materialExpireTime', $this->materialExpireTime, true);
        Model::validateRequired('protectionLevel', $this->protectionLevel, true);
        Model::validateRequired('primaryKeyVersion', $this->primaryKeyVersion, true);
        Model::validateRequired('lastRotationDate', $this->lastRotationDate, true);
        Model::validateRequired('automaticRotation', $this->automaticRotation, true);
        Model::validateRequired('rotationInterval', $this->rotationInterval, true);
        Model::validateRequired('nextRotationDate', $this->nextRotationDate, true);
        Model::validateRequired('keySpec', $this->keySpec, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationDate) {
            $res['CreationDate'] = $this->creationDate;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }
        if (null !== $this->keyState) {
            $res['KeyState'] = $this->keyState;
        }
        if (null !== $this->keyUsage) {
            $res['KeyUsage'] = $this->keyUsage;
        }
        if (null !== $this->deleteDate) {
            $res['DeleteDate'] = $this->deleteDate;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }
        if (null !== $this->origin) {
            $res['Origin'] = $this->origin;
        }
        if (null !== $this->materialExpireTime) {
            $res['MaterialExpireTime'] = $this->materialExpireTime;
        }
        if (null !== $this->protectionLevel) {
            $res['ProtectionLevel'] = $this->protectionLevel;
        }
        if (null !== $this->primaryKeyVersion) {
            $res['PrimaryKeyVersion'] = $this->primaryKeyVersion;
        }
        if (null !== $this->lastRotationDate) {
            $res['LastRotationDate'] = $this->lastRotationDate;
        }
        if (null !== $this->automaticRotation) {
            $res['AutomaticRotation'] = $this->automaticRotation;
        }
        if (null !== $this->rotationInterval) {
            $res['RotationInterval'] = $this->rotationInterval;
        }
        if (null !== $this->nextRotationDate) {
            $res['NextRotationDate'] = $this->nextRotationDate;
        }
        if (null !== $this->keySpec) {
            $res['KeySpec'] = $this->keySpec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keyMetadata
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationDate'])) {
            $model->creationDate = $map['CreationDate'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['KeyState'])) {
            $model->keyState = $map['KeyState'];
        }
        if (isset($map['KeyUsage'])) {
            $model->keyUsage = $map['KeyUsage'];
        }
        if (isset($map['DeleteDate'])) {
            $model->deleteDate = $map['DeleteDate'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }
        if (isset($map['Origin'])) {
            $model->origin = $map['Origin'];
        }
        if (isset($map['MaterialExpireTime'])) {
            $model->materialExpireTime = $map['MaterialExpireTime'];
        }
        if (isset($map['ProtectionLevel'])) {
            $model->protectionLevel = $map['ProtectionLevel'];
        }
        if (isset($map['PrimaryKeyVersion'])) {
            $model->primaryKeyVersion = $map['PrimaryKeyVersion'];
        }
        if (isset($map['LastRotationDate'])) {
            $model->lastRotationDate = $map['LastRotationDate'];
        }
        if (isset($map['AutomaticRotation'])) {
            $model->automaticRotation = $map['AutomaticRotation'];
        }
        if (isset($map['RotationInterval'])) {
            $model->rotationInterval = $map['RotationInterval'];
        }
        if (isset($map['NextRotationDate'])) {
            $model->nextRotationDate = $map['NextRotationDate'];
        }
        if (isset($map['KeySpec'])) {
            $model->keySpec = $map['KeySpec'];
        }

        return $model;
    }
}
