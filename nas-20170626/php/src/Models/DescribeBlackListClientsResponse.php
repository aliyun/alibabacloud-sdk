<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class DescribeBlackListClientsResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'clients' => 'Clients',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('clients', $this->clients, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Clients'] = $this->clients;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeBlackListClientsResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Clients'])){
            $model->clients = $map['Clients'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data
     * @var string
     */
    public $clients;

}
