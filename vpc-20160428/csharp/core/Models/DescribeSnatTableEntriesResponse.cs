// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeSnatTableEntriesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("SnatTableEntries")]
        [Validation(Required=true)]
        public DescribeSnatTableEntriesResponseSnatTableEntries SnatTableEntries { get; set; }
        public class DescribeSnatTableEntriesResponseSnatTableEntries : TeaModel {
            [NameInMap("SnatTableEntry")]
            [Validation(Required=true)]
            public List<DescribeSnatTableEntriesResponseSnatTableEntriesSnatTableEntry> SnatTableEntry { get; set; }
            public class DescribeSnatTableEntriesResponseSnatTableEntriesSnatTableEntry : TeaModel {
                    public string SnatTableId { get; set; }
                    public string SnatEntryId { get; set; }
                    public string SourceVSwitchId { get; set; }
                    public string SourceCIDR { get; set; }
                    public string SnatIp { get; set; }
                    public string Status { get; set; }
                    public string SnatEntryName { get; set; }
            }
        };

    }

}
