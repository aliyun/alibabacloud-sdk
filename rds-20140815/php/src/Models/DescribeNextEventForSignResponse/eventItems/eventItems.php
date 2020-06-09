<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeNextEventForSignResponse\eventItems;

use AlibabaCloud\Tea\Model;

class eventItems extends Model {
    protected $_name = [
        'eventId' => 'EventId',
        'eventContent' => 'EventContent',
    ];
    public function validate() {
        Model::validateRequired('eventId', $this->eventId, true);
        Model::validateRequired('eventContent', $this->eventContent, true);
    }
    public function toMap() {
        $res = [];
        $res['EventId'] = $this->eventId;
        $res['EventContent'] = $this->eventContent;
        return $res;
    }
    /**
     * @param array $map
     * @return eventItems
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['EventId'])){
            $model->eventId = $map['EventId'];
        }
        if(isset($map['EventContent'])){
            $model->eventContent = $map['EventContent'];
        }
        return $model;
    }
    /**
     * @description eventId
     * @var integer
     */
    public $eventId;

    /**
     * @description eventContent
     * @var string
     */
    public $eventContent;

}
