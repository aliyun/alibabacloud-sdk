<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ImportDatabaseBetweenInstancesResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.migrationId
     *
     * @var string
     */
    public $importId;
    protected $_name = [
        'requestId' => 'RequestId',
        'importId'  => 'ImportId',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('importId', $this->importId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->importId) {
            $res['ImportId'] = $this->importId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportDatabaseBetweenInstancesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ImportId'])) {
            $model->importId = $map['ImportId'];
        }

        return $model;
    }
}
