<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAIVideoTagResultResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIVideoTagResultResponse\videoTagResult\category;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIVideoTagResultResponse\videoTagResult\person;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIVideoTagResultResponse\videoTagResult\time;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIVideoTagResultResponse\videoTagResult\location;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIVideoTagResultResponse\videoTagResult\keyword;

class videoTagResult extends Model {
    protected $_name = [
        'category' => 'Category',
        'person' => 'Person',
        'time' => 'Time',
        'location' => 'Location',
        'keyword' => 'Keyword',
    ];
    public function validate() {
        Model::validateRequired('category', $this->category, true);
        Model::validateRequired('person', $this->person, true);
        Model::validateRequired('time', $this->time, true);
        Model::validateRequired('location', $this->location, true);
        Model::validateRequired('keyword', $this->keyword, true);
    }
    public function toMap() {
        $res = [];
        $res['Category'] = [];
        if(null !== $this->category && is_array($this->category)){
            $n = 0;
            foreach($this->category as $item){
                $res['Category'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['Person'] = [];
        if(null !== $this->person && is_array($this->person)){
            $n = 0;
            foreach($this->person as $item){
                $res['Person'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['Time'] = [];
        if(null !== $this->time && is_array($this->time)){
            $n = 0;
            foreach($this->time as $item){
                $res['Time'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['Location'] = [];
        if(null !== $this->location && is_array($this->location)){
            $n = 0;
            foreach($this->location as $item){
                $res['Location'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['Keyword'] = [];
        if(null !== $this->keyword && is_array($this->keyword)){
            $n = 0;
            foreach($this->keyword as $item){
                $res['Keyword'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return videoTagResult
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Category'])){
            if(!empty($map['Category'])){
                $model->category = [];
                $n = 0;
                foreach($map['Category'] as $item) {
                    $model->category[$n++] = null !== $item ? category::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['Person'])){
            if(!empty($map['Person'])){
                $model->person = [];
                $n = 0;
                foreach($map['Person'] as $item) {
                    $model->person[$n++] = null !== $item ? person::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['Time'])){
            if(!empty($map['Time'])){
                $model->time = [];
                $n = 0;
                foreach($map['Time'] as $item) {
                    $model->time[$n++] = null !== $item ? time::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['Location'])){
            if(!empty($map['Location'])){
                $model->location = [];
                $n = 0;
                foreach($map['Location'] as $item) {
                    $model->location[$n++] = null !== $item ? location::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['Keyword'])){
            if(!empty($map['Keyword'])){
                $model->keyword = [];
                $n = 0;
                foreach($map['Keyword'] as $item) {
                    $model->keyword[$n++] = null !== $item ? keyword::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description category
     * @var array
     */
    public $category;

    /**
     * @description person
     * @var array
     */
    public $person;

    /**
     * @description time
     * @var array
     */
    public $time;

    /**
     * @description location
     * @var array
     */
    public $location;

    /**
     * @description keyword
     * @var array
     */
    public $keyword;

}
