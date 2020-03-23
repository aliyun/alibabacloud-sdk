// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody.models;

import com.aliyun.tea.*;

public class EnhanceFaceResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Data")
    @Validation(required = true)
    public EnhanceFaceResponseData data;

    public static EnhanceFaceResponse build(java.util.Map<String, ?> map) throws Exception {
        EnhanceFaceResponse self = new EnhanceFaceResponse();
        return TeaModel.build(map, self);
    }

    public static class EnhanceFaceResponseData extends TeaModel {
        @NameInMap("ImageURL")
        @Validation(required = true)
        public String imageURL;

        public static EnhanceFaceResponseData build(java.util.Map<String, ?> map) throws Exception {
            EnhanceFaceResponseData self = new EnhanceFaceResponseData();
            return TeaModel.build(map, self);
        }

    }

}
