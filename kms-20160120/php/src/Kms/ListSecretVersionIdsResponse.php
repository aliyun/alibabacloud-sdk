<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Kms;

use AlibabaCloud\SDK\Kms\V20160120\Kms\ListSecretVersionIdsResponse\versionIds;
use AlibabaCloud\Tea\Model;

class ListSecretVersionIdsResponse extends Model
{
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

    /**
     * @description RequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description SecretName
     *
     * @var string
     */
    public $secretName;

    /**
     * @description TotalCount
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description VersionIds
     *
     * @var ListSecretVersionIdsResponse.versionIds
     */
    public $versionIds;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'secretName' => 'SecretName',
        'totalCount' => 'TotalCount',
        'versionIds' => 'VersionIds',
    ];

    public function validate()
    {
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('secretName', $this->secretName, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('versionIds', $this->versionIds, true);
    }

    public function toMap()
    {
        $res               = [];
        $res['PageNumber'] = $this->pageNumber;
        $res['PageSize']   = $this->pageSize;
        $res['RequestId']  = $this->requestId;
        $res['SecretName'] = $this->secretName;
        $res['TotalCount'] = $this->totalCount;
        $res['VersionIds'] = null !== $this->versionIds ? $this->versionIds->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSecretVersionIdsResponse
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['VersionIds'])) {
            $model->versionIds = ListSecretVersionIdsResponse\versionIds::fromMap($map['VersionIds']);
        }

        return $model;
    }
}
