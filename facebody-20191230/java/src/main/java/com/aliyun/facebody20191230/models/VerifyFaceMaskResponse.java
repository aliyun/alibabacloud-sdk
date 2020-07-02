// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody20191230.models;

import com.aliyun.tea.*;

public class VerifyFaceMaskResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Data")
    @Validation(required = true)
    public VerifyFaceMaskResponseData data;

    public static VerifyFaceMaskResponse build(java.util.Map<String, ?> map) throws Exception {
        VerifyFaceMaskResponse self = new VerifyFaceMaskResponse();
        return TeaModel.build(map, self);
    }

    public static class VerifyFaceMaskResponseData extends TeaModel {
        @NameInMap("Confidence")
        @Validation(required = true)
        public Double confidence;

        @NameInMap("Mask")
        @Validation(required = true)
        public Integer mask;

        @NameInMap("MaskRef")
        @Validation(required = true)
        public Integer maskRef;

        @NameInMap("Rectangle")
        @Validation(required = true)
        public java.util.List<Integer> rectangle;

        @NameInMap("RectangleRef")
        @Validation(required = true)
        public java.util.List<Integer> rectangleRef;

        @NameInMap("Thresholds")
        @Validation(required = true)
        public java.util.List<Double> thresholds;

        public static VerifyFaceMaskResponseData build(java.util.Map<String, ?> map) throws Exception {
            VerifyFaceMaskResponseData self = new VerifyFaceMaskResponseData();
            return TeaModel.build(map, self);
        }

    }

}
