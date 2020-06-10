<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanImageResponse\data\results\subResults;

use AlibabaCloud\Tea\Model;

class frames extends Model
{
    /**
     * @description Rate
     *
     * @var float
     */
    public $rate;

    /**
     * @description URL
     *
     * @var string
     */
    public $URL;
    protected $_name = [
        'rate' => 'Rate',
        'URL'  => 'URL',
    ];

    public function validate()
    {
        Model::validateRequired('rate', $this->rate, true);
        Model::validateRequired('URL', $this->URL, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rate) {
            $res['Rate'] = $this->rate;
        }
        if (null !== $this->URL) {
            $res['URL'] = $this->URL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return frames
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Rate'])) {
            $model->rate = $map['Rate'];
        }
        if (isset($map['URL'])) {
            $model->URL = $map['URL'];
        }

        return $model;
    }
}
