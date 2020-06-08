<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceByTagsResponse\items;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceByTagsResponse\items\DBInstanceTag\tags;

class DBInstanceTag extends Model {
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'tags' => 'Tags',
    ];
    public function validate() {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('tags', $this->tags, true);
    }
    public function toMap() {
        $res = [];
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DBInstanceTag
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['DBInstanceId'])){
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if(isset($map['Tags'])){
            $model->tags = tags::fromMap($map['Tags']);
        }
        return $model;
    }
    /**
     * @description dbInstanceId
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description tagInfo
     * @var tags
     */
    public $tags;

}
