// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.OpenPlatform20191219.Models
{
    public class AuthorizeFileUploadResponse : TeaModel {
        [NameInMap("AccessKeyId")]
        [Validation(Required=true)]
        public string AccessKeyId { get; set; }

        [NameInMap("Bucket")]
        [Validation(Required=true)]
        public string Bucket { get; set; }

        [NameInMap("EncodedPolicy")]
        [Validation(Required=true)]
        public string EncodedPolicy { get; set; }

        [NameInMap("Endpoint")]
        [Validation(Required=true)]
        public string Endpoint { get; set; }

        [NameInMap("ObjectKey")]
        [Validation(Required=true)]
        public string ObjectKey { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Signature")]
        [Validation(Required=true)]
        public string Signature { get; set; }

        [NameInMap("UseAccelerate")]
        [Validation(Required=true)]
        public bool? UseAccelerate { get; set; }

    }

}
