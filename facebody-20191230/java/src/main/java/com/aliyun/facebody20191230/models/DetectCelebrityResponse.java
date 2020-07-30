// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody20191230.models;

import com.aliyun.tea.*;

public class DetectCelebrityResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Data")
    @Validation(required = true)
    public DetectCelebrityResponseData data;

    public static DetectCelebrityResponse build(java.util.Map<String, ?> map) throws Exception {
        DetectCelebrityResponse self = new DetectCelebrityResponse();
        return TeaModel.build(map, self);
    }

    public static class DetectCelebrityResponseDataFaceRecognizeResults extends TeaModel {
        @NameInMap("Name")
        @Validation(required = true)
        public String name;

        @NameInMap("FaceBoxes")
        @Validation(required = true)
        public java.util.List<Double> faceBoxes;

        public static DetectCelebrityResponseDataFaceRecognizeResults build(java.util.Map<String, ?> map) throws Exception {
            DetectCelebrityResponseDataFaceRecognizeResults self = new DetectCelebrityResponseDataFaceRecognizeResults();
            return TeaModel.build(map, self);
        }

    }

    public static class DetectCelebrityResponseData extends TeaModel {
        @NameInMap("Width")
        @Validation(required = true)
        public Integer width;

        @NameInMap("Height")
        @Validation(required = true)
        public Integer height;

        @NameInMap("FaceRecognizeResults")
        @Validation(required = true)
        public java.util.List<DetectCelebrityResponseDataFaceRecognizeResults> faceRecognizeResults;

        public static DetectCelebrityResponseData build(java.util.Map<String, ?> map) throws Exception {
            DetectCelebrityResponseData self = new DetectCelebrityResponseData();
            return TeaModel.build(map, self);
        }

    }

}
