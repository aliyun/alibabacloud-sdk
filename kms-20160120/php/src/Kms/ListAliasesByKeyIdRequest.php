<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Kms;

use AlibabaCloud\Tea\Model;

class ListAliasesByKeyIdRequest extends Model
{
    /**
     * @description keyId
     *
     * @var string
     */
    public $keyId;
    /**
     * @description pageNumber
     *
     * @var int
     */
    public $pageNumber;
    /**
     * @description pageSize
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'keyId'      => 'KeyId',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
    ];

    public function validate()
    {
        Model::validateRequired('keyId', $this->keyId, true);
    }

    public function toMap()
    {
        $res               = [];
        $res['KeyId']      = $this->keyId;
        $res['PageNumber'] = $this->pageNumber;
        $res['PageSize']   = $this->pageSize;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAliasesByKeyIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
