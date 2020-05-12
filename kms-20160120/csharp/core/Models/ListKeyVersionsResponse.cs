// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Kms20160120.Models
{
    public class ListKeyVersionsResponse : TeaModel {
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

        [NameInMap("KeyVersions")]
        [Validation(Required=true)]
        public ListKeyVersionsResponseKeyVersions KeyVersions { get; set; }
        public class ListKeyVersionsResponseKeyVersions : TeaModel {
            [NameInMap("KeyVersion")]
            [Validation(Required=true)]
            public List<ListKeyVersionsResponseKeyVersionsKeyVersion> KeyVersion { get; set; }
            public class ListKeyVersionsResponseKeyVersionsKeyVersion : TeaModel {
                    public string KeyId { get; set; }
                    public string KeyVersionId { get; set; }
                    public string CreationDate { get; set; }
            }
        };

    }

}
