<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class RunCommandRequest extends Model
{
    /**
     * @description ownerId
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description resourceOwnerAccount
     *
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description resourceOwnerId
     *
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description ownerAccount
     *
     * @var string
     */
    public $ownerAccount;

    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description type
     *
     * @var string
     */
    public $type;

    /**
     * @description commandContent
     *
     * @var string
     */
    public $commandContent;

    /**
     * @description workingDir
     *
     * @var string
     */
    public $workingDir;

    /**
     * @description timeout
     *
     * @var int
     */
    public $timeout;

    /**
     * @description enableParameter
     *
     * @var bool
     */
    public $enableParameter;

    /**
     * @description timed
     *
     * @var bool
     */
    public $timed;

    /**
     * @description frequency
     *
     * @var string
     */
    public $frequency;

    /**
     * @description instanceIds
     *
     * @var array
     */
    public $instanceId;

    /**
     * @description parameters
     *
     * @var array
     */
    public $parameters;

    /**
     * @description keepCommand
     *
     * @var bool
     */
    public $keepCommand;

    /**
     * @description contentEncoding
     *
     * @var string
     */
    public $contentEncoding;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'ownerAccount'         => 'OwnerAccount',
        'regionId'             => 'RegionId',
        'name'                 => 'Name',
        'description'          => 'Description',
        'type'                 => 'Type',
        'commandContent'       => 'CommandContent',
        'workingDir'           => 'WorkingDir',
        'timeout'              => 'Timeout',
        'enableParameter'      => 'EnableParameter',
        'timed'                => 'Timed',
        'frequency'            => 'Frequency',
        'instanceId'           => 'InstanceId',
        'parameters'           => 'Parameters',
        'keepCommand'          => 'KeepCommand',
        'contentEncoding'      => 'ContentEncoding',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('commandContent', $this->commandContent, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->commandContent) {
            $res['CommandContent'] = $this->commandContent;
        }
        if (null !== $this->workingDir) {
            $res['WorkingDir'] = $this->workingDir;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->enableParameter) {
            $res['EnableParameter'] = $this->enableParameter;
        }
        if (null !== $this->timed) {
            $res['Timed'] = $this->timed;
        }
        if (null !== $this->frequency) {
            $res['Frequency'] = $this->frequency;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = [];
            if (null !== $this->instanceId) {
                $res['InstanceId'] = $this->instanceId;
            }
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->keepCommand) {
            $res['KeepCommand'] = $this->keepCommand;
        }
        if (null !== $this->contentEncoding) {
            $res['ContentEncoding'] = $this->contentEncoding;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunCommandRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['CommandContent'])) {
            $model->commandContent = $map['CommandContent'];
        }
        if (isset($map['WorkingDir'])) {
            $model->workingDir = $map['WorkingDir'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['EnableParameter'])) {
            $model->enableParameter = $map['EnableParameter'];
        }
        if (isset($map['Timed'])) {
            $model->timed = $map['Timed'];
        }
        if (isset($map['Frequency'])) {
            $model->frequency = $map['Frequency'];
        }
        if (isset($map['InstanceId'])) {
            if (!empty($map['InstanceId'])) {
                $model->instanceId = [];
                $model->instanceId = $map['InstanceId'];
            }
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['KeepCommand'])) {
            $model->keepCommand = $map['KeepCommand'];
        }
        if (isset($map['ContentEncoding'])) {
            $model->contentEncoding = $map['ContentEncoding'];
        }

        return $model;
    }
}
