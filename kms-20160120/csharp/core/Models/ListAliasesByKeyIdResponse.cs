// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Kms20160120.Models
{
    public class ListAliasesByKeyIdResponse : TeaModel {
        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Aliases")]
        [Validation(Required=true)]
        public ListAliasesByKeyIdResponseAliases Aliases { get; set; }
        public class ListAliasesByKeyIdResponseAliases : TeaModel {
            [NameInMap("Alias")]
            [Validation(Required=true)]
            public List<ListAliasesByKeyIdResponseAliasesAlias> Alias { get; set; }
            public class ListAliasesByKeyIdResponseAliasesAlias : TeaModel {
                    public string KeyId { get; set; }
                    public string AliasName { get; set; }
                    public string AliasArn { get; set; }
            }
        };

    }

}
