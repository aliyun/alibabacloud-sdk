// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody20191230.models;

import com.aliyun.tea.*;

public class VerifyFaceMaskRequest extends TeaModel {
    @NameInMap("ImageURL")
    @Validation(required = true)
    public String imageURL;

    @NameInMap("RefUrl")
    @Validation(required = true)
    public String refUrl;

    public static VerifyFaceMaskRequest build(java.util.Map<String, ?> map) throws Exception {
        VerifyFaceMaskRequest self = new VerifyFaceMaskRequest();
        return TeaModel.build(map, self);
    }

}
