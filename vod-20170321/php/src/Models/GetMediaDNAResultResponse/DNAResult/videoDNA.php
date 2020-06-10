<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaDNAResultResponse\DNAResult;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaDNAResultResponse\DNAResult\videoDNA\detail;
use AlibabaCloud\Tea\Model;

class videoDNA extends Model
{
    /**
     * @description primaryKey
     *
     * @var string
     */
    public $primaryKey;

    /**
     * @description similarity
     *
     * @var string
     */
    public $similarity;

    /**
     * @description fpShotSlices
     *
     * @var array
     */
    public $detail;
    protected $_name = [
        'primaryKey' => 'PrimaryKey',
        'similarity' => 'Similarity',
        'detail'     => 'Detail',
    ];

    public function validate()
    {
        Model::validateRequired('primaryKey', $this->primaryKey, true);
        Model::validateRequired('similarity', $this->similarity, true);
        Model::validateRequired('detail', $this->detail, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->primaryKey) {
            $res['PrimaryKey'] = $this->primaryKey;
        }
        if (null !== $this->similarity) {
            $res['Similarity'] = $this->similarity;
        }
        if (null !== $this->detail) {
            $res['Detail'] = [];
            if (null !== $this->detail && \is_array($this->detail)) {
                $n = 0;
                foreach ($this->detail as $item) {
                    $res['Detail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoDNA
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrimaryKey'])) {
            $model->primaryKey = $map['PrimaryKey'];
        }
        if (isset($map['Similarity'])) {
            $model->similarity = $map['Similarity'];
        }
        if (isset($map['Detail'])) {
            if (!empty($map['Detail'])) {
                $model->detail = [];
                $n             = 0;
                foreach ($map['Detail'] as $item) {
                    $model->detail[$n++] = null !== $item ? detail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
