<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponse\containerGroups\containers;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponse\containerGroups\containers\livenessProbe\httpGet;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponse\containerGroups\containers\livenessProbe\tcpSocket;

class livenessProbe extends Model {
    protected $_name = [
        'initialDelaySeconds' => 'InitialDelaySeconds',
        'periodSeconds' => 'PeriodSeconds',
        'timeoutSeconds' => 'TimeoutSeconds',
        'successThreshold' => 'SuccessThreshold',
        'failureThreshold' => 'FailureThreshold',
        'httpGet' => 'HttpGet',
        'tcpSocket' => 'TcpSocket',
        'execs' => 'Execs',
    ];
    public function validate() {
        Model::validateRequired('initialDelaySeconds', $this->initialDelaySeconds, true);
        Model::validateRequired('periodSeconds', $this->periodSeconds, true);
        Model::validateRequired('timeoutSeconds', $this->timeoutSeconds, true);
        Model::validateRequired('successThreshold', $this->successThreshold, true);
        Model::validateRequired('failureThreshold', $this->failureThreshold, true);
        Model::validateRequired('httpGet', $this->httpGet, true);
        Model::validateRequired('tcpSocket', $this->tcpSocket, true);
        Model::validateRequired('execs', $this->execs, true);
    }
    public function toMap() {
        $res = [];
        $res['InitialDelaySeconds'] = $this->initialDelaySeconds;
        $res['PeriodSeconds'] = $this->periodSeconds;
        $res['TimeoutSeconds'] = $this->timeoutSeconds;
        $res['SuccessThreshold'] = $this->successThreshold;
        $res['FailureThreshold'] = $this->failureThreshold;
        $res['HttpGet'] = null !== $this->httpGet ? $this->httpGet->toMap() : null;
        $res['TcpSocket'] = null !== $this->tcpSocket ? $this->tcpSocket->toMap() : null;
        $res['Execs'] = [];
        if(null !== $this->execs){
            $res['Execs'] = $this->execs;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return livenessProbe
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['InitialDelaySeconds'])){
            $model->initialDelaySeconds = $map['InitialDelaySeconds'];
        }
        if(isset($map['PeriodSeconds'])){
            $model->periodSeconds = $map['PeriodSeconds'];
        }
        if(isset($map['TimeoutSeconds'])){
            $model->timeoutSeconds = $map['TimeoutSeconds'];
        }
        if(isset($map['SuccessThreshold'])){
            $model->successThreshold = $map['SuccessThreshold'];
        }
        if(isset($map['FailureThreshold'])){
            $model->failureThreshold = $map['FailureThreshold'];
        }
        if(isset($map['HttpGet'])){
            $model->httpGet = httpGet::fromMap($map['HttpGet']);
        }
        if(isset($map['TcpSocket'])){
            $model->tcpSocket = tcpSocket::fromMap($map['TcpSocket']);
        }
        if(isset($map['Execs'])){
            if(!empty($map['Execs'])){
                $model->execs = [];
                $model->execs = $map['Execs'];
            }
        }
        return $model;
    }
    /**
     * @description initialDelaySeconds
     * @var integer
     */
    public $initialDelaySeconds;

    /**
     * @description periodSeconds
     * @var integer
     */
    public $periodSeconds;

    /**
     * @description timeoutSeconds
     * @var integer
     */
    public $timeoutSeconds;

    /**
     * @description successThreshold
     * @var integer
     */
    public $successThreshold;

    /**
     * @description failureThreshold
     * @var integer
     */
    public $failureThreshold;

    /**
     * @description httpGet
     * @var httpGet
     */
    public $httpGet;

    /**
     * @description tcpSocket
     * @var tcpSocket
     */
    public $tcpSocket;

    /**
     * @description exec
     * @var array
     */
    public $execs;

}
