<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\AddRtcAccountRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\AddRtcAccountResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\BatchRobotSmartCallRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\BatchRobotSmartCallResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\BindNumberAndVoipIdRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\BindNumberAndVoipIdResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\CancelCallRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\CancelCallResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\CancelOrderRobotTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\CancelOrderRobotTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\CancelRobotTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\CancelRobotTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\ClickToDialRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\ClickToDialResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\CreateRobotTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\CreateRobotTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\DeleteRobotTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\DeleteRobotTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\DescribeRecordDataRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\DescribeRecordDataResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\DoRtcNumberAuthRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\DoRtcNumberAuthResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\GetRtcTokenRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\GetRtcTokenResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\IvrCallRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\IvrCallResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\ListOrderedNumbersRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\ListOrderedNumbersResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\ListOutboundStrategiesRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\ListOutboundStrategiesResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\ListRobotTaskCallsRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\ListRobotTaskCallsResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\QueryCallDetailByCallIdRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\QueryCallDetailByCallIdResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\QueryCallDetailByTaskIdRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\QueryCallDetailByTaskIdResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\QueryRobotInfoListRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\QueryRobotInfoListResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\QueryRobotTaskCallDetailRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\QueryRobotTaskCallDetailResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\QueryRobotTaskCallListRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\QueryRobotTaskCallListResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\QueryRobotTaskDetailRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\QueryRobotTaskDetailResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\QueryRobotTaskListRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\QueryRobotTaskListResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\QueryRobotv2AllListRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\QueryRobotv2AllListResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\QueryRtcNumberAuthStatusRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\QueryRtcNumberAuthStatusResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\QueryVoipNumberBindInfosRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\QueryVoipNumberBindInfosResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\ReportVoipProblemsRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\ReportVoipProblemsResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\SingleCallByTtsRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\SingleCallByTtsResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\SingleCallByVoiceRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\SingleCallByVoiceResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\SmartCallOperateRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\SmartCallOperateResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\SmartCallRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\SmartCallResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\StartMicroOutboundRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\StartMicroOutboundResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\StartRobotTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\StartRobotTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\StopRobotTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\StopRobotTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\UnbindNumberAndVoipIdRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\UnbindNumberAndVoipIdResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\UndoRtcNumberAuthRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\UndoRtcNumberAuthResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\UploadRobotTaskCalledFileRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\UploadRobotTaskCalledFileResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\VoipAddAccountRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\VoipAddAccountResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\VoipGetTokenRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\VoipGetTokenResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Dyvmsapi
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint($this->_productId, $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @throws \Exception
     *
     * @return ListRobotTaskCallsResponse
     */
    public function listRobotTaskCallsEx(ListRobotTaskCallsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListRobotTaskCallsResponse::fromMap($this->doRequest('ListRobotTaskCalls', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListRobotTaskCallsResponse
     */
    public function listRobotTaskCalls(ListRobotTaskCallsRequest $request)
    {
        Utils::validateModel($request);
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->listRobotTaskCallsEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DoRtcNumberAuthResponse
     */
    public function doRtcNumberAuthEx(DoRtcNumberAuthRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DoRtcNumberAuthResponse::fromMap($this->doRequest('DoRtcNumberAuth', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DoRtcNumberAuthResponse
     */
    public function doRtcNumberAuth(DoRtcNumberAuthRequest $request)
    {
        Utils::validateModel($request);
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->doRtcNumberAuthEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UndoRtcNumberAuthResponse
     */
    public function undoRtcNumberAuthEx(UndoRtcNumberAuthRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UndoRtcNumberAuthResponse::fromMap($this->doRequest('UndoRtcNumberAuth', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UndoRtcNumberAuthResponse
     */
    public function undoRtcNumberAuth(UndoRtcNumberAuthRequest $request)
    {
        Utils::validateModel($request);
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->undoRtcNumberAuthEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryRtcNumberAuthStatusResponse
     */
    public function queryRtcNumberAuthStatusEx(QueryRtcNumberAuthStatusRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryRtcNumberAuthStatusResponse::fromMap($this->doRequest('QueryRtcNumberAuthStatus', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryRtcNumberAuthStatusResponse
     */
    public function queryRtcNumberAuthStatus(QueryRtcNumberAuthStatusRequest $request)
    {
        Utils::validateModel($request);
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->queryRtcNumberAuthStatusEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListOrderedNumbersResponse
     */
    public function listOrderedNumbersEx(ListOrderedNumbersRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListOrderedNumbersResponse::fromMap($this->doRequest('ListOrderedNumbers', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListOrderedNumbersResponse
     */
    public function listOrderedNumbers(ListOrderedNumbersRequest $request)
    {
        Utils::validateModel($request);
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->listOrderedNumbersEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return StartMicroOutboundResponse
     */
    public function startMicroOutboundEx(StartMicroOutboundRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return StartMicroOutboundResponse::fromMap($this->doRequest('StartMicroOutbound', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return StartMicroOutboundResponse
     */
    public function startMicroOutbound(StartMicroOutboundRequest $request)
    {
        Utils::validateModel($request);
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->startMicroOutboundEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListOutboundStrategiesResponse
     */
    public function listOutboundStrategiesEx(ListOutboundStrategiesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListOutboundStrategiesResponse::fromMap($this->doRequest('ListOutboundStrategies', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListOutboundStrategiesResponse
     */
    public function listOutboundStrategies(ListOutboundStrategiesRequest $request)
    {
        Utils::validateModel($request);
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->listOutboundStrategiesEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeRecordDataResponse
     */
    public function describeRecordDataEx(DescribeRecordDataRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeRecordDataResponse::fromMap($this->doRequest('DescribeRecordData', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeRecordDataResponse
     */
    public function describeRecordData(DescribeRecordDataRequest $request)
    {
        Utils::validateModel($request);
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->describeRecordDataEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryVoipNumberBindInfosResponse
     */
    public function queryVoipNumberBindInfosEx(QueryVoipNumberBindInfosRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryVoipNumberBindInfosResponse::fromMap($this->doRequest('QueryVoipNumberBindInfos', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryVoipNumberBindInfosResponse
     */
    public function queryVoipNumberBindInfos(QueryVoipNumberBindInfosRequest $request)
    {
        Utils::validateModel($request);
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->queryVoipNumberBindInfosEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ReportVoipProblemsResponse
     */
    public function reportVoipProblemsEx(ReportVoipProblemsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ReportVoipProblemsResponse::fromMap($this->doRequest('ReportVoipProblems', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ReportVoipProblemsResponse
     */
    public function reportVoipProblems(ReportVoipProblemsRequest $request)
    {
        Utils::validateModel($request);
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->reportVoipProblemsEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UnbindNumberAndVoipIdResponse
     */
    public function unbindNumberAndVoipIdEx(UnbindNumberAndVoipIdRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UnbindNumberAndVoipIdResponse::fromMap($this->doRequest('UnbindNumberAndVoipId', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UnbindNumberAndVoipIdResponse
     */
    public function unbindNumberAndVoipId(UnbindNumberAndVoipIdRequest $request)
    {
        Utils::validateModel($request);
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->unbindNumberAndVoipIdEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return BindNumberAndVoipIdResponse
     */
    public function bindNumberAndVoipIdEx(BindNumberAndVoipIdRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return BindNumberAndVoipIdResponse::fromMap($this->doRequest('BindNumberAndVoipId', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return BindNumberAndVoipIdResponse
     */
    public function bindNumberAndVoipId(BindNumberAndVoipIdRequest $request)
    {
        Utils::validateModel($request);
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->bindNumberAndVoipIdEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CancelRobotTaskResponse
     */
    public function cancelRobotTaskEx(CancelRobotTaskRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CancelRobotTaskResponse::fromMap($this->doRequest('CancelRobotTask', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CancelRobotTaskResponse
     */
    public function cancelRobotTask(CancelRobotTaskRequest $request)
    {
        Utils::validateModel($request);
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->cancelRobotTaskEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UploadRobotTaskCalledFileResponse
     */
    public function uploadRobotTaskCalledFileEx(UploadRobotTaskCalledFileRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UploadRobotTaskCalledFileResponse::fromMap($this->doRequest('UploadRobotTaskCalledFile', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UploadRobotTaskCalledFileResponse
     */
    public function uploadRobotTaskCalledFile(UploadRobotTaskCalledFileRequest $request)
    {
        Utils::validateModel($request);
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->uploadRobotTaskCalledFileEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteRobotTaskResponse
     */
    public function deleteRobotTaskEx(DeleteRobotTaskRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteRobotTaskResponse::fromMap($this->doRequest('DeleteRobotTask', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteRobotTaskResponse
     */
    public function deleteRobotTask(DeleteRobotTaskRequest $request)
    {
        Utils::validateModel($request);
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->deleteRobotTaskEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return StopRobotTaskResponse
     */
    public function stopRobotTaskEx(StopRobotTaskRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return StopRobotTaskResponse::fromMap($this->doRequest('StopRobotTask', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return StopRobotTaskResponse
     */
    public function stopRobotTask(StopRobotTaskRequest $request)
    {
        Utils::validateModel($request);
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->stopRobotTaskEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryRobotTaskCallDetailResponse
     */
    public function queryRobotTaskCallDetailEx(QueryRobotTaskCallDetailRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryRobotTaskCallDetailResponse::fromMap($this->doRequest('QueryRobotTaskCallDetail', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryRobotTaskCallDetailResponse
     */
    public function queryRobotTaskCallDetail(QueryRobotTaskCallDetailRequest $request)
    {
        Utils::validateModel($request);
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->queryRobotTaskCallDetailEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryRobotv2AllListResponse
     */
    public function queryRobotv2AllListEx(QueryRobotv2AllListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryRobotv2AllListResponse::fromMap($this->doRequest('QueryRobotv2AllList', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryRobotv2AllListResponse
     */
    public function queryRobotv2AllList(QueryRobotv2AllListRequest $request)
    {
        Utils::validateModel($request);
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->queryRobotv2AllListEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryRobotTaskDetailResponse
     */
    public function queryRobotTaskDetailEx(QueryRobotTaskDetailRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryRobotTaskDetailResponse::fromMap($this->doRequest('QueryRobotTaskDetail', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryRobotTaskDetailResponse
     */
    public function queryRobotTaskDetail(QueryRobotTaskDetailRequest $request)
    {
        Utils::validateModel($request);
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->queryRobotTaskDetailEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryRobotTaskCallListResponse
     */
    public function queryRobotTaskCallListEx(QueryRobotTaskCallListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryRobotTaskCallListResponse::fromMap($this->doRequest('QueryRobotTaskCallList', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryRobotTaskCallListResponse
     */
    public function queryRobotTaskCallList(QueryRobotTaskCallListRequest $request)
    {
        Utils::validateModel($request);
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->queryRobotTaskCallListEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return StartRobotTaskResponse
     */
    public function startRobotTaskEx(StartRobotTaskRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return StartRobotTaskResponse::fromMap($this->doRequest('StartRobotTask', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return StartRobotTaskResponse
     */
    public function startRobotTask(StartRobotTaskRequest $request)
    {
        Utils::validateModel($request);
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->startRobotTaskEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryRobotTaskListResponse
     */
    public function queryRobotTaskListEx(QueryRobotTaskListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryRobotTaskListResponse::fromMap($this->doRequest('QueryRobotTaskList', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryRobotTaskListResponse
     */
    public function queryRobotTaskList(QueryRobotTaskListRequest $request)
    {
        Utils::validateModel($request);
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->queryRobotTaskListEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateRobotTaskResponse
     */
    public function createRobotTaskEx(CreateRobotTaskRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateRobotTaskResponse::fromMap($this->doRequest('CreateRobotTask', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateRobotTaskResponse
     */
    public function createRobotTask(CreateRobotTaskRequest $request)
    {
        Utils::validateModel($request);
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->createRobotTaskEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CancelOrderRobotTaskResponse
     */
    public function cancelOrderRobotTaskEx(CancelOrderRobotTaskRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CancelOrderRobotTaskResponse::fromMap($this->doRequest('CancelOrderRobotTask', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CancelOrderRobotTaskResponse
     */
    public function cancelOrderRobotTask(CancelOrderRobotTaskRequest $request)
    {
        Utils::validateModel($request);
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->cancelOrderRobotTaskEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SmartCallOperateResponse
     */
    public function smartCallOperateEx(SmartCallOperateRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SmartCallOperateResponse::fromMap($this->doRequest('SmartCallOperate', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SmartCallOperateResponse
     */
    public function smartCallOperate(SmartCallOperateRequest $request)
    {
        Utils::validateModel($request);
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->smartCallOperateEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryRobotInfoListResponse
     */
    public function queryRobotInfoListEx(QueryRobotInfoListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryRobotInfoListResponse::fromMap($this->doRequest('QueryRobotInfoList', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryRobotInfoListResponse
     */
    public function queryRobotInfoList(QueryRobotInfoListRequest $request)
    {
        Utils::validateModel($request);
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->queryRobotInfoListEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return BatchRobotSmartCallResponse
     */
    public function batchRobotSmartCallEx(BatchRobotSmartCallRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return BatchRobotSmartCallResponse::fromMap($this->doRequest('BatchRobotSmartCall', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return BatchRobotSmartCallResponse
     */
    public function batchRobotSmartCall(BatchRobotSmartCallRequest $request)
    {
        Utils::validateModel($request);
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->batchRobotSmartCallEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryCallDetailByTaskIdResponse
     */
    public function queryCallDetailByTaskIdEx(QueryCallDetailByTaskIdRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryCallDetailByTaskIdResponse::fromMap($this->doRequest('QueryCallDetailByTaskId', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryCallDetailByTaskIdResponse
     */
    public function queryCallDetailByTaskId(QueryCallDetailByTaskIdRequest $request)
    {
        Utils::validateModel($request);
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->queryCallDetailByTaskIdEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetRtcTokenResponse
     */
    public function getRtcTokenEx(GetRtcTokenRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetRtcTokenResponse::fromMap($this->doRequest('GetRtcToken', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetRtcTokenResponse
     */
    public function getRtcToken(GetRtcTokenRequest $request)
    {
        Utils::validateModel($request);
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->getRtcTokenEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AddRtcAccountResponse
     */
    public function addRtcAccountEx(AddRtcAccountRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AddRtcAccountResponse::fromMap($this->doRequest('AddRtcAccount', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AddRtcAccountResponse
     */
    public function addRtcAccount(AddRtcAccountRequest $request)
    {
        Utils::validateModel($request);
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->addRtcAccountEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return VoipAddAccountResponse
     */
    public function voipAddAccountEx(VoipAddAccountRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return VoipAddAccountResponse::fromMap($this->doRequest('VoipAddAccount', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return VoipAddAccountResponse
     */
    public function voipAddAccount(VoipAddAccountRequest $request)
    {
        Utils::validateModel($request);
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->voipAddAccountEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return VoipGetTokenResponse
     */
    public function voipGetTokenEx(VoipGetTokenRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return VoipGetTokenResponse::fromMap($this->doRequest('VoipGetToken', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return VoipGetTokenResponse
     */
    public function voipGetToken(VoipGetTokenRequest $request)
    {
        Utils::validateModel($request);
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->voipGetTokenEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SmartCallResponse
     */
    public function smartCallEx(SmartCallRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SmartCallResponse::fromMap($this->doRequest('SmartCall', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SmartCallResponse
     */
    public function smartCall(SmartCallRequest $request)
    {
        Utils::validateModel($request);
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->smartCallEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryCallDetailByCallIdResponse
     */
    public function queryCallDetailByCallIdEx(QueryCallDetailByCallIdRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryCallDetailByCallIdResponse::fromMap($this->doRequest('QueryCallDetailByCallId', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryCallDetailByCallIdResponse
     */
    public function queryCallDetailByCallId(QueryCallDetailByCallIdRequest $request)
    {
        Utils::validateModel($request);
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->queryCallDetailByCallIdEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CancelCallResponse
     */
    public function cancelCallEx(CancelCallRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CancelCallResponse::fromMap($this->doRequest('CancelCall', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CancelCallResponse
     */
    public function cancelCall(CancelCallRequest $request)
    {
        Utils::validateModel($request);
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->cancelCallEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ClickToDialResponse
     */
    public function clickToDialEx(ClickToDialRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ClickToDialResponse::fromMap($this->doRequest('ClickToDial', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ClickToDialResponse
     */
    public function clickToDial(ClickToDialRequest $request)
    {
        Utils::validateModel($request);
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->clickToDialEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return IvrCallResponse
     */
    public function ivrCallEx(IvrCallRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return IvrCallResponse::fromMap($this->doRequest('IvrCall', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return IvrCallResponse
     */
    public function ivrCall(IvrCallRequest $request)
    {
        Utils::validateModel($request);
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->ivrCallEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SingleCallByVoiceResponse
     */
    public function singleCallByVoiceEx(SingleCallByVoiceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SingleCallByVoiceResponse::fromMap($this->doRequest('SingleCallByVoice', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SingleCallByVoiceResponse
     */
    public function singleCallByVoice(SingleCallByVoiceRequest $request)
    {
        Utils::validateModel($request);
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->singleCallByVoiceEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SingleCallByTtsResponse
     */
    public function singleCallByTtsEx(SingleCallByTtsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SingleCallByTtsResponse::fromMap($this->doRequest('SingleCallByTts', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SingleCallByTtsResponse
     */
    public function singleCallByTts(SingleCallByTtsRequest $request)
    {
        Utils::validateModel($request);
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->singleCallByTtsEx($request, $runtime);
    }

    /**
     * @param string $productId
     * @param string $regionId
     * @param string $endpointRule
     * @param string $network
     * @param string $suffix
     * @param array  $endpointMap
     * @param string $endpoint
     *
     * @throws \Exception
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_($endpointMap['regionId'])) {
            return $endpointMap['regionId'];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }
}
