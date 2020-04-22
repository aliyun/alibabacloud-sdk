<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Kms\DescribeKeyResponse;

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
        $res                       = [];
        $res['CreationDate']       = $this->creationDate;
        $res['Description']        = $this->description;
        $res['KeyId']              = $this->keyId;
        $res['KeyState']           = $this->keyState;
        $res['KeyUsage']           = $this->keyUsage;
        $res['DeleteDate']         = $this->deleteDate;
        $res['Creator']            = $this->creator;
        $res['Arn']                = $this->arn;
        $res['Origin']             = $this->origin;
        $res['MaterialExpireTime'] = $this->materialExpireTime;
        $res['ProtectionLevel']    = $this->protectionLevel;
        $res['PrimaryKeyVersion']  = $this->primaryKeyVersion;
        $res['LastRotationDate']   = $this->lastRotationDate;
        $res['AutomaticRotation']  = $this->automaticRotation;
        $res['RotationInterval']   = $this->rotationInterval;
        $res['NextRotationDate']   = $this->nextRotationDate;
        $res['KeySpec']            = $this->keySpec;

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
