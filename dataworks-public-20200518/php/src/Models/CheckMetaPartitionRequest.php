<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CheckMetaPartitionRequest extends Model
{
    /**
     * @description tableGuid
     *
     * @var string
     */
    public $tableGuid;

    /**
     * @description partition
     *
     * @var string
     */
    public $partition;
    protected $_name = [
        'tableGuid' => 'TableGuid',
        'partition' => 'Partition',
    ];

    public function validate()
    {
        Model::validateRequired('tableGuid', $this->tableGuid, true);
        Model::validateRequired('partition', $this->partition, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }
        if (null !== $this->partition) {
            $res['Partition'] = $this->partition;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckMetaPartitionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }
        if (isset($map['Partition'])) {
            $model->partition = $map['Partition'];
        }

        return $model;
    }
}
