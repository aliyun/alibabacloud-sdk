<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\Models\DescribeContainerGroupsResponse\containerGroups;

use AlibabaCloud\Tea\Model;

class events extends Model
{
    /**
     * @description count
     *
     * @var int
     */
    public $count;

    /**
     * @description type
     *
     * @var string
     */
    public $type;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description message
     *
     * @var string
     */
    public $message;

    /**
     * @description firstTimestamp
     *
     * @var string
     */
    public $firstTimestamp;

    /**
     * @description lastTimestamp
     *
     * @var string
     */
    public $lastTimestamp;

    /**
     * @description reason
     *
     * @var string
     */
    public $reason;
    protected $_name = [
        'count'          => 'Count',
        'type'           => 'Type',
        'name'           => 'Name',
        'message'        => 'Message',
        'firstTimestamp' => 'FirstTimestamp',
        'lastTimestamp'  => 'LastTimestamp',
        'reason'         => 'Reason',
    ];

    public function validate()
    {
        Model::validateRequired('count', $this->count, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('firstTimestamp', $this->firstTimestamp, true);
        Model::validateRequired('lastTimestamp', $this->lastTimestamp, true);
        Model::validateRequired('reason', $this->reason, true);
    }

    public function toMap()
    {
        $res                   = [];
        $res['Count']          = $this->count;
        $res['Type']           = $this->type;
        $res['Name']           = $this->name;
        $res['Message']        = $this->message;
        $res['FirstTimestamp'] = $this->firstTimestamp;
        $res['LastTimestamp']  = $this->lastTimestamp;
        $res['Reason']         = $this->reason;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return events
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['FirstTimestamp'])) {
            $model->firstTimestamp = $map['FirstTimestamp'];
        }
        if (isset($map['LastTimestamp'])) {
            $model->lastTimestamp = $map['LastTimestamp'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        return $model;
    }
}
