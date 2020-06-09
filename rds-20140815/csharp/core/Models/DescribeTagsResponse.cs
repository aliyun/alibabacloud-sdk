// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeTagsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Items")]
        [Validation(Required=true)]
        public DescribeTagsResponseItems Items { get; set; }
        public class DescribeTagsResponseItems : TeaModel {
            [NameInMap("TagInfos")]
            [Validation(Required=true)]
            public List<DescribeTagsResponseItemsTagInfos> TagInfos { get; set; }
            public class DescribeTagsResponseItemsTagInfos : TeaModel {
                    public string TagKey { get; set; }
                    public string TagValue { get; set; }
                    public DescribeTagsResponseItemsTagInfosDBInstanceIds DBInstanceIds { get; set; }
                    public class DescribeTagsResponseItemsTagInfosDBInstanceIds : TeaModel {
                        [NameInMap("DBInstanceIds")]
                        [Validation(Required=true)]
                        public List<string> DBInstanceIds { get; set; }

                    }
            }
        };

    }

}
