<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeNextEventForSignResponse\eventItems;

class DescribeNextEventForSignResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'eventItems' => 'EventItems',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('eventItems', $this->eventItems, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['EventItems'] = null !== $this->eventItems ? $this->eventItems->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeNextEventForSignResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['EventItems'])){
            $model->eventItems = eventItems::fromMap($map['EventItems']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.eventItems
     * @var eventItems
     */
    public $eventItems;

}
