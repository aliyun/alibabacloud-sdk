// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeMigrateTasksResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DBInstanceId")]
        [Validation(Required=true)]
        public string DBInstanceId { get; set; }

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
        public DescribeMigrateTasksResponseItems Items { get; set; }
        public class DescribeMigrateTasksResponseItems : TeaModel {
            [NameInMap("MigrateTask")]
            [Validation(Required=true)]
            public List<DescribeMigrateTasksResponseItemsMigrateTask> MigrateTask { get; set; }
            public class DescribeMigrateTasksResponseItemsMigrateTask : TeaModel {
                    public string DBName { get; set; }
                    public string MigrateTaskId { get; set; }
                    public string CreateTime { get; set; }
                    public string EndTime { get; set; }
                    public string BackupMode { get; set; }
                    public string Status { get; set; }
                    public string IsDBReplaced { get; set; }
                    public string Description { get; set; }
            }
        };

    }

}
