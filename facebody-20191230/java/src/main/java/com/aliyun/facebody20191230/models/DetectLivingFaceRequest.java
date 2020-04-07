// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody20191230.models;

import com.aliyun.tea.*;

public class DetectLivingFaceRequest extends TeaModel {
    @NameInMap("Tasks")
    @Validation(required = true)
    public java.util.List<DetectLivingFaceRequestTasks> tasks;

    public static DetectLivingFaceRequest build(java.util.Map<String, ?> map) throws Exception {
        DetectLivingFaceRequest self = new DetectLivingFaceRequest();
        return TeaModel.build(map, self);
    }

    public static class DetectLivingFaceRequestTasks extends TeaModel {
        @NameInMap("ImageURL")
        @Validation(required = true)
        public String imageURL;

        public static DetectLivingFaceRequestTasks build(java.util.Map<String, ?> map) throws Exception {
            DetectLivingFaceRequestTasks self = new DetectLivingFaceRequestTasks();
            return TeaModel.build(map, self);
        }

    }

}
