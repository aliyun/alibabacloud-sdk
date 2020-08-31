// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cspro20180315.models;

import com.aliyun.tea.*;

public class GetIndexBaselineResponse extends TeaModel {
    @NameInMap("Success")
    @Validation(required = true)
    public Boolean success;

    @NameInMap("Code")
    @Validation(required = true)
    public String code;

    @NameInMap("Message")
    @Validation(required = true)
    public String message;

    @NameInMap("Data")
    @Validation(required = true)
    public GetIndexBaselineResponseData data;

    public static GetIndexBaselineResponse build(java.util.Map<String, ?> map) throws Exception {
        GetIndexBaselineResponse self = new GetIndexBaselineResponse();
        return TeaModel.build(map, self);
    }

    public GetIndexBaselineResponse setSuccess(Boolean success) {
        this.success = success;
        return this;
    }
    public Boolean getSuccess() {
        return this.success;
    }

    public GetIndexBaselineResponse setCode(String code) {
        this.code = code;
        return this;
    }
    public String getCode() {
        return this.code;
    }

    public GetIndexBaselineResponse setMessage(String message) {
        this.message = message;
        return this;
    }
    public String getMessage() {
        return this.message;
    }

    public GetIndexBaselineResponse setData(GetIndexBaselineResponseData data) {
        this.data = data;
        return this;
    }
    public GetIndexBaselineResponseData getData() {
        return this.data;
    }

    public static class GetIndexBaselineResponseData extends TeaModel {
        @NameInMap("BaselinePic")
        @Validation(required = true)
        public String baselinePic;

        @NameInMap("BaselineSource")
        @Validation(required = true)
        public String baselineSource;

        @NameInMap("CheckId")
        @Validation(required = true)
        public Long checkId;

        public static GetIndexBaselineResponseData build(java.util.Map<String, ?> map) throws Exception {
            GetIndexBaselineResponseData self = new GetIndexBaselineResponseData();
            return TeaModel.build(map, self);
        }

        public GetIndexBaselineResponseData setBaselinePic(String baselinePic) {
            this.baselinePic = baselinePic;
            return this;
        }
        public String getBaselinePic() {
            return this.baselinePic;
        }

        public GetIndexBaselineResponseData setBaselineSource(String baselineSource) {
            this.baselineSource = baselineSource;
            return this;
        }
        public String getBaselineSource() {
            return this.baselineSource;
        }

        public GetIndexBaselineResponseData setCheckId(Long checkId) {
            this.checkId = checkId;
            return this;
        }
        public Long getCheckId() {
            return this.checkId;
        }

    }

}
