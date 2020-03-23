// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody.models;

import com.aliyun.tea.*;

public class DetectPedestrianResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Data")
    @Validation(required = true)
    public DetectPedestrianResponseData data;

    public static DetectPedestrianResponse build(java.util.Map<String, ?> map) throws Exception {
        DetectPedestrianResponse self = new DetectPedestrianResponse();
        return TeaModel.build(map, self);
    }

    public static class DetectPedestrianResponseDataElements extends TeaModel {
        @NameInMap("Score")
        @Validation(required = true)
        public Double score;

        @NameInMap("Type")
        @Validation(required = true)
        public String type;

        @NameInMap("Boxes")
        @Validation(required = true)
        public java.util.List<Integer> boxes;

        public static DetectPedestrianResponseDataElements build(java.util.Map<String, ?> map) throws Exception {
            DetectPedestrianResponseDataElements self = new DetectPedestrianResponseDataElements();
            return TeaModel.build(map, self);
        }

    }

    public static class DetectPedestrianResponseData extends TeaModel {
        @NameInMap("Width")
        @Validation(required = true)
        public Integer width;

        @NameInMap("Height")
        @Validation(required = true)
        public Integer height;

        @NameInMap("Elements")
        @Validation(required = true)
        public java.util.List<DetectPedestrianResponseDataElements> elements;

        public static DetectPedestrianResponseData build(java.util.Map<String, ?> map) throws Exception {
            DetectPedestrianResponseData self = new DetectPedestrianResponseData();
            return TeaModel.build(map, self);
        }

    }

}
