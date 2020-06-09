// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeDBInstancesByPerformanceResponse : TeaModel {
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
        public DescribeDBInstancesByPerformanceResponseItems Items { get; set; }
        public class DescribeDBInstancesByPerformanceResponseItems : TeaModel {
            [NameInMap("DBInstancePerformance")]
            [Validation(Required=true)]
            public List<DescribeDBInstancesByPerformanceResponseItemsDBInstancePerformance> DBInstancePerformance { get; set; }
            public class DescribeDBInstancesByPerformanceResponseItemsDBInstancePerformance : TeaModel {
                    public string CPUUsage { get; set; }
                    public string IOPSUsage { get; set; }
                    public string DiskUsage { get; set; }
                    public string SessionUsage { get; set; }
                    public string DBInstanceId { get; set; }
                    public string DBInstanceDescription { get; set; }
            }
        };

    }

}
