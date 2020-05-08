<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class ListSecretsRequest extends Model
{
    /**
     * @description FetchTags
     *
     * @var string
     */
    public $fetchTags;

    /**
     * @description PageNumber
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description PageSize
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'fetchTags'  => 'FetchTags',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res               = [];
        $res['FetchTags']  = $this->fetchTags;
        $res['PageNumber'] = $this->pageNumber;
        $res['PageSize']   = $this->pageSize;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSecretsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FetchTags'])) {
            $model->fetchTags = $map['FetchTags'];
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
