// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.imagerecog.models;

import com.aliyun.tea.*;

public class RecognizeSceneRequest extends TeaModel {
    @NameInMap("ImageType")
    public Integer imageType;

    @NameInMap("ImageURL")
    @Validation(required = true)
    public String imageURL;

    public static RecognizeSceneRequest build(java.util.Map<String, ?> map) throws Exception {
        RecognizeSceneRequest self = new RecognizeSceneRequest();
        return TeaModel.build(map, self);
    }

}
