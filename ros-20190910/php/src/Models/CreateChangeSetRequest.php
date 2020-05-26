<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\CreateChangeSetRequest\parameters;
use AlibabaCloud\Tea\Model;

class CreateChangeSetRequest extends Model
{
    /**
     * @description StackId
     *
     * @var string
     */
    public $stackId;

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
     * @description UsePreviousParameters
     *
     * @var bool
     */
    public $usePreviousParameters;

    /**
     * @description ChangeSetType
     *
     * @var string
     */
    public $changeSetType;

    /**
     * @description Description
     *
     * @var string
     */
    public $description;

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
     * @description StackPolicyDuringUpdateURL
     *
     * @var string
     */
    public $stackPolicyDuringUpdateURL;

    /**
     * @description TemplateBody
     *
     * @var string
     */
    public $templateBody;

    /**
     * @description TimeoutInMinutes
     *
     * @var int
     */
    public $timeoutInMinutes;

    /**
     * @description DisableRollback
     *
     * @var bool
     */
    public $disableRollback;

    /**
     * @description ChangeSetName
     *
     * @var string
     */
    public $changeSetName;

    /**
     * @description StackPolicyDuringUpdateBody
     *
     * @var string
     */
    public $stackPolicyDuringUpdateBody;

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
    protected $_name = [
        'stackId'                     => 'StackId',
        'parameters'                  => 'Parameters',
        'stackPolicyURL'              => 'StackPolicyURL',
        'stackPolicyBody'             => 'StackPolicyBody',
        'stackName'                   => 'StackName',
        'usePreviousParameters'       => 'UsePreviousParameters',
        'changeSetType'               => 'ChangeSetType',
        'description'                 => 'Description',
        'regionId'                    => 'RegionId',
        'clientToken'                 => 'ClientToken',
        'templateURL'                 => 'TemplateURL',
        'stackPolicyDuringUpdateURL'  => 'StackPolicyDuringUpdateURL',
        'templateBody'                => 'TemplateBody',
        'timeoutInMinutes'            => 'TimeoutInMinutes',
        'disableRollback'             => 'DisableRollback',
        'changeSetName'               => 'ChangeSetName',
        'stackPolicyDuringUpdateBody' => 'StackPolicyDuringUpdateBody',
        'notificationURLs'            => 'NotificationURLs',
        'ramRoleName'                 => 'RamRoleName',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('changeSetName', $this->changeSetName, true);
    }

    public function toMap()
    {
        $res               = [];
        $res['StackId']    = $this->stackId;
        $res['Parameters'] = [];
        if (null !== $this->parameters && \is_array($this->parameters)) {
            $n = 0;
            foreach ($this->parameters as $item) {
                $res['Parameters'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['StackPolicyURL']              = $this->stackPolicyURL;
        $res['StackPolicyBody']             = $this->stackPolicyBody;
        $res['StackName']                   = $this->stackName;
        $res['UsePreviousParameters']       = $this->usePreviousParameters;
        $res['ChangeSetType']               = $this->changeSetType;
        $res['Description']                 = $this->description;
        $res['RegionId']                    = $this->regionId;
        $res['ClientToken']                 = $this->clientToken;
        $res['TemplateURL']                 = $this->templateURL;
        $res['StackPolicyDuringUpdateURL']  = $this->stackPolicyDuringUpdateURL;
        $res['TemplateBody']                = $this->templateBody;
        $res['TimeoutInMinutes']            = $this->timeoutInMinutes;
        $res['DisableRollback']             = $this->disableRollback;
        $res['ChangeSetName']               = $this->changeSetName;
        $res['StackPolicyDuringUpdateBody'] = $this->stackPolicyDuringUpdateBody;
        $res['NotificationURLs']            = [];
        if (null !== $this->notificationURLs) {
            $res['NotificationURLs'] = $this->notificationURLs;
        }
        $res['RamRoleName'] = $this->ramRoleName;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateChangeSetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
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
        if (isset($map['StackPolicyBody'])) {
            $model->stackPolicyBody = $map['StackPolicyBody'];
        }
        if (isset($map['StackName'])) {
            $model->stackName = $map['StackName'];
        }
        if (isset($map['UsePreviousParameters'])) {
            $model->usePreviousParameters = $map['UsePreviousParameters'];
        }
        if (isset($map['ChangeSetType'])) {
            $model->changeSetType = $map['ChangeSetType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
        if (isset($map['StackPolicyDuringUpdateURL'])) {
            $model->stackPolicyDuringUpdateURL = $map['StackPolicyDuringUpdateURL'];
        }
        if (isset($map['TemplateBody'])) {
            $model->templateBody = $map['TemplateBody'];
        }
        if (isset($map['TimeoutInMinutes'])) {
            $model->timeoutInMinutes = $map['TimeoutInMinutes'];
        }
        if (isset($map['DisableRollback'])) {
            $model->disableRollback = $map['DisableRollback'];
        }
        if (isset($map['ChangeSetName'])) {
            $model->changeSetName = $map['ChangeSetName'];
        }
        if (isset($map['StackPolicyDuringUpdateBody'])) {
            $model->stackPolicyDuringUpdateBody = $map['StackPolicyDuringUpdateBody'];
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

        return $model;
    }
}
