// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody20191230.models;

import com.aliyun.tea.*;

public class FaceTidyupResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Data")
    @Validation(required = true)
    public FaceTidyupResponseData data;

    public static FaceTidyupResponse build(java.util.Map<String, ?> map) throws Exception {
        FaceTidyupResponse self = new FaceTidyupResponse();
        return TeaModel.build(map, self);
    }

    public static class FaceTidyupResponseData extends TeaModel {
        @NameInMap("ImageURL")
        @Validation(required = true)
        public String imageURL;

        public static FaceTidyupResponseData build(java.util.Map<String, ?> map) throws Exception {
            FaceTidyupResponseData self = new FaceTidyupResponseData();
            return TeaModel.build(map, self);
        }

    }

}
