// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody.models;

import com.aliyun.tea.*;

public class DetectLivingFaceResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Data")
    @Validation(required = true)
    public DetectLivingFaceResponseData data;

    public static DetectLivingFaceResponse build(java.util.Map<String, ?> map) throws Exception {
        DetectLivingFaceResponse self = new DetectLivingFaceResponse();
        return TeaModel.build(map, self);
    }

    public static class DetectLivingFaceResponseDataElementsResultsFrames extends TeaModel {
        @NameInMap("Rate")
        @Validation(required = true)
        public Double rate;

        @NameInMap("Url")
        @Validation(required = true)
        public String url;

        public static DetectLivingFaceResponseDataElementsResultsFrames build(java.util.Map<String, ?> map) throws Exception {
            DetectLivingFaceResponseDataElementsResultsFrames self = new DetectLivingFaceResponseDataElementsResultsFrames();
            return TeaModel.build(map, self);
        }

    }

    public static class DetectLivingFaceResponseDataElementsResults extends TeaModel {
        @NameInMap("Label")
        @Validation(required = true)
        public String label;

        @NameInMap("Suggestion")
        @Validation(required = true)
        public String suggestion;

        @NameInMap("Rate")
        @Validation(required = true)
        public Double rate;

        @NameInMap("Frames")
        @Validation(required = true)
        public java.util.List<DetectLivingFaceResponseDataElementsResultsFrames> frames;

        public static DetectLivingFaceResponseDataElementsResults build(java.util.Map<String, ?> map) throws Exception {
            DetectLivingFaceResponseDataElementsResults self = new DetectLivingFaceResponseDataElementsResults();
            return TeaModel.build(map, self);
        }

    }

    public static class DetectLivingFaceResponseDataElements extends TeaModel {
        @NameInMap("TaskId")
        @Validation(required = true)
        public String taskId;

        @NameInMap("ImageURL")
        @Validation(required = true)
        public String imageURL;

        @NameInMap("Results")
        @Validation(required = true)
        public java.util.List<DetectLivingFaceResponseDataElementsResults> results;

        public static DetectLivingFaceResponseDataElements build(java.util.Map<String, ?> map) throws Exception {
            DetectLivingFaceResponseDataElements self = new DetectLivingFaceResponseDataElements();
            return TeaModel.build(map, self);
        }

    }

    public static class DetectLivingFaceResponseData extends TeaModel {
        @NameInMap("Elements")
        @Validation(required = true)
        public java.util.List<DetectLivingFaceResponseDataElements> elements;

        public static DetectLivingFaceResponseData build(java.util.Map<String, ?> map) throws Exception {
            DetectLivingFaceResponseData self = new DetectLivingFaceResponseData();
            return TeaModel.build(map, self);
        }

    }

}
