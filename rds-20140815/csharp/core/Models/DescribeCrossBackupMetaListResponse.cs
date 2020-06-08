// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeCrossBackupMetaListResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DBInstanceName")]
        [Validation(Required=true)]
        public string DBInstanceName { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageRecordCount")]
        [Validation(Required=true)]
        public int? PageRecordCount { get; set; }

        [NameInMap("TotalRecordCount")]
        [Validation(Required=true)]
        public int? TotalRecordCount { get; set; }

        [NameInMap("TotalPageCount")]
        [Validation(Required=true)]
        public int? TotalPageCount { get; set; }

        [NameInMap("Items")]
        [Validation(Required=true)]
        public DescribeCrossBackupMetaListResponseItems Items { get; set; }
        public class DescribeCrossBackupMetaListResponseItems : TeaModel {
            [NameInMap("Meta")]
            [Validation(Required=true)]
            public List<DescribeCrossBackupMetaListResponseItemsMeta> Meta { get; set; }
            public class DescribeCrossBackupMetaListResponseItemsMeta : TeaModel {
                    public string Database { get; set; }
                    public string Tables { get; set; }
                    public string Size { get; set; }
            }
        };

    }

}
