// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections;
using System.Collections.Generic;
using System.IO;
using System.Threading.Tasks;

using Tea;

using AlibabaCloud.RPC;
using AlibabaCloud.Imagerecog.Models;

namespace AlibabaCloud.Imagerecog
{
    public class Client : RPCClient
    {

        public Client(Config config): base(config.ToMap())
        { }

        public Dictionary<string, object> _request(string action, string protocol, string method, Dictionary<string, object> request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            Dictionary<string, object> runtime_ = new Dictionary<string, object>()
            {
                {"timeouted", "retry"},
                {"readTimeout", AlibabaCloud.Commons.Common.DefaultNumber(runtime.ReadTimeout, _readTimeout)},
                {"connectTimeout", AlibabaCloud.Commons.Common.DefaultNumber(runtime.ConnectTimeout, _connectTimeout)},
                {"httpProxy", AlibabaCloud.Commons.Common.Default(runtime.HttpProxy, _httpProxy)},
                {"httpsProxy", AlibabaCloud.Commons.Common.Default(runtime.HttpsProxy, _httpsProxy)},
                {"noProxy", AlibabaCloud.Commons.Common.Default(runtime.NoProxy, _noProxy)},
                {"maxIdleConns", AlibabaCloud.Commons.Common.DefaultNumber(runtime.MaxIdleConns, _maxIdleConns)},
                {"retry", new Dictionary<string, object>()
                {
                    {"retryable", runtime.Autoretry},
                    {"maxAttempts", AlibabaCloud.Commons.Common.DefaultNumber(runtime.MaxAttempts, 3)},
                }},
                {"backoff", new Dictionary<string, object>()
                {
                    {"policy", AlibabaCloud.Commons.Common.Default(runtime.BackoffPolicy, "no")},
                    {"period", AlibabaCloud.Commons.Common.DefaultNumber(runtime.BackoffPeriod, 1)},
                }},
                {"ignoreSSL", runtime.IgnoreSSL},
            };

            TeaRequest _lastRequest = null;
            Exception _lastException = null;
            long _now = System.DateTime.Now.Millisecond;
            int _retryTimes = 0;
            while (TeaCore.AllowRetry((IDictionary) runtime_["retry"], _retryTimes, _now))
            {
                if (_retryTimes > 0)
                {
                    int backoffTime = TeaCore.GetBackoffTime((IDictionary)runtime_["backoff"], _retryTimes);
                    if (backoffTime > 0)
                    {
                        TeaCore.Sleep(backoffTime);
                    }
                }
                _retryTimes = _retryTimes + 1;
                try
                {
                    TeaRequest request_ = new TeaRequest();
                    request_.Protocol = AlibabaCloud.Commons.Common.Default(_protocol, protocol);
                    request_.Method = method;
                    request_.Pathname = "/";
                    request_.Query = AlibabaCloud.Commons.Common.Query(TeaConverter.merge<object>
                    (
                        new Dictionary<string, object>()
                        {
                            {"Action", action},
                            {"Format", "json"},
                            {"RegionId", _regionId},
                            {"Timestamp", AlibabaCloud.Commons.Common.GetTimestamp()},
                            {"Date", AlibabaCloud.Commons.Common.GetTimestamp()},
                            {"Version", "2019-09-30"},
                            {"SignatureMethod", "HMAC-SHA1"},
                            {"SignatureVersion", "1.0"},
                            {"SignatureNonce", AlibabaCloud.Commons.Common.GetNonce()},
                            {"AccessKeyId", _getAccessKeyId()},
                        },
                        request
                    ));
                    request_.Headers = new Dictionary<string, string>()
                    {
                        {"host", AlibabaCloud.Commons.Common.GetHost("imagerecog", _regionId, _endpoint)},
                        {"user-agent", AlibabaCloud.Commons.Common.GetUserAgent(_userAgent)},
                    };
                    request_.Query["Signature"] = AlibabaCloud.Commons.Common.GetSignature(request_, _getAccessKeySecret());
                    _lastRequest = request_;
                    TeaResponse response_ = TeaCore.DoAction(request_, runtime_);

                    Dictionary<string, object> body = AlibabaCloud.Commons.Common.Json(response_);
                    if (AlibabaCloud.Commons.Common.HasError(body))
                    {
                        throw new TeaException(new Dictionary<string, object>()
                        {
                            {"message", body["Message"]},
                            {"data", body},
                            {"code", body["Code"]},
                        });
                    }
                    return body;
                }
                catch (Exception e)
                {
                    if (TeaCore.IsRetryable(e))
                    {
                        _lastException = e;
                        continue;
                    }
                    throw e;
                }
            }

            throw new TeaUnretryableException(_lastRequest, _lastException);
        }

