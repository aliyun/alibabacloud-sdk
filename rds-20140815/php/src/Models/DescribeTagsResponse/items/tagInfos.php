<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeTagsResponse\items;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeTagsResponse\items\tagInfos\DBInstanceIds;

class tagInfos extends Model {
    protected $_name = [
        'tagKey' => 'TagKey',
        'tagValue' => 'TagValue',
        'DBInstanceIds' => 'DBInstanceIds',
    ];
    public function validate() {
        Model::validateRequired('tagKey', $this->tagKey, true);
        Model::validateRequired('tagValue', $this->tagValue, true);
        Model::validateRequired('DBInstanceIds', $this->DBInstanceIds, true);
    }
    public function toMap() {
        $res = [];
        $res['TagKey'] = $this->tagKey;
        $res['TagValue'] = $this->tagValue;
        $res['DBInstanceIds'] = null !== $this->DBInstanceIds ? $this->DBInstanceIds->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return tagInfos
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['TagKey'])){
            $model->tagKey = $map['TagKey'];
        }
        if(isset($map['TagValue'])){
            $model->tagValue = $map['TagValue'];
        }
        if(isset($map['DBInstanceIds'])){
            $model->DBInstanceIds = DBInstanceIds::fromMap($map['DBInstanceIds']);
        }
        return $model;
    }
    /**
     * @description description: 标签键。; 
     * @var string
     */
    public $tagKey;

    /**
     * @description description: 标签值。; 
     * @var string
     */
    public $tagValue;

    /**
     * @description dbInstanceIds
     * @var DBInstanceIds
     */
    public $DBInstanceIds;

}
