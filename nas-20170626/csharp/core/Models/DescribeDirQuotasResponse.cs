// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.NAS20170626.Models
{
    public class DescribeDirQuotasResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("DirQuotaInfos")]
        [Validation(Required=true)]
        public List<DescribeDirQuotasResponseDirQuotaInfos> DirQuotaInfos { get; set; }
        public class DescribeDirQuotasResponseDirQuotaInfos : TeaModel {
            [NameInMap("Path")]
            [Validation(Required=true)]
            public string Path { get; set; }

            [NameInMap("DirInode")]
            [Validation(Required=true)]
            public string DirInode { get; set; }

            [NameInMap("Status")]
            [Validation(Required=true)]
            public string Status { get; set; }

            [NameInMap("UserQuotaInfos")]
            [Validation(Required=true)]
            public List<DescribeDirQuotasResponseDirQuotaInfosUserQuotaInfos> UserQuotaInfos { get; set; }
            public class DescribeDirQuotasResponseDirQuotaInfosUserQuotaInfos : TeaModel {
                [NameInMap("UserType")]
                [Validation(Required=true)]
                public string UserType { get; set; }

                [NameInMap("UserId")]
                [Validation(Required=true)]
                public string UserId { get; set; }

                [NameInMap("QuotaType")]
                [Validation(Required=true)]
                public string QuotaType { get; set; }

                [NameInMap("SizeLimit")]
                [Validation(Required=true)]
                public long SizeLimit { get; set; }

                [NameInMap("SizeReal")]
                [Validation(Required=true)]
                public long SizeReal { get; set; }

                [NameInMap("FileCountLimit")]
                [Validation(Required=true)]
                public long FileCountLimit { get; set; }

                [NameInMap("FileCountReal")]
                [Validation(Required=true)]
                public long FileCountReal { get; set; }

            }

        }

    }

}