        public async Task<Dictionary<string, object>> _requestAsync(string action, string protocol, string method, Dictionary<string, object> request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            Dictionary<string, object> runtime_ = new Dictionary<string, object>()
            {
                {"timeouted", "retry"},
                {"readTimeout", AlibabaCloud.Commons.Common.DefaultNumber(runtime.ReadTimeout, _readTimeout)},
                {"connectTimeout", AlibabaCloud.Commons.Common.DefaultNumber(runtime.ConnectTimeout, _connectTimeout)},
                {"httpProxy", AlibabaCloud.Commons.Common.Default(runtime.HttpProxy, _httpProxy)},
                {"httpsProxy", AlibabaCloud.Commons.Common.Default(runtime.HttpsProxy, _httpsProxy)},
                {"noProxy", AlibabaCloud.Commons.Common.Default(runtime.NoProxy, _noProxy)},
                {"maxIdleConns", AlibabaCloud.Commons.Common.DefaultNumber(runtime.MaxIdleConns, _maxIdleConns)},
                {"retry", new Dictionary<string, object>()
                {
                    {"retryable", runtime.Autoretry},
                    {"maxAttempts", AlibabaCloud.Commons.Common.DefaultNumber(runtime.MaxAttempts, 3)},
                }},
                {"backoff", new Dictionary<string, object>()
                {
                    {"policy", AlibabaCloud.Commons.Common.Default(runtime.BackoffPolicy, "no")},
                    {"period", AlibabaCloud.Commons.Common.DefaultNumber(runtime.BackoffPeriod, 1)},
                }},
                {"ignoreSSL", runtime.IgnoreSSL},
            };

            TeaRequest _lastRequest = null;
            Exception _lastException = null;
            long _now = System.DateTime.Now.Millisecond;
            int _retryTimes = 0;
            while (TeaCore.AllowRetry((IDictionary) runtime_["retry"], _retryTimes, _now))
            {
                if (_retryTimes > 0)
                {
                    int backoffTime = TeaCore.GetBackoffTime((IDictionary)runtime_["backoff"], _retryTimes);
                    if (backoffTime > 0)
                    {
                        TeaCore.Sleep(backoffTime);
                    }
                }
                _retryTimes = _retryTimes + 1;
                try
                {
                    TeaRequest request_ = new TeaRequest();
                    request_.Protocol = AlibabaCloud.Commons.Common.Default(_protocol, protocol);
                    request_.Method = method;
                    request_.Pathname = "/";
                    request_.Query = AlibabaCloud.Commons.Common.Query(TeaConverter.merge<object>
                    (
                        new Dictionary<string, object>()
                        {
                            {"Action", action},
                            {"Format", "json"},
                            {"RegionId", _regionId},
                            {"Timestamp", AlibabaCloud.Commons.Common.GetTimestamp()},
                            {"Date", AlibabaCloud.Commons.Common.GetTimestamp()},
                            {"Version", "2019-09-30"},
                            {"SignatureMethod", "HMAC-SHA1"},
                            {"SignatureVersion", "1.0"},
                            {"SignatureNonce", AlibabaCloud.Commons.Common.GetNonce()},
                            {"AccessKeyId", _getAccessKeyId()},
                        },
                        request
                    ));
                    request_.Headers = new Dictionary<string, string>()
                    {
                        {"host", AlibabaCloud.Commons.Common.GetHost("imagerecog", _regionId, _endpoint)},
                        {"user-agent", AlibabaCloud.Commons.Common.GetUserAgent(_userAgent)},
                    };
                    request_.Query["Signature"] = AlibabaCloud.Commons.Common.GetSignature(request_, _getAccessKeySecret());
                    _lastRequest = request_;
                    TeaResponse response_ = await TeaCore.DoActionAsync(request_, runtime_);

                    Dictionary<string, object> body = AlibabaCloud.Commons.Common.Json(response_);
                    if (AlibabaCloud.Commons.Common.HasError(body))
                    {
                        throw new TeaException(new Dictionary<string, object>()
                        {
                            {"message", body["Message"]},
                            {"data", body},
                            {"code", body["Code"]},
                        });
                    }
                    return body;
                }
                catch (Exception e)
                {
                    if (TeaCore.IsRetryable(e))
                    {
                        _lastException = e;
                        continue;
                    }
                    throw e;
                }
            }

            throw new TeaUnretryableException(_lastRequest, _lastException);
        }

