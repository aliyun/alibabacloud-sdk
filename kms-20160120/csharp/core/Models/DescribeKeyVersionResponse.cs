// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Kms20160120.Models
{
    public class DescribeKeyVersionResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("KeyVersion")]
        [Validation(Required=true)]
        public DescribeKeyVersionResponseKeyVersion KeyVersion { get; set; }
        public class DescribeKeyVersionResponseKeyVersion : TeaModel {
            [NameInMap("KeyId")]
            [Validation(Required=true)]
            public string KeyId { get; set; }
            [NameInMap("KeyVersionId")]
            [Validation(Required=true)]
            public string KeyVersionId { get; set; }
            [NameInMap("CreationDate")]
            [Validation(Required=true)]
            public string CreationDate { get; set; }
        };

    }

}
