// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Kms20160120.Models
{
    public class ListSecretVersionIdsRequest : TeaModel {
        [NameInMap("SecretName")]
        [Validation(Required=true)]
        public string SecretName { get; set; }

        [NameInMap("IncludeDeprecated")]
        [Validation(Required=false)]
        public string IncludeDeprecated { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=false)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=false)]
        public int? PageSize { get; set; }

    }

}
