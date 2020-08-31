// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cspro20180315.models;

import com.aliyun.tea.*;

public class GetIpProfileResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Code")
    @Validation(required = true)
    public String code;

    @NameInMap("Message")
    @Validation(required = true)
    public String message;

    @NameInMap("Success")
    @Validation(required = true)
    public Boolean success;

    @NameInMap("Data")
    @Validation(required = true)
    public GetIpProfileResponseData data;

    public static GetIpProfileResponse build(java.util.Map<String, ?> map) throws Exception {
        GetIpProfileResponse self = new GetIpProfileResponse();
        return TeaModel.build(map, self);
    }

    public GetIpProfileResponse setRequestId(String requestId) {
        this.requestId = requestId;
        return this;
    }
    public String getRequestId() {
        return this.requestId;
    }

    public GetIpProfileResponse setCode(String code) {
        this.code = code;
        return this;
    }
    public String getCode() {
        return this.code;
    }

    public GetIpProfileResponse setMessage(String message) {
        this.message = message;
        return this;
    }
    public String getMessage() {
        return this.message;
    }

    public GetIpProfileResponse setSuccess(Boolean success) {
        this.success = success;
        return this;
    }
    public Boolean getSuccess() {
        return this.success;
    }

    public GetIpProfileResponse setData(GetIpProfileResponseData data) {
        this.data = data;
        return this;
    }
    public GetIpProfileResponseData getData() {
        return this.data;
    }

    public static class GetIpProfileResponseDataInfo extends TeaModel {
        @NameInMap("IsAbroad")
        @Validation(required = true)
        public Integer isAbroad;

        @NameInMap("IsIdc")
        @Validation(required = true)
        public Integer isIdc;

        @NameInMap("IsProxy")
        @Validation(required = true)
        public Integer isProxy;

        @NameInMap("IsNat")
        @Validation(required = true)
        public Integer isNat;

        @NameInMap("IsBase")
        @Validation(required = true)
        public Integer isBase;

        @NameInMap("IsTor")
        @Validation(required = true)
        public Integer isTor;

        @NameInMap("IsBindDomain1d")
        @Validation(required = true)
        public Integer isBindDomain1d;

        @NameInMap("IsBindDomain7d")
        @Validation(required = true)
        public Integer isBindDomain7d;

        @NameInMap("IsBindDomain30d")
        @Validation(required = true)
        public Integer isBindDomain30d;

        @NameInMap("IsNetAttack1d")
        @Validation(required = true)
        public Integer isNetAttack1d;

        @NameInMap("IsNetAttack7d")
        @Validation(required = true)
        public Integer isNetAttack7d;

        @NameInMap("IsNetAttack30d")
        @Validation(required = true)
        public Integer isNetAttack30d;

        @NameInMap("IsBotnet1d")
        @Validation(required = true)
        public Integer isBotnet1d;

        @NameInMap("IsBotnet7d")
        @Validation(required = true)
        public Integer isBotnet7d;

        @NameInMap("IsBotnet30d")
        @Validation(required = true)
        public Integer isBotnet30d;

        @NameInMap("IsC21d")
        @Validation(required = true)
        public Integer isC21d;

        @NameInMap("IsC27d")
        @Validation(required = true)
        public Integer isC27d;

        @NameInMap("IsC230d")
        @Validation(required = true)
        public Integer isC230d;

        @NameInMap("IsBlackCampaign1d")
        @Validation(required = true)
        public Integer isBlackCampaign1d;

        @NameInMap("IsBlackCampaign7d")
        @Validation(required = true)
        public Integer isBlackCampaign7d;

        @NameInMap("IsBlackCampaign30d")
        @Validation(required = true)
        public Integer isBlackCampaign30d;

        @NameInMap("IsOpenCommonPort1d")
        @Validation(required = true)
        public Integer isOpenCommonPort1d;

        @NameInMap("IsOpenCommonPort7d")
        @Validation(required = true)
        public Integer isOpenCommonPort7d;

        @NameInMap("IsOpenCommonPort30d")
        @Validation(required = true)
        public Integer isOpenCommonPort30d;

        @NameInMap("IsCheatflow1d")
        @Validation(required = true)
        public Integer isCheatflow1d;

        @NameInMap("IsCheatflow7d")
        @Validation(required = true)
        public Integer isCheatflow7d;

        @NameInMap("IsCheatflow30d")
        @Validation(required = true)
        public Integer isCheatflow30d;

        @NameInMap("IsHijack1d")
        @Validation(required = true)
        public Integer isHijack1d;

        @NameInMap("IsHijack7d")
        @Validation(required = true)
        public Integer isHijack7d;

        @NameInMap("IsHijack30d")
        @Validation(required = true)
        public Integer isHijack30d;

        @NameInMap("IsProxy1d")
        @Validation(required = true)
        public Integer isProxy1d;

        @NameInMap("IsProxy7d")
        @Validation(required = true)
        public Integer isProxy7d;

        @NameInMap("IsProxy30d")
        @Validation(required = true)
        public Integer isProxy30d;

        @NameInMap("Country")
        @Validation(required = true)
        public String country;

        @NameInMap("Province")
        @Validation(required = true)
        public String province;

        @NameInMap("City")
        @Validation(required = true)
        public String city;

        @NameInMap("Isp")
        @Validation(required = true)
        public String isp;

        @NameInMap("AsnId")
        @Validation(required = true)
        public String asnId;

        public static GetIpProfileResponseDataInfo build(java.util.Map<String, ?> map) throws Exception {
            GetIpProfileResponseDataInfo self = new GetIpProfileResponseDataInfo();
            return TeaModel.build(map, self);
        }

        public GetIpProfileResponseDataInfo setIsAbroad(Integer isAbroad) {
            this.isAbroad = isAbroad;
            return this;
        }
        public Integer getIsAbroad() {
            return this.isAbroad;
        }

        public GetIpProfileResponseDataInfo setIsIdc(Integer isIdc) {
            this.isIdc = isIdc;
            return this;
        }
        public Integer getIsIdc() {
            return this.isIdc;
        }

        public GetIpProfileResponseDataInfo setIsProxy(Integer isProxy) {
            this.isProxy = isProxy;
            return this;
        }
        public Integer getIsProxy() {
            return this.isProxy;
        }

        public GetIpProfileResponseDataInfo setIsNat(Integer isNat) {
            this.isNat = isNat;
            return this;
        }
        public Integer getIsNat() {
            return this.isNat;
        }

        public GetIpProfileResponseDataInfo setIsBase(Integer isBase) {
            this.isBase = isBase;
            return this;
        }
        public Integer getIsBase() {
            return this.isBase;
        }

        public GetIpProfileResponseDataInfo setIsTor(Integer isTor) {
            this.isTor = isTor;
            return this;
        }
        public Integer getIsTor() {
            return this.isTor;
        }

        public GetIpProfileResponseDataInfo setIsBindDomain1d(Integer isBindDomain1d) {
            this.isBindDomain1d = isBindDomain1d;
            return this;
        }
        public Integer getIsBindDomain1d() {
            return this.isBindDomain1d;
        }

        public GetIpProfileResponseDataInfo setIsBindDomain7d(Integer isBindDomain7d) {
            this.isBindDomain7d = isBindDomain7d;
            return this;
        }
        public Integer getIsBindDomain7d() {
            return this.isBindDomain7d;
        }

        public GetIpProfileResponseDataInfo setIsBindDomain30d(Integer isBindDomain30d) {
            this.isBindDomain30d = isBindDomain30d;
            return this;
        }
        public Integer getIsBindDomain30d() {
            return this.isBindDomain30d;
        }

        public GetIpProfileResponseDataInfo setIsNetAttack1d(Integer isNetAttack1d) {
            this.isNetAttack1d = isNetAttack1d;
            return this;
        }
        public Integer getIsNetAttack1d() {
            return this.isNetAttack1d;
        }

        public GetIpProfileResponseDataInfo setIsNetAttack7d(Integer isNetAttack7d) {
            this.isNetAttack7d = isNetAttack7d;
            return this;
        }
        public Integer getIsNetAttack7d() {
            return this.isNetAttack7d;
        }

        public GetIpProfileResponseDataInfo setIsNetAttack30d(Integer isNetAttack30d) {
            this.isNetAttack30d = isNetAttack30d;
            return this;
        }
        public Integer getIsNetAttack30d() {
            return this.isNetAttack30d;
        }

        public GetIpProfileResponseDataInfo setIsBotnet1d(Integer isBotnet1d) {
            this.isBotnet1d = isBotnet1d;
            return this;
        }
        public Integer getIsBotnet1d() {
            return this.isBotnet1d;
        }

        public GetIpProfileResponseDataInfo setIsBotnet7d(Integer isBotnet7d) {
            this.isBotnet7d = isBotnet7d;
            return this;
        }
        public Integer getIsBotnet7d() {
            return this.isBotnet7d;
        }

        public GetIpProfileResponseDataInfo setIsBotnet30d(Integer isBotnet30d) {
            this.isBotnet30d = isBotnet30d;
            return this;
        }
        public Integer getIsBotnet30d() {
            return this.isBotnet30d;
        }

        public GetIpProfileResponseDataInfo setIsC21d(Integer isC21d) {
            this.isC21d = isC21d;
            return this;
        }
        public Integer getIsC21d() {
            return this.isC21d;
        }

        public GetIpProfileResponseDataInfo setIsC27d(Integer isC27d) {
            this.isC27d = isC27d;
            return this;
        }
        public Integer getIsC27d() {
            return this.isC27d;
        }

        public GetIpProfileResponseDataInfo setIsC230d(Integer isC230d) {
            this.isC230d = isC230d;
            return this;
        }
        public Integer getIsC230d() {
            return this.isC230d;
        }

        public GetIpProfileResponseDataInfo setIsBlackCampaign1d(Integer isBlackCampaign1d) {
            this.isBlackCampaign1d = isBlackCampaign1d;
            return this;
        }
        public Integer getIsBlackCampaign1d() {
            return this.isBlackCampaign1d;
        }

        public GetIpProfileResponseDataInfo setIsBlackCampaign7d(Integer isBlackCampaign7d) {
            this.isBlackCampaign7d = isBlackCampaign7d;
            return this;
        }
        public Integer getIsBlackCampaign7d() {
            return this.isBlackCampaign7d;
        }

        public GetIpProfileResponseDataInfo setIsBlackCampaign30d(Integer isBlackCampaign30d) {
            this.isBlackCampaign30d = isBlackCampaign30d;
            return this;
        }
        public Integer getIsBlackCampaign30d() {
            return this.isBlackCampaign30d;
        }

        public GetIpProfileResponseDataInfo setIsOpenCommonPort1d(Integer isOpenCommonPort1d) {
            this.isOpenCommonPort1d = isOpenCommonPort1d;
            return this;
        }
        public Integer getIsOpenCommonPort1d() {
            return this.isOpenCommonPort1d;
        }

        public GetIpProfileResponseDataInfo setIsOpenCommonPort7d(Integer isOpenCommonPort7d) {
            this.isOpenCommonPort7d = isOpenCommonPort7d;
            return this;
        }
        public Integer getIsOpenCommonPort7d() {
            return this.isOpenCommonPort7d;
        }

        public GetIpProfileResponseDataInfo setIsOpenCommonPort30d(Integer isOpenCommonPort30d) {
            this.isOpenCommonPort30d = isOpenCommonPort30d;
            return this;
        }
        public Integer getIsOpenCommonPort30d() {
            return this.isOpenCommonPort30d;
        }

        public GetIpProfileResponseDataInfo setIsCheatflow1d(Integer isCheatflow1d) {
            this.isCheatflow1d = isCheatflow1d;
            return this;
        }
        public Integer getIsCheatflow1d() {
            return this.isCheatflow1d;
        }

        public GetIpProfileResponseDataInfo setIsCheatflow7d(Integer isCheatflow7d) {
            this.isCheatflow7d = isCheatflow7d;
            return this;
        }
        public Integer getIsCheatflow7d() {
            return this.isCheatflow7d;
        }

        public GetIpProfileResponseDataInfo setIsCheatflow30d(Integer isCheatflow30d) {
            this.isCheatflow30d = isCheatflow30d;
            return this;
        }
        public Integer getIsCheatflow30d() {
            return this.isCheatflow30d;
        }

        public GetIpProfileResponseDataInfo setIsHijack1d(Integer isHijack1d) {
            this.isHijack1d = isHijack1d;
            return this;
        }
        public Integer getIsHijack1d() {
            return this.isHijack1d;
        }

        public GetIpProfileResponseDataInfo setIsHijack7d(Integer isHijack7d) {
            this.isHijack7d = isHijack7d;
            return this;
        }
        public Integer getIsHijack7d() {
            return this.isHijack7d;
        }

        public GetIpProfileResponseDataInfo setIsHijack30d(Integer isHijack30d) {
            this.isHijack30d = isHijack30d;
            return this;
        }
        public Integer getIsHijack30d() {
            return this.isHijack30d;
        }

        public GetIpProfileResponseDataInfo setIsProxy1d(Integer isProxy1d) {
            this.isProxy1d = isProxy1d;
            return this;
        }
        public Integer getIsProxy1d() {
            return this.isProxy1d;
        }

        public GetIpProfileResponseDataInfo setIsProxy7d(Integer isProxy7d) {
            this.isProxy7d = isProxy7d;
            return this;
        }
        public Integer getIsProxy7d() {
            return this.isProxy7d;
        }

        public GetIpProfileResponseDataInfo setIsProxy30d(Integer isProxy30d) {
            this.isProxy30d = isProxy30d;
            return this;
        }
        public Integer getIsProxy30d() {
            return this.isProxy30d;
        }

        public GetIpProfileResponseDataInfo setCountry(String country) {
            this.country = country;
            return this;
        }
        public String getCountry() {
            return this.country;
        }

        public GetIpProfileResponseDataInfo setProvince(String province) {
            this.province = province;
            return this;
        }
        public String getProvince() {
            return this.province;
        }

        public GetIpProfileResponseDataInfo setCity(String city) {
            this.city = city;
            return this;
        }
        public String getCity() {
            return this.city;
        }

        public GetIpProfileResponseDataInfo setIsp(String isp) {
            this.isp = isp;
            return this;
        }
        public String getIsp() {
            return this.isp;
        }

        public GetIpProfileResponseDataInfo setAsnId(String asnId) {
            this.asnId = asnId;
            return this;
        }
        public String getAsnId() {
            return this.asnId;
        }

    }

    public static class GetIpProfileResponseData extends TeaModel {
        @NameInMap("Ip")
        @Validation(required = true)
        public String ip;

        @NameInMap("Info")
        @Validation(required = true)
        public GetIpProfileResponseDataInfo info;

        public static GetIpProfileResponseData build(java.util.Map<String, ?> map) throws Exception {
            GetIpProfileResponseData self = new GetIpProfileResponseData();
            return TeaModel.build(map, self);
        }

        public GetIpProfileResponseData setIp(String ip) {
            this.ip = ip;
            return this;
        }
        public String getIp() {
            return this.ip;
        }

        public GetIpProfileResponseData setInfo(GetIpProfileResponseDataInfo info) {
            this.info = info;
            return this;
        }
        public GetIpProfileResponseDataInfo getInfo() {
            return this.info;
        }

    }

}
