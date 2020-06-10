<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\AddRtcAccountRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\AddRtcAccountResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\BatchRobotSmartCallRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\BatchRobotSmartCallResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\BindNumberAndVoipIdRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\BindNumberAndVoipIdResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CancelCallRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CancelCallResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CancelOrderRobotTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CancelOrderRobotTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CancelRobotTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CancelRobotTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClickToDialRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClickToDialResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CreateRobotTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CreateRobotTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\DeleteRobotTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\DeleteRobotTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\DescribeRecordDataRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\DescribeRecordDataResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\DoRtcNumberAuthRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\DoRtcNumberAuthResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\GetRtcTokenRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\GetRtcTokenResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\IvrCallRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\IvrCallResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListOrderedNumbersRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListOrderedNumbersResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListOutboundStrategiesRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListOutboundStrategiesResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListRobotTaskCallsRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListRobotTaskCallsResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryCallDetailByCallIdRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryCallDetailByCallIdResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryCallDetailByTaskIdRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryCallDetailByTaskIdResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryRobotInfoListRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryRobotInfoListResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryRobotTaskCallDetailRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryRobotTaskCallDetailResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryRobotTaskCallListRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryRobotTaskCallListResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryRobotTaskDetailRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryRobotTaskDetailResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryRobotTaskListRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryRobotTaskListResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryRobotv2AllListRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryRobotv2AllListResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryRtcNumberAuthStatusRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryRtcNumberAuthStatusResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryVoipNumberBindInfosRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryVoipNumberBindInfosResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ReportVoipProblemsRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ReportVoipProblemsResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SingleCallByTtsRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SingleCallByTtsResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SingleCallByVoiceRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SingleCallByVoiceResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SmartCallOperateRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SmartCallOperateResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SmartCallRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SmartCallResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\StartMicroOutboundRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\StartMicroOutboundResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\StartRobotTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\StartRobotTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\StopRobotTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\StopRobotTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\UnbindNumberAndVoipIdRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\UnbindNumberAndVoipIdResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\UndoRtcNumberAuthRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\UndoRtcNumberAuthResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\UploadRobotTaskCalledFileRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\UploadRobotTaskCalledFileResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\VoipAddAccountRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\VoipAddAccountResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\VoipGetTokenRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\VoipGetTokenResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Dyvmsapi extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dyvmsapi', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @throws \Exception
     *
     * @return ListRobotTaskCallsResponse
     */
    public function listRobotTaskCallsWithOptions(ListRobotTaskCallsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListRobotTaskCallsResponse::fromMap($this->doRequest('ListRobotTaskCalls', 'HTTPS', 'POST', '2017-05-25', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListRobotTaskCallsResponse
     */
    public function listRobotTaskCalls(ListRobotTaskCallsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRobotTaskCallsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DoRtcNumberAuthResponse
     */
    public function doRtcNumberAuthWithOptions(DoRtcNumberAuthRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DoRtcNumberAuthResponse::fromMap($this->doRequest('DoRtcNumberAuth', 'HTTPS', 'POST', '2017-05-25', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DoRtcNumberAuthResponse
     */
    public function doRtcNumberAuth(DoRtcNumberAuthRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->doRtcNumberAuthWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UndoRtcNumberAuthResponse
     */
    public function undoRtcNumberAuthWithOptions(UndoRtcNumberAuthRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UndoRtcNumberAuthResponse::fromMap($this->doRequest('UndoRtcNumberAuth', 'HTTPS', 'POST', '2017-05-25', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UndoRtcNumberAuthResponse
     */
    public function undoRtcNumberAuth(UndoRtcNumberAuthRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->undoRtcNumberAuthWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryRtcNumberAuthStatusResponse
     */
    public function queryRtcNumberAuthStatusWithOptions(QueryRtcNumberAuthStatusRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryRtcNumberAuthStatusResponse::fromMap($this->doRequest('QueryRtcNumberAuthStatus', 'HTTPS', 'POST', '2017-05-25', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryRtcNumberAuthStatusResponse
     */
    public function queryRtcNumberAuthStatus(QueryRtcNumberAuthStatusRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRtcNumberAuthStatusWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListOrderedNumbersResponse
     */
    public function listOrderedNumbersWithOptions(ListOrderedNumbersRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListOrderedNumbersResponse::fromMap($this->doRequest('ListOrderedNumbers', 'HTTPS', 'POST', '2017-05-25', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListOrderedNumbersResponse
     */
    public function listOrderedNumbers(ListOrderedNumbersRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOrderedNumbersWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return StartMicroOutboundResponse
     */
    public function startMicroOutboundWithOptions(StartMicroOutboundRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return StartMicroOutboundResponse::fromMap($this->doRequest('StartMicroOutbound', 'HTTPS', 'POST', '2017-05-25', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return StartMicroOutboundResponse
     */
    public function startMicroOutbound(StartMicroOutboundRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startMicroOutboundWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListOutboundStrategiesResponse
     */
    public function listOutboundStrategiesWithOptions(ListOutboundStrategiesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListOutboundStrategiesResponse::fromMap($this->doRequest('ListOutboundStrategies', 'HTTPS', 'POST', '2017-05-25', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListOutboundStrategiesResponse
     */
    public function listOutboundStrategies(ListOutboundStrategiesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOutboundStrategiesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeRecordDataResponse
     */
    public function describeRecordDataWithOptions(DescribeRecordDataRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeRecordDataResponse::fromMap($this->doRequest('DescribeRecordData', 'HTTPS', 'POST', '2017-05-25', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeRecordDataResponse
     */
    public function describeRecordData(DescribeRecordDataRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecordDataWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryVoipNumberBindInfosResponse
     */
    public function queryVoipNumberBindInfosWithOptions(QueryVoipNumberBindInfosRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryVoipNumberBindInfosResponse::fromMap($this->doRequest('QueryVoipNumberBindInfos', 'HTTPS', 'POST', '2017-05-25', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryVoipNumberBindInfosResponse
     */
    public function queryVoipNumberBindInfos(QueryVoipNumberBindInfosRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryVoipNumberBindInfosWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ReportVoipProblemsResponse
     */
    public function reportVoipProblemsWithOptions(ReportVoipProblemsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ReportVoipProblemsResponse::fromMap($this->doRequest('ReportVoipProblems', 'HTTPS', 'POST', '2017-05-25', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ReportVoipProblemsResponse
     */
    public function reportVoipProblems(ReportVoipProblemsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportVoipProblemsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UnbindNumberAndVoipIdResponse
     */
    public function unbindNumberAndVoipIdWithOptions(UnbindNumberAndVoipIdRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UnbindNumberAndVoipIdResponse::fromMap($this->doRequest('UnbindNumberAndVoipId', 'HTTPS', 'POST', '2017-05-25', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UnbindNumberAndVoipIdResponse
     */
    public function unbindNumberAndVoipId(UnbindNumberAndVoipIdRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindNumberAndVoipIdWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return BindNumberAndVoipIdResponse
     */
    public function bindNumberAndVoipIdWithOptions(BindNumberAndVoipIdRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return BindNumberAndVoipIdResponse::fromMap($this->doRequest('BindNumberAndVoipId', 'HTTPS', 'POST', '2017-05-25', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return BindNumberAndVoipIdResponse
     */
    public function bindNumberAndVoipId(BindNumberAndVoipIdRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindNumberAndVoipIdWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CancelRobotTaskResponse
     */
    public function cancelRobotTaskWithOptions(CancelRobotTaskRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CancelRobotTaskResponse::fromMap($this->doRequest('CancelRobotTask', 'HTTPS', 'POST', '2017-05-25', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CancelRobotTaskResponse
     */
    public function cancelRobotTask(CancelRobotTaskRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelRobotTaskWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UploadRobotTaskCalledFileResponse
     */
    public function uploadRobotTaskCalledFileWithOptions(UploadRobotTaskCalledFileRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UploadRobotTaskCalledFileResponse::fromMap($this->doRequest('UploadRobotTaskCalledFile', 'HTTPS', 'POST', '2017-05-25', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UploadRobotTaskCalledFileResponse
     */
    public function uploadRobotTaskCalledFile(UploadRobotTaskCalledFileRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadRobotTaskCalledFileWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteRobotTaskResponse
     */
    public function deleteRobotTaskWithOptions(DeleteRobotTaskRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteRobotTaskResponse::fromMap($this->doRequest('DeleteRobotTask', 'HTTPS', 'POST', '2017-05-25', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteRobotTaskResponse
     */
    public function deleteRobotTask(DeleteRobotTaskRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRobotTaskWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return StopRobotTaskResponse
     */
    public function stopRobotTaskWithOptions(StopRobotTaskRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return StopRobotTaskResponse::fromMap($this->doRequest('StopRobotTask', 'HTTPS', 'POST', '2017-05-25', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return StopRobotTaskResponse
     */
    public function stopRobotTask(StopRobotTaskRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopRobotTaskWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryRobotTaskCallDetailResponse
     */
    public function queryRobotTaskCallDetailWithOptions(QueryRobotTaskCallDetailRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryRobotTaskCallDetailResponse::fromMap($this->doRequest('QueryRobotTaskCallDetail', 'HTTPS', 'POST', '2017-05-25', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryRobotTaskCallDetailResponse
     */
    public function queryRobotTaskCallDetail(QueryRobotTaskCallDetailRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRobotTaskCallDetailWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryRobotv2AllListResponse
     */
    public function queryRobotv2AllListWithOptions(QueryRobotv2AllListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryRobotv2AllListResponse::fromMap($this->doRequest('QueryRobotv2AllList', 'HTTPS', 'POST', '2017-05-25', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryRobotv2AllListResponse
     */
    public function queryRobotv2AllList(QueryRobotv2AllListRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRobotv2AllListWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryRobotTaskDetailResponse
     */
    public function queryRobotTaskDetailWithOptions(QueryRobotTaskDetailRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryRobotTaskDetailResponse::fromMap($this->doRequest('QueryRobotTaskDetail', 'HTTPS', 'POST', '2017-05-25', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryRobotTaskDetailResponse
     */
    public function queryRobotTaskDetail(QueryRobotTaskDetailRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRobotTaskDetailWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryRobotTaskCallListResponse
     */
    public function queryRobotTaskCallListWithOptions(QueryRobotTaskCallListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryRobotTaskCallListResponse::fromMap($this->doRequest('QueryRobotTaskCallList', 'HTTPS', 'POST', '2017-05-25', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryRobotTaskCallListResponse
     */
    public function queryRobotTaskCallList(QueryRobotTaskCallListRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRobotTaskCallListWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return StartRobotTaskResponse
     */
    public function startRobotTaskWithOptions(StartRobotTaskRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return StartRobotTaskResponse::fromMap($this->doRequest('StartRobotTask', 'HTTPS', 'POST', '2017-05-25', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return StartRobotTaskResponse
     */
    public function startRobotTask(StartRobotTaskRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startRobotTaskWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryRobotTaskListResponse
     */
    public function queryRobotTaskListWithOptions(QueryRobotTaskListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryRobotTaskListResponse::fromMap($this->doRequest('QueryRobotTaskList', 'HTTPS', 'POST', '2017-05-25', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryRobotTaskListResponse
     */
    public function queryRobotTaskList(QueryRobotTaskListRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRobotTaskListWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateRobotTaskResponse
     */
    public function createRobotTaskWithOptions(CreateRobotTaskRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateRobotTaskResponse::fromMap($this->doRequest('CreateRobotTask', 'HTTPS', 'POST', '2017-05-25', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateRobotTaskResponse
     */
    public function createRobotTask(CreateRobotTaskRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRobotTaskWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CancelOrderRobotTaskResponse
     */
    public function cancelOrderRobotTaskWithOptions(CancelOrderRobotTaskRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CancelOrderRobotTaskResponse::fromMap($this->doRequest('CancelOrderRobotTask', 'HTTPS', 'POST', '2017-05-25', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CancelOrderRobotTaskResponse
     */
    public function cancelOrderRobotTask(CancelOrderRobotTaskRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelOrderRobotTaskWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SmartCallOperateResponse
     */
    public function smartCallOperateWithOptions(SmartCallOperateRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SmartCallOperateResponse::fromMap($this->doRequest('SmartCallOperate', 'HTTPS', 'POST', '2017-05-25', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SmartCallOperateResponse
     */
    public function smartCallOperate(SmartCallOperateRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->smartCallOperateWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryRobotInfoListResponse
     */
    public function queryRobotInfoListWithOptions(QueryRobotInfoListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryRobotInfoListResponse::fromMap($this->doRequest('QueryRobotInfoList', 'HTTPS', 'POST', '2017-05-25', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryRobotInfoListResponse
     */
    public function queryRobotInfoList(QueryRobotInfoListRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRobotInfoListWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return BatchRobotSmartCallResponse
     */
    public function batchRobotSmartCallWithOptions(BatchRobotSmartCallRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return BatchRobotSmartCallResponse::fromMap($this->doRequest('BatchRobotSmartCall', 'HTTPS', 'POST', '2017-05-25', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return BatchRobotSmartCallResponse
     */
    public function batchRobotSmartCall(BatchRobotSmartCallRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchRobotSmartCallWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryCallDetailByTaskIdResponse
     */
    public function queryCallDetailByTaskIdWithOptions(QueryCallDetailByTaskIdRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryCallDetailByTaskIdResponse::fromMap($this->doRequest('QueryCallDetailByTaskId', 'HTTPS', 'POST', '2017-05-25', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryCallDetailByTaskIdResponse
     */
    public function queryCallDetailByTaskId(QueryCallDetailByTaskIdRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCallDetailByTaskIdWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetRtcTokenResponse
     */
    public function getRtcTokenWithOptions(GetRtcTokenRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetRtcTokenResponse::fromMap($this->doRequest('GetRtcToken', 'HTTPS', 'POST', '2017-05-25', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetRtcTokenResponse
     */
    public function getRtcToken(GetRtcTokenRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRtcTokenWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AddRtcAccountResponse
     */
    public function addRtcAccountWithOptions(AddRtcAccountRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AddRtcAccountResponse::fromMap($this->doRequest('AddRtcAccount', 'HTTPS', 'POST', '2017-05-25', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AddRtcAccountResponse
     */
    public function addRtcAccount(AddRtcAccountRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addRtcAccountWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return VoipAddAccountResponse
     */
    public function voipAddAccountWithOptions(VoipAddAccountRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return VoipAddAccountResponse::fromMap($this->doRequest('VoipAddAccount', 'HTTPS', 'POST', '2017-05-25', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return VoipAddAccountResponse
     */
    public function voipAddAccount(VoipAddAccountRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->voipAddAccountWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return VoipGetTokenResponse
     */
    public function voipGetTokenWithOptions(VoipGetTokenRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return VoipGetTokenResponse::fromMap($this->doRequest('VoipGetToken', 'HTTPS', 'POST', '2017-05-25', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return VoipGetTokenResponse
     */
    public function voipGetToken(VoipGetTokenRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->voipGetTokenWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SmartCallResponse
     */
    public function smartCallWithOptions(SmartCallRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SmartCallResponse::fromMap($this->doRequest('SmartCall', 'HTTPS', 'POST', '2017-05-25', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SmartCallResponse
     */
    public function smartCall(SmartCallRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->smartCallWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryCallDetailByCallIdResponse
     */
    public function queryCallDetailByCallIdWithOptions(QueryCallDetailByCallIdRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryCallDetailByCallIdResponse::fromMap($this->doRequest('QueryCallDetailByCallId', 'HTTPS', 'POST', '2017-05-25', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryCallDetailByCallIdResponse
     */
    public function queryCallDetailByCallId(QueryCallDetailByCallIdRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCallDetailByCallIdWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CancelCallResponse
     */
    public function cancelCallWithOptions(CancelCallRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CancelCallResponse::fromMap($this->doRequest('CancelCall', 'HTTPS', 'POST', '2017-05-25', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CancelCallResponse
     */
    public function cancelCall(CancelCallRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelCallWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ClickToDialResponse
     */
    public function clickToDialWithOptions(ClickToDialRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ClickToDialResponse::fromMap($this->doRequest('ClickToDial', 'HTTPS', 'POST', '2017-05-25', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ClickToDialResponse
     */
    public function clickToDial(ClickToDialRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clickToDialWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return IvrCallResponse
     */
    public function ivrCallWithOptions(IvrCallRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return IvrCallResponse::fromMap($this->doRequest('IvrCall', 'HTTPS', 'POST', '2017-05-25', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return IvrCallResponse
     */
    public function ivrCall(IvrCallRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->ivrCallWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SingleCallByVoiceResponse
     */
    public function singleCallByVoiceWithOptions(SingleCallByVoiceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SingleCallByVoiceResponse::fromMap($this->doRequest('SingleCallByVoice', 'HTTPS', 'POST', '2017-05-25', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SingleCallByVoiceResponse
     */
    public function singleCallByVoice(SingleCallByVoiceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->singleCallByVoiceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SingleCallByTtsResponse
     */
    public function singleCallByTtsWithOptions(SingleCallByTtsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SingleCallByTtsResponse::fromMap($this->doRequest('SingleCallByTts', 'HTTPS', 'POST', '2017-05-25', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SingleCallByTtsResponse
     */
    public function singleCallByTts(SingleCallByTtsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->singleCallByTtsWithOptions($request, $runtime);
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
