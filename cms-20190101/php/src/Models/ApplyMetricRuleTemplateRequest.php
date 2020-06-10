<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class ApplyMetricRuleTemplateRequest extends Model
{
    /**
     * @description silenceTime
     *
     * @var int
     */
    public $silenceTime;

    /**
     * @description groupId
     *
     * @var int
     */
    public $groupId;

    /**
     * @description templateIds
     *
     * @var string
     */
    public $templateIds;

    /**
     * @description enableStartTime
     *
     * @var int
     */
    public $enableStartTime;

    /**
     * @description enableEndTime
     *
     * @var int
     */
    public $enableEndTime;

    /**
     * @description notifyLevel
     *
     * @var int
     */
    public $notifyLevel;

    /**
     * @description applyMode
     *
     * @var string
     */
    public $applyMode;

    /**
     * @description webhook
     *
     * @var string
     */
    public $webhook;
    protected $_name = [
        'silenceTime'     => 'SilenceTime',
        'groupId'         => 'GroupId',
        'templateIds'     => 'TemplateIds',
        'enableStartTime' => 'EnableStartTime',
        'enableEndTime'   => 'EnableEndTime',
        'notifyLevel'     => 'NotifyLevel',
        'applyMode'       => 'ApplyMode',
        'webhook'         => 'Webhook',
    ];

    public function validate()
    {
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('templateIds', $this->templateIds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->silenceTime) {
            $res['SilenceTime'] = $this->silenceTime;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->templateIds) {
            $res['TemplateIds'] = $this->templateIds;
        }
        if (null !== $this->enableStartTime) {
            $res['EnableStartTime'] = $this->enableStartTime;
        }
        if (null !== $this->enableEndTime) {
            $res['EnableEndTime'] = $this->enableEndTime;
        }
        if (null !== $this->notifyLevel) {
            $res['NotifyLevel'] = $this->notifyLevel;
        }
        if (null !== $this->applyMode) {
            $res['ApplyMode'] = $this->applyMode;
        }
        if (null !== $this->webhook) {
            $res['Webhook'] = $this->webhook;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyMetricRuleTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SilenceTime'])) {
            $model->silenceTime = $map['SilenceTime'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['TemplateIds'])) {
            $model->templateIds = $map['TemplateIds'];
        }
        if (isset($map['EnableStartTime'])) {
            $model->enableStartTime = $map['EnableStartTime'];
        }
        if (isset($map['EnableEndTime'])) {
            $model->enableEndTime = $map['EnableEndTime'];
        }
        if (isset($map['NotifyLevel'])) {
            $model->notifyLevel = $map['NotifyLevel'];
        }
        if (isset($map['ApplyMode'])) {
            $model->applyMode = $map['ApplyMode'];
        }
        if (isset($map['Webhook'])) {
            $model->webhook = $map['Webhook'];
        }

        return $model;
    }
}
