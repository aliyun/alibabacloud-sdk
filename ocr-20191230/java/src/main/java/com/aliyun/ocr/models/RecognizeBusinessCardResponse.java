// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.ocr.models;

import com.aliyun.tea.*;

public class RecognizeBusinessCardResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Data")
    @Validation(required = true)
    public RecognizeBusinessCardResponseData data;

    public static RecognizeBusinessCardResponse build(java.util.Map<String, ?> map) throws Exception {
        RecognizeBusinessCardResponse self = new RecognizeBusinessCardResponse();
        return TeaModel.build(map, self);
    }

    public static class RecognizeBusinessCardResponseData extends TeaModel {
        @NameInMap("Name")
        @Validation(required = true)
        public String name;

        public static RecognizeBusinessCardResponseData build(java.util.Map<String, ?> map) throws Exception {
            RecognizeBusinessCardResponseData self = new RecognizeBusinessCardResponseData();
            return TeaModel.build(map, self);
        }

    }

}
