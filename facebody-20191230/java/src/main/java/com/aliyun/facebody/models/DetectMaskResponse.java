// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody.models;

import com.aliyun.tea.*;

public class DetectMaskResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Data")
    @Validation(required = true)
    public DetectMaskResponseData data;

    public static DetectMaskResponse build(java.util.Map<String, ?> map) throws Exception {
        DetectMaskResponse self = new DetectMaskResponse();
        return TeaModel.build(map, self);
    }

    public static class DetectMaskResponseData extends TeaModel {
        @NameInMap("Mask")
        @Validation(required = true)
        public Integer mask;

        @NameInMap("FaceProbability")
        @Validation(required = true)
        public float faceProbability;

        public static DetectMaskResponseData build(java.util.Map<String, ?> map) throws Exception {
            DetectMaskResponseData self = new DetectMaskResponseData();
            return TeaModel.build(map, self);
        }

    }

}
