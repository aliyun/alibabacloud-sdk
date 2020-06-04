// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class DescribeVodStorageDataResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DataInterval")]
        [Validation(Required=true)]
        public string DataInterval { get; set; }

        [NameInMap("StorageData")]
        [Validation(Required=true)]
        public DescribeVodStorageDataResponseStorageData StorageData { get; set; }
        public class DescribeVodStorageDataResponseStorageData : TeaModel {
            [NameInMap("StorageDataItem")]
            [Validation(Required=true)]
            public List<DescribeVodStorageDataResponseStorageDataStorageDataItem> StorageDataItem { get; set; }
            public class DescribeVodStorageDataResponseStorageDataStorageDataItem : TeaModel {
                    public string TimeStamp { get; set; }
                    public string StorageUtilization { get; set; }
                    public string NetworkOut { get; set; }
            }
        };

    }

}
