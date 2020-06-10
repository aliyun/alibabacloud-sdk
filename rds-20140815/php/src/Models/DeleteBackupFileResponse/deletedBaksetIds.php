<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DeleteBackupFileResponse;

use AlibabaCloud\Tea\Model;

class deletedBaksetIds extends Model
{
    /**
     * @description DeletedBaksetIds
     *
     * @var array
     */
    public $deletedBaksetIds;
    protected $_name = [
        'deletedBaksetIds' => 'DeletedBaksetIds',
    ];

    public function validate()
    {
        Model::validateRequired('deletedBaksetIds', $this->deletedBaksetIds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deletedBaksetIds) {
            $res['DeletedBaksetIds'] = [];
            if (null !== $this->deletedBaksetIds) {
                $res['DeletedBaksetIds'] = $this->deletedBaksetIds;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deletedBaksetIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeletedBaksetIds'])) {
            if (!empty($map['DeletedBaksetIds'])) {
                $model->deletedBaksetIds = [];
                $model->deletedBaksetIds = $map['DeletedBaksetIds'];
            }
        }

        return $model;
    }
}
