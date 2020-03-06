// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody.models;

import com.aliyun.tea.*;

public class DetectBodyCountResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Data")
    @Validation(required = true)
    public DetectBodyCountResponseData data;

    public static DetectBodyCountResponse build(java.util.Map<String, ?> map) throws Exception {
        DetectBodyCountResponse self = new DetectBodyCountResponse();
        return TeaModel.build(map, self);
    }

    public static class DetectBodyCountResponseData extends TeaModel {
        @NameInMap("PersonNumber")
        @Validation(required = true)
        public Integer personNumber;

        public static DetectBodyCountResponseData build(java.util.Map<String, ?> map) throws Exception {
            DetectBodyCountResponseData self = new DetectBodyCountResponseData();
            return TeaModel.build(map, self);
        }

    }

}
