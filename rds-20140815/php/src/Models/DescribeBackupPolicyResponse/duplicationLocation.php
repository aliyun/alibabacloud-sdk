<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBackupPolicyResponse;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBackupPolicyResponse\duplicationLocation\location;
use AlibabaCloud\Tea\Model;

class duplicationLocation extends Model
{
    /**
     * @description storage
     *
     * @var string
     */
    public $sotrage;

    /**
     * @description location
     *
     * @var location
     */
    public $location;
    protected $_name = [
        'sotrage'  => 'Sotrage',
        'location' => 'Location',
    ];

    public function validate()
    {
        Model::validateRequired('sotrage', $this->sotrage, true);
        Model::validateRequired('location', $this->location, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sotrage) {
            $res['Sotrage'] = $this->sotrage;
        }
        if (null !== $this->location) {
            $res['Location'] = null !== $this->location ? $this->location->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return duplicationLocation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Sotrage'])) {
            $model->sotrage = $map['Sotrage'];
        }
        if (isset($map['Location'])) {
            $model->location = location::fromMap($map['Location']);
        }

        return $model;
    }
}
