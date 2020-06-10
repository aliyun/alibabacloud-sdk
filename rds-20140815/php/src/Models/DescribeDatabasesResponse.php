<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDatabasesResponse\databases;
use AlibabaCloud\Tea\Model;

class DescribeDatabasesResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data
     *
     * @var databases
     */
    public $databases;
    protected $_name = [
        'requestId' => 'RequestId',
        'databases' => 'Databases',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('databases', $this->databases, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->databases) {
            $res['Databases'] = null !== $this->databases ? $this->databases->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDatabasesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Databases'])) {
            $model->databases = databases::fromMap($map['Databases']);
        }

        return $model;
    }
}
