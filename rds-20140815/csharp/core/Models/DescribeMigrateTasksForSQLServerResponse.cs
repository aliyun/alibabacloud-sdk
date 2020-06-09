// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeMigrateTasksForSQLServerResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DBInstanceID")]
        [Validation(Required=true)]
        public string DBInstanceID { get; set; }

        [NameInMap("DBInstanceName")]
        [Validation(Required=true)]
        public string DBInstanceName { get; set; }

        [NameInMap("StartTime")]
        [Validation(Required=true)]
        public string StartTime { get; set; }

        [NameInMap("EndTime")]
        [Validation(Required=true)]
        public string EndTime { get; set; }

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
        public DescribeMigrateTasksForSQLServerResponseItems Items { get; set; }
        public class DescribeMigrateTasksForSQLServerResponseItems : TeaModel {
            [NameInMap("MigrateTask")]
            [Validation(Required=true)]
            public List<DescribeMigrateTasksForSQLServerResponseItemsMigrateTask> MigrateTask { get; set; }
            public class DescribeMigrateTasksForSQLServerResponseItemsMigrateTask : TeaModel {
                    public string DBName { get; set; }
                    public string MigrateIaskId { get; set; }
                    public string CreateTime { get; set; }
                    public string EndTime { get; set; }
                    public string TaskType { get; set; }
                    public string Status { get; set; }
                    public string IsDBReplaced { get; set; }
                    public string Desc { get; set; }
            }
        };

    }

}
