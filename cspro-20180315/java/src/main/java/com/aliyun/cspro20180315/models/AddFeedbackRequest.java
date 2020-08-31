// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cspro20180315.models;

import com.aliyun.tea.*;

public class AddFeedbackRequest extends TeaModel {
    @NameInMap("ResultId")
    @Validation(required = true)
    public Long resultId;

    @NameInMap("FeedBack")
    @Validation(required = true)
    public String feedBack;

    public static AddFeedbackRequest build(java.util.Map<String, ?> map) throws Exception {
        AddFeedbackRequest self = new AddFeedbackRequest();
        return TeaModel.build(map, self);
    }

    public AddFeedbackRequest setResultId(Long resultId) {
        this.resultId = resultId;
        return this;
    }
    public Long getResultId() {
        return this.resultId;
    }

    public AddFeedbackRequest setFeedBack(String feedBack) {
        this.feedBack = feedBack;
        return this;
    }
    public String getFeedBack() {
        return this.feedBack;
    }

}
