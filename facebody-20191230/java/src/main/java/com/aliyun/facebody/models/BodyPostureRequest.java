// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody.models;

import com.aliyun.tea.*;

public class BodyPostureRequest extends TeaModel {
    @NameInMap("ImageURL")
    @Validation(required = true)
    public String imageURL;

    public static BodyPostureRequest build(java.util.Map<String, ?> map) throws Exception {
        BodyPostureRequest self = new BodyPostureRequest();
        return TeaModel.build(map, self);
    }

}
