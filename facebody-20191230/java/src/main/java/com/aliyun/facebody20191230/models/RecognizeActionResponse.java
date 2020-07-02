// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody20191230.models;

import com.aliyun.tea.*;

public class RecognizeActionResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Data")
    @Validation(required = true)
    public RecognizeActionResponseData data;

    public static RecognizeActionResponse build(java.util.Map<String, ?> map) throws Exception {
        RecognizeActionResponse self = new RecognizeActionResponse();
        return TeaModel.build(map, self);
    }

    public static class RecognizeActionResponseDataElementsBoxes extends TeaModel {
        @NameInMap("Box")
        @Validation(required = true)
        public java.util.List<Integer> box;

        public static RecognizeActionResponseDataElementsBoxes build(java.util.Map<String, ?> map) throws Exception {
            RecognizeActionResponseDataElementsBoxes self = new RecognizeActionResponseDataElementsBoxes();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeActionResponseDataElements extends TeaModel {
        @NameInMap("Timestamp")
        @Validation(required = true)
        public Integer timestamp;

        @NameInMap("Boxes")
        @Validation(required = true)
        public java.util.List<RecognizeActionResponseDataElementsBoxes> boxes;

        @NameInMap("Scores")
        @Validation(required = true)
        public java.util.List<Double> scores;

        @NameInMap("Labels")
        @Validation(required = true)
        public java.util.List<String> labels;

        public static RecognizeActionResponseDataElements build(java.util.Map<String, ?> map) throws Exception {
            RecognizeActionResponseDataElements self = new RecognizeActionResponseDataElements();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeActionResponseData extends TeaModel {
        @NameInMap("Elements")
        @Validation(required = true)
        public java.util.List<RecognizeActionResponseDataElements> elements;

        public static RecognizeActionResponseData build(java.util.Map<String, ?> map) throws Exception {
            RecognizeActionResponseData self = new RecognizeActionResponseData();
            return TeaModel.build(map, self);
        }

    }

}
