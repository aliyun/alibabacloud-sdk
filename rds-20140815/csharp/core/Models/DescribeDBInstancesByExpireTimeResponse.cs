// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeDBInstancesByExpireTimeResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("TotalRecordCount")]
        [Validation(Required=true)]
        public int? TotalRecordCount { get; set; }

        [NameInMap("PageRecordCount")]
        [Validation(Required=true)]
        public int? PageRecordCount { get; set; }

        [NameInMap("Items")]
        [Validation(Required=true)]
        public DescribeDBInstancesByExpireTimeResponseItems Items { get; set; }
        public class DescribeDBInstancesByExpireTimeResponseItems : TeaModel {
            [NameInMap("DBInstanceExpireTime")]
            [Validation(Required=true)]
            public List<DescribeDBInstancesByExpireTimeResponseItemsDBInstanceExpireTime> DBInstanceExpireTime { get; set; }
            public class DescribeDBInstancesByExpireTimeResponseItemsDBInstanceExpireTime : TeaModel {
                    public string DBInstanceId { get; set; }
                    public string DBInstanceDescription { get; set; }
                    public string ExpireTime { get; set; }
                    public string DBInstanceStatus { get; set; }
                    public string LockMode { get; set; }
            }
        };

    }

}
