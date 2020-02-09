// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody.models;

import com.aliyun.tea.*;

public class DetectMaskRequest extends TeaModel {
    @NameInMap("ImageURL")
    @Validation(required = true)
    public String imageURL;

    public static DetectMaskRequest build(java.util.Map<String, ?> map) throws Exception {
        DetectMaskRequest self = new DetectMaskRequest();
        return TeaModel.build(map, self);
    }

}
