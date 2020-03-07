// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody.models;

import com.aliyun.tea.*;

public class CompareFaceResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Data")
    @Validation(required = true)
    public CompareFaceResponseData data;

    public static CompareFaceResponse build(java.util.Map<String, ?> map) throws Exception {
        CompareFaceResponse self = new CompareFaceResponse();
        return TeaModel.build(map, self);
    }

    public static class CompareFaceResponseDataThresholds extends TeaModel {
        @NameInMap("Threshold")
        @Validation(required = true)
        public Double threshold;

        public static CompareFaceResponseDataThresholds build(java.util.Map<String, ?> map) throws Exception {
            CompareFaceResponseDataThresholds self = new CompareFaceResponseDataThresholds();
            return TeaModel.build(map, self);
        }

    }

    public static class CompareFaceResponseDataRectAList extends TeaModel {
        @NameInMap("RectA")
        @Validation(required = true)
        public Integer rectA;

        public static CompareFaceResponseDataRectAList build(java.util.Map<String, ?> map) throws Exception {
            CompareFaceResponseDataRectAList self = new CompareFaceResponseDataRectAList();
            return TeaModel.build(map, self);
        }

    }

    public static class CompareFaceResponseDataRectBList extends TeaModel {
        @NameInMap("RectB")
        @Validation(required = true)
        public Integer rectB;

        public static CompareFaceResponseDataRectBList build(java.util.Map<String, ?> map) throws Exception {
            CompareFaceResponseDataRectBList self = new CompareFaceResponseDataRectBList();
            return TeaModel.build(map, self);
        }

    }

    public static class CompareFaceResponseData extends TeaModel {
        @NameInMap("Confidence")
        @Validation(required = true)
        public Double confidence;

        @NameInMap("Thresholds")
        @Validation(required = true)
        public java.util.List<CompareFaceResponseDataThresholds> thresholds;

        @NameInMap("RectAList")
        @Validation(required = true)
        public java.util.List<CompareFaceResponseDataRectAList> rectAList;

        @NameInMap("RectBList")
        @Validation(required = true)
        public java.util.List<CompareFaceResponseDataRectBList> rectBList;

        public static CompareFaceResponseData build(java.util.Map<String, ?> map) throws Exception {
            CompareFaceResponseData self = new CompareFaceResponseData();
            return TeaModel.build(map, self);
        }

    }

}
