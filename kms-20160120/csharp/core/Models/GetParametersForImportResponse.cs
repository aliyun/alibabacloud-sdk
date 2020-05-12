// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Kms20160120.Models
{
    public class GetParametersForImportResponse : TeaModel {
        [NameInMap("KeyId")]
        [Validation(Required=true)]
        public string KeyId { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("ImportToken")]
        [Validation(Required=true)]
        public string ImportToken { get; set; }

        [NameInMap("PublicKey")]
        [Validation(Required=true)]
        public string PublicKey { get; set; }

        [NameInMap("TokenExpireTime")]
        [Validation(Required=true)]
        public string TokenExpireTime { get; set; }

    }

}
