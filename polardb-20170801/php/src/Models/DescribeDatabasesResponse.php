<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDatabasesResponse\databases;

class DescribeDatabasesResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'databases' => 'Databases',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('databases', $this->databases, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Databases'] = null !== $this->databases ? $this->databases->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeDatabasesResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Databases'])){
            $model->databases = databases::fromMap($map['Databases']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.databases
     * @var databases
     */
    public $databases;

}
