// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Kms20160120.Models
{
    public class DescribeServiceResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("ProtectionLevels")]
        [Validation(Required=true)]
        public DescribeServiceResponseProtectionLevels ProtectionLevels { get; set; }
        public class DescribeServiceResponseProtectionLevels : TeaModel {
            [NameInMap("ProtectionLevel")]
            [Validation(Required=true)]
            public List<DescribeServiceResponseProtectionLevelsProtectionLevel> ProtectionLevel { get; set; }
            public class DescribeServiceResponseProtectionLevelsProtectionLevel : TeaModel {
                    public string Type { get; set; }
            }
        };

        [NameInMap("KeySpecs")]
        [Validation(Required=true)]
        public DescribeServiceResponseKeySpecs KeySpecs { get; set; }
        public class DescribeServiceResponseKeySpecs : TeaModel {
            [NameInMap("KeySpec")]
            [Validation(Required=true)]
            public List<DescribeServiceResponseKeySpecsKeySpec> KeySpec { get; set; }
            public class DescribeServiceResponseKeySpecsKeySpec : TeaModel {
                    public string Name { get; set; }
                    public DescribeServiceResponseKeySpecsKeySpecSupportedProtectionLevels SupportedProtectionLevels { get; set; }
                    public class DescribeServiceResponseKeySpecsKeySpecSupportedProtectionLevels : TeaModel {
                        [NameInMap("SupportedProtectionLevel")]
                        [Validation(Required=true)]
                        public List<string> SupportedProtectionLevel { get; set; }

                    }
                    public DescribeServiceResponseKeySpecsKeySpecUsages Usages { get; set; }
                    public class DescribeServiceResponseKeySpecsKeySpecUsages : TeaModel {
                        [NameInMap("Usage")]
                        [Validation(Required=true)]
                        public List<string> Usage { get; set; }

                    }
            }
        };

    }

}
