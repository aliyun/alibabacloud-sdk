<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostGroupsResponse\dedicatedHostGroups\dedicatedHostGroups;

use AlibabaCloud\Tea\Model;

class zoneIDList extends Model
{
    /**
     * @description ZoneIDList
     *
     * @var array
     */
    public $zoneIDList;
    protected $_name = [
        'zoneIDList' => 'ZoneIDList',
    ];

    public function validate()
    {
        Model::validateRequired('zoneIDList', $this->zoneIDList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->zoneIDList) {
            $res['ZoneIDList'] = [];
            if (null !== $this->zoneIDList) {
                $res['ZoneIDList'] = $this->zoneIDList;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return zoneIDList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ZoneIDList'])) {
            if (!empty($map['ZoneIDList'])) {
                $model->zoneIDList = [];
                $model->zoneIDList = $map['ZoneIDList'];
            }
        }

        return $model;
    }
}
