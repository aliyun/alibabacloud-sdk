<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\CreateStackRequest\parameters;
use AlibabaCloud\Tea\Model;

class CreateStackRequest extends Model
{
    /**
     * @description DisableRollback
     *
     * @var bool
     */
    public $disableRollback;

    /**
     * @description TemplateBody
     *
     * @var string
     */
    public $templateBody;

    /**
     * @description Parameters
     *
     * @var array
     */
    public $parameters;

    /**
     * @description StackPolicyURL
     *
     * @var string
     */
    public $stackPolicyURL;

    /**
     * @description TimeoutInMinutes
     *
     * @var int
     */
    public $timeoutInMinutes;

    /**
     * @description StackPolicyBody
     *
     * @var string
     */
    public $stackPolicyBody;

    /**
     * @description StackName
     *
     * @var string
     */
    public $stackName;

    /**
     * @description RegionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description ClientToken
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description TemplateURL
     *
     * @var string
     */
    public $templateURL;

    /**
     * @description NotificationURLs
     *
     * @var array
     */
    public $notificationURLs;

    /**
     * @description RoleName
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @description DeletionProtection
     *
     * @var string
     */
    public $deletionProtection;
    protected $_name = [
        'disableRollback'    => 'DisableRollback',
        'templateBody'       => 'TemplateBody',
        'parameters'         => 'Parameters',
        'stackPolicyURL'     => 'StackPolicyURL',
        'timeoutInMinutes'   => 'TimeoutInMinutes',
        'stackPolicyBody'    => 'StackPolicyBody',
        'stackName'          => 'StackName',
        'regionId'           => 'RegionId',
        'clientToken'        => 'ClientToken',
        'templateURL'        => 'TemplateURL',
        'notificationURLs'   => 'NotificationURLs',
        'ramRoleName'        => 'RamRoleName',
        'deletionProtection' => 'DeletionProtection',
    ];

    public function validate()
    {
        Model::validateRequired('stackName', $this->stackName, true);
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->disableRollback) {
            $res['DisableRollback'] = $this->disableRollback;
        }
        if (null !== $this->templateBody) {
            $res['TemplateBody'] = $this->templateBody;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = [];
            if (null !== $this->parameters && \is_array($this->parameters)) {
                $n = 0;
                foreach ($this->parameters as $item) {
                    $res['Parameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->stackPolicyURL) {
            $res['StackPolicyURL'] = $this->stackPolicyURL;
        }
        if (null !== $this->timeoutInMinutes) {
            $res['TimeoutInMinutes'] = $this->timeoutInMinutes;
        }
        if (null !== $this->stackPolicyBody) {
            $res['StackPolicyBody'] = $this->stackPolicyBody;
        }
        if (null !== $this->stackName) {
            $res['StackName'] = $this->stackName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->templateURL) {
            $res['TemplateURL'] = $this->templateURL;
        }
        if (null !== $this->notificationURLs) {
            $res['NotificationURLs'] = [];
            if (null !== $this->notificationURLs) {
                $res['NotificationURLs'] = $this->notificationURLs;
            }
        }
        if (null !== $this->ramRoleName) {
            $res['RamRoleName'] = $this->ramRoleName;
        }
        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateStackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisableRollback'])) {
            $model->disableRollback = $map['DisableRollback'];
        }
        if (isset($map['TemplateBody'])) {
            $model->templateBody = $map['TemplateBody'];
        }
        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                $n                 = 0;
                foreach ($map['Parameters'] as $item) {
                    $model->parameters[$n++] = null !== $item ? parameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StackPolicyURL'])) {
            $model->stackPolicyURL = $map['StackPolicyURL'];
        }
        if (isset($map['TimeoutInMinutes'])) {
            $model->timeoutInMinutes = $map['TimeoutInMinutes'];
        }
        if (isset($map['StackPolicyBody'])) {
            $model->stackPolicyBody = $map['StackPolicyBody'];
        }
        if (isset($map['StackName'])) {
            $model->stackName = $map['StackName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['TemplateURL'])) {
            $model->templateURL = $map['TemplateURL'];
        }
        if (isset($map['NotificationURLs'])) {
            if (!empty($map['NotificationURLs'])) {
                $model->notificationURLs = [];
                $model->notificationURLs = $map['NotificationURLs'];
            }
        }
        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }

        return $model;
    }
}
