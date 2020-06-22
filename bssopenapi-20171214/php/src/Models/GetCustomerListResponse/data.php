<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetCustomerListResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description uidList
     *
     * @var array
     */
    public $uidList;
    protected $_name = [
        'uidList' => 'UidList',
    ];

    public function validate()
    {
        Model::validateRequired('uidList', $this->uidList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uidList) {
            $res['UidList'] = [];
            if (null !== $this->uidList) {
                $res['UidList'] = $this->uidList;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UidList'])) {
            if (!empty($map['UidList'])) {
                $model->uidList = [];
                $model->uidList = $map['UidList'];
            }
        }

        return $model;
    }
}
