<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDBNodesResponse;

use AlibabaCloud\Tea\Model;

class DBNodeIds extends Model
{
    /**
     * @description DBNodeId
     *
     * @var array
     */
    public $DBNodeId;
    protected $_name = [
        'DBNodeId' => 'DBNodeId',
    ];

    public function validate()
    {
        Model::validateRequired('DBNodeId', $this->DBNodeId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBNodeId) {
            $res['DBNodeId'] = [];
            if (null !== $this->DBNodeId) {
                $res['DBNodeId'] = $this->DBNodeId;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBNodeIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBNodeId'])) {
            if (!empty($map['DBNodeId'])) {
                $model->DBNodeId = [];
                $model->DBNodeId = $map['DBNodeId'];
            }
        }

        return $model;
    }
}
