<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListAlertMessagesResponse\data;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListAlertMessagesResponse\data\alertMessages\instances;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListAlertMessagesResponse\data\alertMessages\nodes;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListAlertMessagesResponse\data\alertMessages\slaAlert;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListAlertMessagesResponse\data\alertMessages\topics;
use AlibabaCloud\Tea\Model;

class alertMessages extends Model
{
    /**
     * @description alertId
     *
     * @var int
     */
    public $alertId;

    /**
     * @description alertTime
     *
     * @var int
     */
    public $alertTime;

    /**
     * @description source
     *
     * @var string
     */
    public $source;

    /**
     * @description remindId
     *
     * @var int
     */
    public $remindId;

    /**
     * @description remindName
     *
     * @var string
     */
    public $remindName;

    /**
     * @description alertUser
     *
     * @var string
     */
    public $alertUser;

    /**
     * @description alertMethod
     *
     * @var string
     */
    public $alertMethod;

    /**
     * @description alertMessageStatus
     *
     * @var string
     */
    public $alertMessageStatus;

    /**
     * @description content
     *
     * @var string
     */
    public $content;

    /**
     * @description instances
     *
     * @var array
     */
    public $instances;

    /**
     * @description topics
     *
     * @var array
     */
    public $topics;

    /**
     * @description nodes
     *
     * @var array
     */
    public $nodes;

    /**
     * @description slaAlert
     *
     * @var slaAlert
     */
    public $slaAlert;
    protected $_name = [
        'alertId'            => 'AlertId',
        'alertTime'          => 'AlertTime',
        'source'             => 'Source',
        'remindId'           => 'RemindId',
        'remindName'         => 'RemindName',
        'alertUser'          => 'AlertUser',
        'alertMethod'        => 'AlertMethod',
        'alertMessageStatus' => 'AlertMessageStatus',
        'content'            => 'Content',
        'instances'          => 'Instances',
        'topics'             => 'Topics',
        'nodes'              => 'Nodes',
        'slaAlert'           => 'SlaAlert',
    ];

    public function validate()
    {
        Model::validateRequired('alertId', $this->alertId, true);
        Model::validateRequired('alertTime', $this->alertTime, true);
        Model::validateRequired('source', $this->source, true);
        Model::validateRequired('remindId', $this->remindId, true);
        Model::validateRequired('remindName', $this->remindName, true);
        Model::validateRequired('alertUser', $this->alertUser, true);
        Model::validateRequired('alertMethod', $this->alertMethod, true);
        Model::validateRequired('alertMessageStatus', $this->alertMessageStatus, true);
        Model::validateRequired('content', $this->content, true);
        Model::validateRequired('instances', $this->instances, true);
        Model::validateRequired('topics', $this->topics, true);
        Model::validateRequired('nodes', $this->nodes, true);
        Model::validateRequired('slaAlert', $this->slaAlert, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertId) {
            $res['AlertId'] = $this->alertId;
        }
        if (null !== $this->alertTime) {
            $res['AlertTime'] = $this->alertTime;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->remindId) {
            $res['RemindId'] = $this->remindId;
        }
        if (null !== $this->remindName) {
            $res['RemindName'] = $this->remindName;
        }
        if (null !== $this->alertUser) {
            $res['AlertUser'] = $this->alertUser;
        }
        if (null !== $this->alertMethod) {
            $res['AlertMethod'] = $this->alertMethod;
        }
        if (null !== $this->alertMessageStatus) {
            $res['AlertMessageStatus'] = $this->alertMessageStatus;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->instances) {
            $res['Instances'] = [];
            if (null !== $this->instances && \is_array($this->instances)) {
                $n = 0;
                foreach ($this->instances as $item) {
                    $res['Instances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->topics) {
            $res['Topics'] = [];
            if (null !== $this->topics && \is_array($this->topics)) {
                $n = 0;
                foreach ($this->topics as $item) {
                    $res['Topics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nodes) {
            $res['Nodes'] = [];
            if (null !== $this->nodes && \is_array($this->nodes)) {
                $n = 0;
                foreach ($this->nodes as $item) {
                    $res['Nodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->slaAlert) {
            $res['SlaAlert'] = null !== $this->slaAlert ? $this->slaAlert->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertMessages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertId'])) {
            $model->alertId = $map['AlertId'];
        }
        if (isset($map['AlertTime'])) {
            $model->alertTime = $map['AlertTime'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['RemindId'])) {
            $model->remindId = $map['RemindId'];
        }
        if (isset($map['RemindName'])) {
            $model->remindName = $map['RemindName'];
        }
        if (isset($map['AlertUser'])) {
            $model->alertUser = $map['AlertUser'];
        }
        if (isset($map['AlertMethod'])) {
            $model->alertMethod = $map['AlertMethod'];
        }
        if (isset($map['AlertMessageStatus'])) {
            $model->alertMessageStatus = $map['AlertMessageStatus'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Instances'])) {
            if (!empty($map['Instances'])) {
                $model->instances = [];
                $n                = 0;
                foreach ($map['Instances'] as $item) {
                    $model->instances[$n++] = null !== $item ? instances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Topics'])) {
            if (!empty($map['Topics'])) {
                $model->topics = [];
                $n             = 0;
                foreach ($map['Topics'] as $item) {
                    $model->topics[$n++] = null !== $item ? topics::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Nodes'])) {
            if (!empty($map['Nodes'])) {
                $model->nodes = [];
                $n            = 0;
                foreach ($map['Nodes'] as $item) {
                    $model->nodes[$n++] = null !== $item ? nodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SlaAlert'])) {
            $model->slaAlert = slaAlert::fromMap($map['SlaAlert']);
        }

        return $model;
    }
}
