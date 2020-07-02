// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody20191230.models;

import com.aliyun.tea.*;

public class VerifyFaceMaskAdvanceRequest extends TeaModel {
    @NameInMap("ImageURLObject")
    @Validation(required = true)
    public java.io.InputStream imageURLObject;

    @NameInMap("RefUrl")
    @Validation(required = true)
    public String refUrl;

    public static VerifyFaceMaskAdvanceRequest build(java.util.Map<String, ?> map) throws Exception {
        VerifyFaceMaskAdvanceRequest self = new VerifyFaceMaskAdvanceRequest();
        return TeaModel.build(map, self);
    }

}
