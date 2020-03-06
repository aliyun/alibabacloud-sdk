// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody.models;

import com.aliyun.tea.*;

public class RecognizePublicFaceResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Data")
    @Validation(required = true)
    public RecognizePublicFaceResponseData data;

    public static RecognizePublicFaceResponse build(java.util.Map<String, ?> map) throws Exception {
        RecognizePublicFaceResponse self = new RecognizePublicFaceResponse();
        return TeaModel.build(map, self);
    }

    public static class RecognizePublicFaceResponseDataElementsResultsSubResultsFaces extends TeaModel {
        @NameInMap("Id")
        @Validation(required = true)
        public String id;

        @NameInMap("Name")
        @Validation(required = true)
        public String name;

        @NameInMap("Rate")
        @Validation(required = true)
        public Double rate;

        public static RecognizePublicFaceResponseDataElementsResultsSubResultsFaces build(java.util.Map<String, ?> map) throws Exception {
            RecognizePublicFaceResponseDataElementsResultsSubResultsFaces self = new RecognizePublicFaceResponseDataElementsResultsSubResultsFaces();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizePublicFaceResponseDataElementsResultsSubResults extends TeaModel {
        @NameInMap("H")
        @Validation(required = true)
        public Double h;

        @NameInMap("W")
        @Validation(required = true)
        public Double w;

        @NameInMap("X")
        @Validation(required = true)
        public Double x;

        @NameInMap("Y")
        @Validation(required = true)
        public Double y;

        @NameInMap("Faces")
        @Validation(required = true)
        public java.util.List<RecognizePublicFaceResponseDataElementsResultsSubResultsFaces> faces;

        public static RecognizePublicFaceResponseDataElementsResultsSubResults build(java.util.Map<String, ?> map) throws Exception {
            RecognizePublicFaceResponseDataElementsResultsSubResults self = new RecognizePublicFaceResponseDataElementsResultsSubResults();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizePublicFaceResponseDataElementsResults extends TeaModel {
        @NameInMap("Label")
        @Validation(required = true)
        public String label;

        @NameInMap("Suggestion")
        @Validation(required = true)
        public String suggestion;

        @NameInMap("Rate")
        @Validation(required = true)
        public Double rate;

        @NameInMap("SubResults")
        @Validation(required = true)
        public java.util.List<RecognizePublicFaceResponseDataElementsResultsSubResults> subResults;

        public static RecognizePublicFaceResponseDataElementsResults build(java.util.Map<String, ?> map) throws Exception {
            RecognizePublicFaceResponseDataElementsResults self = new RecognizePublicFaceResponseDataElementsResults();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizePublicFaceResponseDataElements extends TeaModel {
        @NameInMap("TaskId")
        @Validation(required = true)
        public String taskId;

        @NameInMap("ImageURL")
        @Validation(required = true)
        public String imageURL;

        @NameInMap("Results")
        @Validation(required = true)
        public java.util.List<RecognizePublicFaceResponseDataElementsResults> results;

        public static RecognizePublicFaceResponseDataElements build(java.util.Map<String, ?> map) throws Exception {
            RecognizePublicFaceResponseDataElements self = new RecognizePublicFaceResponseDataElements();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizePublicFaceResponseData extends TeaModel {
        @NameInMap("Elements")
        @Validation(required = true)
        public java.util.List<RecognizePublicFaceResponseDataElements> elements;

        public static RecognizePublicFaceResponseData build(java.util.Map<String, ?> map) throws Exception {
            RecognizePublicFaceResponseData self = new RecognizePublicFaceResponseData();
            return TeaModel.build(map, self);
        }

    }

}
