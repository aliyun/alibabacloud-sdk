<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class SetResellerUserStatusRequest extends Model
{
    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description businessType
     *
     * @var string
     */
    public $businessType;
    protected $_name = [
        'status'       => 'Status',
        'businessType' => 'BusinessType',
    ];

    public function validate()
    {
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('businessType', $this->businessType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetResellerUserStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }

        return $model;
    }
}
