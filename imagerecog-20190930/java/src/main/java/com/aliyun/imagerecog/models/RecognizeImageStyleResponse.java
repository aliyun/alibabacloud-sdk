// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.imagerecog.models;

import com.aliyun.tea.*;

public class RecognizeImageStyleResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Data")
    @Validation(required = true)
    public RecognizeImageStyleResponseData data;

    public static RecognizeImageStyleResponse build(java.util.Map<String, ?> map) throws Exception {
        RecognizeImageStyleResponse self = new RecognizeImageStyleResponse();
        return TeaModel.build(map, self);
    }

    public static class RecognizeImageStyleResponseData extends TeaModel {
        public static RecognizeImageStyleResponseData build(java.util.Map<String, ?> map) throws Exception {
            RecognizeImageStyleResponseData self = new RecognizeImageStyleResponseData();
            return TeaModel.build(map, self);
        }

    }

}
