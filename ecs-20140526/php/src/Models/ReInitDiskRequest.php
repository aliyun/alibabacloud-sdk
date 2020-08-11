<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ReInitDiskRequest extends Model
{
    /**
     * @var string
     */
    public $diskId;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $keyPairName;

    /**
     * @var bool
     */
    public $autoStartInstance;

    /**
     * @var string
     */
    public $securityEnhancementStrategy;
    protected $_name = [
        'diskId'                      => 'DiskId',
        'password'                    => 'Password',
        'keyPairName'                 => 'KeyPairName',
        'autoStartInstance'           => 'AutoStartInstance',
        'securityEnhancementStrategy' => 'SecurityEnhancementStrategy',
    ];

    public function validate()
    {
        Model::validateRequired('diskId', $this->diskId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->autoStartInstance) {
            $res['AutoStartInstance'] = $this->autoStartInstance;
        }
        if (null !== $this->securityEnhancementStrategy) {
            $res['SecurityEnhancementStrategy'] = $this->securityEnhancementStrategy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReInitDiskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['AutoStartInstance'])) {
            $model->autoStartInstance = $map['AutoStartInstance'];
        }
        if (isset($map['SecurityEnhancementStrategy'])) {
            $model->securityEnhancementStrategy = $map['SecurityEnhancementStrategy'];
        }

        return $model;
    }
}
