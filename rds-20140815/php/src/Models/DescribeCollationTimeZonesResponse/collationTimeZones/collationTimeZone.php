<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCollationTimeZonesResponse\collationTimeZones;

use AlibabaCloud\Tea\Model;

class collationTimeZone extends Model
{
    /**
     * @description timezone
     *
     * @var string
     */
    public $timeZone;

    /**
     * @description collation
     *
     * @var string
     */
    public $standardTimeOffset;

    /**
     * @description description
     *
     * @var string
     */
    public $description;
    protected $_name = [
        'timeZone'           => 'TimeZone',
        'standardTimeOffset' => 'StandardTimeOffset',
        'description'        => 'Description',
    ];

    public function validate()
    {
        Model::validateRequired('timeZone', $this->timeZone, true);
        Model::validateRequired('standardTimeOffset', $this->standardTimeOffset, true);
        Model::validateRequired('description', $this->description, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->timeZone) {
            $res['TimeZone'] = $this->timeZone;
        }
        if (null !== $this->standardTimeOffset) {
            $res['StandardTimeOffset'] = $this->standardTimeOffset;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return collationTimeZone
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TimeZone'])) {
            $model->timeZone = $map['TimeZone'];
        }
        if (isset($map['StandardTimeOffset'])) {
            $model->standardTimeOffset = $map['StandardTimeOffset'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
