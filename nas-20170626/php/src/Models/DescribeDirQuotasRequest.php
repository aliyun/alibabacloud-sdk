<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class DescribeDirQuotasRequest extends Model
{
    /**
     * @description volume
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description path
     *
     * @var string
     */
    public $path;

    /**
     * @description pageSize
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description pageNumber
     *
     * @var int
     */
    public $pageNumber;
    protected $_name = [
        'fileSystemId' => 'FileSystemId',
        'path'         => 'Path',
        'pageSize'     => 'PageSize',
        'pageNumber'   => 'PageNumber',
    ];

    public function validate()
    {
        Model::validateRequired('fileSystemId', $this->fileSystemId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDirQuotasRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        return $model;
    }
}
