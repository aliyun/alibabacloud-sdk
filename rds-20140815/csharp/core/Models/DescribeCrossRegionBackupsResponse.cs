// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeCrossRegionBackupsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("StartTime")]
        [Validation(Required=true)]
        public string StartTime { get; set; }

        [NameInMap("EndTime")]
        [Validation(Required=true)]
        public string EndTime { get; set; }

        [NameInMap("TotalRecordCount")]
        [Validation(Required=true)]
        public int? TotalRecordCount { get; set; }

        [NameInMap("PageRecordCount")]
        [Validation(Required=true)]
        public int? PageRecordCount { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("Items")]
        [Validation(Required=true)]
        public DescribeCrossRegionBackupsResponseItems Items { get; set; }
        public class DescribeCrossRegionBackupsResponseItems : TeaModel {
            [NameInMap("Item")]
            [Validation(Required=true)]
            public List<DescribeCrossRegionBackupsResponseItemsItem> Item { get; set; }
            public class DescribeCrossRegionBackupsResponseItemsItem : TeaModel {
                    public int? CrossBackupId { get; set; }
                    public string CrossBackupRegion { get; set; }
                    public int? BackupSetStatus { get; set; }
                    public string BackupStartTime { get; set; }
                    public string BackupEndTime { get; set; }
                    public string BackupType { get; set; }
                    public string BackupMethod { get; set; }
                    public long CrossBackupSetSize { get; set; }
                    public string CrossBackupSetFile { get; set; }
                    public string CrossBackupDownloadLink { get; set; }
                    public string Engine { get; set; }
                    public string EngineVersion { get; set; }
                    public string CrossBackupSetLocation { get; set; }
                    public int? BackupSetScale { get; set; }
                    public int? InstanceId { get; set; }
                    public string DBInstanceStorageType { get; set; }
                    public string Category { get; set; }
                    public string ConsistentTime { get; set; }
                    public string HasBackupTableMeta { get; set; }
                    public DescribeCrossRegionBackupsResponseItemsItemRestoreRegions RestoreRegions { get; set; }
                    public class DescribeCrossRegionBackupsResponseItemsItemRestoreRegions : TeaModel {
                        [NameInMap("RestoreRegion")]
                        [Validation(Required=true)]
                        public List<string> RestoreRegion { get; set; }

                    }
            }
        };

    }

}
