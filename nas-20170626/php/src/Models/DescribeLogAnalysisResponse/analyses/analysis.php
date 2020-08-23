<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLogAnalysisResponse\analyses;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLogAnalysisResponse\analyses\analysis\metaValue;
use AlibabaCloud\Tea\Model;

class analysis extends Model
{
    /**
     * @var string
     */
    public $metaKey;

    /**
     * @var metaValue
     */
    public $metaValue;
    protected $_name = [
        'metaKey'   => 'MetaKey',
        'metaValue' => 'MetaValue',
    ];

    public function validate()
    {
        Model::validateRequired('metaKey', $this->metaKey, true);
        Model::validateRequired('metaValue', $this->metaValue, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metaKey) {
            $res['MetaKey'] = $this->metaKey;
        }
        if (null !== $this->metaValue) {
            $res['MetaValue'] = null !== $this->metaValue ? $this->metaValue->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return analysis
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetaKey'])) {
            $model->metaKey = $map['MetaKey'];
        }
        if (isset($map['MetaValue'])) {
            $model->metaValue = metaValue::fromMap($map['MetaValue']);
        }

        return $model;
    }
}
