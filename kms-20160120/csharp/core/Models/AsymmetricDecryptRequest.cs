// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Kms20160120.Models
{
    public class AsymmetricDecryptRequest : TeaModel {
        [NameInMap("CiphertextBlob")]
        [Validation(Required=true)]
        public string CiphertextBlob { get; set; }

        [NameInMap("KeyId")]
        [Validation(Required=true)]
        public string KeyId { get; set; }

        [NameInMap("KeyVersionId")]
        [Validation(Required=true)]
        public string KeyVersionId { get; set; }

        [NameInMap("Algorithm")]
        [Validation(Required=true)]
        public string Algorithm { get; set; }

    }

}
