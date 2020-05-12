// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Kms20160120.Models
{
    public class GetParametersForImportRequest : TeaModel {
        [NameInMap("KeyId")]
        [Validation(Required=true)]
        public string KeyId { get; set; }

        [NameInMap("WrappingAlgorithm")]
        [Validation(Required=true)]
        public string WrappingAlgorithm { get; set; }

        [NameInMap("WrappingKeySpec")]
        [Validation(Required=true)]
        public string WrappingKeySpec { get; set; }

    }

}
