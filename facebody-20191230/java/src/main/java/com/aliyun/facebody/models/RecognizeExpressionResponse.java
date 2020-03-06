// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody.models;

import com.aliyun.tea.*;

public class RecognizeExpressionResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Data")
    @Validation(required = true)
    public RecognizeExpressionResponseData data;

    public static RecognizeExpressionResponse build(java.util.Map<String, ?> map) throws Exception {
        RecognizeExpressionResponse self = new RecognizeExpressionResponse();
        return TeaModel.build(map, self);
    }

    public static class RecognizeExpressionResponseDataElementsFaceRectangle extends TeaModel {
        @NameInMap("Height")
        @Validation(required = true)
        public Integer height;

        @NameInMap("Left")
        @Validation(required = true)
        public Integer left;

        @NameInMap("Top")
        @Validation(required = true)
        public Integer top;

        @NameInMap("Width")
        @Validation(required = true)
        public Integer width;

        public static RecognizeExpressionResponseDataElementsFaceRectangle build(java.util.Map<String, ?> map) throws Exception {
            RecognizeExpressionResponseDataElementsFaceRectangle self = new RecognizeExpressionResponseDataElementsFaceRectangle();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeExpressionResponseDataElements extends TeaModel {
        @NameInMap("Expression")
        @Validation(required = true)
        public String expression;

        @NameInMap("FaceProbability")
        @Validation(required = true)
        public Double faceProbability;

        @NameInMap("FaceRectangle")
        @Validation(required = true)
        public RecognizeExpressionResponseDataElementsFaceRectangle faceRectangle;

        public static RecognizeExpressionResponseDataElements build(java.util.Map<String, ?> map) throws Exception {
            RecognizeExpressionResponseDataElements self = new RecognizeExpressionResponseDataElements();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeExpressionResponseData extends TeaModel {
        @NameInMap("Elements")
        @Validation(required = true)
        public java.util.List<RecognizeExpressionResponseDataElements> elements;

        public static RecognizeExpressionResponseData build(java.util.Map<String, ?> map) throws Exception {
            RecognizeExpressionResponseData self = new RecognizeExpressionResponseData();
            return TeaModel.build(map, self);
        }

    }

}
