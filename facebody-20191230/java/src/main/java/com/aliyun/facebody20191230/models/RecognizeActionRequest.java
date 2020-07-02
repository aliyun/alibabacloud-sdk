// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody20191230.models;

import com.aliyun.tea.*;

public class RecognizeActionRequest extends TeaModel {
    @NameInMap("URLList")
    public java.util.List<RecognizeActionRequestURLList> URLList;

    @NameInMap("Type")
    @Validation(required = true)
    public Integer type;

    @NameInMap("VideoUrl")
    public String videoUrl;

    public static RecognizeActionRequest build(java.util.Map<String, ?> map) throws Exception {
        RecognizeActionRequest self = new RecognizeActionRequest();
        return TeaModel.build(map, self);
    }

    public static class RecognizeActionRequestURLList extends TeaModel {
        @NameInMap("URL")
        public String URL;

        public static RecognizeActionRequestURLList build(java.util.Map<String, ?> map) throws Exception {
            RecognizeActionRequestURLList self = new RecognizeActionRequestURLList();
            return TeaModel.build(map, self);
        }

    }

}
