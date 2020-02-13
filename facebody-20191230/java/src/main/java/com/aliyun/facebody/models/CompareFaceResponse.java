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

    public static class CompareFaceResponseData extends TeaModel {
        @NameInMap("Confidence")
        @Validation(required = true)
        public Double confidence;

        public static CompareFaceResponseData build(java.util.Map<String, ?> map) throws Exception {
            CompareFaceResponseData self = new CompareFaceResponseData();
            return TeaModel.build(map, self);
        }

    }

}
