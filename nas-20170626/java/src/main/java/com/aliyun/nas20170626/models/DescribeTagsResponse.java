// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class DescribeTagsResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("TotalCount")
    @Validation(required = true)
    public Integer totalCount;

    @NameInMap("PageSize")
    @Validation(required = true)
    public Integer pageSize;

    @NameInMap("PageNumber")
    @Validation(required = true)
    public Integer pageNumber;

    @NameInMap("Tags")
    @Validation(required = true)
    public DescribeTagsResponseTags tags;

    public static DescribeTagsResponse build(java.util.Map<String, ?> map) throws Exception {
        DescribeTagsResponse self = new DescribeTagsResponse();
        return TeaModel.build(map, self);
    }

    public static class DescribeTagsResponseTagsTagFileSystemIds extends TeaModel {
        @NameInMap("FileSystemId")
        @Validation(required = true)
        public java.util.List<String> fileSystemId;

        public static DescribeTagsResponseTagsTagFileSystemIds build(java.util.Map<String, ?> map) throws Exception {
            DescribeTagsResponseTagsTagFileSystemIds self = new DescribeTagsResponseTagsTagFileSystemIds();
            return TeaModel.build(map, self);
        }

    }

    public static class DescribeTagsResponseTagsTag extends TeaModel {
        @NameInMap("Key")
        @Validation(required = true)
        public String key;

        @NameInMap("Value")
        @Validation(required = true)
        public String value;

        @NameInMap("FileSystemIds")
        @Validation(required = true)
        public DescribeTagsResponseTagsTagFileSystemIds fileSystemIds;

        public static DescribeTagsResponseTagsTag build(java.util.Map<String, ?> map) throws Exception {
            DescribeTagsResponseTagsTag self = new DescribeTagsResponseTagsTag();
            return TeaModel.build(map, self);
        }

    }

    public static class DescribeTagsResponseTags extends TeaModel {
        @NameInMap("Tag")
        @Validation(required = true)
        public java.util.List<DescribeTagsResponseTagsTag> tag;

        public static DescribeTagsResponseTags build(java.util.Map<String, ?> map) throws Exception {
            DescribeTagsResponseTags self = new DescribeTagsResponseTags();
            return TeaModel.build(map, self);
        }

    }

}
