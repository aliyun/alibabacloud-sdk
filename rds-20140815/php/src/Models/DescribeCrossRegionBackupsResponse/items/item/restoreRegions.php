<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCrossRegionBackupsResponse\items\item;

use AlibabaCloud\Tea\Model;

class restoreRegions extends Model
{
    /**
     * @description RestoreRegion
     *
     * @var array
     */
    public $restoreRegion;
    protected $_name = [
        'restoreRegion' => 'RestoreRegion',
    ];

    public function validate()
    {
        Model::validateRequired('restoreRegion', $this->restoreRegion, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->restoreRegion) {
            $res['RestoreRegion'] = [];
            if (null !== $this->restoreRegion) {
                $res['RestoreRegion'] = $this->restoreRegion;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return restoreRegions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RestoreRegion'])) {
            if (!empty($map['RestoreRegion'])) {
                $model->restoreRegion = [];
                $model->restoreRegion = $map['RestoreRegion'];
            }
        }

        return $model;
    }
}
