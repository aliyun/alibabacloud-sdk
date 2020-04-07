// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody20191230.models;

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

    public static class CompareFaceResponseData extends TeaModel {
        @NameInMap("Confidence")
        @Validation(required = true)
        public Double confidence;

        @NameInMap("Thresholds")
        @Validation(required = true)
        public java.util.List<Double> thresholds;

        @NameInMap("RectAList")
        @Validation(required = true)
        public java.util.List<Integer> rectAList;

        @NameInMap("RectBList")
        @Validation(required = true)
        public java.util.List<Integer> rectBList;

        public static CompareFaceResponseData build(java.util.Map<String, ?> map) throws Exception {
            CompareFaceResponseData self = new CompareFaceResponseData();
            return TeaModel.build(map, self);
        }

    }

}
