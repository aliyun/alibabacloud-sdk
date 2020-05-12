// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Kms20160120.Models
{
    public class DescribeSecretRequest : TeaModel {
        [NameInMap("SecretName")]
        [Validation(Required=true)]
        public string SecretName { get; set; }

        [NameInMap("FetchTags")]
        [Validation(Required=false)]
        public string FetchTags { get; set; }

    }

}
