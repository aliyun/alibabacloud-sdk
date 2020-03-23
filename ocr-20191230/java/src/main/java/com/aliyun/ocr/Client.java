// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.ocr;

import com.aliyun.tea.*;
import com.aliyun.ocr.models.*;

public class Client {

    public String _endpoint;
    public String _regionId;
    public String _protocol;
    public String _userAgent;
    public String _endpointType;
    public Integer _readTimeout;
    public Integer _connectTimeout;
    public String _httpProxy;
    public String _httpsProxy;
    public String _socks5Proxy;
    public String _socks5NetWork;
    public String _noProxy;
    public Integer _maxIdleConns;
    public String _openPlatformEndpoint;
    public com.aliyun.credentials.Client _credential;
    public Client(Config config) throws Exception {
        if (com.aliyun.teautil.Common.isUnset(TeaModel.buildMap(config))) {
            throw new TeaException(TeaConverter.buildMap(
                new TeaPair("name", "ParameterMissing"),
                new TeaPair("message", "'config' can not be unset")
            ));
        }

        if (com.aliyun.teautil.Common.empty(config.regionId)) {
            throw new TeaException(TeaConverter.buildMap(
                new TeaPair("name", "ParameterMissing"),
                new TeaPair("message", "'config.regionId' can not be empty")
            ));
        }

        if (com.aliyun.teautil.Common.empty(config.endpoint)) {
            throw new TeaException(TeaConverter.buildMap(
                new TeaPair("name", "ParameterMissing"),
                new TeaPair("message", "'config.endpoint' can not be empty")
            ));
        }

        if (com.aliyun.teautil.Common.empty(config.type)) {
            config.type = "access_key";
        }

        com.aliyun.credentials.models.Config credentialConfig = com.aliyun.credentials.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", config.accessKeyId),
            new TeaPair("type", config.type),
            new TeaPair("accessKeySecret", config.accessKeySecret),
            new TeaPair("securityToken", config.securityToken)
        ));
        this._credential = new com.aliyun.credentials.Client(credentialConfig);
        this._endpoint = config.endpoint;
        this._protocol = config.protocol;
        this._regionId = config.regionId;
        this._userAgent = config.userAgent;
        this._readTimeout = config.readTimeout;
        this._connectTimeout = config.connectTimeout;
        this._httpProxy = config.httpProxy;
        this._httpsProxy = config.httpsProxy;
        this._noProxy = config.noProxy;
        this._socks5Proxy = config.socks5Proxy;
        this._socks5NetWork = config.socks5NetWork;
        this._maxIdleConns = config.maxIdleConns;
        this._endpointType = config.endpointType;
        this._openPlatformEndpoint = config.openPlatformEndpoint;
    }

    public java.util.Map<String, Object> _request(String action, String protocol, String method, String authType, java.util.Map<String, Object> query, java.util.Map<String, Object> body, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        java.util.Map<String, Object> runtime_ = TeaConverter.buildMap(
            new TeaPair("timeouted", "retry"),
            new TeaPair("readTimeout", com.aliyun.teautil.Common.defaultNumber(runtime.readTimeout, _readTimeout)),
            new TeaPair("connectTimeout", com.aliyun.teautil.Common.defaultNumber(runtime.connectTimeout, _connectTimeout)),
            new TeaPair("httpProxy", com.aliyun.teautil.Common.defaultString(runtime.httpProxy, _httpProxy)),
            new TeaPair("httpsProxy", com.aliyun.teautil.Common.defaultString(runtime.httpsProxy, _httpsProxy)),
            new TeaPair("noProxy", com.aliyun.teautil.Common.defaultString(runtime.noProxy, _noProxy)),
            new TeaPair("maxIdleConns", com.aliyun.teautil.Common.defaultNumber(runtime.maxIdleConns, _maxIdleConns)),
            new TeaPair("retry", TeaConverter.buildMap(
                new TeaPair("retryable", runtime.autoretry),
                new TeaPair("maxAttempts", com.aliyun.teautil.Common.defaultNumber(runtime.maxAttempts, 3))
            )),
            new TeaPair("backoff", TeaConverter.buildMap(
                new TeaPair("policy", com.aliyun.teautil.Common.defaultString(runtime.backoffPolicy, "no")),
                new TeaPair("period", com.aliyun.teautil.Common.defaultNumber(runtime.backoffPeriod, 1))
            )),
            new TeaPair("ignoreSSL", runtime.ignoreSSL)
        );

        TeaRequest _lastRequest = null;
        long _now = System.currentTimeMillis();
        int _retryTimes = 0;
        while (Tea.allowRetry((java.util.Map<String, Object>) runtime_.get("retry"), _retryTimes, _now)) {
            if (_retryTimes > 0) {
                int backoffTime = Tea.getBackoffTime(runtime_.get("backoff"), _retryTimes);
                if (backoffTime > 0) {
                    Tea.sleep(backoffTime);
                }
            }
            _retryTimes = _retryTimes + 1;
            try {
                TeaRequest request_ = new TeaRequest();
                request_.protocol = com.aliyun.teautil.Common.defaultString(_protocol, protocol);
                request_.method = method;
                request_.pathname = "/";
                request_.query = com.aliyun.common.Common.query(TeaConverter.merge(Object.class,
                    TeaConverter.buildMap(
                        new TeaPair("Action", action),
                        new TeaPair("Format", "json"),
                        new TeaPair("RegionId", _regionId),
                        new TeaPair("Timestamp", com.aliyun.common.Common.getTimestamp()),
                        new TeaPair("Version", "2019-12-30"),
                        new TeaPair("SignatureNonce", com.aliyun.teautil.Common.getNonce())
                    ),
                    query
                ));
                if (!com.aliyun.teautil.Common.isUnset(body)) {
                    java.util.Map<String, Object> tmp = com.aliyun.teautil.Common.anyifyMapValue(com.aliyun.common.Common.query(body));
                    request_.body = Tea.toReadable(com.aliyun.teautil.Common.toFormString(tmp));
                }

                request_.headers = TeaConverter.buildMap(
                    new TeaPair("host", com.aliyun.common.Common.getHost("ocr", _regionId, _endpoint)),
                    new TeaPair("user-agent", this.getUserAgent())
                );
                if (!com.aliyun.teautil.Common.equalString(authType, "Anonymous")) {
                    String accessKeyId = this.getAccessKeyId();
                    String accessKeySecret = this.getAccessKeySecret();
                    request_.query.put("SignatureMethod", "HMAC-SHA1");
                    request_.query.put("SignatureVersion", "1.0");
                    request_.query.put("AccessKeyId", accessKeyId);
                    request_.query.put("Signature", com.aliyun.common.Common.getSignature(request_, accessKeySecret));
                }

                _lastRequest = request_;
                TeaResponse response_ = Tea.doAction(request_, runtime_);

                Object obj = com.aliyun.teautil.Common.readAsJSON(response_.body);
                java.util.Map<String, Object> res = com.aliyun.teautil.Common.assertAsMap(obj);
                if (com.aliyun.teautil.Common.is4xx(response_.statusCode) || com.aliyun.teautil.Common.is5xx(response_.statusCode)) {
                    throw new TeaException(TeaConverter.buildMap(
                        new TeaPair("message", res.get("Message")),
                        new TeaPair("data", res),
                        new TeaPair("code", res.get("Code"))
                    ));
                }

                return res;
            } catch (Exception e) {
                if (Tea.isRetryable(e)) {
                    continue;
                }
                throw e;
            }
        }

        throw new TeaUnretryableException(_lastRequest);
    }

    public GetAsyncJobResultResponse getAsyncJobResult(GetAsyncJobResultRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        return TeaModel.toModel(this._request("GetAsyncJobResult", "HTTPS", "POST", "AK", null, TeaModel.buildMap(request), runtime), new GetAsyncJobResultResponse());
    }

    public TrimDocumentResponse trimDocument(TrimDocumentRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        return TeaModel.toModel(this._request("TrimDocument", "HTTPS", "POST", "AK", null, TeaModel.buildMap(request), runtime), new TrimDocumentResponse());
    }

    public TrimDocumentResponse trimDocumentAdvance(TrimDocumentAdvanceRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        String accessKeyId = _credential.getAccessKeyId();
        String accessKeySecret = _credential.getAccessKeySecret();
        com.aliyun.openplatform.models.Config authConfig = com.aliyun.openplatform.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", accessKeyId),
            new TeaPair("accessKeySecret", accessKeySecret),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", "openplatform.aliyuncs.com"),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.Client authClient = new com.aliyun.openplatform.Client(authConfig);
        com.aliyun.openplatform.models.AuthorizeFileUploadRequest authRequest = com.aliyun.openplatform.models.AuthorizeFileUploadRequest.build(TeaConverter.buildMap(
            new TeaPair("product", "ocr"),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.models.AuthorizeFileUploadResponse authResponse = authClient.authorizeFileUpload(authRequest, runtime);
        com.aliyun.oss.models.Config ossConfig = com.aliyun.oss.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("accessKeySecret", accessKeySecret),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", com.aliyun.common.Common.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, _endpointType)),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.oss.Client ossClient = new com.aliyun.oss.Client(ossConfig);
        com.aliyun.fileform.models.FileField fileObj = com.aliyun.fileform.models.FileField.build(TeaConverter.buildMap(
            new TeaPair("filename", authResponse.objectKey),
            new TeaPair("content", request.fileURLObject),
            new TeaPair("contentType", "")
        ));
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader ossHeader = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("policy", authResponse.encodedPolicy),
            new TeaPair("signature", authResponse.signature),
            new TeaPair("key", authResponse.objectKey),
            new TeaPair("file", fileObj),
            new TeaPair("successActionStatus", "201")
        ));
        com.aliyun.oss.models.PostObjectRequest uploadRequest = com.aliyun.oss.models.PostObjectRequest.build(TeaConverter.buildMap(
            new TeaPair("bucketName", authResponse.bucket),
            new TeaPair("header", ossHeader)
        ));
        com.aliyun.ossutil.models.RuntimeOptions ossRuntime = new com.aliyun.ossutil.models.RuntimeOptions();
        com.aliyun.common.Common.convert(runtime, ossRuntime);
        ossClient.postObject(uploadRequest, ossRuntime);
        TrimDocumentRequest trimDocumentreq = new TrimDocumentRequest();
        com.aliyun.common.Common.convert(request, trimDocumentreq);
        trimDocumentreq.fileURL = "http://" + authResponse.bucket + "." + authResponse.endpoint + "/" + authResponse.objectKey + "";
        TrimDocumentResponse trimDocumentResp = this.trimDocument(trimDocumentreq, runtime);
        return trimDocumentResp;
    }

    public RecognizeChinapassportResponse recognizeChinapassport(RecognizeChinapassportRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        return TeaModel.toModel(this._request("RecognizeChinapassport", "HTTPS", "POST", "AK", null, TeaModel.buildMap(request), runtime), new RecognizeChinapassportResponse());
    }

    public RecognizeChinapassportResponse recognizeChinapassportAdvance(RecognizeChinapassportAdvanceRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        String accessKeyId = _credential.getAccessKeyId();
        String accessKeySecret = _credential.getAccessKeySecret();
        com.aliyun.openplatform.models.Config authConfig = com.aliyun.openplatform.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", accessKeyId),
            new TeaPair("accessKeySecret", accessKeySecret),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", "openplatform.aliyuncs.com"),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.Client authClient = new com.aliyun.openplatform.Client(authConfig);
        com.aliyun.openplatform.models.AuthorizeFileUploadRequest authRequest = com.aliyun.openplatform.models.AuthorizeFileUploadRequest.build(TeaConverter.buildMap(
            new TeaPair("product", "ocr"),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.models.AuthorizeFileUploadResponse authResponse = authClient.authorizeFileUpload(authRequest, runtime);
        com.aliyun.oss.models.Config ossConfig = com.aliyun.oss.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("accessKeySecret", accessKeySecret),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", com.aliyun.common.Common.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, _endpointType)),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.oss.Client ossClient = new com.aliyun.oss.Client(ossConfig);
        com.aliyun.fileform.models.FileField fileObj = com.aliyun.fileform.models.FileField.build(TeaConverter.buildMap(
            new TeaPair("filename", authResponse.objectKey),
            new TeaPair("content", request.imageURLObject),
            new TeaPair("contentType", "")
        ));
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader ossHeader = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("policy", authResponse.encodedPolicy),
            new TeaPair("signature", authResponse.signature),
            new TeaPair("key", authResponse.objectKey),
            new TeaPair("file", fileObj),
            new TeaPair("successActionStatus", "201")
        ));
        com.aliyun.oss.models.PostObjectRequest uploadRequest = com.aliyun.oss.models.PostObjectRequest.build(TeaConverter.buildMap(
            new TeaPair("bucketName", authResponse.bucket),
            new TeaPair("header", ossHeader)
        ));
        com.aliyun.ossutil.models.RuntimeOptions ossRuntime = new com.aliyun.ossutil.models.RuntimeOptions();
        com.aliyun.common.Common.convert(runtime, ossRuntime);
        ossClient.postObject(uploadRequest, ossRuntime);
        RecognizeChinapassportRequest recognizeChinapassportreq = new RecognizeChinapassportRequest();
        com.aliyun.common.Common.convert(request, recognizeChinapassportreq);
        recognizeChinapassportreq.imageURL = "http://" + authResponse.bucket + "." + authResponse.endpoint + "/" + authResponse.objectKey + "";
        RecognizeChinapassportResponse recognizeChinapassportResp = this.recognizeChinapassport(recognizeChinapassportreq, runtime);
        return recognizeChinapassportResp;
    }

    public RecognizeVerificationcodeResponse recognizeVerificationcode(RecognizeVerificationcodeRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        return TeaModel.toModel(this._request("RecognizeVerificationcode", "HTTPS", "POST", "AK", null, TeaModel.buildMap(request), runtime), new RecognizeVerificationcodeResponse());
    }

    public RecognizeVerificationcodeResponse recognizeVerificationcodeAdvance(RecognizeVerificationcodeAdvanceRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        String accessKeyId = _credential.getAccessKeyId();
        String accessKeySecret = _credential.getAccessKeySecret();
        com.aliyun.openplatform.models.Config authConfig = com.aliyun.openplatform.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", accessKeyId),
            new TeaPair("accessKeySecret", accessKeySecret),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", "openplatform.aliyuncs.com"),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.Client authClient = new com.aliyun.openplatform.Client(authConfig);
        com.aliyun.openplatform.models.AuthorizeFileUploadRequest authRequest = com.aliyun.openplatform.models.AuthorizeFileUploadRequest.build(TeaConverter.buildMap(
            new TeaPair("product", "ocr"),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.models.AuthorizeFileUploadResponse authResponse = authClient.authorizeFileUpload(authRequest, runtime);
        com.aliyun.oss.models.Config ossConfig = com.aliyun.oss.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("accessKeySecret", accessKeySecret),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", com.aliyun.common.Common.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, _endpointType)),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.oss.Client ossClient = new com.aliyun.oss.Client(ossConfig);
        com.aliyun.fileform.models.FileField fileObj = com.aliyun.fileform.models.FileField.build(TeaConverter.buildMap(
            new TeaPair("filename", authResponse.objectKey),
            new TeaPair("content", request.imageURLObject),
            new TeaPair("contentType", "")
        ));
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader ossHeader = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("policy", authResponse.encodedPolicy),
            new TeaPair("signature", authResponse.signature),
            new TeaPair("key", authResponse.objectKey),
            new TeaPair("file", fileObj),
            new TeaPair("successActionStatus", "201")
        ));
        com.aliyun.oss.models.PostObjectRequest uploadRequest = com.aliyun.oss.models.PostObjectRequest.build(TeaConverter.buildMap(
            new TeaPair("bucketName", authResponse.bucket),
            new TeaPair("header", ossHeader)
        ));
        com.aliyun.ossutil.models.RuntimeOptions ossRuntime = new com.aliyun.ossutil.models.RuntimeOptions();
        com.aliyun.common.Common.convert(runtime, ossRuntime);
        ossClient.postObject(uploadRequest, ossRuntime);
        RecognizeVerificationcodeRequest recognizeVerificationcodereq = new RecognizeVerificationcodeRequest();
        com.aliyun.common.Common.convert(request, recognizeVerificationcodereq);
        recognizeVerificationcodereq.imageURL = "http://" + authResponse.bucket + "." + authResponse.endpoint + "/" + authResponse.objectKey + "";
        RecognizeVerificationcodeResponse recognizeVerificationcodeResp = this.recognizeVerificationcode(recognizeVerificationcodereq, runtime);
        return recognizeVerificationcodeResp;
    }

    public RecognizePassportMRZResponse recognizePassportMRZ(RecognizePassportMRZRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        return TeaModel.toModel(this._request("RecognizePassportMRZ", "HTTPS", "POST", "AK", null, TeaModel.buildMap(request), runtime), new RecognizePassportMRZResponse());
    }

    public RecognizePassportMRZResponse recognizePassportMRZAdvance(RecognizePassportMRZAdvanceRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        String accessKeyId = _credential.getAccessKeyId();
        String accessKeySecret = _credential.getAccessKeySecret();
        com.aliyun.openplatform.models.Config authConfig = com.aliyun.openplatform.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", accessKeyId),
            new TeaPair("accessKeySecret", accessKeySecret),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", "openplatform.aliyuncs.com"),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.Client authClient = new com.aliyun.openplatform.Client(authConfig);
        com.aliyun.openplatform.models.AuthorizeFileUploadRequest authRequest = com.aliyun.openplatform.models.AuthorizeFileUploadRequest.build(TeaConverter.buildMap(
            new TeaPair("product", "ocr"),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.models.AuthorizeFileUploadResponse authResponse = authClient.authorizeFileUpload(authRequest, runtime);
        com.aliyun.oss.models.Config ossConfig = com.aliyun.oss.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("accessKeySecret", accessKeySecret),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", com.aliyun.common.Common.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, _endpointType)),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.oss.Client ossClient = new com.aliyun.oss.Client(ossConfig);
        com.aliyun.fileform.models.FileField fileObj = com.aliyun.fileform.models.FileField.build(TeaConverter.buildMap(
            new TeaPair("filename", authResponse.objectKey),
            new TeaPair("content", request.imageURLObject),
            new TeaPair("contentType", "")
        ));
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader ossHeader = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("policy", authResponse.encodedPolicy),
            new TeaPair("signature", authResponse.signature),
            new TeaPair("key", authResponse.objectKey),
            new TeaPair("file", fileObj),
            new TeaPair("successActionStatus", "201")
        ));
        com.aliyun.oss.models.PostObjectRequest uploadRequest = com.aliyun.oss.models.PostObjectRequest.build(TeaConverter.buildMap(
            new TeaPair("bucketName", authResponse.bucket),
            new TeaPair("header", ossHeader)
        ));
        com.aliyun.ossutil.models.RuntimeOptions ossRuntime = new com.aliyun.ossutil.models.RuntimeOptions();
        com.aliyun.common.Common.convert(runtime, ossRuntime);
        ossClient.postObject(uploadRequest, ossRuntime);
        RecognizePassportMRZRequest recognizePassportMRZreq = new RecognizePassportMRZRequest();
        com.aliyun.common.Common.convert(request, recognizePassportMRZreq);
        recognizePassportMRZreq.imageURL = "http://" + authResponse.bucket + "." + authResponse.endpoint + "/" + authResponse.objectKey + "";
        RecognizePassportMRZResponse recognizePassportMRZResp = this.recognizePassportMRZ(recognizePassportMRZreq, runtime);
        return recognizePassportMRZResp;
    }

    public RecognizeTakeoutOrderResponse recognizeTakeoutOrder(RecognizeTakeoutOrderRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        return TeaModel.toModel(this._request("RecognizeTakeoutOrder", "HTTPS", "POST", "AK", null, TeaModel.buildMap(request), runtime), new RecognizeTakeoutOrderResponse());
    }

    public RecognizeTakeoutOrderResponse recognizeTakeoutOrderAdvance(RecognizeTakeoutOrderAdvanceRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        String accessKeyId = _credential.getAccessKeyId();
        String accessKeySecret = _credential.getAccessKeySecret();
        com.aliyun.openplatform.models.Config authConfig = com.aliyun.openplatform.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", accessKeyId),
            new TeaPair("accessKeySecret", accessKeySecret),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", "openplatform.aliyuncs.com"),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.Client authClient = new com.aliyun.openplatform.Client(authConfig);
        com.aliyun.openplatform.models.AuthorizeFileUploadRequest authRequest = com.aliyun.openplatform.models.AuthorizeFileUploadRequest.build(TeaConverter.buildMap(
            new TeaPair("product", "ocr"),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.models.AuthorizeFileUploadResponse authResponse = authClient.authorizeFileUpload(authRequest, runtime);
        com.aliyun.oss.models.Config ossConfig = com.aliyun.oss.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("accessKeySecret", accessKeySecret),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", com.aliyun.common.Common.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, _endpointType)),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.oss.Client ossClient = new com.aliyun.oss.Client(ossConfig);
        com.aliyun.fileform.models.FileField fileObj = com.aliyun.fileform.models.FileField.build(TeaConverter.buildMap(
            new TeaPair("filename", authResponse.objectKey),
            new TeaPair("content", request.imageURLObject),
            new TeaPair("contentType", "")
        ));
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader ossHeader = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("policy", authResponse.encodedPolicy),
            new TeaPair("signature", authResponse.signature),
            new TeaPair("key", authResponse.objectKey),
            new TeaPair("file", fileObj),
            new TeaPair("successActionStatus", "201")
        ));
        com.aliyun.oss.models.PostObjectRequest uploadRequest = com.aliyun.oss.models.PostObjectRequest.build(TeaConverter.buildMap(
            new TeaPair("bucketName", authResponse.bucket),
            new TeaPair("header", ossHeader)
        ));
        com.aliyun.ossutil.models.RuntimeOptions ossRuntime = new com.aliyun.ossutil.models.RuntimeOptions();
        com.aliyun.common.Common.convert(runtime, ossRuntime);
        ossClient.postObject(uploadRequest, ossRuntime);
        RecognizeTakeoutOrderRequest recognizeTakeoutOrderreq = new RecognizeTakeoutOrderRequest();
        com.aliyun.common.Common.convert(request, recognizeTakeoutOrderreq);
        recognizeTakeoutOrderreq.imageURL = "http://" + authResponse.bucket + "." + authResponse.endpoint + "/" + authResponse.objectKey + "";
        RecognizeTakeoutOrderResponse recognizeTakeoutOrderResp = this.recognizeTakeoutOrder(recognizeTakeoutOrderreq, runtime);
        return recognizeTakeoutOrderResp;
    }

    public RecognizeQrCodeResponse recognizeQrCode(RecognizeQrCodeRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        return TeaModel.toModel(this._request("RecognizeQrCode", "HTTPS", "POST", "AK", null, TeaModel.buildMap(request), runtime), new RecognizeQrCodeResponse());
    }

    public RecognizeVATInvoiceResponse recognizeVATInvoice(RecognizeVATInvoiceRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        return TeaModel.toModel(this._request("RecognizeVATInvoice", "HTTPS", "POST", "AK", null, TeaModel.buildMap(request), runtime), new RecognizeVATInvoiceResponse());
    }

    public RecognizeVATInvoiceResponse recognizeVATInvoiceAdvance(RecognizeVATInvoiceAdvanceRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        String accessKeyId = _credential.getAccessKeyId();
        String accessKeySecret = _credential.getAccessKeySecret();
        com.aliyun.openplatform.models.Config authConfig = com.aliyun.openplatform.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", accessKeyId),
            new TeaPair("accessKeySecret", accessKeySecret),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", "openplatform.aliyuncs.com"),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.Client authClient = new com.aliyun.openplatform.Client(authConfig);
        com.aliyun.openplatform.models.AuthorizeFileUploadRequest authRequest = com.aliyun.openplatform.models.AuthorizeFileUploadRequest.build(TeaConverter.buildMap(
            new TeaPair("product", "ocr"),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.models.AuthorizeFileUploadResponse authResponse = authClient.authorizeFileUpload(authRequest, runtime);
        com.aliyun.oss.models.Config ossConfig = com.aliyun.oss.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("accessKeySecret", accessKeySecret),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", com.aliyun.common.Common.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, _endpointType)),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.oss.Client ossClient = new com.aliyun.oss.Client(ossConfig);
        com.aliyun.fileform.models.FileField fileObj = com.aliyun.fileform.models.FileField.build(TeaConverter.buildMap(
            new TeaPair("filename", authResponse.objectKey),
            new TeaPair("content", request.fileURLObject),
            new TeaPair("contentType", "")
        ));
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader ossHeader = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("policy", authResponse.encodedPolicy),
            new TeaPair("signature", authResponse.signature),
            new TeaPair("key", authResponse.objectKey),
            new TeaPair("file", fileObj),
            new TeaPair("successActionStatus", "201")
        ));
        com.aliyun.oss.models.PostObjectRequest uploadRequest = com.aliyun.oss.models.PostObjectRequest.build(TeaConverter.buildMap(
            new TeaPair("bucketName", authResponse.bucket),
            new TeaPair("header", ossHeader)
        ));
        com.aliyun.ossutil.models.RuntimeOptions ossRuntime = new com.aliyun.ossutil.models.RuntimeOptions();
        com.aliyun.common.Common.convert(runtime, ossRuntime);
        ossClient.postObject(uploadRequest, ossRuntime);
        RecognizeVATInvoiceRequest recognizeVATInvoicereq = new RecognizeVATInvoiceRequest();
        com.aliyun.common.Common.convert(request, recognizeVATInvoicereq);
        recognizeVATInvoicereq.fileURL = "http://" + authResponse.bucket + "." + authResponse.endpoint + "/" + authResponse.objectKey + "";
        RecognizeVATInvoiceResponse recognizeVATInvoiceResp = this.recognizeVATInvoice(recognizeVATInvoicereq, runtime);
        return recognizeVATInvoiceResp;
    }

    public RecognizeCharacterResponse recognizeCharacter(RecognizeCharacterRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        return TeaModel.toModel(this._request("RecognizeCharacter", "HTTPS", "POST", "AK", null, TeaModel.buildMap(request), runtime), new RecognizeCharacterResponse());
    }

    public RecognizeCharacterResponse recognizeCharacterAdvance(RecognizeCharacterAdvanceRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        String accessKeyId = _credential.getAccessKeyId();
        String accessKeySecret = _credential.getAccessKeySecret();
        com.aliyun.openplatform.models.Config authConfig = com.aliyun.openplatform.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", accessKeyId),
            new TeaPair("accessKeySecret", accessKeySecret),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", "openplatform.aliyuncs.com"),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.Client authClient = new com.aliyun.openplatform.Client(authConfig);
        com.aliyun.openplatform.models.AuthorizeFileUploadRequest authRequest = com.aliyun.openplatform.models.AuthorizeFileUploadRequest.build(TeaConverter.buildMap(
            new TeaPair("product", "ocr"),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.models.AuthorizeFileUploadResponse authResponse = authClient.authorizeFileUpload(authRequest, runtime);
        com.aliyun.oss.models.Config ossConfig = com.aliyun.oss.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("accessKeySecret", accessKeySecret),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", com.aliyun.common.Common.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, _endpointType)),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.oss.Client ossClient = new com.aliyun.oss.Client(ossConfig);
        com.aliyun.fileform.models.FileField fileObj = com.aliyun.fileform.models.FileField.build(TeaConverter.buildMap(
            new TeaPair("filename", authResponse.objectKey),
            new TeaPair("content", request.imageURLObject),
            new TeaPair("contentType", "")
        ));
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader ossHeader = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("policy", authResponse.encodedPolicy),
            new TeaPair("signature", authResponse.signature),
            new TeaPair("key", authResponse.objectKey),
            new TeaPair("file", fileObj),
            new TeaPair("successActionStatus", "201")
        ));
        com.aliyun.oss.models.PostObjectRequest uploadRequest = com.aliyun.oss.models.PostObjectRequest.build(TeaConverter.buildMap(
            new TeaPair("bucketName", authResponse.bucket),
            new TeaPair("header", ossHeader)
        ));
        com.aliyun.ossutil.models.RuntimeOptions ossRuntime = new com.aliyun.ossutil.models.RuntimeOptions();
        com.aliyun.common.Common.convert(runtime, ossRuntime);
        ossClient.postObject(uploadRequest, ossRuntime);
        RecognizeCharacterRequest recognizeCharacterreq = new RecognizeCharacterRequest();
        com.aliyun.common.Common.convert(request, recognizeCharacterreq);
        recognizeCharacterreq.imageURL = "http://" + authResponse.bucket + "." + authResponse.endpoint + "/" + authResponse.objectKey + "";
        RecognizeCharacterResponse recognizeCharacterResp = this.recognizeCharacter(recognizeCharacterreq, runtime);
        return recognizeCharacterResp;
    }

    public RecognizeTaxiInvoiceResponse recognizeTaxiInvoice(RecognizeTaxiInvoiceRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        return TeaModel.toModel(this._request("RecognizeTaxiInvoice", "HTTPS", "POST", "AK", null, TeaModel.buildMap(request), runtime), new RecognizeTaxiInvoiceResponse());
    }

    public RecognizeTaxiInvoiceResponse recognizeTaxiInvoiceAdvance(RecognizeTaxiInvoiceAdvanceRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        String accessKeyId = _credential.getAccessKeyId();
        String accessKeySecret = _credential.getAccessKeySecret();
        com.aliyun.openplatform.models.Config authConfig = com.aliyun.openplatform.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", accessKeyId),
            new TeaPair("accessKeySecret", accessKeySecret),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", "openplatform.aliyuncs.com"),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.Client authClient = new com.aliyun.openplatform.Client(authConfig);
        com.aliyun.openplatform.models.AuthorizeFileUploadRequest authRequest = com.aliyun.openplatform.models.AuthorizeFileUploadRequest.build(TeaConverter.buildMap(
            new TeaPair("product", "ocr"),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.models.AuthorizeFileUploadResponse authResponse = authClient.authorizeFileUpload(authRequest, runtime);
        com.aliyun.oss.models.Config ossConfig = com.aliyun.oss.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("accessKeySecret", accessKeySecret),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", com.aliyun.common.Common.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, _endpointType)),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.oss.Client ossClient = new com.aliyun.oss.Client(ossConfig);
        com.aliyun.fileform.models.FileField fileObj = com.aliyun.fileform.models.FileField.build(TeaConverter.buildMap(
            new TeaPair("filename", authResponse.objectKey),
            new TeaPair("content", request.imageURLObject),
            new TeaPair("contentType", "")
        ));
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader ossHeader = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("policy", authResponse.encodedPolicy),
            new TeaPair("signature", authResponse.signature),
            new TeaPair("key", authResponse.objectKey),
            new TeaPair("file", fileObj),
            new TeaPair("successActionStatus", "201")
        ));
        com.aliyun.oss.models.PostObjectRequest uploadRequest = com.aliyun.oss.models.PostObjectRequest.build(TeaConverter.buildMap(
            new TeaPair("bucketName", authResponse.bucket),
            new TeaPair("header", ossHeader)
        ));
        com.aliyun.ossutil.models.RuntimeOptions ossRuntime = new com.aliyun.ossutil.models.RuntimeOptions();
        com.aliyun.common.Common.convert(runtime, ossRuntime);
        ossClient.postObject(uploadRequest, ossRuntime);
        RecognizeTaxiInvoiceRequest recognizeTaxiInvoicereq = new RecognizeTaxiInvoiceRequest();
        com.aliyun.common.Common.convert(request, recognizeTaxiInvoicereq);
        recognizeTaxiInvoicereq.imageURL = "http://" + authResponse.bucket + "." + authResponse.endpoint + "/" + authResponse.objectKey + "";
        RecognizeTaxiInvoiceResponse recognizeTaxiInvoiceResp = this.recognizeTaxiInvoice(recognizeTaxiInvoicereq, runtime);
        return recognizeTaxiInvoiceResp;
    }

    public RecognizeIdentityCardResponse recognizeIdentityCard(RecognizeIdentityCardRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        return TeaModel.toModel(this._request("RecognizeIdentityCard", "HTTPS", "POST", "AK", null, TeaModel.buildMap(request), runtime), new RecognizeIdentityCardResponse());
    }

    public RecognizeIdentityCardResponse recognizeIdentityCardAdvance(RecognizeIdentityCardAdvanceRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        String accessKeyId = _credential.getAccessKeyId();
        String accessKeySecret = _credential.getAccessKeySecret();
        com.aliyun.openplatform.models.Config authConfig = com.aliyun.openplatform.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", accessKeyId),
            new TeaPair("accessKeySecret", accessKeySecret),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", "openplatform.aliyuncs.com"),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.Client authClient = new com.aliyun.openplatform.Client(authConfig);
        com.aliyun.openplatform.models.AuthorizeFileUploadRequest authRequest = com.aliyun.openplatform.models.AuthorizeFileUploadRequest.build(TeaConverter.buildMap(
            new TeaPair("product", "ocr"),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.models.AuthorizeFileUploadResponse authResponse = authClient.authorizeFileUpload(authRequest, runtime);
        com.aliyun.oss.models.Config ossConfig = com.aliyun.oss.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("accessKeySecret", accessKeySecret),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", com.aliyun.common.Common.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, _endpointType)),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.oss.Client ossClient = new com.aliyun.oss.Client(ossConfig);
        com.aliyun.fileform.models.FileField fileObj = com.aliyun.fileform.models.FileField.build(TeaConverter.buildMap(
            new TeaPair("filename", authResponse.objectKey),
            new TeaPair("content", request.imageURLObject),
            new TeaPair("contentType", "")
        ));
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader ossHeader = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("policy", authResponse.encodedPolicy),
            new TeaPair("signature", authResponse.signature),
            new TeaPair("key", authResponse.objectKey),
            new TeaPair("file", fileObj),
            new TeaPair("successActionStatus", "201")
        ));
        com.aliyun.oss.models.PostObjectRequest uploadRequest = com.aliyun.oss.models.PostObjectRequest.build(TeaConverter.buildMap(
            new TeaPair("bucketName", authResponse.bucket),
            new TeaPair("header", ossHeader)
        ));
        com.aliyun.ossutil.models.RuntimeOptions ossRuntime = new com.aliyun.ossutil.models.RuntimeOptions();
        com.aliyun.common.Common.convert(runtime, ossRuntime);
        ossClient.postObject(uploadRequest, ossRuntime);
        RecognizeIdentityCardRequest recognizeIdentityCardreq = new RecognizeIdentityCardRequest();
        com.aliyun.common.Common.convert(request, recognizeIdentityCardreq);
        recognizeIdentityCardreq.imageURL = "http://" + authResponse.bucket + "." + authResponse.endpoint + "/" + authResponse.objectKey + "";
        RecognizeIdentityCardResponse recognizeIdentityCardResp = this.recognizeIdentityCard(recognizeIdentityCardreq, runtime);
        return recognizeIdentityCardResp;
    }

    public RecognizeLicensePlateResponse recognizeLicensePlate(RecognizeLicensePlateRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        return TeaModel.toModel(this._request("RecognizeLicensePlate", "HTTPS", "POST", "AK", null, TeaModel.buildMap(request), runtime), new RecognizeLicensePlateResponse());
    }

    public RecognizeLicensePlateResponse recognizeLicensePlateAdvance(RecognizeLicensePlateAdvanceRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        String accessKeyId = _credential.getAccessKeyId();
        String accessKeySecret = _credential.getAccessKeySecret();
        com.aliyun.openplatform.models.Config authConfig = com.aliyun.openplatform.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", accessKeyId),
            new TeaPair("accessKeySecret", accessKeySecret),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", "openplatform.aliyuncs.com"),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.Client authClient = new com.aliyun.openplatform.Client(authConfig);
        com.aliyun.openplatform.models.AuthorizeFileUploadRequest authRequest = com.aliyun.openplatform.models.AuthorizeFileUploadRequest.build(TeaConverter.buildMap(
            new TeaPair("product", "ocr"),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.models.AuthorizeFileUploadResponse authResponse = authClient.authorizeFileUpload(authRequest, runtime);
        com.aliyun.oss.models.Config ossConfig = com.aliyun.oss.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("accessKeySecret", accessKeySecret),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", com.aliyun.common.Common.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, _endpointType)),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.oss.Client ossClient = new com.aliyun.oss.Client(ossConfig);
        com.aliyun.fileform.models.FileField fileObj = com.aliyun.fileform.models.FileField.build(TeaConverter.buildMap(
            new TeaPair("filename", authResponse.objectKey),
            new TeaPair("content", request.imageURLObject),
            new TeaPair("contentType", "")
        ));
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader ossHeader = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("policy", authResponse.encodedPolicy),
            new TeaPair("signature", authResponse.signature),
            new TeaPair("key", authResponse.objectKey),
            new TeaPair("file", fileObj),
            new TeaPair("successActionStatus", "201")
        ));
        com.aliyun.oss.models.PostObjectRequest uploadRequest = com.aliyun.oss.models.PostObjectRequest.build(TeaConverter.buildMap(
            new TeaPair("bucketName", authResponse.bucket),
            new TeaPair("header", ossHeader)
        ));
        com.aliyun.ossutil.models.RuntimeOptions ossRuntime = new com.aliyun.ossutil.models.RuntimeOptions();
        com.aliyun.common.Common.convert(runtime, ossRuntime);
        ossClient.postObject(uploadRequest, ossRuntime);
        RecognizeLicensePlateRequest recognizeLicensePlatereq = new RecognizeLicensePlateRequest();
        com.aliyun.common.Common.convert(request, recognizeLicensePlatereq);
        recognizeLicensePlatereq.imageURL = "http://" + authResponse.bucket + "." + authResponse.endpoint + "/" + authResponse.objectKey + "";
        RecognizeLicensePlateResponse recognizeLicensePlateResp = this.recognizeLicensePlate(recognizeLicensePlatereq, runtime);
        return recognizeLicensePlateResp;
    }

    public RecognizeTableResponse recognizeTable(RecognizeTableRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        return TeaModel.toModel(this._request("RecognizeTable", "HTTPS", "POST", "AK", null, TeaModel.buildMap(request), runtime), new RecognizeTableResponse());
    }

    public RecognizeTableResponse recognizeTableAdvance(RecognizeTableAdvanceRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        String accessKeyId = _credential.getAccessKeyId();
        String accessKeySecret = _credential.getAccessKeySecret();
        com.aliyun.openplatform.models.Config authConfig = com.aliyun.openplatform.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", accessKeyId),
            new TeaPair("accessKeySecret", accessKeySecret),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", "openplatform.aliyuncs.com"),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.Client authClient = new com.aliyun.openplatform.Client(authConfig);
        com.aliyun.openplatform.models.AuthorizeFileUploadRequest authRequest = com.aliyun.openplatform.models.AuthorizeFileUploadRequest.build(TeaConverter.buildMap(
            new TeaPair("product", "ocr"),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.models.AuthorizeFileUploadResponse authResponse = authClient.authorizeFileUpload(authRequest, runtime);
        com.aliyun.oss.models.Config ossConfig = com.aliyun.oss.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("accessKeySecret", accessKeySecret),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", com.aliyun.common.Common.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, _endpointType)),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.oss.Client ossClient = new com.aliyun.oss.Client(ossConfig);
        com.aliyun.fileform.models.FileField fileObj = com.aliyun.fileform.models.FileField.build(TeaConverter.buildMap(
            new TeaPair("filename", authResponse.objectKey),
            new TeaPair("content", request.imageURLObject),
            new TeaPair("contentType", "")
        ));
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader ossHeader = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("policy", authResponse.encodedPolicy),
            new TeaPair("signature", authResponse.signature),
            new TeaPair("key", authResponse.objectKey),
            new TeaPair("file", fileObj),
            new TeaPair("successActionStatus", "201")
        ));
        com.aliyun.oss.models.PostObjectRequest uploadRequest = com.aliyun.oss.models.PostObjectRequest.build(TeaConverter.buildMap(
            new TeaPair("bucketName", authResponse.bucket),
            new TeaPair("header", ossHeader)
        ));
        com.aliyun.ossutil.models.RuntimeOptions ossRuntime = new com.aliyun.ossutil.models.RuntimeOptions();
        com.aliyun.common.Common.convert(runtime, ossRuntime);
        ossClient.postObject(uploadRequest, ossRuntime);
        RecognizeTableRequest recognizeTablereq = new RecognizeTableRequest();
        com.aliyun.common.Common.convert(request, recognizeTablereq);
        recognizeTablereq.imageURL = "http://" + authResponse.bucket + "." + authResponse.endpoint + "/" + authResponse.objectKey + "";
        RecognizeTableResponse recognizeTableResp = this.recognizeTable(recognizeTablereq, runtime);
        return recognizeTableResp;
    }

    public RecognizeDrivingLicenseResponse recognizeDrivingLicense(RecognizeDrivingLicenseRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        return TeaModel.toModel(this._request("RecognizeDrivingLicense", "HTTPS", "POST", "AK", null, TeaModel.buildMap(request), runtime), new RecognizeDrivingLicenseResponse());
    }

    public RecognizeDrivingLicenseResponse recognizeDrivingLicenseAdvance(RecognizeDrivingLicenseAdvanceRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        String accessKeyId = _credential.getAccessKeyId();
        String accessKeySecret = _credential.getAccessKeySecret();
        com.aliyun.openplatform.models.Config authConfig = com.aliyun.openplatform.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", accessKeyId),
            new TeaPair("accessKeySecret", accessKeySecret),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", "openplatform.aliyuncs.com"),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.Client authClient = new com.aliyun.openplatform.Client(authConfig);
        com.aliyun.openplatform.models.AuthorizeFileUploadRequest authRequest = com.aliyun.openplatform.models.AuthorizeFileUploadRequest.build(TeaConverter.buildMap(
            new TeaPair("product", "ocr"),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.models.AuthorizeFileUploadResponse authResponse = authClient.authorizeFileUpload(authRequest, runtime);
        com.aliyun.oss.models.Config ossConfig = com.aliyun.oss.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("accessKeySecret", accessKeySecret),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", com.aliyun.common.Common.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, _endpointType)),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.oss.Client ossClient = new com.aliyun.oss.Client(ossConfig);
        com.aliyun.fileform.models.FileField fileObj = com.aliyun.fileform.models.FileField.build(TeaConverter.buildMap(
            new TeaPair("filename", authResponse.objectKey),
            new TeaPair("content", request.imageURLObject),
            new TeaPair("contentType", "")
        ));
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader ossHeader = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("policy", authResponse.encodedPolicy),
            new TeaPair("signature", authResponse.signature),
            new TeaPair("key", authResponse.objectKey),
            new TeaPair("file", fileObj),
            new TeaPair("successActionStatus", "201")
        ));
        com.aliyun.oss.models.PostObjectRequest uploadRequest = com.aliyun.oss.models.PostObjectRequest.build(TeaConverter.buildMap(
            new TeaPair("bucketName", authResponse.bucket),
            new TeaPair("header", ossHeader)
        ));
        com.aliyun.ossutil.models.RuntimeOptions ossRuntime = new com.aliyun.ossutil.models.RuntimeOptions();
        com.aliyun.common.Common.convert(runtime, ossRuntime);
        ossClient.postObject(uploadRequest, ossRuntime);
        RecognizeDrivingLicenseRequest recognizeDrivingLicensereq = new RecognizeDrivingLicenseRequest();
        com.aliyun.common.Common.convert(request, recognizeDrivingLicensereq);
        recognizeDrivingLicensereq.imageURL = "http://" + authResponse.bucket + "." + authResponse.endpoint + "/" + authResponse.objectKey + "";
        RecognizeDrivingLicenseResponse recognizeDrivingLicenseResp = this.recognizeDrivingLicense(recognizeDrivingLicensereq, runtime);
        return recognizeDrivingLicenseResp;
    }

    public RecognizeBankCardResponse recognizeBankCard(RecognizeBankCardRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        return TeaModel.toModel(this._request("RecognizeBankCard", "HTTPS", "POST", "AK", null, TeaModel.buildMap(request), runtime), new RecognizeBankCardResponse());
    }

    public RecognizeBankCardResponse recognizeBankCardAdvance(RecognizeBankCardAdvanceRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        String accessKeyId = _credential.getAccessKeyId();
        String accessKeySecret = _credential.getAccessKeySecret();
        com.aliyun.openplatform.models.Config authConfig = com.aliyun.openplatform.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", accessKeyId),
            new TeaPair("accessKeySecret", accessKeySecret),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", "openplatform.aliyuncs.com"),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.Client authClient = new com.aliyun.openplatform.Client(authConfig);
        com.aliyun.openplatform.models.AuthorizeFileUploadRequest authRequest = com.aliyun.openplatform.models.AuthorizeFileUploadRequest.build(TeaConverter.buildMap(
            new TeaPair("product", "ocr"),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.models.AuthorizeFileUploadResponse authResponse = authClient.authorizeFileUpload(authRequest, runtime);
        com.aliyun.oss.models.Config ossConfig = com.aliyun.oss.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("accessKeySecret", accessKeySecret),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", com.aliyun.common.Common.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, _endpointType)),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.oss.Client ossClient = new com.aliyun.oss.Client(ossConfig);
        com.aliyun.fileform.models.FileField fileObj = com.aliyun.fileform.models.FileField.build(TeaConverter.buildMap(
            new TeaPair("filename", authResponse.objectKey),
            new TeaPair("content", request.imageURLObject),
            new TeaPair("contentType", "")
        ));
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader ossHeader = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("policy", authResponse.encodedPolicy),
            new TeaPair("signature", authResponse.signature),
            new TeaPair("key", authResponse.objectKey),
            new TeaPair("file", fileObj),
            new TeaPair("successActionStatus", "201")
        ));
        com.aliyun.oss.models.PostObjectRequest uploadRequest = com.aliyun.oss.models.PostObjectRequest.build(TeaConverter.buildMap(
            new TeaPair("bucketName", authResponse.bucket),
            new TeaPair("header", ossHeader)
        ));
        com.aliyun.ossutil.models.RuntimeOptions ossRuntime = new com.aliyun.ossutil.models.RuntimeOptions();
        com.aliyun.common.Common.convert(runtime, ossRuntime);
        ossClient.postObject(uploadRequest, ossRuntime);
        RecognizeBankCardRequest recognizeBankCardreq = new RecognizeBankCardRequest();
        com.aliyun.common.Common.convert(request, recognizeBankCardreq);
        recognizeBankCardreq.imageURL = "http://" + authResponse.bucket + "." + authResponse.endpoint + "/" + authResponse.objectKey + "";
        RecognizeBankCardResponse recognizeBankCardResp = this.recognizeBankCard(recognizeBankCardreq, runtime);
        return recognizeBankCardResp;
    }

    public RecognizeTrainTicketResponse recognizeTrainTicket(RecognizeTrainTicketRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        return TeaModel.toModel(this._request("RecognizeTrainTicket", "HTTPS", "POST", "AK", null, TeaModel.buildMap(request), runtime), new RecognizeTrainTicketResponse());
    }

    public RecognizeTrainTicketResponse recognizeTrainTicketAdvance(RecognizeTrainTicketAdvanceRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        String accessKeyId = _credential.getAccessKeyId();
        String accessKeySecret = _credential.getAccessKeySecret();
        com.aliyun.openplatform.models.Config authConfig = com.aliyun.openplatform.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", accessKeyId),
            new TeaPair("accessKeySecret", accessKeySecret),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", "openplatform.aliyuncs.com"),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.Client authClient = new com.aliyun.openplatform.Client(authConfig);
        com.aliyun.openplatform.models.AuthorizeFileUploadRequest authRequest = com.aliyun.openplatform.models.AuthorizeFileUploadRequest.build(TeaConverter.buildMap(
            new TeaPair("product", "ocr"),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.models.AuthorizeFileUploadResponse authResponse = authClient.authorizeFileUpload(authRequest, runtime);
        com.aliyun.oss.models.Config ossConfig = com.aliyun.oss.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("accessKeySecret", accessKeySecret),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", com.aliyun.common.Common.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, _endpointType)),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.oss.Client ossClient = new com.aliyun.oss.Client(ossConfig);
        com.aliyun.fileform.models.FileField fileObj = com.aliyun.fileform.models.FileField.build(TeaConverter.buildMap(
            new TeaPair("filename", authResponse.objectKey),
            new TeaPair("content", request.imageURLObject),
            new TeaPair("contentType", "")
        ));
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader ossHeader = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("policy", authResponse.encodedPolicy),
            new TeaPair("signature", authResponse.signature),
            new TeaPair("key", authResponse.objectKey),
            new TeaPair("file", fileObj),
            new TeaPair("successActionStatus", "201")
        ));
        com.aliyun.oss.models.PostObjectRequest uploadRequest = com.aliyun.oss.models.PostObjectRequest.build(TeaConverter.buildMap(
            new TeaPair("bucketName", authResponse.bucket),
            new TeaPair("header", ossHeader)
        ));
        com.aliyun.ossutil.models.RuntimeOptions ossRuntime = new com.aliyun.ossutil.models.RuntimeOptions();
        com.aliyun.common.Common.convert(runtime, ossRuntime);
        ossClient.postObject(uploadRequest, ossRuntime);
        RecognizeTrainTicketRequest recognizeTrainTicketreq = new RecognizeTrainTicketRequest();
        com.aliyun.common.Common.convert(request, recognizeTrainTicketreq);
        recognizeTrainTicketreq.imageURL = "http://" + authResponse.bucket + "." + authResponse.endpoint + "/" + authResponse.objectKey + "";
        RecognizeTrainTicketResponse recognizeTrainTicketResp = this.recognizeTrainTicket(recognizeTrainTicketreq, runtime);
        return recognizeTrainTicketResp;
    }

    public RecognizeDriverLicenseResponse recognizeDriverLicense(RecognizeDriverLicenseRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        return TeaModel.toModel(this._request("RecognizeDriverLicense", "HTTPS", "POST", "AK", null, TeaModel.buildMap(request), runtime), new RecognizeDriverLicenseResponse());
    }

    public RecognizeDriverLicenseResponse recognizeDriverLicenseAdvance(RecognizeDriverLicenseAdvanceRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        String accessKeyId = _credential.getAccessKeyId();
        String accessKeySecret = _credential.getAccessKeySecret();
        com.aliyun.openplatform.models.Config authConfig = com.aliyun.openplatform.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", accessKeyId),
            new TeaPair("accessKeySecret", accessKeySecret),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", "openplatform.aliyuncs.com"),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.Client authClient = new com.aliyun.openplatform.Client(authConfig);
        com.aliyun.openplatform.models.AuthorizeFileUploadRequest authRequest = com.aliyun.openplatform.models.AuthorizeFileUploadRequest.build(TeaConverter.buildMap(
            new TeaPair("product", "ocr"),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.models.AuthorizeFileUploadResponse authResponse = authClient.authorizeFileUpload(authRequest, runtime);
        com.aliyun.oss.models.Config ossConfig = com.aliyun.oss.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("accessKeySecret", accessKeySecret),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", com.aliyun.common.Common.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, _endpointType)),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.oss.Client ossClient = new com.aliyun.oss.Client(ossConfig);
        com.aliyun.fileform.models.FileField fileObj = com.aliyun.fileform.models.FileField.build(TeaConverter.buildMap(
            new TeaPair("filename", authResponse.objectKey),
            new TeaPair("content", request.imageURLObject),
            new TeaPair("contentType", "")
        ));
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader ossHeader = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("policy", authResponse.encodedPolicy),
            new TeaPair("signature", authResponse.signature),
            new TeaPair("key", authResponse.objectKey),
            new TeaPair("file", fileObj),
            new TeaPair("successActionStatus", "201")
        ));
        com.aliyun.oss.models.PostObjectRequest uploadRequest = com.aliyun.oss.models.PostObjectRequest.build(TeaConverter.buildMap(
            new TeaPair("bucketName", authResponse.bucket),
            new TeaPair("header", ossHeader)
        ));
        com.aliyun.ossutil.models.RuntimeOptions ossRuntime = new com.aliyun.ossutil.models.RuntimeOptions();
        com.aliyun.common.Common.convert(runtime, ossRuntime);
        ossClient.postObject(uploadRequest, ossRuntime);
        RecognizeDriverLicenseRequest recognizeDriverLicensereq = new RecognizeDriverLicenseRequest();
        com.aliyun.common.Common.convert(request, recognizeDriverLicensereq);
        recognizeDriverLicensereq.imageURL = "http://" + authResponse.bucket + "." + authResponse.endpoint + "/" + authResponse.objectKey + "";
        RecognizeDriverLicenseResponse recognizeDriverLicenseResp = this.recognizeDriverLicense(recognizeDriverLicensereq, runtime);
        return recognizeDriverLicenseResp;
    }

    public RecognizeAccountPageResponse recognizeAccountPage(RecognizeAccountPageRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        return TeaModel.toModel(this._request("RecognizeAccountPage", "HTTPS", "POST", "AK", null, TeaModel.buildMap(request), runtime), new RecognizeAccountPageResponse());
    }

    public RecognizeAccountPageResponse recognizeAccountPageAdvance(RecognizeAccountPageAdvanceRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        String accessKeyId = _credential.getAccessKeyId();
        String accessKeySecret = _credential.getAccessKeySecret();
        com.aliyun.openplatform.models.Config authConfig = com.aliyun.openplatform.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", accessKeyId),
            new TeaPair("accessKeySecret", accessKeySecret),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", "openplatform.aliyuncs.com"),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.Client authClient = new com.aliyun.openplatform.Client(authConfig);
        com.aliyun.openplatform.models.AuthorizeFileUploadRequest authRequest = com.aliyun.openplatform.models.AuthorizeFileUploadRequest.build(TeaConverter.buildMap(
            new TeaPair("product", "ocr"),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.models.AuthorizeFileUploadResponse authResponse = authClient.authorizeFileUpload(authRequest, runtime);
        com.aliyun.oss.models.Config ossConfig = com.aliyun.oss.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("accessKeySecret", accessKeySecret),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", com.aliyun.common.Common.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, _endpointType)),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.oss.Client ossClient = new com.aliyun.oss.Client(ossConfig);
        com.aliyun.fileform.models.FileField fileObj = com.aliyun.fileform.models.FileField.build(TeaConverter.buildMap(
            new TeaPair("filename", authResponse.objectKey),
            new TeaPair("content", request.imageURLObject),
            new TeaPair("contentType", "")
        ));
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader ossHeader = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("policy", authResponse.encodedPolicy),
            new TeaPair("signature", authResponse.signature),
            new TeaPair("key", authResponse.objectKey),
            new TeaPair("file", fileObj),
            new TeaPair("successActionStatus", "201")
        ));
        com.aliyun.oss.models.PostObjectRequest uploadRequest = com.aliyun.oss.models.PostObjectRequest.build(TeaConverter.buildMap(
            new TeaPair("bucketName", authResponse.bucket),
            new TeaPair("header", ossHeader)
        ));
        com.aliyun.ossutil.models.RuntimeOptions ossRuntime = new com.aliyun.ossutil.models.RuntimeOptions();
        com.aliyun.common.Common.convert(runtime, ossRuntime);
        ossClient.postObject(uploadRequest, ossRuntime);
        RecognizeAccountPageRequest recognizeAccountPagereq = new RecognizeAccountPageRequest();
        com.aliyun.common.Common.convert(request, recognizeAccountPagereq);
        recognizeAccountPagereq.imageURL = "http://" + authResponse.bucket + "." + authResponse.endpoint + "/" + authResponse.objectKey + "";
        RecognizeAccountPageResponse recognizeAccountPageResp = this.recognizeAccountPage(recognizeAccountPagereq, runtime);
        return recognizeAccountPageResp;
    }

    public RecognizeStampResponse recognizeStamp(RecognizeStampRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        return TeaModel.toModel(this._request("RecognizeStamp", "HTTPS", "POST", "AK", null, TeaModel.buildMap(request), runtime), new RecognizeStampResponse());
    }

    public RecognizeStampResponse recognizeStampAdvance(RecognizeStampAdvanceRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        String accessKeyId = _credential.getAccessKeyId();
        String accessKeySecret = _credential.getAccessKeySecret();
        com.aliyun.openplatform.models.Config authConfig = com.aliyun.openplatform.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", accessKeyId),
            new TeaPair("accessKeySecret", accessKeySecret),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", "openplatform.aliyuncs.com"),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.Client authClient = new com.aliyun.openplatform.Client(authConfig);
        com.aliyun.openplatform.models.AuthorizeFileUploadRequest authRequest = com.aliyun.openplatform.models.AuthorizeFileUploadRequest.build(TeaConverter.buildMap(
            new TeaPair("product", "ocr"),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.models.AuthorizeFileUploadResponse authResponse = authClient.authorizeFileUpload(authRequest, runtime);
        com.aliyun.oss.models.Config ossConfig = com.aliyun.oss.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("accessKeySecret", accessKeySecret),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", com.aliyun.common.Common.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, _endpointType)),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.oss.Client ossClient = new com.aliyun.oss.Client(ossConfig);
        com.aliyun.fileform.models.FileField fileObj = com.aliyun.fileform.models.FileField.build(TeaConverter.buildMap(
            new TeaPair("filename", authResponse.objectKey),
            new TeaPair("content", request.imageURLObject),
            new TeaPair("contentType", "")
        ));
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader ossHeader = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("policy", authResponse.encodedPolicy),
            new TeaPair("signature", authResponse.signature),
            new TeaPair("key", authResponse.objectKey),
            new TeaPair("file", fileObj),
            new TeaPair("successActionStatus", "201")
        ));
        com.aliyun.oss.models.PostObjectRequest uploadRequest = com.aliyun.oss.models.PostObjectRequest.build(TeaConverter.buildMap(
            new TeaPair("bucketName", authResponse.bucket),
            new TeaPair("header", ossHeader)
        ));
        com.aliyun.ossutil.models.RuntimeOptions ossRuntime = new com.aliyun.ossutil.models.RuntimeOptions();
        com.aliyun.common.Common.convert(runtime, ossRuntime);
        ossClient.postObject(uploadRequest, ossRuntime);
        RecognizeStampRequest recognizeStampreq = new RecognizeStampRequest();
        com.aliyun.common.Common.convert(request, recognizeStampreq);
        recognizeStampreq.imageURL = "http://" + authResponse.bucket + "." + authResponse.endpoint + "/" + authResponse.objectKey + "";
        RecognizeStampResponse recognizeStampResp = this.recognizeStamp(recognizeStampreq, runtime);
        return recognizeStampResp;
    }

    public RecognizeBusinessCardResponse recognizeBusinessCard(RecognizeBusinessCardRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        return TeaModel.toModel(this._request("RecognizeBusinessCard", "HTTPS", "POST", "AK", null, TeaModel.buildMap(request), runtime), new RecognizeBusinessCardResponse());
    }

    public RecognizeBusinessCardResponse recognizeBusinessCardAdvance(RecognizeBusinessCardAdvanceRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        String accessKeyId = _credential.getAccessKeyId();
        String accessKeySecret = _credential.getAccessKeySecret();
        com.aliyun.openplatform.models.Config authConfig = com.aliyun.openplatform.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", accessKeyId),
            new TeaPair("accessKeySecret", accessKeySecret),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", "openplatform.aliyuncs.com"),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.Client authClient = new com.aliyun.openplatform.Client(authConfig);
        com.aliyun.openplatform.models.AuthorizeFileUploadRequest authRequest = com.aliyun.openplatform.models.AuthorizeFileUploadRequest.build(TeaConverter.buildMap(
            new TeaPair("product", "ocr"),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.models.AuthorizeFileUploadResponse authResponse = authClient.authorizeFileUpload(authRequest, runtime);
        com.aliyun.oss.models.Config ossConfig = com.aliyun.oss.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("accessKeySecret", accessKeySecret),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", com.aliyun.common.Common.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, _endpointType)),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.oss.Client ossClient = new com.aliyun.oss.Client(ossConfig);
        com.aliyun.fileform.models.FileField fileObj = com.aliyun.fileform.models.FileField.build(TeaConverter.buildMap(
            new TeaPair("filename", authResponse.objectKey),
            new TeaPair("content", request.imageURLObject),
            new TeaPair("contentType", "")
        ));
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader ossHeader = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("policy", authResponse.encodedPolicy),
            new TeaPair("signature", authResponse.signature),
            new TeaPair("key", authResponse.objectKey),
            new TeaPair("file", fileObj),
            new TeaPair("successActionStatus", "201")
        ));
        com.aliyun.oss.models.PostObjectRequest uploadRequest = com.aliyun.oss.models.PostObjectRequest.build(TeaConverter.buildMap(
            new TeaPair("bucketName", authResponse.bucket),
            new TeaPair("header", ossHeader)
        ));
        com.aliyun.ossutil.models.RuntimeOptions ossRuntime = new com.aliyun.ossutil.models.RuntimeOptions();
        com.aliyun.common.Common.convert(runtime, ossRuntime);
        ossClient.postObject(uploadRequest, ossRuntime);
        RecognizeBusinessCardRequest recognizeBusinessCardreq = new RecognizeBusinessCardRequest();
        com.aliyun.common.Common.convert(request, recognizeBusinessCardreq);
        recognizeBusinessCardreq.imageURL = "http://" + authResponse.bucket + "." + authResponse.endpoint + "/" + authResponse.objectKey + "";
        RecognizeBusinessCardResponse recognizeBusinessCardResp = this.recognizeBusinessCard(recognizeBusinessCardreq, runtime);
        return recognizeBusinessCardResp;
    }

    public RecognizeVINCodeResponse recognizeVINCode(RecognizeVINCodeRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        return TeaModel.toModel(this._request("RecognizeVINCode", "HTTPS", "POST", "AK", TeaModel.buildMap(request), null, runtime), new RecognizeVINCodeResponse());
    }

    public RecognizeVINCodeResponse recognizeVINCodeAdvance(RecognizeVINCodeAdvanceRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        String accessKeyId = _credential.getAccessKeyId();
        String accessKeySecret = _credential.getAccessKeySecret();
        com.aliyun.openplatform.models.Config authConfig = com.aliyun.openplatform.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", accessKeyId),
            new TeaPair("accessKeySecret", accessKeySecret),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", "openplatform.aliyuncs.com"),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.Client authClient = new com.aliyun.openplatform.Client(authConfig);
        com.aliyun.openplatform.models.AuthorizeFileUploadRequest authRequest = com.aliyun.openplatform.models.AuthorizeFileUploadRequest.build(TeaConverter.buildMap(
            new TeaPair("product", "ocr"),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.models.AuthorizeFileUploadResponse authResponse = authClient.authorizeFileUpload(authRequest, runtime);
        com.aliyun.oss.models.Config ossConfig = com.aliyun.oss.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("accessKeySecret", accessKeySecret),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", com.aliyun.common.Common.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, _endpointType)),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.oss.Client ossClient = new com.aliyun.oss.Client(ossConfig);
        com.aliyun.fileform.models.FileField fileObj = com.aliyun.fileform.models.FileField.build(TeaConverter.buildMap(
            new TeaPair("filename", authResponse.objectKey),
            new TeaPair("content", request.imageURLObject),
            new TeaPair("contentType", "")
        ));
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader ossHeader = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("policy", authResponse.encodedPolicy),
            new TeaPair("signature", authResponse.signature),
            new TeaPair("key", authResponse.objectKey),
            new TeaPair("file", fileObj),
            new TeaPair("successActionStatus", "201")
        ));
        com.aliyun.oss.models.PostObjectRequest uploadRequest = com.aliyun.oss.models.PostObjectRequest.build(TeaConverter.buildMap(
            new TeaPair("bucketName", authResponse.bucket),
            new TeaPair("header", ossHeader)
        ));
        com.aliyun.ossutil.models.RuntimeOptions ossRuntime = new com.aliyun.ossutil.models.RuntimeOptions();
        com.aliyun.common.Common.convert(runtime, ossRuntime);
        ossClient.postObject(uploadRequest, ossRuntime);
        RecognizeVINCodeRequest recognizeVINCodereq = new RecognizeVINCodeRequest();
        com.aliyun.common.Common.convert(request, recognizeVINCodereq);
        recognizeVINCodereq.imageURL = "http://" + authResponse.bucket + "." + authResponse.endpoint + "/" + authResponse.objectKey + "";
        RecognizeVINCodeResponse recognizeVINCodeResp = this.recognizeVINCode(recognizeVINCodereq, runtime);
        return recognizeVINCodeResp;
    }

    public RecognizeBusinessLicenseResponse recognizeBusinessLicense(RecognizeBusinessLicenseRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        return TeaModel.toModel(this._request("RecognizeBusinessLicense", "HTTPS", "POST", "AK", null, TeaModel.buildMap(request), runtime), new RecognizeBusinessLicenseResponse());
    }

    public RecognizeBusinessLicenseResponse recognizeBusinessLicenseAdvance(RecognizeBusinessLicenseAdvanceRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        String accessKeyId = _credential.getAccessKeyId();
        String accessKeySecret = _credential.getAccessKeySecret();
        com.aliyun.openplatform.models.Config authConfig = com.aliyun.openplatform.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", accessKeyId),
            new TeaPair("accessKeySecret", accessKeySecret),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", "openplatform.aliyuncs.com"),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.Client authClient = new com.aliyun.openplatform.Client(authConfig);
        com.aliyun.openplatform.models.AuthorizeFileUploadRequest authRequest = com.aliyun.openplatform.models.AuthorizeFileUploadRequest.build(TeaConverter.buildMap(
            new TeaPair("product", "ocr"),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.models.AuthorizeFileUploadResponse authResponse = authClient.authorizeFileUpload(authRequest, runtime);
        com.aliyun.oss.models.Config ossConfig = com.aliyun.oss.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("accessKeySecret", accessKeySecret),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", com.aliyun.common.Common.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, _endpointType)),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.oss.Client ossClient = new com.aliyun.oss.Client(ossConfig);
        com.aliyun.fileform.models.FileField fileObj = com.aliyun.fileform.models.FileField.build(TeaConverter.buildMap(
            new TeaPair("filename", authResponse.objectKey),
            new TeaPair("content", request.imageURLObject),
            new TeaPair("contentType", "")
        ));
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader ossHeader = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("policy", authResponse.encodedPolicy),
            new TeaPair("signature", authResponse.signature),
            new TeaPair("key", authResponse.objectKey),
            new TeaPair("file", fileObj),
            new TeaPair("successActionStatus", "201")
        ));
        com.aliyun.oss.models.PostObjectRequest uploadRequest = com.aliyun.oss.models.PostObjectRequest.build(TeaConverter.buildMap(
            new TeaPair("bucketName", authResponse.bucket),
            new TeaPair("header", ossHeader)
        ));
        com.aliyun.ossutil.models.RuntimeOptions ossRuntime = new com.aliyun.ossutil.models.RuntimeOptions();
        com.aliyun.common.Common.convert(runtime, ossRuntime);
        ossClient.postObject(uploadRequest, ossRuntime);
        RecognizeBusinessLicenseRequest recognizeBusinessLicensereq = new RecognizeBusinessLicenseRequest();
        com.aliyun.common.Common.convert(request, recognizeBusinessLicensereq);
        recognizeBusinessLicensereq.imageURL = "http://" + authResponse.bucket + "." + authResponse.endpoint + "/" + authResponse.objectKey + "";
        RecognizeBusinessLicenseResponse recognizeBusinessLicenseResp = this.recognizeBusinessLicense(recognizeBusinessLicensereq, runtime);
        return recognizeBusinessLicenseResp;
    }

    public String getUserAgent() throws Exception {
        String userAgent = com.aliyun.teautil.Common.getUserAgent(_userAgent);
        return userAgent;
    }

    public String getAccessKeyId() throws Exception {
        if (com.aliyun.teautil.Common.isUnset(_credential)) {
            return "";
        }

        String accessKeyId = _credential.getAccessKeyId();
        return accessKeyId;
    }

    public String getAccessKeySecret() throws Exception {
        if (com.aliyun.teautil.Common.isUnset(_credential)) {
            return "";
        }

        String secret = _credential.getAccessKeySecret();
        return secret;
    }
}
