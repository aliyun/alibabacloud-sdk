<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaDNAResultResponse\DNAResult\videoDNA;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaDNAResultResponse\DNAResult\videoDNA\detail\duplication;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaDNAResultResponse\DNAResult\videoDNA\detail\input;
use AlibabaCloud\Tea\Model;

class detail extends Model
{
    /**
     * @description input
     *
     * @var input
     */
    public $input;

    /**
     * @description duplication
     *
     * @var duplication
     */
    public $duplication;
    protected $_name = [
        'input'       => 'Input',
        'duplication' => 'Duplication',
    ];

    public function validate()
    {
        Model::validateRequired('input', $this->input, true);
        Model::validateRequired('duplication', $this->duplication, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        }
        if (null !== $this->duplication) {
            $res['Duplication'] = null !== $this->duplication ? $this->duplication->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }
        if (isset($map['Duplication'])) {
            $model->duplication = duplication::fromMap($map['Duplication']);
        }

        return $model;
    }
}
