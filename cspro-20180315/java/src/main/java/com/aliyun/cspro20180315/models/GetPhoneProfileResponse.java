// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cspro20180315.models;

import com.aliyun.tea.*;

public class GetPhoneProfileResponse extends TeaModel {
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
    public GetPhoneProfileResponseData data;

    public static GetPhoneProfileResponse build(java.util.Map<String, ?> map) throws Exception {
        GetPhoneProfileResponse self = new GetPhoneProfileResponse();
        return TeaModel.build(map, self);
    }

    public GetPhoneProfileResponse setRequestId(String requestId) {
        this.requestId = requestId;
        return this;
    }
    public String getRequestId() {
        return this.requestId;
    }

    public GetPhoneProfileResponse setCode(String code) {
        this.code = code;
        return this;
    }
    public String getCode() {
        return this.code;
    }

    public GetPhoneProfileResponse setMessage(String message) {
        this.message = message;
        return this;
    }
    public String getMessage() {
        return this.message;
    }

    public GetPhoneProfileResponse setSuccess(Boolean success) {
        this.success = success;
        return this;
    }
    public Boolean getSuccess() {
        return this.success;
    }

    public GetPhoneProfileResponse setData(GetPhoneProfileResponseData data) {
        this.data = data;
        return this;
    }
    public GetPhoneProfileResponseData getData() {
        return this.data;
    }

    public static class GetPhoneProfileResponseDataInfo extends TeaModel {
        @NameInMap("IsVirtualOperator")
        @Validation(required = true)
        public Integer isVirtualOperator;

        @NameInMap("IsBlackPhone")
        @Validation(required = true)
        public Integer isBlackPhone;

        @NameInMap("IsBlackCampaign1d")
        @Validation(required = true)
        public Integer isBlackCampaign1d;

        @NameInMap("IsBlackCampaign7d")
        @Validation(required = true)
        public Integer isBlackCampaign7d;

        @NameInMap("IsBlackCampaign30d")
        @Validation(required = true)
        public Integer isBlackCampaign30d;

        @NameInMap("Province")
        @Validation(required = true)
        public String province;

        @NameInMap("City")
        @Validation(required = true)
        public String city;

        @NameInMap("Operator")
        @Validation(required = true)
        public String operator;

        public static GetPhoneProfileResponseDataInfo build(java.util.Map<String, ?> map) throws Exception {
            GetPhoneProfileResponseDataInfo self = new GetPhoneProfileResponseDataInfo();
            return TeaModel.build(map, self);
        }

        public GetPhoneProfileResponseDataInfo setIsVirtualOperator(Integer isVirtualOperator) {
            this.isVirtualOperator = isVirtualOperator;
            return this;
        }
        public Integer getIsVirtualOperator() {
            return this.isVirtualOperator;
        }

        public GetPhoneProfileResponseDataInfo setIsBlackPhone(Integer isBlackPhone) {
            this.isBlackPhone = isBlackPhone;
            return this;
        }
        public Integer getIsBlackPhone() {
            return this.isBlackPhone;
        }

        public GetPhoneProfileResponseDataInfo setIsBlackCampaign1d(Integer isBlackCampaign1d) {
            this.isBlackCampaign1d = isBlackCampaign1d;
            return this;
        }
        public Integer getIsBlackCampaign1d() {
            return this.isBlackCampaign1d;
        }

        public GetPhoneProfileResponseDataInfo setIsBlackCampaign7d(Integer isBlackCampaign7d) {
            this.isBlackCampaign7d = isBlackCampaign7d;
            return this;
        }
        public Integer getIsBlackCampaign7d() {
            return this.isBlackCampaign7d;
        }

        public GetPhoneProfileResponseDataInfo setIsBlackCampaign30d(Integer isBlackCampaign30d) {
            this.isBlackCampaign30d = isBlackCampaign30d;
            return this;
        }
        public Integer getIsBlackCampaign30d() {
            return this.isBlackCampaign30d;
        }

        public GetPhoneProfileResponseDataInfo setProvince(String province) {
            this.province = province;
            return this;
        }
        public String getProvince() {
            return this.province;
        }

        public GetPhoneProfileResponseDataInfo setCity(String city) {
            this.city = city;
            return this;
        }
        public String getCity() {
            return this.city;
        }

        public GetPhoneProfileResponseDataInfo setOperator(String operator) {
            this.operator = operator;
            return this;
        }
        public String getOperator() {
            return this.operator;
        }

    }

    public static class GetPhoneProfileResponseData extends TeaModel {
        @NameInMap("Phone")
        @Validation(required = true)
        public String phone;

        @NameInMap("Info")
        @Validation(required = true)
        public GetPhoneProfileResponseDataInfo info;

        public static GetPhoneProfileResponseData build(java.util.Map<String, ?> map) throws Exception {
            GetPhoneProfileResponseData self = new GetPhoneProfileResponseData();
            return TeaModel.build(map, self);
        }

        public GetPhoneProfileResponseData setPhone(String phone) {
            this.phone = phone;
            return this;
        }
        public String getPhone() {
            return this.phone;
        }

        public GetPhoneProfileResponseData setInfo(GetPhoneProfileResponseDataInfo info) {
            this.info = info;
            return this;
        }
        public GetPhoneProfileResponseDataInfo getInfo() {
            return this.info;
        }

    }

}
