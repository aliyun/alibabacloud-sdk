// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeCrossRegionBackupDBInstanceResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("TotalRecords")]
        [Validation(Required=true)]
        public int? TotalRecords { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("ItemsNumbers")]
        [Validation(Required=true)]
        public int? ItemsNumbers { get; set; }

        [NameInMap("Items")]
        [Validation(Required=true)]
        public DescribeCrossRegionBackupDBInstanceResponseItems Items { get; set; }
        public class DescribeCrossRegionBackupDBInstanceResponseItems : TeaModel {
            [NameInMap("Item")]
            [Validation(Required=true)]
            public List<DescribeCrossRegionBackupDBInstanceResponseItemsItem> Item { get; set; }
            public class DescribeCrossRegionBackupDBInstanceResponseItemsItem : TeaModel {
                    public string DBInstanceId { get; set; }
                    public string DBInstanceDescription { get; set; }
                    public string DBInstanceStatus { get; set; }
                    public string DBInstanceStatusDesc { get; set; }
                    public string Engine { get; set; }
                    public string EngineVersion { get; set; }
                    public string CrossBackupRegion { get; set; }
                    public string CrossBackupType { get; set; }
                    public string BackupEnabled { get; set; }
                    public string LogBackupEnabled { get; set; }
                    public string LogBackupEnabledTime { get; set; }
                    public string BackupEnabledTime { get; set; }
                    public int? RetentType { get; set; }
                    public int? Retention { get; set; }
                    public string LockMode { get; set; }
                    public string RelService { get; set; }
                    public string RelServiceId { get; set; }
            }
        };

    }

}
