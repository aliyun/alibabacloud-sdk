// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeCrossRegionLogBackupFilesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("DBInstanceId")]
        [Validation(Required=true)]
        public string DBInstanceId { get; set; }

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
        public DescribeCrossRegionLogBackupFilesResponseItems Items { get; set; }
        public class DescribeCrossRegionLogBackupFilesResponseItems : TeaModel {
            [NameInMap("Item")]
            [Validation(Required=true)]
            public List<DescribeCrossRegionLogBackupFilesResponseItemsItem> Item { get; set; }
            public class DescribeCrossRegionLogBackupFilesResponseItemsItem : TeaModel {
                    public int? CrossLogBackupId { get; set; }
                    public string CrossBackupRegion { get; set; }
                    public long CrossLogBackupSize { get; set; }
                    public string LogBeginTime { get; set; }
                    public string LogEndTime { get; set; }
                    public string CrossDownloadLink { get; set; }
                    public string CrossIntranetDownloadLink { get; set; }
                    public string LinkExpiredTime { get; set; }
                    public string LogFileName { get; set; }
                    public int? InstanceId { get; set; }
            }
        };

    }

}