        public TaggingImageResponse TaggingImage(TaggingImageRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            return TeaModel.ToObject<TaggingImageResponse>(_request("TaggingImage", "HTTPS", "POST", request.ToMap(), runtime));
        }

        public async Task<TaggingImageResponse> TaggingImageAsync(TaggingImageRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            return TeaModel.ToObject<TaggingImageResponse>(await _requestAsync("TaggingImage", "HTTPS", "POST", request.ToMap(), runtime));
        }

        public TaggingImageResponse TaggingImageAdvance(TaggingImageAdvanceRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            AlibabaCloud.SDK.OpenPlatform.Models.Config authConfig = new AlibabaCloud.SDK.OpenPlatform.Models.Config
            {
                AccessKeyId = _getAccessKeyId(),
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Client authClient = new AlibabaCloud.SDK.OpenPlatform.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest
            {
                Product = "imagerecog",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUpload(authRequest, runtime);
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile fileObj = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile
            {
                FileName = authResponse.ObjectKey,
                Content = request.ImageURLObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            ossClient.PostObject(uploadRequest, runtime);
            TaggingImageRequest taggingImagereq = new TaggingImageRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, taggingImagereq);
            taggingImagereq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            TaggingImageResponse taggingImageResp = TaggingImage(taggingImagereq, runtime);
            return taggingImageResp;
        }

        public async Task<TaggingImageResponse> TaggingImageAdvanceAsync(TaggingImageAdvanceRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            AlibabaCloud.SDK.OpenPlatform.Models.Config authConfig = new AlibabaCloud.SDK.OpenPlatform.Models.Config
            {
                AccessKeyId = _getAccessKeyId(),
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Client authClient = new AlibabaCloud.SDK.OpenPlatform.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest
            {
                Product = "imagerecog",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadAsync(authRequest, runtime);
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile fileObj = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile
            {
                FileName = authResponse.ObjectKey,
                Content = request.ImageURLObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            await ossClient.PostObjectAsync(uploadRequest, runtime);
            TaggingImageRequest taggingImagereq = new TaggingImageRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, taggingImagereq);
            taggingImagereq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            TaggingImageResponse taggingImageResp = await TaggingImageAsync(taggingImagereq, runtime);
            return taggingImageResp;
        }

        public RecognizeSceneResponse RecognizeScene(RecognizeSceneRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            return TeaModel.ToObject<RecognizeSceneResponse>(_request("RecognizeScene", "HTTPS", "POST", request.ToMap(), runtime));
        }

        public async Task<RecognizeSceneResponse> RecognizeSceneAsync(RecognizeSceneRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            return TeaModel.ToObject<RecognizeSceneResponse>(await _requestAsync("RecognizeScene", "HTTPS", "POST", request.ToMap(), runtime));
        }

        public RecognizeSceneResponse RecognizeSceneAdvance(RecognizeSceneAdvanceRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            AlibabaCloud.SDK.OpenPlatform.Models.Config authConfig = new AlibabaCloud.SDK.OpenPlatform.Models.Config
            {
                AccessKeyId = _getAccessKeyId(),
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Client authClient = new AlibabaCloud.SDK.OpenPlatform.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest
            {
                Product = "imagerecog",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUpload(authRequest, runtime);
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile fileObj = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile
            {
                FileName = authResponse.ObjectKey,
                Content = request.ImageURLObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            ossClient.PostObject(uploadRequest, runtime);
            RecognizeSceneRequest recognizeScenereq = new RecognizeSceneRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, recognizeScenereq);
            recognizeScenereq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeSceneResponse recognizeSceneResp = RecognizeScene(recognizeScenereq, runtime);
            return recognizeSceneResp;
        }

        public async Task<RecognizeSceneResponse> RecognizeSceneAdvanceAsync(RecognizeSceneAdvanceRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            AlibabaCloud.SDK.OpenPlatform.Models.Config authConfig = new AlibabaCloud.SDK.OpenPlatform.Models.Config
            {
                AccessKeyId = _getAccessKeyId(),
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Client authClient = new AlibabaCloud.SDK.OpenPlatform.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest
            {
                Product = "imagerecog",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadAsync(authRequest, runtime);
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile fileObj = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile
            {
                FileName = authResponse.ObjectKey,
                Content = request.ImageURLObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            await ossClient.PostObjectAsync(uploadRequest, runtime);
            RecognizeSceneRequest recognizeScenereq = new RecognizeSceneRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, recognizeScenereq);
            recognizeScenereq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeSceneResponse recognizeSceneResp = await RecognizeSceneAsync(recognizeScenereq, runtime);
            return recognizeSceneResp;
        }

        public RecognizeImageColorResponse RecognizeImageColor(RecognizeImageColorRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            return TeaModel.ToObject<RecognizeImageColorResponse>(_request("RecognizeImageColor", "HTTPS", "POST", request.ToMap(), runtime));
        }

        public async Task<RecognizeImageColorResponse> RecognizeImageColorAsync(RecognizeImageColorRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            return TeaModel.ToObject<RecognizeImageColorResponse>(await _requestAsync("RecognizeImageColor", "HTTPS", "POST", request.ToMap(), runtime));
        }

        public RecognizeImageColorResponse RecognizeImageColorAdvance(RecognizeImageColorAdvanceRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            AlibabaCloud.SDK.OpenPlatform.Models.Config authConfig = new AlibabaCloud.SDK.OpenPlatform.Models.Config
            {
                AccessKeyId = _getAccessKeyId(),
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Client authClient = new AlibabaCloud.SDK.OpenPlatform.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest
            {
                Product = "imagerecog",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUpload(authRequest, runtime);
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile fileObj = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile
            {
                FileName = authResponse.ObjectKey,
                Content = request.UrlObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            ossClient.PostObject(uploadRequest, runtime);
            RecognizeImageColorRequest recognizeImageColorreq = new RecognizeImageColorRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, recognizeImageColorreq);
            recognizeImageColorreq.Url = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeImageColorResponse recognizeImageColorResp = RecognizeImageColor(recognizeImageColorreq, runtime);
            return recognizeImageColorResp;
        }

        public async Task<RecognizeImageColorResponse> RecognizeImageColorAdvanceAsync(RecognizeImageColorAdvanceRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            AlibabaCloud.SDK.OpenPlatform.Models.Config authConfig = new AlibabaCloud.SDK.OpenPlatform.Models.Config
            {
                AccessKeyId = _getAccessKeyId(),
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Client authClient = new AlibabaCloud.SDK.OpenPlatform.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest
            {
                Product = "imagerecog",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadAsync(authRequest, runtime);
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile fileObj = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile
            {
                FileName = authResponse.ObjectKey,
                Content = request.UrlObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            await ossClient.PostObjectAsync(uploadRequest, runtime);
            RecognizeImageColorRequest recognizeImageColorreq = new RecognizeImageColorRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, recognizeImageColorreq);
            recognizeImageColorreq.Url = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeImageColorResponse recognizeImageColorResp = await RecognizeImageColorAsync(recognizeImageColorreq, runtime);
            return recognizeImageColorResp;
        }

        public DetectImageElementsResponse DetectImageElements(DetectImageElementsRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            return TeaModel.ToObject<DetectImageElementsResponse>(_request("DetectImageElements", "HTTPS", "POST", request.ToMap(), runtime));
        }

        public async Task<DetectImageElementsResponse> DetectImageElementsAsync(DetectImageElementsRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            return TeaModel.ToObject<DetectImageElementsResponse>(await _requestAsync("DetectImageElements", "HTTPS", "POST", request.ToMap(), runtime));
        }

        public DetectImageElementsResponse DetectImageElementsAdvance(DetectImageElementsAdvanceRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            AlibabaCloud.SDK.OpenPlatform.Models.Config authConfig = new AlibabaCloud.SDK.OpenPlatform.Models.Config
            {
                AccessKeyId = _getAccessKeyId(),
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Client authClient = new AlibabaCloud.SDK.OpenPlatform.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest
            {
                Product = "imagerecog",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUpload(authRequest, runtime);
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile fileObj = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile
            {
                FileName = authResponse.ObjectKey,
                Content = request.UrlObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            ossClient.PostObject(uploadRequest, runtime);
            DetectImageElementsRequest detectImageElementsreq = new DetectImageElementsRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, detectImageElementsreq);
            detectImageElementsreq.Url = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            DetectImageElementsResponse detectImageElementsResp = DetectImageElements(detectImageElementsreq, runtime);
            return detectImageElementsResp;
        }

        public async Task<DetectImageElementsResponse> DetectImageElementsAdvanceAsync(DetectImageElementsAdvanceRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            AlibabaCloud.SDK.OpenPlatform.Models.Config authConfig = new AlibabaCloud.SDK.OpenPlatform.Models.Config
            {
                AccessKeyId = _getAccessKeyId(),
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Client authClient = new AlibabaCloud.SDK.OpenPlatform.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest
            {
                Product = "imagerecog",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadAsync(authRequest, runtime);
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile fileObj = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile
            {
                FileName = authResponse.ObjectKey,
                Content = request.UrlObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            await ossClient.PostObjectAsync(uploadRequest, runtime);
            DetectImageElementsRequest detectImageElementsreq = new DetectImageElementsRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, detectImageElementsreq);
            detectImageElementsreq.Url = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            DetectImageElementsResponse detectImageElementsResp = await DetectImageElementsAsync(detectImageElementsreq, runtime);
            return detectImageElementsResp;
        }

        public RecognizeImageStyleResponse RecognizeImageStyle(RecognizeImageStyleRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            return TeaModel.ToObject<RecognizeImageStyleResponse>(_request("RecognizeImageStyle", "HTTPS", "POST", request.ToMap(), runtime));
        }

        public async Task<RecognizeImageStyleResponse> RecognizeImageStyleAsync(RecognizeImageStyleRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            return TeaModel.ToObject<RecognizeImageStyleResponse>(await _requestAsync("RecognizeImageStyle", "HTTPS", "POST", request.ToMap(), runtime));
        }

        public RecognizeImageStyleResponse RecognizeImageStyleAdvance(RecognizeImageStyleAdvanceRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            AlibabaCloud.SDK.OpenPlatform.Models.Config authConfig = new AlibabaCloud.SDK.OpenPlatform.Models.Config
            {
                AccessKeyId = _getAccessKeyId(),
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Client authClient = new AlibabaCloud.SDK.OpenPlatform.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest
            {
                Product = "imagerecog",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUpload(authRequest, runtime);
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile fileObj = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile
            {
                FileName = authResponse.ObjectKey,
                Content = request.UrlObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            ossClient.PostObject(uploadRequest, runtime);
            RecognizeImageStyleRequest recognizeImageStylereq = new RecognizeImageStyleRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, recognizeImageStylereq);
            recognizeImageStylereq.Url = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeImageStyleResponse recognizeImageStyleResp = RecognizeImageStyle(recognizeImageStylereq, runtime);
            return recognizeImageStyleResp;
        }

        public async Task<RecognizeImageStyleResponse> RecognizeImageStyleAdvanceAsync(RecognizeImageStyleAdvanceRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            AlibabaCloud.SDK.OpenPlatform.Models.Config authConfig = new AlibabaCloud.SDK.OpenPlatform.Models.Config
            {
                AccessKeyId = _getAccessKeyId(),
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Client authClient = new AlibabaCloud.SDK.OpenPlatform.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest
            {
                Product = "imagerecog",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadAsync(authRequest, runtime);
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile fileObj = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile
            {
                FileName = authResponse.ObjectKey,
                Content = request.UrlObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            await ossClient.PostObjectAsync(uploadRequest, runtime);
            RecognizeImageStyleRequest recognizeImageStylereq = new RecognizeImageStyleRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, recognizeImageStylereq);
            recognizeImageStylereq.Url = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeImageStyleResponse recognizeImageStyleResp = await RecognizeImageStyleAsync(recognizeImageStylereq, runtime);
            return recognizeImageStyleResp;
        }

    }
}
