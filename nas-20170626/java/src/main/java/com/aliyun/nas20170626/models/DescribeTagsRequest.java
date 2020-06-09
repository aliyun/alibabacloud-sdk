// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class DescribeTagsRequest extends TeaModel {
    @NameInMap("FileSystemId")
    public String fileSystemId;

    @NameInMap("PageSize")
    public Integer pageSize;

    @NameInMap("PageNumber")
    public Integer pageNumber;

    @NameInMap("Tag")
    public java.util.List<DescribeTagsRequestTag> tag;

    public static DescribeTagsRequest build(java.util.Map<String, ?> map) throws Exception {
        DescribeTagsRequest self = new DescribeTagsRequest();
        return TeaModel.build(map, self);
    }

    public static class DescribeTagsRequestTag extends TeaModel {
        @NameInMap("Key")
        public String key;

        @NameInMap("Value")
        public String value;

        public static DescribeTagsRequestTag build(java.util.Map<String, ?> map) throws Exception {
            DescribeTagsRequestTag self = new DescribeTagsRequestTag();
            return TeaModel.build(map, self);
        }

    }

}
