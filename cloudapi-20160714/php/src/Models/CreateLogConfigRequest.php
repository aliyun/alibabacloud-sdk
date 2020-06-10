<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class CreateLogConfigRequest extends Model
{
    /**
     * @description securityToken
     *
     * @var string
     */
    public $securityToken;

    /**
     * @description accessKeyId
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @description slsProject
     *
     * @var string
     */
    public $slsProject;

    /**
     * @description slsLogStore
     *
     * @var string
     */
    public $slsLogStore;

    /**
     * @description logType
     *
     * @var string
     */
    public $logType;
    protected $_name = [
        'securityToken' => 'SecurityToken',
        'accessKeyId'   => 'AccessKeyId',
        'slsProject'    => 'SlsProject',
        'slsLogStore'   => 'SlsLogStore',
        'logType'       => 'LogType',
    ];

    public function validate()
    {
        Model::validateRequired('slsProject', $this->slsProject, true);
        Model::validateRequired('slsLogStore', $this->slsLogStore, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->slsProject) {
            $res['SlsProject'] = $this->slsProject;
        }
        if (null !== $this->slsLogStore) {
            $res['SlsLogStore'] = $this->slsLogStore;
        }
        if (null !== $this->logType) {
            $res['LogType'] = $this->logType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLogConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['SlsProject'])) {
            $model->slsProject = $map['SlsProject'];
        }
        if (isset($map['SlsLogStore'])) {
            $model->slsLogStore = $map['SlsLogStore'];
        }
        if (isset($map['LogType'])) {
            $model->logType = $map['LogType'];
        }

        return $model;
    }
}
