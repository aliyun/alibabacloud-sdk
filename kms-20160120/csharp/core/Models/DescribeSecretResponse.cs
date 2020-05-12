// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Kms20160120.Models
{
    public class DescribeSecretResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Arn")]
        [Validation(Required=true)]
        public string Arn { get; set; }

        [NameInMap("SecretName")]
        [Validation(Required=true)]
        public string SecretName { get; set; }

        [NameInMap("EncryptionKeyId")]
        [Validation(Required=true)]
        public string EncryptionKeyId { get; set; }

        [NameInMap("Description")]
        [Validation(Required=true)]
        public string Description { get; set; }

        [NameInMap("CreateTime")]
        [Validation(Required=true)]
        public string CreateTime { get; set; }

        [NameInMap("UpdateTime")]
        [Validation(Required=true)]
        public string UpdateTime { get; set; }

        [NameInMap("PlannedDeleteTime")]
        [Validation(Required=true)]
        public string PlannedDeleteTime { get; set; }

        [NameInMap("Tags")]
        [Validation(Required=true)]
        public DescribeSecretResponseTags Tags { get; set; }
        public class DescribeSecretResponseTags : TeaModel {
            [NameInMap("Tag")]
            [Validation(Required=true)]
            public List<DescribeSecretResponseTagsTag> Tag { get; set; }
            public class DescribeSecretResponseTagsTag : TeaModel {
                    public string TagKey { get; set; }
                    public string TagValue { get; set; }
            }
        };

    }

}
