<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeZonesResponse\zones;

class DescribeZonesResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'zones' => 'Zones',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('zones', $this->zones, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Zones'] = null !== $this->zones ? $this->zones->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeZonesResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Zones'])){
            $model->zones = zones::fromMap($map['Zones']);
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
     * @var zones
     */
    public $zones;

}
