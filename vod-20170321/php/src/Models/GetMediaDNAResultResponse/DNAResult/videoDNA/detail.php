<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaDNAResultResponse\DNAResult\videoDNA;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaDNAResultResponse\DNAResult\videoDNA\detail\input;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaDNAResultResponse\DNAResult\videoDNA\detail\duplication;

class detail extends Model {
    protected $_name = [
        'input' => 'Input',
        'duplication' => 'Duplication',
    ];
    public function validate() {
        Model::validateRequired('input', $this->input, true);
        Model::validateRequired('duplication', $this->duplication, true);
    }
    public function toMap() {
        $res = [];
        $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        $res['Duplication'] = null !== $this->duplication ? $this->duplication->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return detail
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Input'])){
            $model->input = input::fromMap($map['Input']);
        }
        if(isset($map['Duplication'])){
            $model->duplication = duplication::fromMap($map['Duplication']);
        }
        return $model;
    }
    /**
     * @description input
     * @var input
     */
    public $input;

    /**
     * @description duplication
     * @var duplication
     */
    public $duplication;

}
