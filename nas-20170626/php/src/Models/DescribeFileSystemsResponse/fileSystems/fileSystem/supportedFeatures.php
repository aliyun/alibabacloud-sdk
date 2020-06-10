<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponse\fileSystems\fileSystem;

use AlibabaCloud\Tea\Model;

class supportedFeatures extends Model
{
    /**
     * @description SupportedFeature
     *
     * @var array
     */
    public $supportedFeature;
    protected $_name = [
        'supportedFeature' => 'SupportedFeature',
    ];

    public function validate()
    {
        Model::validateRequired('supportedFeature', $this->supportedFeature, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedFeature) {
            $res['SupportedFeature'] = [];
            if (null !== $this->supportedFeature) {
                $res['SupportedFeature'] = $this->supportedFeature;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedFeatures
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedFeature'])) {
            if (!empty($map['SupportedFeature'])) {
                $model->supportedFeature = [];
                $model->supportedFeature = $map['SupportedFeature'];
            }
        }

        return $model;
    }
}
