// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.imageenhan.models;

import com.aliyun.tea.*;

public class ChangeImageSizeResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Data")
    @Validation(required = true)
    public ChangeImageSizeResponseData data;

    public static ChangeImageSizeResponse build(java.util.Map<String, ?> map) throws Exception {
        ChangeImageSizeResponse self = new ChangeImageSizeResponse();
        return TeaModel.build(map, self);
    }

    public static class ChangeImageSizeResponseData extends TeaModel {
        @NameInMap("Url")
        @Validation(required = true)
        public String url;

        public static ChangeImageSizeResponseData build(java.util.Map<String, ?> map) throws Exception {
            ChangeImageSizeResponseData self = new ChangeImageSizeResponseData();
            return TeaModel.build(map, self);
        }

    }

}
