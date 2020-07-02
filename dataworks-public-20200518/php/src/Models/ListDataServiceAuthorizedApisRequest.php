<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListDataServiceAuthorizedApisRequest extends Model
{
    /**
     * @description projectId
     *
     * @var int
     */
    public $projectId;

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

    /**
     * @description tenantId
     *
     * @var int
     */
    public $tenantId;

    /**
     * @description apiNameKeyword
     *
     * @var string
     */
    public $apiNameKeyword;
    protected $_name = [
        'projectId'      => 'ProjectId',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'tenantId'       => 'TenantId',
        'apiNameKeyword' => 'ApiNameKeyword',
    ];

    public function validate()
    {
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('tenantId', $this->tenantId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->apiNameKeyword) {
            $res['ApiNameKeyword'] = $this->apiNameKeyword;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDataServiceAuthorizedApisRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['ApiNameKeyword'])) {
            $model->apiNameKeyword = $map['ApiNameKeyword'];
        }

        return $model;
    }
}
