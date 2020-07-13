<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\AddHDMInstanceResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description instanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description vpcId
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description ip
     *
     * @var string
     */
    public $ip;

    /**
     * @description port
     *
     * @var int
     */
    public $port;

    /**
     * @description uuid
     *
     * @var string
     */
    public $uuid;

    /**
     * @description role
     *
     * @var string
     */
    public $role;

    /**
     * @description code
     *
     * @var int
     */
    public $code;

    /**
     * @description error
     *
     * @var string
     */
    public $error;

    /**
     * @description tenantId
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description ownerId
     *
     * @var string
     */
    public $ownerId;

    /**
     * @description token
     *
     * @var string
     */
    public $token;

    /**
     * @description callerUid
     *
     * @var string
     */
    public $callerUid;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'vpcId'      => 'VpcId',
        'ip'         => 'Ip',
        'port'       => 'Port',
        'uuid'       => 'Uuid',
        'role'       => 'Role',
        'code'       => 'Code',
        'error'      => 'Error',
        'tenantId'   => 'TenantId',
        'ownerId'    => 'OwnerId',
        'token'      => 'Token',
        'callerUid'  => 'CallerUid',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('vpcId', $this->vpcId, true);
        Model::validateRequired('ip', $this->ip, true);
        Model::validateRequired('port', $this->port, true);
        Model::validateRequired('uuid', $this->uuid, true);
        Model::validateRequired('role', $this->role, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('error', $this->error, true);
        Model::validateRequired('tenantId', $this->tenantId, true);
        Model::validateRequired('ownerId', $this->ownerId, true);
        Model::validateRequired('token', $this->token, true);
        Model::validateRequired('callerUid', $this->callerUid, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->callerUid) {
            $res['CallerUid'] = $this->callerUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['CallerUid'])) {
            $model->callerUid = $map['CallerUid'];
        }

        return $model;
    }
}
