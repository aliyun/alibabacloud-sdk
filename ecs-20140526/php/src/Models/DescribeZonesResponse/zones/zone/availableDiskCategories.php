<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponse\zones\zone;

use AlibabaCloud\Tea\Model;

class availableDiskCategories extends Model
{
    /**
     * @description DiskCategories
     *
     * @var array
     */
    public $diskCategories;
    protected $_name = [
        'diskCategories' => 'DiskCategories',
    ];

    public function validate()
    {
        Model::validateRequired('diskCategories', $this->diskCategories, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskCategories) {
            $res['DiskCategories'] = $this->diskCategories;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableDiskCategories
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskCategories'])) {
            if (!empty($map['DiskCategories'])) {
                $model->diskCategories = $map['DiskCategories'];
            }
        }

        return $model;
    }
}
