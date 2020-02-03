// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody.models;

import com.aliyun.tea.*;

public class RecognizeFaceRequest extends TeaModel {
    @NameInMap("ImageType")
    public Integer imageType;

    @NameInMap("ImageURL")
    @Validation(required = true)
    public String imageURL;

    public static RecognizeFaceRequest build(java.util.Map<String, ?> map) throws Exception {
        RecognizeFaceRequest self = new RecognizeFaceRequest();
        return TeaModel.build(map, self);
    }

}
