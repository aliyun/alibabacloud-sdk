// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody.models;

import com.aliyun.tea.*;

public class DetectPedestrianRequest extends TeaModel {
    @NameInMap("ImageURL")
    @Validation(required = true)
    public String imageURL;

    public static DetectPedestrianRequest build(java.util.Map<String, ?> map) throws Exception {
        DetectPedestrianRequest self = new DetectPedestrianRequest();
        return TeaModel.build(map, self);
    }

}
