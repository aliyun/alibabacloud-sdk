<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainLogResponse\domainLogDetails;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainLogResponse\domainLogDetails\domainLogDetail\logInfos;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainLogResponse\domainLogDetails\domainLogDetail\pageInfos;

class domainLogDetail extends Model {
    protected $_name = [
        'domainName' => 'DomainName',
        'logCount' => 'LogCount',
        'logInfos' => 'LogInfos',
        'pageInfos' => 'PageInfos',
    ];
    public function validate() {
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('logCount', $this->logCount, true);
        Model::validateRequired('logInfos', $this->logInfos, true);
        Model::validateRequired('pageInfos', $this->pageInfos, true);
    }
    public function toMap() {
        $res = [];
        $res['DomainName'] = $this->domainName;
        $res['LogCount'] = $this->logCount;
        $res['LogInfos'] = null !== $this->logInfos ? $this->logInfos->toMap() : null;
        $res['PageInfos'] = null !== $this->pageInfos ? $this->pageInfos->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return domainLogDetail
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['DomainName'])){
            $model->domainName = $map['DomainName'];
        }
        if(isset($map['LogCount'])){
            $model->logCount = $map['LogCount'];
        }
        if(isset($map['LogInfos'])){
            $model->logInfos = logInfos::fromMap($map['LogInfos']);
        }
        if(isset($map['PageInfos'])){
            $model->pageInfos = pageInfos::fromMap($map['PageInfos']);
        }
        return $model;
    }
    /**
     * @description domainName
     * @var string
     */
    public $domainName;

    /**
     * @description logCount
     * @var integer
     */
    public $logCount;

    /**
     * @description logInfo
     * @var logInfos
     */
    public $logInfos;

    /**
     * @description pageInfo
     * @var pageInfos
     */
    public $pageInfos;

}
