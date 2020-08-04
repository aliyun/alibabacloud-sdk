// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeKeyPairsResponse : TeaModel {
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

        [NameInMap("KeyPairs")]
        [Validation(Required=true)]
        public DescribeKeyPairsResponseKeyPairs KeyPairs { get; set; }
        public class DescribeKeyPairsResponseKeyPairs : TeaModel {
            [NameInMap("KeyPair")]
            [Validation(Required=true)]
            public List<DescribeKeyPairsResponseKeyPairsKeyPair> KeyPair { get; set; }
            public class DescribeKeyPairsResponseKeyPairsKeyPair : TeaModel {
                    public string KeyPairName { get; set; }
                    public string KeyPairFingerPrint { get; set; }
                    public string CreationTime { get; set; }
                    public string ResourceGroupId { get; set; }
                    public DescribeKeyPairsResponseKeyPairsKeyPairTags Tags { get; set; }
                    public class DescribeKeyPairsResponseKeyPairsKeyPairTags : TeaModel {
                        [NameInMap("Tag")]
                        [Validation(Required=true)]
                        public List<DescribeKeyPairsResponseKeyPairsKeyPairTagsTag> Tag { get; set; }
                        public class DescribeKeyPairsResponseKeyPairsKeyPairTagsTag : TeaModel {
                            [NameInMap("TagKey")]
                            [Validation(Required=true)]
                            public string TagKey { get; set; }

                            [NameInMap("TagValue")]
                            [Validation(Required=true)]
                            public string TagValue { get; set; }

                        }

                    }
            }
        };

    }

}
