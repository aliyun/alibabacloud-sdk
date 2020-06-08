<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBackupPolicyResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBackupPolicyResponse\duplicationLocation\location;

class duplicationLocation extends Model {
    protected $_name = [
        'sotrage' => 'Sotrage',
        'location' => 'Location',
    ];
    public function validate() {
        Model::validateRequired('sotrage', $this->sotrage, true);
        Model::validateRequired('location', $this->location, true);
    }
    public function toMap() {
        $res = [];
        $res['Sotrage'] = $this->sotrage;
        $res['Location'] = null !== $this->location ? $this->location->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return duplicationLocation
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Sotrage'])){
            $model->sotrage = $map['Sotrage'];
        }
        if(isset($map['Location'])){
            $model->location = location::fromMap($map['Location']);
        }
        return $model;
    }
    /**
     * @description storage
     * @var string
     */
    public $sotrage;

    /**
     * @description location
     * @var location
     */
    public $location;

}
