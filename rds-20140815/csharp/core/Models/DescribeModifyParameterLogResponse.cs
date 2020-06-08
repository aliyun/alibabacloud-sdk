// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeModifyParameterLogResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Engine")]
        [Validation(Required=true)]
        public string Engine { get; set; }

        [NameInMap("DBInstanceId")]
        [Validation(Required=true)]
        public string DBInstanceId { get; set; }

        [NameInMap("EngineVersion")]
        [Validation(Required=true)]
        public string EngineVersion { get; set; }

        [NameInMap("TotalRecordCount")]
        [Validation(Required=true)]
        public int? TotalRecordCount { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageRecordCount")]
        [Validation(Required=true)]
        public int? PageRecordCount { get; set; }

        [NameInMap("Items")]
        [Validation(Required=true)]
        public DescribeModifyParameterLogResponseItems Items { get; set; }
        public class DescribeModifyParameterLogResponseItems : TeaModel {
            [NameInMap("ParameterChangeLog")]
            [Validation(Required=true)]
            public List<DescribeModifyParameterLogResponseItemsParameterChangeLog> ParameterChangeLog { get; set; }
            public class DescribeModifyParameterLogResponseItemsParameterChangeLog : TeaModel {
                    public string ModifyTime { get; set; }
                    public string OldParameterValue { get; set; }
                    public string NewParameterValue { get; set; }
                    public string ParameterName { get; set; }
                    public string Status { get; set; }
            }
        };

    }

}
