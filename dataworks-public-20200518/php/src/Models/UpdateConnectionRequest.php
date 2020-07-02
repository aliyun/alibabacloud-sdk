<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateConnectionRequest extends Model
{
    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description envType
     *
     * @var int
     */
    public $envType;

    /**
     * @description content
     *
     * @var string
     */
    public $content;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description connectionId
     *
     * @var int
     */
    public $connectionId;
    protected $_name = [
        'description'  => 'Description',
        'envType'      => 'EnvType',
        'content'      => 'Content',
        'status'       => 'Status',
        'connectionId' => 'ConnectionId',
    ];

    public function validate()
    {
        Model::validateRequired('connectionId', $this->connectionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->connectionId) {
            $res['ConnectionId'] = $this->connectionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateConnectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ConnectionId'])) {
            $model->connectionId = $map['ConnectionId'];
        }

        return $model;
    }
}
