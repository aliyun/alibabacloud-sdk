<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class SearchMetaTablesRequest extends Model
{
    /**
     * @description pageNum
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

    /**
     * @description appGuid
     *
     * @var string
     */
    public $appGuid;

    /**
     * @description keyword
     *
     * @var string
     */
    public $keyword;

    /**
     * @description entityType
     *
     * @var int
     */
    public $entityType;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'appGuid'    => 'AppGuid',
        'keyword'    => 'Keyword',
        'entityType' => 'EntityType',
    ];

    public function validate()
    {
        Model::validateRequired('keyword', $this->keyword, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->appGuid) {
            $res['AppGuid'] = $this->appGuid;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchMetaTablesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['AppGuid'])) {
            $model->appGuid = $map['AppGuid'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }

        return $model;
    }
}
