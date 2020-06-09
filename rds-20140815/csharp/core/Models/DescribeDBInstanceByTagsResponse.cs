// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeDBInstanceByTagsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageRecordCount")]
        [Validation(Required=true)]
        public int? PageRecordCount { get; set; }

        [NameInMap("TotalRecordCount")]
        [Validation(Required=true)]
        public int? TotalRecordCount { get; set; }

        [NameInMap("Items")]
        [Validation(Required=true)]
        public DescribeDBInstanceByTagsResponseItems Items { get; set; }
        public class DescribeDBInstanceByTagsResponseItems : TeaModel {
            [NameInMap("DBInstanceTag")]
            [Validation(Required=true)]
            public List<DescribeDBInstanceByTagsResponseItemsDBInstanceTag> DBInstanceTag { get; set; }
            public class DescribeDBInstanceByTagsResponseItemsDBInstanceTag : TeaModel {
                    public string DBInstanceId { get; set; }
                    public DescribeDBInstanceByTagsResponseItemsDBInstanceTagTags Tags { get; set; }
                    public class DescribeDBInstanceByTagsResponseItemsDBInstanceTagTags : TeaModel {
                        [NameInMap("Tag")]
                        [Validation(Required=true)]
                        public List<DescribeDBInstanceByTagsResponseItemsDBInstanceTagTagsTag> Tag { get; set; }
                        public class DescribeDBInstanceByTagsResponseItemsDBInstanceTagTagsTag : TeaModel {
                            [NameInMap("TagKey")]
                            [Validation(Required=true)]
                            public string TagKey { get; set; }

                            [NameInMap("TagValue")]
                            [Validation(Required=true)]
                            public string TagValue { get; set; }

                        }

                    }
            }
        };

    }

}
