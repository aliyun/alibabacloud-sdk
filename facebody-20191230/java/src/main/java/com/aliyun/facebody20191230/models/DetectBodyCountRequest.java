// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody20191230.models;

import com.aliyun.tea.*;

public class DetectBodyCountRequest extends TeaModel {
    @NameInMap("ImageURL")
    @Validation(required = true)
    public String imageURL;

    public static DetectBodyCountRequest build(java.util.Map<String, ?> map) throws Exception {
        DetectBodyCountRequest self = new DetectBodyCountRequest();
        return TeaModel.build(map, self);
    }

}
