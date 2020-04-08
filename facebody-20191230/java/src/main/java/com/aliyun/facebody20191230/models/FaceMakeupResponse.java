// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody20191230.models;

import com.aliyun.tea.*;

public class FaceMakeupResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Data")
    @Validation(required = true)
    public FaceMakeupResponseData data;

    public static FaceMakeupResponse build(java.util.Map<String, ?> map) throws Exception {
        FaceMakeupResponse self = new FaceMakeupResponse();
        return TeaModel.build(map, self);
    }

    public static class FaceMakeupResponseData extends TeaModel {
        @NameInMap("ImageURL")
        @Validation(required = true)
        public String imageURL;

        public static FaceMakeupResponseData build(java.util.Map<String, ?> map) throws Exception {
            FaceMakeupResponseData self = new FaceMakeupResponseData();
            return TeaModel.build(map, self);
        }

    }

}
